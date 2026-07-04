<?php
require_once "../includes/auth.php";
requireLogin();
require_once "../config/database.php";
require_once "../includes/header.php";

$tests = $pdo->query("SELECT * FROM lab_tests ORDER BY name")->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="d-flex justify-content-between align-items-center mb-4">
  <h1 class="fw-bold">Catálogo de estudios</h1>
  <a class="btn btn-primary" href="create.php">Nuevo estudio</a>
</div>
<div class="card p-3">
<table class="table table-hover">
<thead><tr><th>Estudio</th><th>Unidad</th><th>Rango de referencia</th></tr></thead>
<tbody>
<?php foreach ($tests as $t): ?>
<tr><td><?= htmlspecialchars($t["name"]) ?></td><td><?= htmlspecialchars($t["unit"]) ?></td><td><?= htmlspecialchars($t["reference_range"]) ?></td></tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
<?php require_once "../includes/footer.php"; ?>
