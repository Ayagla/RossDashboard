<?php
// Dashboard UI and network stats will be added here later.
$currentPage = 'dashboard';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Network Overview — Ross Ragland</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body class="dashboard-layout">
    <?php include __DIR__ . '/includes/sidebar.php'; ?>

    <main class="dashboard-main">
        <div class="dashboard-top">
            <?php include __DIR__ . '/includes/admin-user.php'; ?>
            <span class="dashboard-sync">Last sync - 2 min ago</span>
        </div>

        <h1 class="dashboard-heading">Network Overview</h1>

        <section class="stat-cards" aria-label="Summary statistics">
            <article class="stat-card">
                <h2 class="stat-card-title">Assets</h2>
                <p class="stat-card-value">87</p>
                <p class="stat-card-sub">82 Online - 5 Offline</p>
            </article>
            <article class="stat-card">
                <h2 class="stat-card-title">VLANs</h2>
                <p class="stat-card-value">4</p>
                <p class="stat-card-sub">Admin - Guest - CCTV - Event</p>
            </article>
            <article class="stat-card">
                <h2 class="stat-card-title">Credentials</h2>
                <p class="stat-card-value">23</p>
                <p class="stat-card-sub">3 expiring this month</p>
            </article>
            <article class="stat-card">
                <h2 class="stat-card-title">Audit (24 Hrs)</h2>
                <p class="stat-card-value">142</p>
                <p class="stat-card-sub">events recorded</p>
            </article>
        </section>

        <section class="dashboard-panels">
            <div class="panel network-diagram-panel">
                <div class="network-diagram" role="img" aria-label="Network topology: Core connected to four VLANs">
                    <svg class="network-lines" viewBox="0 0 400 280" preserveAspectRatio="none" aria-hidden="true">
                        <line x1="200" y1="140" x2="70" y2="45" stroke="#333" stroke-width="2"/>
                        <line x1="200" y1="140" x2="330" y2="45" stroke="#333" stroke-width="2"/>
                        <line x1="200" y1="140" x2="70" y2="235" stroke="#333" stroke-width="2"/>
                        <line x1="200" y1="140" x2="330" y2="235" stroke="#333" stroke-width="2"/>
                    </svg>
                    <div class="network-node vlan-node vlan-admin">VLAN 10 - Admin</div>
                    <div class="network-node vlan-node vlan-guest">VLAN 20 - Guest</div>
                    <div class="network-node core-node">Core</div>
                    <div class="network-node vlan-node vlan-cctv">VLAN 30 - CCTV</div>
                    <div class="network-node vlan-node vlan-events">VLAN 40 - Events</div>
                </div>
            </div>

            <div class="panel activity-panel">
                <h2 class="panel-title">Recent Activity</h2>
                <ul class="activity-list">
                    <li><span class="activity-time">14:22</span> m.leem updated SW-EVT-02 config</li>
                    <li><span class="activity-time">14:08</span> u.torres assigned AP-04 -&gt; Event #221</li>
                    <li><span class="activity-time">13:51</span> a.yagia added asset CAM-LB-09</li>
                </ul>
            </div>
        </section>
    </main>
    <?php include __DIR__ . '/includes/admin-image-modal.php'; ?>
</body>
</html>
