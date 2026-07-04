<?php
require_once "../includes/auth.php";
requireLogin();
require_once "../config/database.php";

$id = $_GET["id"] ?? 0;
$stmt = $pdo->prepare("SELECT * FROM patients WHERE id = ?");
$stmt->execute([$id]);
$patient = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$patient) {
    die("Paciente no encontrado.");
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $stmt = $pdo->prepare("UPDATE patients SET name=?, age=?, gender=?, phone=?, email=?, address=? WHERE id=?");
    $stmt->execute([$_POST["name"], $_POST["age"], $_POST["gender"], $_POST["phone"], $_POST["email"], $_POST["address"], $id]);
    header("Location: index.php");
    exit;
}

require_once "../includes/header.php";
?>
<h1 class="fw-bold mb-4">Editar paciente</h1>
<div class="card p-4">
  <form method="POST" class="row g-3">
    <div class="col-md-6"><label class="form-label">Nombre completo</label><input name="name" class="form-control" value="<?= htmlspecialchars($patient["name"]) ?>" required></div>
    <div class="col-md-3"><label class="form-label">Edad</label><input name="age" type="number" class="form-control" value="<?= htmlspecialchars($patient["age"]) ?>" required></div>
    <div class="col-md-3"><label class="form-label">Sexo</label><input name="gender" class="form-control" value="<?= htmlspecialchars($patient["gender"]) ?>"></div>
    <div class="col-md-6"><label class="form-label">Teléfono</label><input name="phone" class="form-control" value="<?= htmlspecialchars($patient["phone"]) ?>"></div>
    <div class="col-md-6"><label class="form-label">Correo</label><input name="email" type="email" class="form-control" value="<?= htmlspecialchars($patient["email"]) ?>"></div>
    <div class="col-12"><label class="form-label">Dirección</label><textarea name="address" class="form-control"><?= htmlspecialchars($patient["address"]) ?></textarea></div>
    <div class="col-12"><button class="btn btn-primary">Actualizar</button> <a href="index.php" class="btn btn-secondary">Cancelar</a></div>
  </form>
</div>
<?php require_once "../includes/footer.php"; ?>
