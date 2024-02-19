<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ev Logica</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="./css/app.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>


  <section class="app flex-col" id="app">
    <!-- Modal Points-->
    <div class="modal hidden" id="modal" tabindex="1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Puntaje</h5>
            <button type="button" class="btn-close" onclick="location.href='index.php'" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div id="demo"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary " onclick="location.href='index.php'">Aceptar</button>

          </div>
        </div>
      </div>
    </div>


    <article class="likert-intro text-center">
      <div class="color-bar"></div>
      <h1>Encuesta de Likert</h1>
      <p>En esta encuesta se desea conocer su opinión acerca del trabajo según las siguientes opciones:</p>
      <p><strong>1</strong>(Totalmente en desacuerdo) <strong>2</strong>(En desacuerdo) <strong>3</strong>(Neutral) <strong>4</strong>(De acuerdo) <strong>5</strong>(Totalmente de acuerdo)</p>
      <div class="question flex-row">
        <p>¿Eres algún Líder de trabajo?</p>
        <select id="select" class="form-select" aria-label="Default select example">
          <option value="sn" selected>Selecciona una opción </option>
          <option value="No">No</option>
          <option value="Si">Si</option>

        </select>
        <div class="alert alert-danger hidden" id="errorContainer">Selecciona alguna opción</div>

      </div>
    </article>
    <form class="form-set" method="POST" id="form">

      <article class="question-box">

        <div class="question-text">
          <div class="flex-row">
            <p>1.- Mi equipo de trabajo es colaborativo y se apoya mutuamente.</p>
          </div>
          <div class="alert alert-danger hidden" style="margin-left: 1rem;" id="error-q1">(!) </div>
        </div>
        <div class=" flex-row select">
          <div class="form-check form-check-inline ">
            <input class="form-check-input" type="radio" name="q1" id="q1_r1" value="1">
            <label class="form-check-label" for="q1_r1">1</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q1" id="q1_r2" value="2">
            <label class="form-check-label red" for="q1_r2">2</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q1" id="q1_r3" value="3">
            <label class="form-check-label" for="q1_r3">3 </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q1" id="q1_r4" value="4">
            <label class="form-check-label" for="q1_r4">4</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q1" id="q1_r5" value="5">
            <label class="form-check-label" for="q1_r5">5</label>
          </div>

        </div>


      </article>
      <article class="question-box">
        <div class="question-text">
          <div class="flex-row">
            <p>2.- La comunicación entre los miembros del equipo es efectiva.</p>
          </div>
          <div class="alert alert-danger hidden" style="margin-left: 1rem;" id="error-q2">(!) </div>
        </div>
        <div class="flex-row select">
          <div class="form-check form-check-inline ">
            <input class="form-check-input" type="radio" name="q2" id="q2_r1" value="1">
            <label class="form-check-label" for="q2_r1">1</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q2" id="q2_r2" value="2">
            <label class="form-check-label red" for="q2_r2">2</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q2" id="q2_r3" value="3">
            <label class="form-check-label" for="q2_r3">3 </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q2" id="q2_r4" value="4">
            <label class="form-check-label" for="q2_r4">4</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q2" id="q2_r5" value="5">
            <label class="form-check-label" for="q2_r5">5</label>
          </div>

        </div>

      </article>
      <article class="question-box">
        <div class="question-text">
          <div class="flex-row">
            <p>3.- Siento que mi opinión es valorada y tomada en cuenta.</p>
          </div>
          <div class="alert alert-danger hidden" style="margin-left: 1rem;" id="error-q3">(!) </div>
        </div>

        <div class="flex-row select">
          <div class="form-check form-check-inline ">
            <input class="form-check-input" type="radio" name="q3" id="q3_r1" value="1">
            <label class="form-check-label" for="q3_r1">1</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q3" id="q3_r2" value="2">
            <label class="form-check-label red" for="q3_r2">2</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q3" id="q3_r3" value="3">
            <label class="form-check-label" for="q3_r3">3 </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q3" id="q3_r4" value="4">
            <label class="form-check-label" for="q3_r4">4</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q3" id="q3_r5" value="5">
            <label class="form-check-label" for="q3_r5">5</label>
          </div>

        </div>
      </article>
      <article class="question-box">
        <div class="question-text">
          <div class="flex-row">
            <p>4.- Existe un ambiente de respeto y tolerancia en el lugar de trabajo.</p>
          </div>
          <div class="alert alert-danger hidden" style="margin-left: 1rem;" id="error-q4">(!) </div>
        </div>

        <div class="flex-row select">
          <div class="form-check form-check-inline ">
            <input class="form-check-input" type="radio" name="q4" id="q4_r1" value="1">
            <label class="form-check-label" for="q4_r1">1</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q4" id="q4_r2" value="2">
            <label class="form-check-label red" for="q4_r2">2</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q4" id="q4_r3" value="3">
            <label class="form-check-label" for="q4_r3">3 </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q4" id="q4_r4" value="4">
            <label class="form-check-label" for="q4_r4">4</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q4" id="q4_r5" value="5">
            <label class="form-check-label" for="q4_r5">5</label>
          </div>

        </div>
      </article>



      <!-- Lider -->
      <article class="question-box leader hidden">
        <div class="question-text">
          <div class="flex-row">
            <p>5.-Recibió el apoyo necesario para realizar mi trabajo de manera eficiente..</p>

          </div>
          <div class="alert alert-danger hidden" style="margin-left: 1rem;" id="error-q5">(!) </div>
        </div>
        <div class="flex-row select">
          <div class="form-check form-check-inline ">
            <input class="form-check-input" type="radio" name="q5" id="q5_r1" value="1">
            <label class="form-check-label" for="q5_r1">1</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q5" id="q5_r2" value="2">
            <label class="form-check-label red" for="q5_r2">2</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q5" id="q5_r3" value="3">
            <label class="form-check-label" for="q5_r3">3 </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q5" id="q5_r4" value="4">
            <label class="form-check-label" for="q5_r4">4</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q5" id="q5_r5" value="5">
            <label class="form-check-label" for="q5_r5">5</label>
          </div>

        </div>
      </article>
      <article class="question-box leader hidden">
        <div class="question-text">
          <div class="flex-row">
            <p>6.- Las oportunidades de crecimiento y desarrollo profesional son claras y accesibles.</p>
          </div>
          <div class="alert alert-danger hidden" style="margin-left: 1rem;" id="error-q6">(!) </div>
        </div>
        <div class="flex-row select">
          <div class="form-check form-check-inline ">
            <input class="form-check-input" type="radio" name="q6" id="q6_r1" value="1">
            <label class="form-check-label" for="q6_r1">1</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q6" id="q6_r2" value="2">
            <label class="form-check-label red" for="q6_r2">2</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q6" id="q6_r3" value="3">
            <label class="form-check-label" for="q6_r3">3 </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q6" id="q6_r4" value="4">
            <label class="form-check-label" for="q6_r4">4</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q6" id="q6_r5" value="5">
            <label class="form-check-label" for="q6_r5">5</label>
          </div>

        </div>
      </article>
      <article class="question-box leader hidden">
        <div class="question-text">
          <div class="flex-row">
            <p>7.- La dirección y liderazgo de la empresa son efectivos.</p>

          </div>
          <div class="alert alert-danger hidden" style="margin-left: 1rem;" id="error-q7">(!) </div>
        </div>
        <div class="flex-row select">
          <div class="form-check form-check-inline ">
            <input class="form-check-input" type="radio" name="q7" id="q7_r1" value="1">
            <label class="form-check-label" for="q7_r1">1</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q7" id="q7_r2" value="2">
            <label class="form-check-label red" for="q7_r2">2</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q7" id="q7_r3" value="3">
            <label class="form-check-label" for="q7_r3">3 </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q7" id="q7_r4" value="4">
            <label class="form-check-label" for="q7_r4">4</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q7" id="q7_r5" value="5">
            <label class="form-check-label" for="q7_r5">5</label>
          </div>

        </div>
      </article>
      <article class="question-box leader hidden">
        <div class="question-text">
          <div class="flex-row">

            <p>8.- Existe un equilibrio adecuado entre la vida laboral y personal.</p>
          </div>
          <div class="alert alert-danger hidden" style="margin-left: 1rem;" id="error-q8">(!) </div>
        </div>
        <div class="flex-row select">
          <div class="form-check form-check-inline ">
            <input class="form-check-input" type="radio" name="q8" id="q8_r1" value="1">
            <label class="form-check-label" for="q8_r1">1</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q8" id="q8_r2" value="2">
            <label class="form-check-label red" for="q8_r2">2</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q8" id="q8_r3" value="3">
            <label class="form-check-label" for="q8_r3">3 </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q8" id="q8_r4" value="4">
            <label class="form-check-label" for="q8_r4">4</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q8" id="q8_r5" value="5">
            <label class="form-check-label" for="q8_r5">5</label>
          </div>

        </div>
      </article>

      <div class="send-container">
        <input type="submit" value="Enviar Formulario" name="send" id="send" class="send" />

      </div>
    </form>



  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script type="text/javascript" src="./js/verify.js"></script>
  <script type="module" src="./js/verifySend.js"></script>

</body>

</html>