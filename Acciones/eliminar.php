<?php 
 if(isset($_POST["eliminar"])){
        $DNI = $_POST["DNI"];
        $consulta=$ruta->query("DELETE FROM usuario WHERE DNI='$DNI'");
        if($consulta==1){
            header("Location:../index.php");
        } 
        else {
            echo "La modificación no se ha realizado: ";
        }
}
?>