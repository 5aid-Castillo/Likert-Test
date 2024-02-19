/* Verificamos que si es un lider de trabajo o no */
const select = document.getElementById("select");

select.addEventListener("change", function () {
  const selectedOption = this.options[select.selectedIndex];
  /*  console.log(selectedOption.value + ': ' + selectedOption.text); */
  const getElements = [...document.querySelectorAll(".leader")];
  /* Si selecciona que SI es un lider, se elimina la calse que oculta las otras preguntas */
  if (selectedOption.value === "Si") {
    getElements.forEach(function (el) {
      el.classList.remove("hidden");
    });
    /*  Si selecciona que no, entonces solo se muestran las primeras preguntas */
  } else if (selectedOption.value === "No") {
    getElements.forEach(function (el) {
      el.classList.add("hidden");
    });
  }
});
