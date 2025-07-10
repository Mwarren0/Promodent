<?php
session_start();

// Verificar si hay usuario activo
if (!isset($_SESSION['usuario'])) {
  header("Location: login.html");
  exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Panel - Promodent</title>
  <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="logo">Promodent</div>
      <ul class="nav-links">
        <li><a href="dashboard.php" class="active">Panel</a></li>
        <li><a href="logout.php" class="btn-agendar">Cerrar sesión</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section class="dashboard">
      <h1>Bienvenido al sistema, <?php echo htmlspecialchars($_SESSION['usuario']); ?> 👋</h1>
      <p>Desde aquí puedes gestionar citas, pacientes, tratamientos y más.</p>

      <div class="panel-grid">
        <a href="#" class="panel-card">📋 Citas</a>
        <a href="#" class="panel-card">👤 Pacientes</a>
        <a href="#" class="panel-card">🦷 Tratamientos</a>
        <a href="#" class="panel-card">📊 Reportes</a>
      </div>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Promodent. Sistema interno.</p>
  </footer>
</body>
</html>