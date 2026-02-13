<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: index.php");
    exit;
}

require_once '../includes/db.php';

// Fetch Contacts
$contacts = [];
$res_contacts = $conn->query("SELECT * FROM contacts ORDER BY submission_date DESC");
if ($res_contacts) {
    while ($row = $res_contacts->fetch_assoc()) {
        $contacts[] = $row;
    }
}

// Fetch Audit Requests
$audits = [];
$res_audits = $conn->query("SELECT * FROM audit_requests ORDER BY submission_date DESC");
if ($res_audits) {
    while ($row = $res_audits->fetch_assoc()) {
        $audits[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Ramani Infosys</title>
    <link rel="icon" type="image/jpeg" href="../assets/img/favicon.jpeg">
    <link rel="shortcut icon" type="image/jpeg" href="../assets/img/favicon.jpeg">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        * { box-sizing: border-box; }
        
        :root {
            --primary-gradient: linear-gradient(90deg, #00BFFF, #8A2BE2);
            --bg-dark: #000000;
            --bg-card: #111111;
            --text-main: #ffffff;
            --text-muted: #a0a0a0;
            --border-color: rgba(255, 255, 255, 0.1);
            --sidebar-width: 260px;
        }

        body { 
            margin: 0; 
            padding: 0; 
            font-family: 'Outfit', sans-serif; 
            background: var(--bg-dark); 
            color: var(--text-main); 
        }

        /* Sidebar */
        .sidebar { 
            width: var(--sidebar-width); 
            background: #050505; 
            position: fixed; 
            height: 100%; 
            top: 0; 
            left: 0; 
            border-right: 1px solid var(--border-color);
            z-index: 100;
        }

        .sidebar-header { 
            padding: 2rem 1.5rem; 
            text-align: center; 
            border-bottom: 1px solid var(--border-color);
        }

        .sidebar-header h3 { 
            margin: 0; 
            font-size: 1.1rem; 
            font-weight: 600; 
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .sidebar-menu { 
            list-style: none; 
            padding: 2rem 1rem; 
            margin: 0; 
        }

        .sidebar-menu li { 
            margin-bottom: 0.5rem; 
        }

        .sidebar-menu a { 
            display: block; 
            padding: 1rem 1.5rem; 
            color: var(--text-muted); 
            text-decoration: none; 
            border-radius: 12px;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .sidebar-menu a:hover { 
            background: rgba(255, 255, 255, 0.05); 
            color: #fff;
        }

        .sidebar-menu a.active { 
            background: var(--primary-gradient); 
            color: #fff; 
            box-shadow: 0 4px 15px rgba(0, 191, 255, 0.3);
        }

        /* Main Content */
        .main-content { 
            margin-left: var(--sidebar-width); 
            padding: 2rem 3rem; 
            transition: margin-left 0.3s; 
        }

        /* Top Bar */
        .top-bar { 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            background: var(--bg-card); 
            padding: 1.2rem 2rem; 
            border-radius: 16px; 
            border: 1px solid var(--border-color);
            margin-bottom: 3rem; 
        }

        .top-bar h1 { 
            margin: 0; 
            font-size: 1.5rem; 
            font-weight: 600;
        }

        .logout-btn { 
            padding: 0.6rem 1.5rem; 
            background: rgba(220, 53, 69, 0.2); 
            color: #ff6b6b; 
            border: 1px solid rgba(220, 53, 69, 0.3);
            text-decoration: none; 
            border-radius: 50px; 
            font-size: 0.9rem; 
            transition: all 0.3s; 
        }

        .logout-btn:hover { 
            background: rgba(220, 53, 69, 0.4); 
            color: #fff;
        }

        /* Section Header */
        .section-header { 
            margin-bottom: 1.5rem; 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
        }

        .section-header h2 { 
            margin: 0; 
            font-size: 1.5rem; 
            border-left: 4px solid #00BFFF; 
            padding-left: 15px; 
        }

        /* Data Cards (Tables) */
        .data-card { 
            background: var(--bg-card); 
            border-radius: 16px; 
            border: 1px solid var(--border-color);
            overflow: hidden; 
            margin-bottom: 3rem; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        .table-responsive { 
            overflow-x: auto; 
            width: 100%; 
        }

        table { 
            width: 100%; 
            border-collapse: collapse; 
            min-width: 800px; 
        }

        th, td { 
            padding: 1.2rem; 
            text-align: left; 
            border-bottom: 1px solid var(--border-color); 
            font-size: 0.95rem; 
            color: var(--text-muted);
        }

        th { 
            background: rgba(255, 255, 255, 0.03); 
            font-weight: 600; 
            color: #fff; 
            text-transform: uppercase; 
            font-size: 0.8rem; 
            letter-spacing: 1px; 
        }

        td strong { color: #fff; }
        td a { color: #00BFFF; text-decoration: none; }
        td a:hover { text-decoration: underline; }

        tr:last-child td { border-bottom: none; }
        tr:hover { background-color: rgba(255, 255, 255, 0.02); }
        
        /* Badges */
        .badge { 
            padding: 0.4em 0.8em; 
            border-radius: 50px; 
            font-size: 0.75rem; 
            font-weight: 600; 
            color: #fff; 
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .no-data { 
            padding: 3rem; 
            text-align: center; 
            color: var(--text-muted); 
            font-style: italic; 
        }

        @media (max-width: 900px) {
            .sidebar { width: 80px; }
            .sidebar-header h3 span { display: none; } /* Hide text, keep logo */
            .sidebar-menu a span { display: none; }
            .sidebar-menu a { padding: 1rem; text-align: center; }
            .main-content { margin-left: 80px; padding: 1.5rem; }
        }

        @media (max-width: 768px) {
            /* Mobile Bottom Nav style if preferred, or just hidden sidebar */
            .sidebar { 
                width: 100%; 
                height: auto; 
                position: relative;
                border-right: none;
                border-bottom: 1px solid var(--border-color);
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 0 1rem;
            }
            .sidebar-header { border-bottom: none; padding: 1rem 0; }
            .sidebar-header h3 span { display: inline; }
            .sidebar-menu { display: flex; padding: 0; gap: 10px; }
            .sidebar-menu li { margin: 0; }
            .sidebar-menu a { padding: 0.5rem 1rem; font-size: 0.8rem; }
            
            .main-content { margin-left: 0; padding: 1rem; }
            .top-bar { flex-direction: column; gap: 1rem; align-items: flex-start; text-align: center; }
            .top-bar h1 { font-size: 1.2rem; }
            
            /* Hide non-essential columns on mobile */
            th:nth-child(2), td:nth-child(2) { display: none; } /* Date */
            th:nth-child(5), td:nth-child(5) { display: none; } /* Website */
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <div class="sidebar-header">
            <h3>
                <img src="../assets/img/favicon.jpeg" alt="Logo" style="width: 28px; height: 28px; border-radius: 50%;">
                <span>Ramani Admin</span>
            </h3>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a href="#contacts" class="active" onclick="switchTab('contacts')">
                    <span>Contact Inquiries</span>
                </a>
            </li>
            <li>
                <a href="#audits" onclick="switchTab('audits')">
                    <span>Audit Requests</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="main-content">
        <div class="top-bar">
            <h1>Dashboard Overview</h1>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>

        <!-- Contact Inquiries Section -->
        <div id="contacts-section">
            <div class="section-header">
                <h2>Contact Inquiries <span class="badge"><?php echo count($contacts); ?></span></h2>
            </div>
            <div class="data-card">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Website</th>
                                <th>Requirement</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(empty($contacts)): ?>
                                <tr><td colspan="7" class="no-data">No contact inquiries found.</td></tr>
                            <?php else: ?>
                                <?php foreach($contacts as $contact): ?>
                                    <tr>
                                        <td>#<?php echo $contact['id']; ?></td>
                                        <td><?php echo date('M d, Y', strtotime($contact['submission_date'])); ?></td>
                                        <td><strong><?php echo htmlspecialchars($contact['full_name']); ?></strong></td>
                                        <td><a href="mailto:<?php echo htmlspecialchars($contact['email']); ?>"><?php echo htmlspecialchars($contact['email']); ?></a></td>
                                        <td>
                                            <?php if($contact['website']): ?>
                                                <a href="<?php echo htmlspecialchars($contact['website']); ?>" target="_blank">View</a>
                                            <?php else: ?>
                                                <span style="opacity:0.3">-</span>
                                            <?php endif; ?>
                                        </td>
                                        <td><span class="badge"><?php echo htmlspecialchars($contact['requirement']); ?></span></td>
                                        <td title="<?php echo htmlspecialchars($contact['message']); ?>" style="max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                            <?php echo htmlspecialchars($contact['message']); ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Audit Requests Section -->
        <div id="audits-section" style="display: none;">
            <div class="section-header">
                <h2>Audit Requests <span class="badge"><?php echo count($audits); ?></span></h2>
            </div>
            <div class="data-card">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Website</th>
                                <th>Challenges</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(empty($audits)): ?>
                                <tr><td colspan="6" class="no-data">No audit requests found.</td></tr>
                            <?php else: ?>
                                <?php foreach($audits as $audit): ?>
                                    <tr>
                                        <td>#<?php echo $audit['id']; ?></td>
                                        <td><?php echo date('M d, Y', strtotime($audit['submission_date'])); ?></td>
                                        <td><strong><?php echo htmlspecialchars($audit['name']); ?></strong></td>
                                        <td><a href="mailto:<?php echo htmlspecialchars($audit['email']); ?>"><?php echo htmlspecialchars($audit['email']); ?></a></td>
                                        <td>
                                            <?php if($audit['website']): ?>
                                                <a href="<?php echo htmlspecialchars($audit['website']); ?>" target="_blank">View</a>
                                            <?php else: ?>
                                                <span style="opacity:0.3">-</span>
                                            <?php endif; ?>
                                        </td>
                                        <td title="<?php echo htmlspecialchars($audit['challenges']); ?>" style="max-width: 300px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                            <?php echo htmlspecialchars($audit['challenges']); ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <script>
        function switchTab(tab) {
            // Update Menu
            document.querySelectorAll('.sidebar-menu a').forEach(el => el.classList.remove('active'));
            // Depending on implementation, we might need a more robust selector or class toggling
            // Since there are only two, this simple loop works assuming clean state
            
            // Find the link that was clicked (approx methodology)
            const links = document.querySelectorAll('.sidebar-menu a');
            links.forEach(link => {
                if(link.getAttribute('href') === '#' + tab) {
                    link.classList.add('active');
                }
            });

            // Toggle Sections
            if (tab === 'contacts') {
                document.getElementById('contacts-section').style.display = 'block';
                document.getElementById('audits-section').style.display = 'none';
            } else {
                document.getElementById('contacts-section').style.display = 'none';
                document.getElementById('audits-section').style.display = 'block';
            }
        }
    </script>
</body>
</html>