<?php
// Credential detail data will be loaded from the database later.
$currentPage = 'credentials';
$credentialId = $_GET['id'] ?? 'admin';

if ($credentialId !== 'admin') {
    header('Location: credentials.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin logs — Ross Ragland</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body class="dashboard-layout">
    <?php include __DIR__ . '/includes/sidebar.php'; ?>

    <main class="dashboard-main">
        <div class="dashboard-top">
            <span class="dashboard-user">Admin - a.manning</span>
            <span class="dashboard-sync">Last sync - 2 min ago</span>
        </div>

        <h1 class="dashboard-heading">Admin logs</h1>

        <section class="credential-detail">
            <h2 class="credential-section-label">Systems this Credential can access</h2>
            <div class="credential-box">
                <ul class="credential-systems-list">
                    <li><strong>UniFi Network</strong> — Manage switches, APs, Wi-Fi, VLANs</li>
                    <li><strong>NAS Backup Storage</strong> — Manage Backups and Shared Files</li>
                    <li><strong>CCTV System</strong> — View Cameras and Manage Records</li>
                </ul>
            </div>

            <h2 class="credential-section-label">Credential Access Logs</h2>
            <div class="credential-box">
                <ul class="credential-access-logs">
                    <li>
                        <span class="log-user">a.manning</span>
                        <span class="log-action">Updated Credential</span>
                        <span class="log-datetime">05/03/26 19:20</span>
                        <span class="log-location">Server Room</span>
                    </li>
                    <li>
                        <span class="log-user">m.teems</span>
                        <span class="log-action">Viewed Credential</span>
                        <span class="log-datetime">04/15/26 10:54</span>
                        <span class="log-location">Admin Office</span>
                    </li>
                </ul>
            </div>

            <div class="credential-detail-grid">
                <div>
                    <h2 class="credential-section-label">Security Information</h2>
                    <div class="credential-box">
                        <dl class="credential-info-list">
                            <div class="credential-info-row">
                                <dt>Created On:</dt>
                                <dd>03/22/25</dd>
                            </div>
                            <div class="credential-info-row">
                                <dt>Password Rotation:</dt>
                                <dd>Every 90 Days</dd>
                            </div>
                            <div class="credential-info-row">
                                <dt>MFA Required:</dt>
                                <dd>Yes</dd>
                            </div>
                            <div class="credential-info-row">
                                <dt>Owner:</dt>
                                <dd>IT Admin</dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <div>
                    <h2 class="credential-section-label">Who Is Assigned</h2>
                    <div class="credential-box">
                        <ul class="credential-assigned-list">
                            <li><span>a.manning</span> : 03/04/26</li>
                            <li><span>u.torres</span> : 02/25/26</li>
                            <li><span>m.teems</span> : 02/20/26</li>
                            <li><span>a.yagla</span> : 01/12/26</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <p class="credential-back"><a href="credentials.php">&larr; Back to Credentials</a></p>
    </main>
</body>
</html>
