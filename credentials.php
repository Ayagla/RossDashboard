<?php
// Credential data will be loaded from the database later.
$currentPage = 'credentials';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credentials — Ross Ragland</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body class="dashboard-layout">
    <?php include __DIR__ . '/includes/sidebar.php'; ?>

    <main class="dashboard-main">
        <div class="dashboard-top">
            <span class="dashboard-user">Admin - a.manning</span>
            <span class="dashboard-sync">Last sync - 2 min ago</span>
        </div>

        <h1 class="dashboard-heading">Credentials</h1>

        <div class="assets-table-wrap">
            <table class="assets-table credentials-table">
                <thead>
                    <tr>
                        <th>Name:</th>
                        <th>Access to:</th>
                        <th>Last Accessed:</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="credential-row-link">
                        <td><a href="credential-detail.php?id=admin">Admin</a></td>
                        <td>Unifi/NAS/CCTV/Logs</td>
                        <td>3x / 30D</td>
                    </tr>
                    <tr>
                        <td>Technician</td>
                        <td>UniFi</td>
                        <td>10x / 30D</td>
                    </tr>
                    <tr>
                        <td>Management</td>
                        <td>Reports/CCTV/Logs</td>
                        <td>30x / 30D</td>
                    </tr>
                    <tr>
                        <td>Staff</td>
                        <td>Vendor</td>
                        <td>90x / 30D</td>
                    </tr>
                    <tr>
                        <td>Contractor</td>
                        <td>Temporary VLAN/CCTV</td>
                        <td>5x / 30D</td>
                    </tr>
                    <tr>
                        <td>Event Coordinator</td>
                        <td>Event VLAN/Audio/Visual</td>
                        <td>15x / 30D</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
