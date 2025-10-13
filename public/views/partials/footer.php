<?php
// Footer: toma texto desde $_SESSION['layout']
$layout = $_SESSION['layout'] ?? [];
$txt    = $layout['partials']['footer']['text']
    ?? '© ' . date('Y') . ' Mi Empresa';
?>
<footer class="app-footer">
    <p><?= htmlspecialchars($txt) ?></p>
</footer>