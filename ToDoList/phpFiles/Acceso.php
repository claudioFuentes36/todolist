<?
    include 'c://xampp/htdocs/administracion.php';
    $query="SELECT * FROM tarea";
    $conexion = $conex;
    $resultado = $conexion->query($query);
    $numfilas = $resultado->num_row;
    echo "el numero de filas es ".$numfilas;
?>
