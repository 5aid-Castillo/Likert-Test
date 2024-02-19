/* Esta funcion es para checar si el usuario con campo Lider ingreso algo en las opciones, de lo contrario no procedera el
formulario y se mostrara una notificacion de que debe completarlo
*/
export const checkLeaderRadio = () => {
  let hasError = false;
  const error_q1 = document.getElementById("error-q1");
  const error_q2 = document.getElementById("error-q2");
  const error_q3 = document.getElementById("error-q3");
  const error_q4 = document.getElementById("error-q4");
  const error_q5 = document.getElementById("error-q5");
  const error_q6 = document.getElementById("error-q6");
  const error_q7 = document.getElementById("error-q7");
  const error_q8 = document.getElementById("error-q8");

  if (!document.querySelector('input[name="q1"]:checked')) {
    error_q1.classList.remove("hidden");
    hasError = true;
  } else {
    error_q1.classList.add("hidden");
  }
  if (!document.querySelector('input[name="q2"]:checked')) {
    error_q2.classList.remove("hidden");
    hasError = true;
  } else {
    error_q2.classList.add("hidden");
  }
  if (!document.querySelector('input[name="q3"]:checked')) {
    error_q3.classList.remove("hidden");
    hasError = true;
  } else {
    error_q3.classList.add("hidden");
  }
  if (!document.querySelector('input[name="q4"]:checked')) {
    error_q4.classList.remove("hidden");
    hasError = true;
  } else {
    error_q4.classList.add("hidden");
  }
  if (!document.querySelector('input[name="q5"]:checked')) {
    error_q5.classList.remove("hidden");
    hasError = true;
  } else {
    error_q5.classList.add("hidden");
  }
  if (!document.querySelector('input[name="q6"]:checked')) {
    error_q6.classList.remove("hidden");
    hasError = true;
  } else {
    error_q6.classList.add("hidden");
  }
  if (!document.querySelector('input[name="q7"]:checked')) {
    error_q7.classList.remove("hidden");
    hasError = true;
  } else {
    error_q7.classList.add("hidden");
  }
  if (!document.querySelector('input[name="q8"]:checked')) {
    error_q8.classList.remove("hidden");
    hasError = true;
  } else {
    error_q8.classList.add("hidden");
  }

  if (hasError) {
    select.focus();
  } else {
    const q1 = $("input[name='q1']:checked").val();
    const q2 = $("input[name='q2']:checked").val();
    const q3 = $("input[name='q3']:checked").val();
    const q4 = $("input[name='q4']:checked").val();
    const q5 = $("input[name='q5']:checked").val();
    const q6 = $("input[name='q6']:checked").val();
    const q7 = $("input[name='q7']:checked").val();
    const q8 = $("input[name='q8']:checked").val();
    const getData = {
      q1: q1,
      q2: q2,
      q3: q3,
      q4: q4,
      q5: q5,
      q6: q6,
      q7: q7,
      q8: q8,
    };
    console.log(getData);
    /* Aqui mandaremos nuestro objeto que tenermos de nuestros valores de cada input radio,
       y se lo enviaremos al servidor con fetch */
    fetch("./controllers/pointsController.php", {
      method: "POST",
      headers: {
        "Content-Type": "applicaction/json; charset=utf-8",
      },
      body: JSON.stringify(getData),
    })
      .then(function (response) {
        return response.text();
      })
      .then(function (data) {
        console.log(data);
        const container = document.getElementById("modal");
        container.classList.remove("hidden");
        container.classList.add("modal-active");
        document.getElementById("demo").innerHTML = data;
      });
  }
};
