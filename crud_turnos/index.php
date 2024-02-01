<?php
session_start();
include("head.php");

?>


    


<?php

if ($_POST) {
    
    if (isset($_POST['email'])&& isset($_POST['password'])) {
        $email=$_POST['email'];
        $password=hash("sha256",$_POST['password']);
        // echo "<br>".$email."<br> ".$password;
        include("models.php");
        $result = get_one_data_by_email("crud_usuarios","usuario",$email);
        echo "<br>";
        if($result->num_rows>0){
            while ($row=$result->fetch_assoc()) {
                if ($row['password']===$password) {
                    $_SESSION["userName"]=$row['nombre'];
                    $_SESSION["email"]=$row['email'];
                    $_SESSION["apellido"]=$row['apellido'];
                    $_SESSION["id"]=$row['id'];
                    $_SESSION['imagen']=$row['imagen'];

                    ?>
                    <div class="card" style="width: 18rem;">
                        <img src="<?=$_SESSION['imagen']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bienvenido <?=$_SESSION["userName"]?></h5>
                            
                        </div>
                    </div>
                   
                        
                    
                    <?php
                }else{
                    echo "Usuario o contraseña incorrectos!";
                }
            }
        }else{
            echo "Usuario o contraseña incorrectos!";
        }

    }
    
}else{
    ?>
    <div class="container bg-success bg-opacity-25">
  <div class="row d-flex justify-content-center m-4">
    <div class="col-6">
      <h2 class="text-center">Login</h2>

      <form action="/clases/crud_turnos/index.php" method="POST">
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
      </form>

    </div>

  </div>
</div>
<?php
}

?>
</body>
</html>


