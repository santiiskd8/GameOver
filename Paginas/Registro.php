<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="icon" href="../Media/Logos/logo software.png" type="image/x-icon">
    <link rel="stylesheet" href="../Estilos/style7.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php 
        include ("../Controlador/ConexionBD.php");
        include ("../Acciones/registro.php");
    ?>
    <header>
        <ul>
            <a href="../index.php"><img src="../Media/Logos/logo software.png" alt="logo" class="logo"></a>
            <div class="menu">
            <li><a href="../Paginas_Error/AcercaDeNosotros.php">Sobre Nosotros</a></li>
           </div>
         </ul>
    </header>
    <main>
        <div class="contenedor">
            <div class="fondo ">
             <h3 class="titulo">Crear Cuenta</h3>
              <form action="" method="post" name="form">
                 <label for="DNI">DNI:</label>
                 <input type="number" name="DNI" id="" placeholder="Ingrese DNI">
     
                 <label for="Nombre_Completo">Nombre Completo:</label>
                 <input type="text" name="Nombre_Completo" id="" placeholder="Ingrese nombre">
     
                 <label for="Edad">Edad:</label>
                 <input type="number" name="Edad" id="" placeholder="Ingrese Edad">
     
                 <label for="Email">Email:</label>
                 <input type="email" name="Email" id="" placeholder="Ingrese Edad">

                 <label for="Nombre_User">Nombre de Usuario:</label>
                 <input type="text" name="Nombre_User" id="" placeholder="Ingrese Usuario">

                 <label for="Clave">Contraseña:</label>
                 <input type="password" name="Clave" id="" placeholder="Ingrese Contraseña">
                
                 <input type="submit" value="Registrar" name="registrar" class="btni boton-1">
                 <a href="iniciosesion.php" class="boton">Volver</a>
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