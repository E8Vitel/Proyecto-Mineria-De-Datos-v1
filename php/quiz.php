<?php
session_start();
require_once 'conexion_bd.php';

class Quiz {
    private $conexion;
    private $preguntas = [];
    private $indice_pregunta_actual = 0;
    private $puntuacion = 0;

    public function __construct($conexion) {
        $this->conexion = $conexion;
        $this->cargarPreguntas();
    }

    private function cargarPreguntas() {
        // Obtener 15 preguntas aleatorias de la base de datos
        $consulta = "SELECT * FROM preguntas_quiz ORDER BY RAND() LIMIT 15";
        $resultado = $this->conexion->query($consulta);
        
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $this->preguntas[] = $fila;
            }
        }
    }

    public function obtenerPreguntaActual() {
        return $this->preguntas[$this->indice_pregunta_actual] ?? null;
    }

    public function procesarRespuesta($respuesta_usuario) {
        $pregunta_actual = $this->obtenerPreguntaActual();
        
        if ($respuesta_usuario === $pregunta_actual['respuesta_correcta']) {
            $this->puntuacion++;
        }
        
        $this->indice_pregunta_actual++;
    }

    public function esQuizCompletado() {
        return $this->indice_pregunta_actual >= count($this->preguntas);
    }

    public function obtenerPuntuacion() {
        return $this->puntuacion;
    }

    public function obtenerTotalPreguntas() {
        return count($this->preguntas);
    }

    public function obtenerIndicePreguntaActual() {
        return $this->indice_pregunta_actual;
    }
}

// Iniciar o continuar el quiz
if (!isset($_SESSION['quiz'])) {
    $_SESSION['quiz'] = new Quiz($conn);
}

$quiz = $_SESSION['quiz'];

// Manejar envío de formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['respuesta_usuario'])) {
        $quiz->procesarRespuesta($_POST['respuesta_usuario']);
    }
}

// Verificar si el quiz está completado
if ($quiz->esQuizCompletado()) {
    $puntuacion_final = $quiz->obtenerPuntuacion();
    $total_preguntas = $quiz->obtenerTotalPreguntas();
    
    // Destruir la sesión para reiniciar el quiz
    session_destroy();
    
    // Redirigir a la página de resultados
    header("Location: resultados_quiz.php?puntuacion=$puntuacion_final&total=$total_preguntas");
    exit();
}

$pregunta_actual = $quiz->obtenerPreguntaActual();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Quiz Interactivo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                Quiz Interactivo - Pregunta <?php echo $_SESSION['quiz']->obtenerIndicePreguntaActual() + 1; ?>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($pregunta_actual['pregunta']); ?></h5>
                
                <form method="POST">
                    <?php 
                    // Aleatorizar el orden de las respuestas
                    $respuestas = [
                        $pregunta_actual['respuesta_correcta'],
                        $pregunta_actual['opcion1'],
                        $pregunta_actual['opcion2'],
                        $pregunta_actual['opcion3']
                    ];
                    shuffle($respuestas);
                    
                    foreach ($respuestas as $respuesta): 
                    ?>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" 
                                name="respuesta_usuario" 
                                value="<?php echo htmlspecialchars($respuesta); ?>" 
                                id="respuesta_<?php echo htmlspecialchars($respuesta); ?>">
                            <label class="form-check-label" for="respuesta_<?php echo htmlspecialchars($respuesta); ?>">
                                <?php echo htmlspecialchars($respuesta); ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                    
                    <button type="submit" class="btn btn-primary mt-3">Siguiente Pregunta</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>