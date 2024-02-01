<?php
    include("models.php");
    include("head.php");
    $result=get_data();
?>
<div class="container bg-success bg-opacity-25">
    <div class="row d-flex justify-content-center m-4">
        <h2>Turnos</h2>
        <div class="col-6">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Fecha</th>
                <th scope="col">Hora</th>
                <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
    
            <?php
            while ($row=$result->fetch_assoc()) {
                if ($row['estado']==="pendiente") {
                    ?>
                    <tr>
                        <td><?=$row['fecha']?></td>
                        <td><?=$row['hora']?></td>
                        <td><?=$row['email']?></td>
                    </tr>
                    <?php
                }
            }
            ?>
            
        </tbody>
        </table>
        </div>
    </div>
</div>
