<?php
function get_data($database,$table){
    include("conexion.php");
    $mysqli = conectarMysql($database);
    $sql="SELECT * FROM $table";
    $result=$mysqli->query($sql);
    $mysqli->close();
    return $result;
}
function get_one_data_by_email($database,$table,$email){

    include("conexion.php");
    $mysqli=conectarMysql($database);
    $sql="SELECT * FROM $table WHERE email='$email'";
    $result=$mysqli->query($sql);
    $mysqli->close();
    return $result;

}
function change_state($database,$table,$value,$id){
    include("conexion.php");
    $mysqli=conectarMysql($database);
    $sql="UPDATE $table SET `estado`='$value' WHERE `id`=$id";
    $result=$mysqli->query($sql);
    $mysqli->close();
    return $result;
}
?>