/* Esta funcion es para checar si el usuario ingreso algo en las opciones, de lo contrario no procedera el
formulario y se mostrara una notificacion de que debe completarlo
*/

export const checkRadio = () => {
  let hasError = false;
  const error_q1 = document.getElementById("error-q1");
  const error_q2 = document.getElementById("error-q2");
  const error_q3 = document.getElementById("error-q3");
  const error_q4 = document.getElementById("error-q4");

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

  /* Si tenemos un error nos enfocara en el formulario*/
  if (hasError) {
    select.focus();
    console.log("Tenemos un error");
  } else {
    /* If we have no error, it will let us send to the form */
    /* Si no tenemos error, nos dejara enviar el formulario */
    console.log("No tenemos un error");
    const q1 = $("input[name='q1']:checked").val();
    const q2 = $("input[name='q2']:checked").val();
    const q3 = $("input[name='q3']:checked").val();
    const q4 = $("input[name='q4']:checked").val();
    const getData = {
      q1: q1,
      q2: q2,
      q3: q3,
      q4: q4
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
