<?php
$nombre="Luis";
$apellido="Navas";
$edad=51;
$es_estudiante=true;
$altura=78.5;
$dia="Domingo";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Clase 1</h1>
    <h2>Hola <?php
     echo $nombre." ".$apellido."<br/>";
     echo "Altura ".$altura."<br/>";
     echo "Edad ".$edad."<br/>";
    if ($es_estudiante) {
        echo "Hola ".$nombre." ".$apellido."<br/>";
        echo "Bienvenido a la clase de hoy";
    }else{
        echo "Hola Profesor ".$nombre." ".$apellido."<br/>";
        echo "Bienvenido a la clase de hoy";
    }
    ?><h3>Condicionales anidados</h3>
    <?php
     echo "<br>";

     if ($edad < 18) {
        echo "Eres menor de edad no puedes entrar<br>";
     }elseif ($edad >= 18 && $edad < 60) {
        echo "Eres adulto<br>";
     }else{
        echo "Eres adulto mayor<br>";
     }

     if ($dia=="Lunes") {
        echo "No quiero levantarme a trabajar<br>";
     }elseif ($dia=="Viernes") {
        echo "Quiero levantarme a trabajar hoy es el último día de la semana<br>";
     }else{
        echo "No es lunes ni viernes";
     }
     ?><h3>Condicional ternario</h3>
     <?php
     echo $es_estudiante?"<h4 class='bg-success'><br>Hola estudiante</h4>":
                        "<h4 class='bg-danger'><br>Hola Profesor</h4>";
    
                        ?><h3>Bucles</h3>
                        <?php
    echo "<br> For";
     for ($i=5; $i > 0; $i--) { 
       echo "<br> Iteración N° ".$i;
     }

     echo "<p><br>while</p> <br>";
     $a=11;
     while ($a <= 10) {
        echo "<br> Iteración N° ".$a;
        $a++;
     }

     echo "<p><br>do while</p> <br>";

     $contador = 4;
     do {
        echo "Iteración ".$contador."<br>";
        //incremento
        $contador++;
     } while ($contador <3);
     ?></h2>
</body>
</html>