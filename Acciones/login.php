<?php 
    include ("../Controlador/ConexionBD.php");
    if(!empty($_POST["ingresar"]))
    {
        if(!empty($_POST["Nombre_User"] and !empty($_POST["Clave"]))){
            $Nombre_User=$_POST["Nombre_User"];
            $Clave=$_POST["Clave"];
            $consulta=$ruta->query("SELECT * FROM usuario WHERE Nombre_User='$Nombre_User' AND Clave='$Clave'");
            if($verificar=$consulta->fetch_object()){
                header("Location:../Paginas/inicio.php");
            }
        }
        echo "<script>
        Swal.fire({
            title: 'Error',
            text: '',
            icon: 'error',
            confirmButtonText: 'Aceptar'
        });
      </script>";
    }
?>