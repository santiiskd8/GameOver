<?php
    if(isset($_POST["modificar"])){
        $DNI=$_POST["DNI"];
        $Nombre_Completo=$_POST["Nombre_Completo"];  
        $Edad=$_POST["Edad"];
        $Email=$_POST["Email"];
        $Nombre_User=$_POST["Nombre_User"];
        $Clave=$_POST["Clave"];
        $consulta=$ruta->query("UPDATE usuario SET  Nombre_Completo='$Nombre_Completo',Edad='$Edad',Email='$Email',Nombre_User='$Nombre_User',Clave='$Clave' WHERE DNI='$DNI'");
        if($consulta==1){
            echo "<script>
            Swal.fire({
                title: 'Éxito',
                text: 'El formulario ha sido procesado correctamente.',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            });
          </script>";
        }
        else{
         echo "<script>
         Swal.fire({
             title: 'Error',
             text: '',
            icon: 'error',
             confirmButtonText: 'Aceptar'
         });
     </script>";
        }
    }
?>