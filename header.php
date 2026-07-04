<?php require_once __DIR__ . "/auth.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Sistema Laboratorio Clínico</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="/sistema-laboratorio-clinico/assets/css/styles.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="/sistema-laboratorio-clinico/dashboard.php">LabSoft</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="menu" class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link" href="/sistema-laboratorio-clinico/dashboard.php">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="/sistema-laboratorio-clinico/patients/index.php">Pacientes</a></li>
        <li class="nav-item"><a class="nav-link" href="/sistema-laboratorio-clinico/tests/index.php">Estudios</a></li>
        <li class="nav-item"><a class="nav-link" href="/sistema-laboratorio-clinico/results/index.php">Resultados</a></li>
        <li class="nav-item"><a class="nav-link" href="/sistema-laboratorio-clinico/reports/index.php">Reportes</a></li>
        <li class="nav-item"><a class="nav-link" href="/sistema-laboratorio-clinico/history/index.php">Historial</a></li>
      </ul>
      <a class="btn btn-light btn-sm" href="/sistema-laboratorio-clinico/logout.php">Salir</a>
    </div>
  </div>
</nav>
<main class="container py-4">
