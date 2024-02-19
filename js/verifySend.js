import { checkRadio } from "./radioChecked.js";
import { checkLeaderRadio } from "./LeaderChecked.js";
/* Manejo de error, en caso de que el usuario no seleccione alguna opcion si es lider de trabajo o no */
const error = document.getElementById("errorContainer");
const form = document.getElementById("form");

form.addEventListener("submit", function (e) {
  e.preventDefault();

  const selectedOption = select.options[select.selectedIndex];
  /* Si no hizo la seleccion de lider de trabajo se muestra el mensaje de error y enfoca el select */
  if (selectedOption.value === "sn") {
    error.classList.remove("hidden");
    select.focus();
  } else if (selectedOption.value === "Si") {
    console.log("Es un si");
    checkLeaderRadio();
    /* Y si lo tiene lo mantiene oculto/oculta y redirecciona el puntaje */
    error.classList.add("hidden");
    /*  location.href = "../views/points.html";*/
  } else {
    checkRadio();
    /* Y si lo tiene lo mantiene oculto/oculta y redirecciona el puntaje */
    error.classList.add("hidden");
  }
});
