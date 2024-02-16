<?php
//* Archivo con configuración de DB
include "db.php";



//* Número de resultados por página
$resultsPerPage = 5;

//* Calcular el índice de inicio basado en el número de página recibido
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$startIndex = ($page - 1) * $resultsPerPage;

//* Verificar si se ha enviado un valor de búsqueda.
if (isset($_POST['users'])) {
    //* Asignar la variable searchTerm al input
    $searchTerm = $_POST['users'];

    // *Construir la consulta SQL para buscar en la tabla 'users-list' con los campos name, email y surnames
    $Query = "SELECT name, surname1, surname2, email, image FROM `users-list` WHERE name LIKE '%$searchTerm%' OR surname1 LIKE '%$searchTerm%'
    OR surname2 LIKE '%$searchTerm%'
    OR LOWER(email) LIKE '%$searchTerm%'LIMIT $startIndex, $resultsPerPage";

    //* Ejecutar la consulta SQL.
    $ExecQuery = mysqli_query($con, $Query);

    //* Crear UL, inyección de estilos
    echo '<ul style="display: flex; flex-wrap: wrap; gap:3vh;">';

    //* Iterar a través de los resultados de la consulta.
    while ($Result = mysqli_fetch_array($ExecQuery)) {
        ?>


        <div class="card-container">

            <img class="round" src="<?php echo $Result['image']; ?>" alt="user" />
            <h3>
                <?php echo $Result['name']; ?>
                <?php echo $Result['surname1']; ?>
                <?php echo $Result['surname2']; ?>
            </h3>
            <h6>
                <?php echo $Result['email']; ?>
            </h6>

        </div>



        <?php
    }

}

//*QUERY ADICIONAL PARA CALCULAR LAS ROWS TOTALES Y PAGINAR
$countQuery = "SELECT COUNT(*) AS totalRows FROM `users-list`";
$countResult = mysqli_query($con, $countQuery);
$row = mysqli_fetch_assoc($countResult);
$totalRows = $row['totalRows'];

$allRows = json_encode($totalRows);
//*Mandamos al lado del cliente la variable para capturar en el .js y paginar
echo "<script>var totalRows = $allRows;</script>";


