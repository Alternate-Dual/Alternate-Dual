<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png"> <!-- Favicon -->
    <link rel="stylesheet" href="../css/style.css"> <!-- style.css ubicado en la carpeta public -->
    <script src="https://kit.fontawesome.com/4a0af06348.js" crossorigin="anonymous"></script> <!-- Script para libreria de iconos -->
</head>

<body>
  
  <header>
    <a href="index_paciente.php" id="logo"><img src="../img/3.png"></a>
    <nav>
        <ul id="menu">
            <li><a href="index_paciente.php"><i class="fa-solid fa-house-user"></i> Inicio</a></li>
            <li><a href="dietas_semana_paciente.php"><i class="fa-solid fa-bowl-food"></i> Dietas</a></li>
            <li><a href="#"><i class="fa-solid fa-bullseye"></i> Objetivos</a></li>
            <li><a href="#"><i class="fa-regular fa-comments"></i> Chat</a></li>
        </ul>
    </nav>
    
    <div id="user">
        <div id="profile" onclick="menuToggle();">
            <img src="../img/icon1.jpg">
        </div>
        <div id="profilemenu">
            <h3>¡ Hola **** !<br><span>Paciente</span></h3>
            <ul>
                <li><i class="fa-regular fa-user"></i><a href="perfil_paciente.php">Mi perfil</a></li>
                <li><a href="perfil_paciente.php"><i class="fa-solid fa-sliders"></i>Ajustes</a></li>
                <li><a href="login.php?cerrar_sesion=1"><i class="fa-solid fa-arrow-right-from-bracket"></i>Cerrar sesión</a></li>
            </ul>
        </div>
    </div>

    <div id="menuicon">
        <i class="fa-solid fa-bars"></i>
    </div>
    
</header>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="centrarContenidoPerfil">
      <img src="../img/icon1.jpg" alt="cara" />
      <p>Nombre del cliente</p>
    </div>

    <!-- Contenedores Peso Inicial y Peso Actual -->
    <div class="centrarContenedorPesos">
      <div class="ContenedorPesos">
        Peso inicial
        <p>68 Kg</p>
      </div>

      <div class="ContenedorPesos">
        Peso actual
        <p id="pesoActual">{{peso}}</p>
        <p id="demo"></p>
      </div>
    </div>
    <div class="contenedorActualizarPeso">
      <button id="boton" onclick="cambiarPeso()" value="ACTUALIZAR PESO">ACTUALIZAR PESO</button>
    </div>

    <!-- Progreso historial -->
    <div>
      <h4 class="perfil">MI PROGRESO</h4>
      <br>
      <div class="FondoDatosCliente">
        <div class="datosCliente"><img src="../img/grafico.png" alt="grafico"> Historial de peso</div>
            <hr />
        <div class="datosCliente"><img src="../img/nutricion.png" alt=""> Historial de comidas</div>
      </div>
    </div>
    <br>
    <br>
    <!-- Datos Cliente -->
    <div>
      <h4 class="perfil">MIS DATOS</h4>
      <br>
      <div class="FondoDatosCliente">
        <div class="datosCliente" ><img src="../img/imc.png" alt=""> IMC</div>
            <hr />
        <div class="datosCliente" ><img src="../img/cuerpo-humano.png" alt=""> % de Grasa corporal</div>
            <hr />
        <div class="datosCliente" ><img src="../img/fuerte.png" alt=""> Masa múscular</div>
            <hr />
        <div class="datosCliente"><img src="../img/limite-de-altura.png" alt=""> Altura</div>
            <hr />
        <div class="datosCliente" ><img src="../img/horario.png" alt=""> Gestión de ahorros</div>
            <hr />
            <div class="datosCliente" ><img src="../img/exito.png" alt=""> No tienes ningún reto empezado, elige uno de la lista</div>
            <hr />
        <div class="datosCliente"><img src="../img/gluten.png" alt=""> Alérgenos y enfermedades</div>
      </div>
    </div>
    <br>
    <br>
    <!-- Cuenta Cliente -->
    <div>
      <h4 class="perfil">MI CUENTA</h4>
      <br>
      <div class="FondoDatosCliente">
        <div class="datosCliente"><img src="../img/carnet.png" alt=""> Nombre y apellidos</div>
        <hr />
        <div class="datosCliente"><img src="../img/campana.png" alt=""> Notificaciones</div>
      </div>
    </div>
  </body>
  
  <script src="../js/app.js"></script>
</body>
</html>