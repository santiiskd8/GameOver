<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link rel="stylesheet" href="../Estilos/style9.css">
    <link rel="icon" href="logo software.png" type="image/x-icon">
</head>
<body>
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
    <header>
        <ul>
            <a href="inicio.php"><img src="../Media/Logos/logo software.png" alt="logo" class="logo"></a>
            <div class="menu">
            <li>
              <a href="#">Categoria ▾ </a>
              <ul class="micro_menu">
               <li><a href="Accion.php">Accion</a></li>
               <li><a href="2D.php">2D</a></li>
               <li><a href="Terror.php">Terror</a></li>
               <li><a href="MundoLibre.php">Mundo libre</a></li>
              </ul>
            </li>
            <li><a href="AcercaDeNosotros.php">Sobre Nosotros</a></li>
        <li>
            <a href="#" class="name"><?php echo "$Nombre_User" ?>▾ </a>
            <ul class="micro_menu">
            <li><a href="Eliminar.php">Eliminar</a></li>
            </ul>
        </li>
           </div>
         </ul>
    </header>
    <main>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <div class="contenedor">
            
            <div class="fondo ">
            
             <h3 class="titulo">Modificar Cuenta</h3>
              <form action="" method="post" name="form">
                 <label for="DNI">DNI:</label>
                 <input type="number" name="DNI" id="" placeholder="Cambiar DNI">
     
                 <label for="Nombre_Completo">Nombre Completo:</label>
                 <input type="text" name="Nombre_Completo" id="" placeholder="Cambiar Nombre Completo">

                 <label for="Edad">Edad:</label>
                 <input type="number" name="Edad" id="" placeholder="Cambiar Edad">
     
                 <label for="Email">Cambiar Email:</label>
                 <input type="email" name="Email" id="" placeholder="Cambiar Email">
     
                 <label for="Nombre_User">Cambiar Nombre User:</label>
                 <input type="text" name="Nombre_User" id="" placeholder="Cambiar Usuario">

                 <label for="Clave">Cambiar contraseña:</label>
                 <input type="password" name="Clave" id="" placeholder="Cambiar Contraseña">
                
                 <input type="submit" value="Modificar" name="modificar" class="btni boton-1">
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