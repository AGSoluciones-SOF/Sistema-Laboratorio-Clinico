<?php
require_once "../includes/auth.php";
requireLogin();
require_once "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $stmt = $pdo->prepare("INSERT INTO lab_tests (name, unit, reference_range) VALUES (?, ?, ?)");
    $stmt->execute([$_POST["name"], $_POST["unit"], $_POST["reference_range"]]);
    header("Location: index.php");
    exit;
}

require_once "../includes/header.php";
?>
<h1 class="fw-bold mb-4">Nuevo estudio</h1>
<div class="card p-4">
<form method="POST" class="row g-3">
  <div class="col-md-4"><label class="form-label">Nombre</label><input name="name" class="form-control" required></div>
  <div class="col-md-4"><label class="form-label">Unidad</label><input name="unit" class="form-control"></div>
  <div class="col-md-4"><label class="form-label">Rango de referencia</label><input name="reference_range" class="form-control"></div>
  <div class="col-12"><button class="btn btn-primary">Guardar</button></div>
</form>
</div>
<?php require_once "../includes/footer.php"; ?>
