<?php
include("head.php");
?>
<div class="container bg-success bg-opacity-25">
  <div class="row d-flex justify-content-center m-4">
    <div class="col-6">
      <h2 class="text-center">Agregar turno</h2>
    <form action='agregar_turno.php' method='post'>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Fecha</label>
        <input type="date" name="fecha" class="form-control" id="exampleInputEmail1" 
        aria-describedby="emailHelp" required>
      </div>
      <div class="mb-3">
        <label for="hora" class="form-label">Hora</label>
        <input type='time' name='hora' class="form-control" id="hora" required>
      </div>
      <div class="mb-3 ">
        <label for="email" class="form-label">Email</label>
        <input type='email' class="form-control" name='email' id='email' required>
      </div>
      <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
    </div>
  </div>
</div>
<?php
    include("conexion.php");
    
    if (isset($_POST['fecha']) && isset($_POST['hora']) && isset($_POST['email'])) {
        $fecha=$_POST['fecha'];
        $hora=$_POST['hora'];
        $email=$_POST['email'];
        $estado="pendiente";
        // echo "fecha : ".$fecha." Hora: ".$hora." email: ".$email;
        $sql="INSERT INTO `turnos`(`fecha`, `hora`, `email`, `estado`) VALUES 
        ('$fecha','$hora','$email','$estado')";
        if ($mysqli->connect_error) {
          ?>
          <script>
                window.onload=()=>{
                    Swal.fire({
                      title:"No se pudo agregar el turno intenta más tarde!",
                      text:"",
                      icon:"error"
                    });
                }
            </script>
          <?php
        }
        if ($mysqli->query($sql)===TRUE) {
            ?>
            <script>
                window.onload=()=>{
                    Swal.fire({
                      title:"Se añadió el turno",
                      text:"",
                      icon:"success"
                    });
                }
            </script>
            <?php
            $mysqli->close();
        }else{
          ?>
          <script>
                window.onload=()=>{
                    Swal.fire({
                      title:"No se pudo agregar el turno intenta más tarde!",
                      text:"",
                      icon:"error"
                    });
                }
            </script>
          <?php
        }
        
    }
    
?>
