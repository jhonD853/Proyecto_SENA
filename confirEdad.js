document.addEventListener("DOMContentLoaded", function () {
    var overlay = document.getElementById("confirEdad");
    var confirmarBtn = document.getElementById("confirmarBtn");
    var noSoyMayorBtn = document.getElementById("noSoyMayorBtn");

    // Muestra la confirmación de edad al cargar la página
    overlay.style.visibility = "visible";

    // Oculta la confirmación de edad y muestra el contenido principal al confirmar ser mayor de edad
    confirmarBtn.addEventListener("click", function () {
        overlay.style.visibility = "hidden";
    });

    // Redirige a otra página si el usuario declara que no es mayor de edad
    noSoyMayorBtn.addEventListener("click", function () {
        window.location.href = "https://www.funcionpublica.gov.co/eva/gestornormativo/norma.php?i=291";
    });
});