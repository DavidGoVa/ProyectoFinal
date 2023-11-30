<?php



try {
    $conn = mysqli_connect('sql213.infinityfree.com', 'if0_35512621', 'elCalo3Kz7', 'if0_35512621_ProyectoFinal');

    if (!$conn) {
        throw new Exception("Error en la conexión: ".mysqli_connect_error());
    }

    // Resto del código que depende de la conexión a la base de datos

} catch (Exception $e) {
    die("Error: ".$e->getMessage());
}
?>
