<?php
 include('models.php');
$result =change_state("crud_turnos","turnos",$_GET["value"],$_GET["id"]);
print_r($result);
?>