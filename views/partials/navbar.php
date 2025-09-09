<?php
// 1) Obtengo mi lista de items del layout en sesión
$navItems = $_SESSION['layout']['partials']['navbar']['items'] ?? ['Inicio'];
?>
<nav class="app-navbar">
    <ul>
        <?php foreach ($navItems as $item): ?>
            <li><?= htmlspecialchars($item) ?></li>
        <?php endforeach; ?>
    </ul>
</nav>