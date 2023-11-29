<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="../Estilos/style5.css">
</head>
<body>
    
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
        
        <li>
        <?php 
    include "../Controlador/ConexionBD.php";
    $sql = "SELECT Nombre_User FROM usuario";
    $result = mysqli_query($ruta, $sql);
    if ($result){
        $row = mysqli_fetch_assoc($result);
        $Nombre_User = $row['Nombre_User'];
        mysqli_free_result($result);
    }
    ?>
          <a href="#"><?php echo "$Nombre_User" ?>▾ </a>
          <ul class="micro_menu">
           <li><a href="Modificar.php">Modificar</a></li>
           <li><a href="Eliminar.php">Eliminar</a></li>
          </ul>
        </li>
        <li><a href="AcercaDeNosotros.php">Acerca De Nosotros</a></li>
        <li><a href="../index.php ">Cerrar Sesión</a></li>
       </div>
     </ul>
    <header>
<!-- animacion -->
        <select name="" id="imagen-principal"></select>
            <!--GRID: se utiliza  para subdividir
                la pantalla en fragmentos permite que el programador,
            es decir,peña puede adaptar intictos elementos segun su
            criterio,ejemplo que una imagen ocupe la mitad de la pantalla
            o dividir o indicarla -->
            <!--sector general de las imagenes "contenedoras"-->
            <selection class="galeria-fotos">
            <!--sudivicion de cada imagen-->
            <!--el ig es como id pero de otra forma-->
            <figure class="ig ig--img1">
            </figure>
            <figure class="ig ig--img2">
             </figure>
            <figure class="ig ig--img3">
             </figure>
            <figure class="ig ig--img4">
            </figure>
            <!--el alt va para que te diga el error y te salta por ejemplo la imagen tal de alt...es eror-->
            </selection>
<!-- fin de la animacion -->
<div class="titulo"><h1>DESTACADO EN GAME OVER</h1></div>
      <div class="cuadro grid-container">
        <div class="contenedor">
          <div class="informacion" id="">
            <img class="logos" src="../Media/Logos/logito.png" alt="" />
            <p>
              Need for Speed Heat es un videojuego de carreras desarrollado por
              Ghost Games y publicado por Electronic Arts para Microsoft
              Windows,
            </p>
          </div>
          <div class="imagen-contenedor" id="">
            <img
              src="https://i.pinimg.com/564x/50/07/5c/50075c8411fc3abd34f1382fe1e4959d.jpg"
              id="imagen"
              class="Descripción de la imagen"
              class="productos"
            />
          </div>
        </div>
        <div class="contenedor">
          <div class="informacion" id="">
            <img class="logos" src="../Media/logo stray.png" alt="" />
            <p>
              un juego de aventuras desarrollado por BlueTwelve Studio y
              publicado por Annapurna Interactive.fue lanzado el 19 de julio de
              2022
            </p>
          </div>
          <div class="imagen-contenedor" id="">
            <img
              src="https://i.pinimg.com/564x/37/a8/23/37a823eaa1611bf2bb5913647f377617.jpg"
              id="imagen"
              alt="Descripción de la imagen"
            />
          </div>
        </div>
        <div class="contenedor">
          <div class="informacion" id="">
            <img class="logos" src="../Media/Logos/lt.png" alt="" />
            <p>
              Sumérgete en una historia oscura y extravagante que te obligará a
              enfrentarte a tus miedos infantiles Ayuda a Six a escapar
            </p>
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
            <img class="logos" src="../Media/Logos/bendy.png" alt="" />
            <p>
              Horror de supervivencia en primera persona y la tan esperada
              secuela de Bendy and the Ink Machine
            </p>
          </div>
          <div class="imagen-contenedor" id="">
            <img
              src="../Media/bendy.jpg"
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
          </div>
          <div class="imagen-contenedor" id="">
            <img
              src="../Media/detroid.jpg"
              id="imagen"
              alt="Descripción de la imagen"
            />
          </div>
        </div>
        <div class="contenedor">
          <div class="informacion" id="">
            <img class="logos" src="../Media/Logos/outlas.png" alt="" />
            <p>
              un juego de aventuras desarrollado por BlueTwelve Studio y
              publicado por Annapurna Interactive.fue lanzado el 19 de julio de
              2022
            </p>
          </div>
          <div class="imagen-contenedor" id="">
            <img
              src="../Media/outlas.jpg"
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

    </footer>
    <script src="../js.js"></script>
</body>
</html>