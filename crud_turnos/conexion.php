<?php
function conectarMysql($database){
    $puerto=3306;
    $usuario="root";
    $password="";
    $host="localhost";
    $mysqli=new mysqli($host,$usuario,$password,$database,$puerto);
    return $mysqli;
}


?>