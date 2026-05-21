<?php
// Credential data will be loaded from the database later.
$currentPage = 'credentials';

$credentials = [
    [
        'name' => 'Admin',
        'access' => 'Unifi/NAS/CCTV/Logs',
        'last_accessed' => '3x / 30D',
        'systems' => [
            ['name' => 'UniFi Network', 'desc' => 'Manage switches, APs, Wi-Fi, VLANs'],
            ['name' => 'NAS Backup Storage', 'desc' => 'Manage Backups and Shared Files'],
            ['name' => 'CCTV System', 'desc' => 'View Cameras and Manage Records'],
        ],
        'logs' => [
            ['user' => 'a.manning', 'action' => 'Updated Credential', 'datetime' => '05/03/26 19:20', 'location' => 'Server Room'],
            ['user' => 'm.teems', 'action' => 'Viewed Credential', 'datetime' => '04/15/26 10:54', 'location' => 'Admin Office'],
        ],
        'security' => [
            'Created On:' => '03/22/25',
            'Password Rotation:' => 'Every 90 Days',
            'MFA Required:' => 'Yes',
            'Owner:' => 'IT Admin',
        ],
        'assigned' => [
            ['user' => 'a.manning', 'date' => '03/04/26'],
            ['user' => 'u.torres', 'date' => '02/25/26'],
            ['user' => 'm.teems', 'date' => '02/20/26'],
            ['user' => 'a.yagla', 'date' => '01/12/26'],
        ],
    ],
    [
        'name' => 'Technician',
        'access' => 'UniFi',
        'last_accessed' => '10x / 30D',
        'systems' => [
            ['name' => 'UniFi Network', 'desc' => 'Manage switches, APs, Wi-Fi, VLANs'],
        ],
        'logs' => [
            ['user' => 'm.teems', 'action' => 'Viewed Credential', 'datetime' => '05/01/26 14:10', 'location' => 'Server Room'],
        ],
        'security' => [
            'Created On:' => '04/10/25',
            'Password Rotation:' => 'Every 90 Days',
            'MFA Required:' => 'Yes',
            'Owner:' => 'IT Admin',
        ],
        'assigned' => [
            ['user' => 'm.teems', 'date' => '04/28/26'],
            ['user' => 'u.torres', 'date' => '03/15/26'],
        ],
    ],
    [
        'name' => 'Management',
        'access' => 'Reports/CCTV/Logs',
        'last_accessed' => '30x / 30D',
        'systems' => [
            ['name' => 'Reports Dashboard', 'desc' => 'View network and usage reports'],
            ['name' => 'CCTV System', 'desc' => 'View Cameras and Manage Records'],
            ['name' => 'Audit Logs', 'desc' => 'View system audit history'],
        ],
        'logs' => [
            ['user' => 'u.torres', 'action' => 'Viewed Credential', 'datetime' => '05/02/26 09:30', 'location' => 'Admin Office'],
        ],
        'security' => [
            'Created On:' => '02/14/25',
            'Password Rotation:' => 'Every 60 Days',
            'MFA Required:' => 'Yes',
            'Owner:' => 'IT Admin',
        ],
        'assigned' => [
            ['user' => 'u.torres', 'date' => '04/01/26'],
        ],
    ],
    [
        'name' => 'Staff',
        'access' => 'Vendor',
        'last_accessed' => '90x / 30D',
        'systems' => [
            ['name' => 'Vendor Portal', 'desc' => 'Submit invoices and view orders'],
        ],
        'logs' => [
            ['user' => 'a.yagla', 'action' => 'Viewed Credential', 'datetime' => '04/20/26 11:00', 'location' => 'Box Office'],
        ],
        'security' => [
            'Created On:' => '01/05/25',
            'Password Rotation:' => 'Every 120 Days',
            'MFA Required:' => 'No',
            'Owner:' => 'Operations',
        ],
        'assigned' => [
            ['user' => 'a.yagla', 'date' => '04/18/26'],
        ],
    ],
    [
        'name' => 'Contractor',
        'access' => 'Temporary VLAN/CCTV',
        'last_accessed' => '5x / 30D',
        'systems' => [
            ['name' => 'Temporary VLAN', 'desc' => 'Limited-time network access'],
            ['name' => 'CCTV System', 'desc' => 'View Cameras (read-only)'],
        ],
        'logs' => [
            ['user' => 'contractor-01', 'action' => 'Viewed Credential', 'datetime' => '04/10/26 16:45', 'location' => 'Stage'],
        ],
        'security' => [
            'Created On:' => '03/01/26',
            'Password Rotation:' => 'Every 30 Days',
            'MFA Required:' => 'Yes',
            'Owner:' => 'IT Admin',
        ],
        'assigned' => [
            ['user' => 'contractor-01', 'date' => '03/28/26'],
        ],
    ],
    [
        'name' => 'Event Coordinator',
        'access' => 'Event VLAN/Audio/Visual',
        'last_accessed' => '15x / 30D',
        'systems' => [
            ['name' => 'Event VLAN', 'desc' => 'Manage event network segment'],
            ['name' => 'Audio/Visual Control', 'desc' => 'Configure AV equipment'],
        ],
        'logs' => [
            ['user' => 'u.torres', 'action' => 'Updated Credential', 'datetime' => '04/25/26 18:00', 'location' => 'Event Hall'],
        ],
        'security' => [
            'Created On:' => '06/12/24',
            'Password Rotation:' => 'Every 90 Days',
            'MFA Required:' => 'Yes',
            'Owner:' => 'Events',
        ],
        'assigned' => [
            ['user' => 'u.torres', 'date' => '04/22/26'],
            ['user' => 'm.teems', 'date' => '03/10/26'],
        ],
    ],
];
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
            <?php include __DIR__ . '/includes/admin-user.php'; ?>
            <span class="dashboard-sync">Last sync - 2 min ago</span>
        </div>

        <h1 class="dashboard-heading">Credentials</h1>

        <div class="credentials-list-wrap">
            <div class="credentials-list-header">
                <span class="cred-col-toggle" aria-hidden="true"></span>
                <span class="cred-col-name">Name:</span>
                <span class="cred-col-access">Access to:</span>
                <span class="cred-col-last">Last Accessed:</span>
            </div>

            <?php foreach ($credentials as $credential): ?>
            <details class="credential-item">
                <summary class="credential-summary">
                    <span class="cred-col-toggle credential-toggle" aria-hidden="true">▸</span>
                    <span class="cred-col-name credential-summary-name"><?= htmlspecialchars($credential['name']) ?></span>
                    <span class="cred-col-access credential-summary-access"><?= htmlspecialchars($credential['access']) ?></span>
                    <span class="cred-col-last credential-summary-last"><?= htmlspecialchars($credential['last_accessed']) ?></span>
                </summary>

                <div class="credential-panel">
                    <section class="credential-detail">
                        <h2 class="credential-section-label">Systems this Credential can access</h2>
                        <div class="credential-box">
                            <ul class="credential-systems-list">
                                <?php foreach ($credential['systems'] as $system): ?>
                                <li class="credential-aligned-row">
                                    <span class="system-name"><?= htmlspecialchars($system['name']) ?></span>
                                    <span class="system-desc"><?= htmlspecialchars($system['desc']) ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <h2 class="credential-section-label">Credential Access Logs</h2>
                        <div class="credential-box">
                            <ul class="credential-access-logs">
                                <li class="credential-access-logs-header credential-aligned-row">
                                    <span>User</span>
                                    <span>Action</span>
                                    <span>Date/Time</span>
                                    <span>Location</span>
                                </li>
                                <?php foreach ($credential['logs'] as $log): ?>
                                <li class="credential-aligned-row">
                                    <span class="log-user"><?= htmlspecialchars($log['user']) ?></span>
                                    <span class="log-action"><?= htmlspecialchars($log['action']) ?></span>
                                    <span class="log-datetime"><?= htmlspecialchars($log['datetime']) ?></span>
                                    <span class="log-location"><?= htmlspecialchars($log['location']) ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="credential-detail-grid">
                            <div>
                                <h2 class="credential-section-label">Security Information</h2>
                                <div class="credential-box">
                                    <dl class="credential-info-list">
                                        <?php foreach ($credential['security'] as $label => $value): ?>
                                        <div class="credential-info-row">
                                            <dt><?= htmlspecialchars($label) ?></dt>
                                            <dd><?= htmlspecialchars($value) ?></dd>
                                        </div>
                                        <?php endforeach; ?>
                                    </dl>
                                </div>
                            </div>
                            <div>
                                <h2 class="credential-section-label">Who Is Assigned</h2>
                                <div class="credential-box">
                                    <ul class="credential-assigned-list">
                                        <?php foreach ($credential['assigned'] as $assignee): ?>
                                        <li class="credential-aligned-row credential-assigned-row">
                                            <span class="assigned-user"><?= htmlspecialchars($assignee['user']) ?></span>
                                            <span class="assigned-date"><?= htmlspecialchars($assignee['date']) ?></span>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </details>
            <?php endforeach; ?>
        </div>
    </main>
    <?php include __DIR__ . '/includes/admin-image-modal.php'; ?>
</body>
</html>
