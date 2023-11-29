<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura Digital</title>
    <link rel="stylesheet" href="../../Estilos/style3.css">
    <link rel="icon" href="../../Media/Logos/logo software.png" type="image/x-icon">
</head>
<body>
    <?php 
          include "../../Controlador/ConexionBD.php";
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
            <img src="../../Media/Logos/logo software.png" alt="logo" class="logo">
            <div class="menu">
            <li><a href="../../index.php">Cerrar Sesión</a></li>
            <li>
              <a href="#">Categoria ▾ </a>
              <ul class="micro_menu">
               <li><a href="../Accion.php">Acción</a></li>
               <li><a href="../2D.php">2D</a></li>
               <li><a href="../Terror.php">Terror</a></li>
               <li><a href="../MundoLibre.php">Mundo Libre</a></li>
              </ul>
            </li>
            <li><a href="#">Sobre Nosotros</a></li>
            <li>
                <a href="#" class="name"><?php echo "$Nombre_User" ?> ▾ </a>
                <ul class="micro_menu">
                 <li><a href="../Modificar.php">Modificar</a></li>
                 <li><a href="../Eliminar.php">Eliminar</a></li>
                </ul>
              </li>

           </div>
         </ul>
    </header>
    <main>
        <div class="contenedor">
            <div class="fondo ">
             <h3 class="titulo">Factura Digital</h3>
                 <table>
                    <tr>
                        <th>Nombre del Juego</th>
                        <th>Precio</th>
                    </tr>
                    <tr>
                        <td>Detroid become human</td>
                        <td>$15000</td>
                    </tr>
                </table>
                <h1 class="mensaje">"IMPORTANTE: Para realizar la compra, usted debe pagar con QR. Una vez enviado, toque una sola vez el boton para verificar."                </h1>
                <img src="../../Media/qr.PNG" alt="" class="qr">
                <input type="submit" value="VERIFICAR" name="boton" class="boton">
                 <a href="../paginasjuegos/detroit.php" class="boton">Volver</a>
            </div>
        </div>
    </main>
    <footer>
        <!-- copy es @ -->
         <p>&copy; 2023 Game Over | Todos los derechos reservados</p>
    </footer>
<!-- estilo de letra -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mooli&family=Nova+Square&family=Roboto&display=swap" rel="stylesheet">
</body>
</html>