<?php
require_once "includes/auth.php";
requireLogin();
require_once "config/database.php";
require_once "includes/header.php";

$patients = $pdo->query("SELECT COUNT(*) FROM patients")->fetchColumn();
$tests = $pdo->query("SELECT COUNT(*) FROM lab_tests")->fetchColumn();
$results = $pdo->query("SELECT COUNT(*) FROM results")->fetchColumn();
$today = $pdo->query("SELECT COUNT(*) FROM results WHERE DATE(created_at) = CURDATE()")->fetchColumn();
?>
<div class="d-flex justify-content-between align-items-center mb-4">
  <div>
    <h1 class="fw-bold">Dashboard</h1>
    <p class="text-muted">Bienvenida/o, <?= htmlspecialchars($_SESSION["user_name"]) ?>.</p>
  </div>
  <span class="badge bg-primary p-3">Laboratorio Clínico</span>
</div>

<div class="row g-4">
  <div class="col-md-3"><div class="stat-card"><p>Pacientes</p><h2><?= $patients ?></h2></div></div>
  <div class="col-md-3"><div class="stat-card"><p>Estudios</p><h2><?= $tests ?></h2></div></div>
  <div class="col-md-3"><div class="stat-card"><p>Resultados</p><h2><?= $results ?></h2></div></div>
  <div class="col-md-3"><div class="stat-card"><p>Hoy</p><h2><?= $today ?></h2></div></div>
</div>

<div class="card mt-4 p-4">
  <h4 class="fw-bold">Módulos principales</h4>
  <div class="row g-3 mt-2">
    <div class="col-md-4"><a class="btn btn-outline-primary w-100" href="patients/index.php">Registrar pacientes</a></div>
    <div class="col-md-4"><a class="btn btn-outline-primary w-100" href="results/create.php">Capturar resultados</a></div>
    <div class="col-md-4"><a class="btn btn-outline-primary w-100" href="reports/index.php">Ver reportes</a></div>
  </div>
</div>
<?php require_once "includes/footer.php"; ?>
