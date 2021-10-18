<?php
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];

    session_start();
    $_SESSION['Usuario']=$usuario;

    $Conexion= mysqli_connect("localhost","root","","gimnasio");

    $consulta="SELECT*FROM usuarios where Usuario='$usuario' and contraseña='$contraseña'";
    $resultado=mysqli_query($Conexion,$consulta);

    $filas=mysqli_fetch_array($resultado);

    if($filas['id_cargo']==1){//si es administrador
        header("location:Menu2.php");
    }
    else
    if($filas['id_cargo']==2){//empleados
        header("location:Menuempleados.php");
    }
    else{
        ?>
        <?php
        include("Login3.php");
        ?>
        <h1 class="bad"> ERROR EN LA AUTENTICACION</h1>
        <?php  
    }
    mysqli_free_result($resultado);
    mysqli_close($Conexion);

    