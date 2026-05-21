<?php
// Asset data will be loaded from the database later.
$currentPage = 'assets';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Network Assets — Ross Ragland</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body class="dashboard-layout">
    <?php include __DIR__ . '/includes/sidebar.php'; ?>

    <main class="dashboard-main">
        <div class="dashboard-top">
            <?php include __DIR__ . '/includes/admin-user.php'; ?>
            <span class="dashboard-sync">Last sync - 2 min ago</span>
        </div>

        <div class="page-header-row">
            <h1 class="dashboard-heading">Network Assets</h1>
            <input
                type="search"
                class="assets-search"
                placeholder="Search Assets"
                aria-label="Search assets"
            >
        </div>

        <div class="assets-table-wrap">
            <table class="assets-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>IP</th>
                        <th>VLAN</th>
                        <th>Location</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A-001</td>
                        <td>SW-Core-01</td>
                        <td>Switch</td>
                        <td>10.10.0.1</td>
                        <td><span class="vlan-text vlan-admin">10 Admin</span></td>
                        <td>Server Closet</td>
                        <td><span class="status-online">Online</span></td>
                    </tr>
                    <tr>
                        <td>A-002</td>
                        <td>AP-Lobby-02</td>
                        <td>Access PT</td>
                        <td>10.10.20.14</td>
                        <td><span class="vlan-text vlan-guest">20 Guest</span></td>
                        <td>Lobby</td>
                        <td><span class="status-online">Online</span></td>
                    </tr>
                    <tr>
                        <td>A-003</td>
                        <td>CAM-Stage-L</td>
                        <td>Camera</td>
                        <td>10.10.30.22</td>
                        <td><span class="vlan-text vlan-cctv">30 CCTV</span></td>
                        <td>Stage Left</td>
                        <td><span class="status-online">Online</span></td>
                    </tr>
                    <tr>
                        <td>A-004</td>
                        <td>NAS-Main</td>
                        <td>NAS</td>
                        <td>10.10.0.31</td>
                        <td><span class="vlan-text vlan-admin">10 Admin</span></td>
                        <td>Server Closet</td>
                        <td><span class="status-online">Online</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <?php include __DIR__ . '/includes/admin-image-modal.php'; ?>
</body>
</html>
