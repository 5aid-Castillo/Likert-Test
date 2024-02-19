<?php
/* Recibimos valores */
if (isset($_POST)) {
  /* Aqui le quitamos el formato JSON */
  $data = file_get_contents("php://input");
  $answer = json_decode($data, true);
  /* Contamos cuantas preguntas contestaron */
  $counter = count($answer);
  /* Comprobamos si tiene 4 respuestas, si no las tiene es que contesto mas y los datos cambian */
  if ($counter == 4) {
    /* Calificacion de respuestas */
    $c1 = $answer['q1'];
    $c2 = $answer['q2'];
    $c3 = $answer['q3'];
    $c4 = $answer['q4'];
    /* Suma de las respuestas */
    $sum = $c1 + $c2 + $c3 + $c4;
    /* Regla simple de 3 */
    $base = $sum * 20;
    $total = $base / $counter;
    $result = round($total);

    echo '<p>Tienes un puntaje de:' . $result . '</p>';
  } else {
    $c1 = $answer['q1'];
    $c2 = $answer['q2'];
    $c3 = $answer['q3'];
    $c4 = $answer['q4'];
    $c5 = $answer['q5'];
    $c6 = $answer['q6'];
    $c7 = $answer['q7'];
    $c8 = $answer['q8'];

    /* Suma de las respuestas */
    $sum = $c1 + $c2 + $c3 + $c4 + $c5 + $c6 + $c7 + $c8;
    /* Regla simple de 3 */
    $base = $sum * 20;
    $total = $base / $counter;
    $result = round($total);

    echo '<p>Tienes un puntaje de:' . $result . '</p>';
  }
}
