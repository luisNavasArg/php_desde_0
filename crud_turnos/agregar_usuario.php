<?php

include("head.php");
?>

<div class="container bg-success bg-opacity-25">
  <div class="row d-flex justify-content-center m-4">
    <div class="col-6">
      <h2 class="text-center">Agregar Usuario</h2>
      <form action='agregar_usuario.php' method='post'>
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" name="nombre" class="form-control" id="nombre" required>
        </div>
        <div class="mb-3">
          <label for="apellido" class="form-label">Apellido</label>
          <input type="text" name="apellido" class="form-control" id="apellido" required>
        </div>
        <div class="mb-3">
          <label for="imagen" class="form-label">Imagen</label>
          <input class="form-control" type="text" id="imagen" name="imagen" required>
        </div>
        <div class="mb-3">
          <label for="telefono" class="form-label">Telefono</label>
          <input type="text" name="telefono" class="form-control" id="telefono" required>
        </div>
        <div class="mb-3 ">
          <label for="email" class="form-label">Email</label>
          <input type='text' class="form-control" name='email' id='email' required>
        </div>
        <div class="mb-3 ">
          <label for="password" class="form-label">Contraseña</label>
          <input type='password' class="form-control" name='password' id='password' required>
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button> 
      </form>
    </div>
  </div>
</div>

<?php
//Metodo Agregar, Create, post
if ($_POST) {
    include("conexion.php");
$database="crud_usuarios";
$mysqli = conectarMysql($database);
//print_r($mysqli);
if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['imagen']) && isset($_POST['telefono']) && isset($_POST['email'])) {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $imagen = $_POST['imagen'];
  $telefono = $_POST['telefono'];
  $email = $_POST['email'];
  $password=hash('sha256',$_POST['password']);
}
//print_r ( $_POST );
$sql= "INSERT INTO usuario(nombre, apellido, imagen, telefono, email,password)
    VALUES ('$nombre','$apellido','$imagen','$telefono','$email','$password')";

  if ($mysqli->connect_error) {
?>
    <script>
      window.onload = () => {
        Swal.fire({
          title: "No se pudo agregar",
          text: "",
          icon: "error"
        });
      }
    </script>
  <?php
  }

  if ($mysqli->query($sql) === TRUE) {
  ?>
    <script>
      window.onload = () => {
        Swal.fire({
          title: "Se creo el usuario",
          text: "",
          icon: "success"
        });
      }
    </script>
  <?php
    $mysqli->close();
  } else {
  ?>
    <script>
      window.onload = () => {
        Swal.fire({
          title: "No se pudo agregar, intenta mas tarde",
          text: "",
          icon: "error"
        });
      }
    </script>
<?php
  }

}


?>