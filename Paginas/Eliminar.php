<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Cuenta</title>
    <link rel="stylesheet" href="../Estilos/style10.css">
    <link rel="icon" href="logo software.png" type="image/x-icon">
</head>
<body>
    <header>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <?php 
        include ("../Controlador/ConexionBD.php");
        include ("../Acciones/modificar.php");
        include "../Controlador/ConexionBD.php";
        $sql = "SELECT Nombre_User FROM usuario";
        $result = mysqli_query($ruta, $sql);
        if ($result){
            $row = mysqli_fetch_assoc($result);
            $Nombre_User = $row['Nombre_User'];
            mysqli_free_result($result);
        }
    ?>
        <ul>
            <a href="inicio.php"><img src="../Media/Logos/logo software.png" alt="logo" class="logo"></a>
            <div class="menu">
            <li>
              <a href="#">Categoria ▾ </a>
              <ul class="micro_menu">
               <li><a href="#">Acción</a></li>
               <li><a href="#">2D</a></li>
               <li><a href="#">Terror</a></li>
               <li><a href="#">Mundo libre</a></li>
              </ul>
            </li>
            <li><a href="AcercaDeNosotros.php">Sobre Nosotros</a></li>
        <li>
            <a href="#" class="name"><?php echo "$Nombre_User" ?> ▾ </a>
            <ul class="micro_menu">
            <li><a href="Modificar.php">Modificar</a></li>
            </ul>
        </li>
           </div>
         </ul>
    </header>
    <main>
        <?php 
       include ("../Controlador/ConexionBD.php");
       include ("../Acciones/eliminar.php");   
        ?>
        <div class="contenedor">
            <div class="fondo ">
             <h3 class="titulo">Eliminar Cuenta</h3>
              <form action="" method="post" name="form">
                 <label for="DNI">DNI:</label>
                 <input type="number" name="DNI" id="" placeholder="Ingrese DNI para eliminar cuenta">
                 <input type="submit" value="eliminar" name="eliminar" class="btni boton-1">
                 <a href="inicio.php" class="boton">Volver</a>
              </form>
            </div>
        </div>
    </main>
    <footer>
        <!-- copy es @ -->
         <p>&copy; 2023 Game Over | Todos los derechos reservados</p>
    </footer>
</body>
</html>