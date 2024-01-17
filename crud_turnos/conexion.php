<?php
$puerto=3306;
$usuario="root";
$password="";
$host="localhost";
$database="crud_turnos";
$mysqli=new mysqli($host,$usuario,$password,$database,$puerto);
if ($mysqli->connect_error) {
    echo "Fallo al conectar a Mysql: (".$mysqli->connect_error.")".$mysqli->connect_error;
}else{
    echo "Estamos conectados";
}

?>