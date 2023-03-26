<?php
// Conexión a la base de datos
$db_host = "localhost";
$db_user = "usuario";
$db_password = "contraseña";
$db_name = "nombre_base_de_datos";
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

// Verificar si se envió un formulario y procesar la respuesta
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $question_id = $_POST["question_id"];
  $answer = $_POST["answer"];
  $sql = "INSERT INTO respuestas (question_id, answer) VALUES ('$question_id', '$answer')";
  $mysqli->query($sql);
}
?>
