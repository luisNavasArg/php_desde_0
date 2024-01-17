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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
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
     echo $es_estudiante?
     "<h4 class='bg-success'><br>Hola estudiante</h4>":
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
      <h1>Manipulación de cadenas y arrays</h1>
     <h2>Clase 2 </h2>
     <?php
     $saludo="Hola, ";
     $nombre="Luis Navas";
     $mensaje=$saludo.$nombre;
     ?>
     <h4><?=$mensaje?></h4>
     <?php $longitud=strlen($mensaje)?>
     <p>La longitud <?=$longitud?></p>

     <h4>Sub cadenas</h4>
     <?php
     $frase = "Bienvenidos a nuestra web";
     $buscar="sol";
     $pos=strpos($frase,$buscar);
     
     if ($pos) {
      echo "<p>Nuestra frase buscada comienza en la posición :".$pos."</p>";
     }else{
      echo "<br><p>La frase buscada no se encontró";
     }
     if (22 < strlen($frase)) {
      ?>
      <p><?= $frase[22]?></p>
      <?php
     }
     $fecha="2024-01-25";

     ?>
     <p>La longitud de una fechas : <?=strlen($fecha)?></p>
     <?php
     if(strlen($fecha)===10){
      echo "Es valida esta fecha ".$fecha;
     }
     $arra1 = str_split($frase);
     $arra2 = str_split($frase,13);
     echo "<br>";
     print_r($arra1);
     echo "<br>";
     print_r($arra2);
     echo "<br>";
     //Buscar en una cadena si existe la frase y si es identica
     function buscar_frase($frase_a_buscar,$frase){
      // return  $frase_a_buscar." ".$frase;
      // return strlen($frase_a_buscar)." ".strlen($frase);
      if (strlen($frase_a_buscar) < strlen($frase)) {
         if (strpos($frase,$frase_a_buscar)) {
            return $frase_a_buscar;
         }else{
            return "La frase no se encuentra";
         }
      }else{
         return "la frase a buscar es menor que la cadena de texto";
      }

     }
     $palabra=buscar_frase("día","Hola buen día");
     echo $palabra;echo "<br>";
     function dia_laborables($dia,$no_es_feriado,$hora){
      // if(($dia=="Lunes") || ($dia=="Martes")||($dia=="Miércoles")||
      // ($dia=="Jueves")||($dia=="Viernes")){
      //    if ($no_es_feriado) {
      //       return true;
      //    }else{
      //       return false;
      //    }         
      // }else{
         
         
      //    return (false);
      // }
     switch ($dia) {
      case 'Lunes':
         if ($no_es_feriado) {
            if (($hora<"15:00")&&($hora>="10:00")) {
               return array("msg"=>"Es laborable esta abierto");
            }else{
               return array("msg"=>"Es laborable pero esta fuera de horario");
            }
                  
               }else{
                  return array("msg"=>"Es feriado");
               } 
         break;
         case 'Martes':
            if ($no_es_feriado) {
                     return true;
                  }else{
                     return false;
                  } 
            break;
            case 'Miércoles':
               if ($no_es_feriado) {
                        return true;
                     }else{
                        return false;
                     } 
               break;
               case 'Jueves':
                  if ($no_es_feriado) {
                           return true;
                        }else{
                           return false;
                        } 
                  break;
                  case 'Viernes':
                     if ($no_es_feriado) {
                              return true;
                           }else{
                              return false;
                           } 
                     break;
      default:
         return false;
         break;
     }
     }
     $respuesta= dia_laborables("Lunes",true,"19:00");
     echo $respuesta["msg"];
     

     // El resultado de la expresión (true && false) es asignado a $g
// Actúa como: ($g = (true && false))
$g = true && false;

// La constante true es asignada a $h antes de que suceda la operación "and"
// Actúa como: (($h = true) and false)
$h = true and false;

// var_dump($h);

     ?> 
   <h3>Seguimos con los arrays</h3>
   <h4>Array índexado</h4>
   <?php
   $frutas=array("Limón","Frutilla","Cereza");
   echo $frutas[0]."<br>";
   echo array_search("Cereza",$frutas);
   array_push($frutas,"Banana");
   if (in_array('Banana',$frutas)) {
      echo "<br>existe la Banana";
   }else{
      echo "<br>No existe la Banana";
   }

   ?>
   <h4>Array asociativo</h4>
   <p>Para agregar un nuevo valor al array no se usa el push</p>
   <?php
      $edades=array("Juan"=>34,"Fer"=>32, "Luis"=>51);
      echo "<br> La edad de Juan es: ".$edades["Juan"]."<br>";
      $edades["Ana"]=14;
      $edades["Ana"]=30;
      print_r($edades);
      echo "<br>";
      // var_dump($edades);
      array_push($edades,"Hola este es un string");
      array_push($edades,"Hola este es otro string");
      array_push($edades,"Hola este es otro más string");
      var_dump($edades);
      echo "<br>";
      echo $edades[0];
      echo "<br>";
      echo $edades[1];
      echo $edades[2];
      //parámetros desde, cant, valor
      $a=Array_fill(3,5,"Banana");
      print_r($a);
      $data=array("horarios"=>[
         "dia"=>1,
         "horario"=>["desde"=>'10:00',"hasta"=>'20:00' ]
      ],
      "horariosEspeciales"=>[
         array("fecha"=>"2023-12-24","horario"=>["desde"=>'10:00',"hasta"=>'20:00'])
      ]
      );
      echo "<br>";
      $data["horarios"]["horario"]=[array("desde"=>'11:00',"hasta"=>'20:00'),array("desde"=>'15:00',"hasta"=>'20:00')];
      print_r($data["horarios"]["horario"]);
      echo "<br>";
      $data["horarios"]=[array("dia"=>1,
      "horario"=>["desde"=>'10:00',"hasta"=>'20:00' ]),
      array("dia"=>2,
      "horario"=>["desde"=>'10:00',"hasta"=>'23:00' ])
         
   ];
   echo "<br>";
   $data["horarios"]["horarios"]=["desde"=>'10:00',"hasta"=>'20:00',"desde"=>'8:00',"hasta"=>'20:00' ];
   print_r($data['horarios']);

   ?>
</body>
</html>