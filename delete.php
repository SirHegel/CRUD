//delete.php
<?php
require 'db.php';

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $delete_query = "DELETE FROM trabajadores WHERE id = $delete_id";

    if (mysqli_query($conn, $delete_query)) {
        header("Location: index.php?mensaje=¡Trabajador Eliminado Exitosamente!");
    } else {
        echo "Error al eliminar el Empleado: " . mysqli_error($conn);
    }
}
?>