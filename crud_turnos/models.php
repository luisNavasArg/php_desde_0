<?php
function get_data(){
    include("conexion.php");
    $sql="SELECT * FROM turnos";
    $result=$mysqli->query($sql);
    $mysqli->close();
    return $result;
}
?>