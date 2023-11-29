<?php 
    <?php 
    include ("../Controlador/ConexionBD.php");
   //llamamos al boton REGISTRAR//
   if(!empty($_POST["registrar"])){
       //Verificamos si los INPUTS estan vacios
       if(!empty($_POST["DNI"]) or !empty($_POST["Nombre_Completo"]) or !empty($_POST["Edad"]) 
       or !empty($_POST["Email"]) or !empty($_POST["Nombre_User"]) or !empty($_POST["Clave"])){ 
           //Asignamos el valor
           $DNI=$_POST["DNI"];
           $Nombre_Completo=$_POST["Nombre_Completo"];
           $Edad=$_POST["Edad"];
           $Email=$_POST["Email"];
           $Nombre_User=$_POST["Nombre_User"];
           $Clave=$_POST["Clave"];
           //Llamos a la apertura de la BD y ejecutamos la consulta
           $consulta=$ruta->query("INSERT INTO factura() VALUES ('$DNI','$Nombre_Completo','$Edad','$Email','$Nombre_User','$Clave')");
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
}           }
       }
   }
?>
?>