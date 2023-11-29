<!DOCTYPE html>
<html>
<head>
  <title>Accion</title>
  <link rel="icon" href="logo software.png" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="../Estilos/style12.css">
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
    <ul>
        <a href="../inicio.php"><img src="../Media/Logos/logo software.png" alt="logo" class="logo"></a>
        <div class="menu">
        <li>
        <a href="#">Categoria ▾ </a>
        <ul class="micro_menu">
        <li><a href="#">Terror</a></li>
        <li><a href="#">2D</a></li>
        <li><a href="#">Mundo libre</a></li>
        </ul>
        </li>
        <li><a href="#">Sobre Nosotros</a></li>
        <li>
            <a href="#" class="name"><?php echo "$Nombre_User" ?> ▾ </a>
            <ul class="micro_menu">
            <li><a href="#">Modificar</a></li>
            <li><a href="#">Eliminar</a></li>
            </ul>
        </li>
    </div>
    </ul>
    <header>
    <h1 class="titulo"> Accion</h1>
<div class="cuadro grid-container">
  <div class="contenedor">
    <div class="informacion" id="">
      <img class="logos" src="../Media/Logos/lt.png" alt="" />
      <p>
        Sumérgete en una historia oscura y extravagante que te obligará a
        enfrentarte a tus miedos infantiles Ayuda a Six a escapar
      </p>
      <a class="boton" href="dirrecion">Ver mas</a>
    </div>
    <div class="imagen-contenedor" id="">
      <img
        src="https://i.pinimg.com/564x/81/93/05/819305fbecda003a5a89ab1df939e8de.jpg"
        id="imagen"
        alt="Descripción de la imagen"
      />
    </div>
  </div>

  <div class="contenedor">
    <div class="informacion" id="">
      <img class="logos" src="../Media/Logos/gminecraft-logo.png" alt="" />
      <p>
        un juego de aventuras desarrollado por BlueTwelve Studio y
        publicado por Annapurna Interactive.fue lanzado el 19 de julio de
        2022
      </p>
      <a class="boton" href="dirrecion">Ver mas</a>
    </div>
    <div class="imagen-contenedor" id="">
      <img
        src="../Media/Minecraft.jfif"
        id="imagen"
        alt="Descripción de la imagen"
      />
    </div>
  </div>
  <div class="contenedor">
    <div class="informacion" id="">
      <img class="logos" src="../Media/Logos/miles morales.png" alt="" />
      <p>
        un juego de aventuras desarrollado por BlueTwelve Studio y
        publicado por Annapurna Interactive.fue lanzado el 19 de julio de
        2022
      </p>
      <a class="boton" href="dirrecion">Ver mas</a>
    </div>
    <div class="imagen-contenedor" id="">
      <img
        src="../Media/miles morales.jfif"
        id="imagen"
        alt="Descripción de la imagen"
      />
    </div>
  </div>
  <div class="contenedor">
    <div class="informacion" id="">
      <img class="logos" src="../Media/Logos/detroid.png" alt="" />
      <p>
        un juego de aventuras desarrollado por BlueTwelve Studio y
        publicado por Annapurna Interactive.fue lanzado el 19 de julio de
        2022
      </p>
      <a class="boton" href="paginasjuegos/detroit.php">Ver mas</a>
    </div>
    <div class="imagen-contenedor" id="">
      <img
        src="../Media/detroid.jpg"
        id="imagen"
        alt="Descripción de la imagen"
      />
    </div>
  </div>

</div>
    </header>
    <main>
        
    </main>
    <footer>
<!-- copy es @ -->
<p>&copy; 2023 Game Over | Todos los derechos reservados</p>
    </footer>
    <script src="../jss/js.js"></script>
</body>
</html>