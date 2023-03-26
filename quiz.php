<?php
session_start();

// Definir la lista de preguntas
$questions = array(1, 2, 3, 4, 5);

// Obtener el índice de la pregunta actual
$question_index = isset($_SESSION['question_index']) ? $_SESSION['question_index'] : 0;

// Si se recibió una respuesta, validarla y avanzar a la siguiente pregunta
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $question_id = $_POST['question_id'];
  $answer = $_POST['answer'];

  // Validar la respuesta
  if (validate_answer($question_id, $answer)) {
    // Respuesta correcta, avanzar a la siguiente pregunta
    $question_index++;
  }
  else {
    // Respuesta incorrecta, mostrar la misma pregunta de nuevo
    $question_index = $question_index;
  }
}

// Si se llegó al final de las preguntas, mostrar un mensaje de finalización
if ($question_index >= count($questions)) {
  echo "<h1>¡Felicidades, ha completado el cuestionario!</h1>";
  exit();
}

// Mostrar la pregunta actual
$question_id = $questions[$question_index];
include "index$question_id.html";

// Guardar el índice de la pregunta actual en la sesión
$_SESSION['question_index'] = $question_index;

// Función para validar la respuesta
function validate_answer($question_id, $answer) {
  // Definir las respuestas correctas
  $answers = array(
    1 => 'b',
    2 => 'c',
    3 => 'd',
    4 => 'b',
    5 => 'a'
  );

  // Validar la respuesta
  return isset($answers[$question_id]) && $answers[$question_id] === $answer;
}
