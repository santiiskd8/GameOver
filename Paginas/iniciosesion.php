<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>
    <link rel="icon" href="../Media/Logos/logo software.png" type="image/x-icon">
    <link rel="stylesheet" href="../Estilos/style11.css">
</head>
<body>
    <header>
        <ul>
            <img src="../Media/Logos/logo software.png" alt="logo" class="logo">
            <div class="menu">
            <li><a href="../Paginas_Error/AcercaDeNosotros.php">Sobre Nosotros</a></li>
           </div>
         </ul>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php 
    include "../Controlador/ConexionBD.php";
    include "../Acciones/login.php";
    ?>
             <div class="contenedor">
            <div class="fondo ">
             <h3 class="titulo">Crear Cuenta</h3>
              <form action="" method="post" name="form">
                 <label for="Nombre_User">Usuario:</label>
                 <input type="text" name="Nombre_User" id="" placeholder="Ingrese Su Usuario ">
     
                 <label for="Clave">Clave:</label>
                 <input type="password" name="Clave" id="" placeholder="Ingrese Su Clave">
                     
                 <input type="submit" value="Ingresar" name="ingresar" class="btni boton-1">
                 
                 <a href="Registro.php" class="boton">Registrarse</a>
                 <a href="iniciosesion.php" class="boton1">Volver</a>
              </form>
            </div>
        </div>
        <footer>
    <!-- copy es @ -->
    <p>&copy; 2023 Game Over | Todos los derechos reservados</p>
    </footer>
</body>
</html>