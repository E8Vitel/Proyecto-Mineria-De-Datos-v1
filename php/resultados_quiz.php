<?php
if (!isset($_GET['puntuacion']) || !isset($_GET['total'])) {
    header("Location: quiz.php");
    exit();
}

$puntuacion = intval($_GET['puntuacion']);
$total_preguntas = intval($_GET['total']);
$porcentaje = round(($puntuacion / $total_preguntas) * 100, 2);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados del Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card text-center">
            <div class="card-header bg-primary text-white">
                <h2>Resultados del Quiz</h2>
            </div>
            <div class="card-body">
                <h3>Tu Puntuación:</h3>
                <div class="display-4 mb-4">
                    <?php echo "$puntuacion / $total_preguntas"; ?>
                </div>
                <p class="lead">Porcentaje: <?php echo "$porcentaje%"; ?></p>
                
                <?php if ($porcentaje >= 80): ?>
                    <div class="alert alert-success">¡Excelente trabajo!</div>
                <?php elseif ($porcentaje >= 60): ?>
                    <div class="alert alert-warning">Buen intento. Puedes mejorar.</div>
                <?php else: ?>
                    <div class="alert alert-danger">Necesitas practicar más.</div>
                <?php endif; ?>
                
                <a href="../index.php" class="btn btn-primary">Volver al inicio</a>
                <a href="quiz.php" class="btn btn-success">Intentar de Nuevo</a>
            </div>
        </div>
    </div>
</body>
</html>