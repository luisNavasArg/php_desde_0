<?php
session_start();
include("head.php");
if (isset($_SESSION["email"])) {
    ?>
    <div class="card" style="width: 18rem;">
                        <img src="<?=$_SESSION['imagen']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bienvenido <?=$_SESSION["userName"]?></h5>
                            
                        </div>
                    </div>
                    <?php
}else{
    header("Location:/clases/crud_turnos");
}
?>


</body>
</html>