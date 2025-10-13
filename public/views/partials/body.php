<?php
// Body: renderiza la tabla según columnas y filas de $_SESSION['layout']
$layout = $_SESSION['layout'] ?? [];
$rows   = $_SESSION['data']['rows']    ?? [];
$cols   = $layout['partials']['body']['columns']
    ?? array_keys($rows[0] ?? []);
?>
<main class="app-body">
    <?php if (!empty($rows)): ?>
        <table class="data-table">
            <thead>
                <tr>
                    <?php foreach ($cols as $col): ?>
                        <th><?= htmlspecialchars($col) ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <?php foreach ($cols as $col): ?>
                            <td><?= htmlspecialchars($row[$col] ?? '') ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No hay datos para mostrar.</p>
    <?php endif; ?>
</main>