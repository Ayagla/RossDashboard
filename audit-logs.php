<?php
// Audit log data will be loaded from the database later.
$currentPage = 'audit';

$auditLogs = [
    ['timestamp' => '05/12/26 19:10', 'user' => 'a.manning', 'action' => 'login', 'description' => 'Successful Login'],
    ['timestamp' => '05/12/26 17:30', 'user' => 'm.teems', 'action' => 'login', 'description' => 'Successful Login'],
    ['timestamp' => '05/12/26 17:29', 'user' => 'm.teems', 'action' => 'login', 'description' => 'Unsuccessful Loign'],
    ['timestamp' => '05/11/26 10:23', 'user' => 'u.torres', 'action' => 'VLAN Change', 'description' => 'VLAN 40 Subnet /23'],
    ['timestamp' => '05/10/26 12:10', 'user' => 'a.yagla', 'action' => 'Asset Update', 'description' => 'PC-BoxOffice status: offline -> online'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audit Logs — Ross Ragland</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body class="dashboard-layout">
    <?php include __DIR__ . '/includes/sidebar.php'; ?>

    <main class="dashboard-main">
        <div class="dashboard-top">
            <?php include __DIR__ . '/includes/admin-user.php'; ?>
            <span class="dashboard-sync">Last sync - 2 min ago</span>
        </div>

        <h1 class="dashboard-heading">Audit Logs</h1>

        <div class="audit-logs-wrap">
            <div class="audit-logs-header audit-log-row">
                <span class="audit-col-timestamp">Timestamp:</span>
                <span class="audit-col-user">User:</span>
                <span class="audit-col-action">Action:</span>
                <span class="audit-col-description">Description:</span>
            </div>

            <?php foreach ($auditLogs as $log): ?>
            <div class="audit-log-row">
                <span class="audit-col-timestamp"><?= htmlspecialchars($log['timestamp']) ?></span>
                <span class="audit-col-user"><?= htmlspecialchars($log['user']) ?></span>
                <span class="audit-col-action"><?= htmlspecialchars($log['action']) ?></span>
                <span class="audit-col-description"><?= htmlspecialchars($log['description']) ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </main>

    <?php include __DIR__ . '/includes/admin-image-modal.php'; ?>
</body>
</html>
