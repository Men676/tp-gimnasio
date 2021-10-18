<?php 
include_once("Connection.php");// incluir el archivo de conexion 

$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM rutina_cliente";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$rutinas=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

     <!--    Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
    <title></title>
    <style>
        table.dataTable thead {
            background: linear-gradient(to right, #0575E6, #00F260);
            color:white;
        }
    </style>  
      
  </head>
  <body>
    <h1 class="text-center">Full Energy</h1>
      
    <h3 class="text-center">Rutinas</h3>
    
    <div class="container">
       <div class="row">
           <div class="col-lg-12">
           <button id="btnNuevo" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">person_add</i></button><br>
            <table id="tablaRutinas" class="table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                    <th>Id_Rutina</th>
                    <th>Tipo</th>
                    <th>Dia</th>
                    <th>Ejercicio</th>
                    <th>Cantidad</th>
                    <th>Fecha</th>
                    <th>Id_Empleado</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <?php        
                        foreach($rutinas as $Rutina){
                            ?>
                    <tr>
                        <td><?php echo $Rutina['Id_Rutina']?></td>
                        <td><?php echo $Rutina['Tipo']?></td>
                        <td><?php echo $Rutina['Dia']?></td>
                        <td><?php echo $Rutina['Ejercicio']?></td>
                        <td><?php echo $Rutina['Cantidad']?></td>
                        <td><?php echo $Rutina['Fecha']?></td>
                        <td><?php echo $Rutina['Id_Empleado']?></td>
                        
                    </tr>
                    
                    <?php
                        }
                    ?>
                </tbody>
            </table>
           </div>
       </div> 
    </div>
   
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      
      
    <!--    Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
      
      
    <script>
      $(document).ready(function(){
         $('#tablaRutinas').DataTable(); 
      });
    </script>
      
      
</body>
</html>
