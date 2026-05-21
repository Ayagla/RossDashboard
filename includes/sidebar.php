<?php
$currentPage = $currentPage ?? 'dashboard';
$navItems = [
    'dashboard' => ['label' => 'Dashboard', 'href' => 'dashboard.php'],
    'assets'    => ['label' => 'Assets', 'href' => 'assets.php'],
    'vlans'     => ['label' => 'VLANs', 'href' => '#'],
    'credentials' => ['label' => 'Credentials', 'href' => 'credentials.php'],
    'audit'     => ['label' => 'Audit Logs', 'href' => '#'],
];
?>
<aside class="sidebar">
    <h2 class="sidebar-title">Navigate</h2>
    <nav class="sidebar-nav">
        <?php foreach ($navItems as $key => $item): ?>
            <a
                href="<?= htmlspecialchars($item['href']) ?>"
                class="sidebar-link<?= $currentPage === $key ? ' active' : '' ?>"
            ><?= htmlspecialchars($item['label']) ?></a>
        <?php endforeach; ?>
    </nav>
</aside>
