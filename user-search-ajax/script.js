function fill(Value) {
  $("#search").val(Value);

  $("#display").hide();
}
var page=1
var totalPages=0
var currentPage=1
$(document).ready(function () {
  //*Control de página

  //* Función para llamada Ajax
  function loadResults(page) {
    $.ajax({
      type: "POST",
      url: "Ajax.php",
      data: {
        users: "", 
        page: page, 
      },
      success: function (html) {
        currentPage=page
        //* Mostrar los resultados en div display
        $("#display").html(html).show();
        
        //* Actualizar el número de página en el botón "Next"
        $("#next-btn").data("page", page);
        totalPages = Math.ceil(totalRows/ 5);
        console.log(totalPages)
        //*Deshabilitar botones en relación a paginación 
        $("#prev-btn").prop("disabled", currentPage === 1);
        $("#next-btn").prop("disabled", currentPage === totalPages);


        //* Inyectar clases CSS
        $(".card-container").addClass("card-container");
        $(".round").addClass("round");
      },
    });
  }

  //* Controlador para botón "Next"
  $("#next-btn").click(function () {
   
    loadResults(currentPage+1);
    console.log(page)
  });

    //* Deshabilitar el botón Prev si estamos en la primera página

    
    //* Controlador para botón Prev

  $("#prev-btn").click(function () {

    loadResults(currentPage-1);
  });

  //*Función para la búsqueda ONKEY PRESS------------------------------
  $("#search").keyup(function () {
    var name = $("#search").val();
    if (name == "") {
      $("#display").html("");
    } else {
      $.ajax({
        type: "POST",
        url: "Ajax.php",
        data: {
          users: name,
        },
        success: function (html) {
          $("#display").html(html).show();
          $(".card-container").addClass("card-container");
          $(".round").addClass("round");
        },
      });
    }
  });
  // Carga inicial de resultados
  loadResults(1);
});
