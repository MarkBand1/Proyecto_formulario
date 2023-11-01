$(document).ready(function () {
  $("#requestForm").submit(function (event) {
    event.preventDefault();

    // Obtener valores del formulario
    var nombre = $("#nombre").val();
    var email = $("#email").val();
    var texto = $("#texto").val();

    // Enviar datos al servidor
    $.ajax({
      type: "POST",
      url: "guardar_peticion.php",
      data: { nombre: nombre, email: email, texto: texto },
      success: function (response) {
        alert("Peticion guardada con éxito.");
      },
    });
  });
});
