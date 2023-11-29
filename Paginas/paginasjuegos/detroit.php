<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../Media/Logos/logo software.png" type="image/x-icon" />
    <title>Game</title>
    <link rel="stylesheet" type="text/css" href="../../Estilos/style4.css">
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
    <ul>
        <a href="../inicio.php"><img src="../../Media/Logos/logo software.png" alt="logo" class="logo"></a>
        <div class="menu">
        <li>
          <a href="#">Categoria ▾ </a>
          <ul class="micro_menu">
           <li><a href="../Accion.php">Accion</a></li>
           <li><a href="../2D.php">2D</a></li>
           <li><a href="../Terror.php">Terror</a></li>
           <li><a href="../MundoLibre.php">Mundo libre</a></li>
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
    <header>

<div class="cuadro">
    <img src="../../Media/detroid.jpg" alt="" class="img">
    <h3 class="titulo">Detroit Become Human</h3>
    <p class="texto">Detroit Become Human pone el destino de la humanidad y los androides en tus manos. Cada decisión que tomes afectará al resultado del juego, en una de las tramas narrativas con ramificaciones más intrincadas que jamás se ha visto.</p>
    <h3 class="t2">REQUISITOS DEL SISTEMA:</h3>
    <p class="min">Mínimo:</p>
    <div class="min2">
    <li>Requiere un procesador y un sistema operativo de 64 bits</li>
    <li>SO:Windows 10 (64 bit)</li>
    <li>Procesador: Intel Core </li>
    <li>Memoria: 8 GB de RAM</li>
    <li>Gráficos: Nvidia GeForce GTX 780 or AMD HD 7950 </li>
    <li>Almacenamiento: 55 GB de espacio disponible</li>
    </div>
    <p class="recor">Recomendado:</p>
    <div class="recor2">
    <li>un sistema operativo de 64 bits</li>
    <li>SO: Windows 10 (64 bit)</li>
    <li>Procesador: Intel Core i5-6600 @ 3.3 GHz or AMD Ryzen </li>
    <li>Memoria: 12 GB de RAM</li>
    <li>Gráficos: Nvidia GeForce GTX 1060 or AMD Radeon RX 580 </li>
    <li>Almacenamiento: 55 GB de espacio disponible</li>
    </div>
    <!-- carrusel -->
    <div class="slide">
        <div class="slide-inner">
            <input class="slide-open" type="radio" id="slide-1" 
                name="slide" aria-hidden="true" hidden="" checked="checked">
            <div class="slide-item">
                <img src="../../Media/c1.jpg">
            </div>
            <input class="slide-open" type="radio" id="slide-2" 
                name="slide" aria-hidden="true" hidden="">
            <div class="slide-item">
                <img src="../../Media/c2.jpg">
            </div>
            <input class="slide-open" type="radio" id="slide-3" 
                name="slide" aria-hidden="true" hidden="">
            <div class="slide-item">
                <img src="../../Media/c3.jpg">
            </div>
            <label for="slide-3" class="slide-control prev control-1">‹</label>
            <label for="slide-2" class="slide-control next control-1">›</label>
            <label for="slide-1" class="slide-control prev control-2">‹</label>
            <label for="slide-3" class="slide-control next control-2">›</label>
            <label for="slide-2" class="slide-control prev control-3">‹</label>
            <label for="slide-1" class="slide-control next control-3">›</label>
            <ol class="slide-indicador">
                <li>
                    <label for="slide-1" class="slide-circulo">•</label>
                </li>
                <li>
                    <label for="slide-2" class="slide-circulo">•</label>
                </li>
                <li>
                    <label for="slide-3" class="slide-circulo">•</label>
                </li>
            </ol>
        </div>
    </div>
    <p class="precio">Precio:</p>
    <p class="precio2">$15000</p>
    <a href="../paginasfacturas/facdetroit.php" class="boton1">Comprar</a>
    <a href="../Accion.php" class="boton">Volver</a>
</div>
    </header>
    <main>
    </main>
    <footer>
<!-- copy es @ -->
<p>&copy; 2023 Game Over | Todos los derechos reservados</p>
    </footer>
</body>
</html>