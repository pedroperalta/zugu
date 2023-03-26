<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Retroalimentación de respuesta</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <h1>Retroalimentación de respuesta</h1>
    <?php
      $answers = array(
        1 => 'b',
        2 => 'c'
      );
      $question_id = $_POST['question_id'];
      $selected_answer = $_POST['answer'];
      if ($selected_answer == $answers[$question_id]) {
        echo '<p class="correct">¡Correcto!</p>';
      } else {
        echo '<p class="incorrect">Respuesta incorrecta. La respuesta correcta es ' . strtoupper($answers[$question_id]) . '.</p>';
      }
    ?>
    <p><a href="index.html">Volver a las preguntas</a></p>
  </div>
</body>
</html>
