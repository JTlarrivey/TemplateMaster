<?php
// Header: muestra logo y título de la aplicación
// Datos en $_SESSION['layout']
$layout = $_SESSION['layout'] ?? [];

$logo  = $layout['partials']['header']['logo']  ?? '/assets/default-logo.png';
$title = $layout['partials']['header']['title'] ?? 'Mi Aplicación';

// UserContext en $_SESSION también
$userName = $_SESSION['user']['name'] ?? 'Invitado';
?>
<header class="app-header">
    <div class="logo">
        <img src="<?= htmlspecialchars($logo) ?>" alt="Logo">
    </div>
    <div class="title">
        <h1><?= htmlspecialchars($title) ?></h1>
    </div>
    <div class="user-info">
        <span>Hola, <?= htmlspecialchars($userName) ?></span>
    </div>
</header>