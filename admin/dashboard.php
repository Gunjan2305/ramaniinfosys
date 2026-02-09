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
if($res_contacts) {
    while($row = $res_contacts->fetch_assoc()) {
        $contacts[] = $row;
    }
}

// Fetch Audit Requests
$audits = [];
$res_audits = $conn->query("SELECT * FROM audit_requests ORDER BY submission_date DESC");
if($res_audits) {
    while($row = $res_audits->fetch_assoc()) {
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
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f4f6f9; color: #333; }
        .sidebar { width: 250px; background: #343a40; position: fixed; height: 100%; color: #fff; top: 0; left: 0; }
        .sidebar-header { padding: 1.5rem; text-align: center; background: #212529; border-bottom: 1px solid #4b545c; }
        .sidebar-header h3 { margin: 0; font-size: 1.25rem; font-weight: 600; } 
        .sidebar-menu { list-style: none; padding: 0; margin: 0; }
        .sidebar-menu li { padding: 0; }
        .sidebar-menu a { display: block; padding: 1rem 1.5rem; color: #c2c7d0; text-decoration: none; transition: background 0.3s, color 0.3s; }
        .sidebar-menu a:hover, .sidebar-menu a.active { background: #007bff; color: #fff; }
        .sidebar-menu a.active { border-left: 4px solid #fff; }
        
        .main-content { margin-left: 250px; padding: 2rem; transition: margin-left 0.3s; }
        .top-bar { display: flex; justify-content: space-between; align-items: center; background: #fff; padding: 1rem 2rem; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); margin-bottom: 2rem; }
        .top-bar h1 { margin: 0; font-size: 1.5rem; color: #495057; }
        .logout-btn { padding: 0.5rem 1rem; background: #dc3545; color: #fff; text-decoration: none; border-radius: 4px; font-size: 0.9rem; transition: background 0.3s; }
        .logout-btn:hover { background: #c82333; }

        .section-header { margin-bottom: 1rem; display: flex; justify-content: space-between; align-items: center; }
        .section-header h2 { margin: 0; font-size: 1.25rem; color: #343a40; border-left: 4px solid #007bff; padding-left: 10px; }

        .data-card { background: #fff; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); overflow: hidden; margin-bottom: 2rem; }
        .table-responsive { overflow-x: auto; width: 100%; }
        table { width: 100%; border-collapse: collapse; min-width: 800px; }
        th, td { padding: 1rem; text-align: left; border-bottom: 1px solid #dee2e6; font-size: 0.95rem; }
        th { background: #f8f9fa; font-weight: 600; color: #495057; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.5px; }
        tr:last-child td { border-bottom: none; }
        tr:hover { background-color: #f8f9fa; }
        
        .badge { padding: 0.25em 0.6em; border-radius: 4px; font-size: 0.75rem; font-weight: 700; color: #fff; }
        .badge-info { background-color: #17a2b8; }
        .no-data { padding: 2rem; text-align: center; color: #6c757d; font-style: italic; }

        @media (max-width: 768px) {
            .sidebar { width: 0; overflow: hidden; }
            .main-content { margin-left: 0; padding: 1rem; }
            .top-bar { flex-direction: column; gap: 1rem; align-items: flex-start; }
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <div class="sidebar-header">
            <h3 style="display: flex; align-items: center; justify-content: center;">
                <img src="../assets/img/favicon.jpeg" alt="Logo" style="width: 32px; height: 32px; margin-right: 10px; border-radius: 50%;">
                Ramani Infosys
            </h3>
        </div>
        <ul class="sidebar-menu">
            <li><a href="#contacts" class="active" onclick="switchTab('contacts')">Contact Inquiries</a></li>
            <li><a href="#audits" onclick="switchTab('audits')">Audit Requests</a></li>
        </ul>
    </div>

    <div class="main-content">
        <div class="top-bar">
            <h1>Dashboard</h1>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>

        <!-- Contact Inquiries Section -->
        <div id="contacts-section">
            <div class="section-header">
                <h2>Contact Inquiries (<?php echo count($contacts); ?>)</h2>
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
                                        <td><?php echo date('M d, Y H:i', strtotime($contact['submission_date'])); ?></td>
                                        <td><strong><?php echo htmlspecialchars($contact['full_name']); ?></strong></td>
                                        <td><a href="mailto:<?php echo htmlspecialchars($contact['email']); ?>"><?php echo htmlspecialchars($contact['email']); ?></a></td>
                                        <td>
                                            <?php if($contact['website']): ?>
                                                <a href="<?php echo htmlspecialchars($contact['website']); ?>" target="_blank">View Site</a>
                                            <?php else: ?>
                                                -
                                            <?php endif; ?>
                                        </td>
                                        <td><span class="badge badge-info"><?php echo htmlspecialchars($contact['requirement']); ?></span></td>
                                        <td title="<?php echo htmlspecialchars($contact['message']); ?>">
                                            <?php 
                                                $msg = htmlspecialchars($contact['message']);
                                                echo strlen($msg) > 50 ? substr($msg, 0, 50) . '...' : $msg; 
                                            ?>
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
                <h2>Audit Requests (<?php echo count($audits); ?>)</h2>
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
                                        <td><?php echo date('M d, Y H:i', strtotime($audit['submission_date'])); ?></td>
                                        <td><strong><?php echo htmlspecialchars($audit['name']); ?></strong></td>
                                        <td><a href="mailto:<?php echo htmlspecialchars($audit['email']); ?>"><?php echo htmlspecialchars($audit['email']); ?></a></td>
                                        <td>
                                            <?php if($audit['website']): ?>
                                                <a href="<?php echo htmlspecialchars($audit['website']); ?>" target="_blank">View Site</a>
                                            <?php else: ?>
                                                -
                                            <?php endif; ?>
                                        </td>
                                        <td title="<?php echo htmlspecialchars($audit['challenges']); ?>">
                                            <?php 
                                                $ch = htmlspecialchars($audit['challenges']);
                                                echo strlen($ch) > 60 ? substr($ch, 0, 60) . '...' : $ch; 
                                            ?>
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
            document.querySelector(`a[href="#${tab}"]`).classList.add('active');

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
