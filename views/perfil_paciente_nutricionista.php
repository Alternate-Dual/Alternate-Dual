<?php 

include ("../includes/database.php");

$id=$_GET["id"];

$db = new Database();
$conexion = $db->connect();
$sql=$conexion->query("select * from usuarios where id=$id");

session_start();

if(!isset($_SESSION['rol'])){
    header('location: login.php');
}else{
    if($_SESSION['rol'] != 2){
        header('location: login.php');
    }
}

?>

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
        <a href="index_nutricionista.php" id="logo"><img src="../img/3.png"></a>
        <nav>
            <ul id="menu">
                <li><a href="index_nutricionista.php"><i class="fa-regular fa-address-book"></i> Pacientes</a></li>
                <li><a href="nutricionista_menu.php"><i class="fa-solid fa-bowl-food"></i> Menús</a></li>
                <li><a href="#"><i class="fa-regular fa-comments"></i> Chat</a></li>
                <li><a href="#"><i class="fa-regular fa-bell"></i> Notificaciones</a></li>
            </ul>
        </nav>
        
        <div id="user">
            <div id="profile" onclick="menuToggle();">
                <img src="../img/icon.png">
            </div>
            <div id="profilemenu">
                <h3>¡ Hola de nuevo !<br><span>Nutricionista</span></h3>
                <ul>
                    <li><i class="fa-regular fa-user"></i><a href="perfil_nutricionista.php">Mi perfil</a></li>
                    <li><a href="perfil_nutricionista.php"><i class="fa-solid fa-sliders"></i>Ajustes</a></li>
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
<a href="index_nutricionista.php">🡰</a>

<div class="contBlan3">
    <?php
      while ($datos = $sql->fetchObject()){?>
        <div class="centrarContenidoPerfil">
            <img src="../img/icon1.jpg" alt="cara" />
            <h4><?= $datos->nombre?> <?= $datos->apellidos?></h4>
        </div>
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
    <br>
    <br>

    <!-- Datos paciente -->
    <h4>DATOS DEL PACIENTE</h4>
      <br>
      <div class="contBlan1">
        <div class="datosNutricionista"><img src="../img/carnet.png" alt=""> Nombre y Apellidos: <?= $datos->nombre?> <?= $datos->apellidos?></div>
            <hr/>
        <div class="datosNutricionista"><?= $datos->fecha_nacimiento?></div>
            <hr/>
        <div class="datosNutricionista"><?= $datos->dni?></div>
            <hr/>
        <div class="datosNutricionista"><?= $datos->sexo?></div>
            <hr/>
        <div class="datosNutricionista"><a href = "mailto: <?= $datos->correo_electronico?>"><?= $datos->correo_electronico?></a></div>
      </div>
      <br>
      <br>


    <!-- Progreso historial -->
    <br>
    <div>
      <h4>PROGRESO DEL PACIENTE</h4>
      <br>
      <div class="contBlan1">
        <div class="datosCliente"><img src="../img/grafico.png" alt="grafico"> Historial de peso</div>
            <hr />
        <div class="datosCliente"><img src="../img/nutricion.png" alt=""> Historial de comidas</div>
      </div>
    </div>
    <br>
    <br>
    <!-- Datos Cliente -->
    <div>
      <h4>DATOS DEL PACIENTE</h4>
      <br>
      <div class="contBlan1">
        <div class="datosCliente" ><img src="../img/imc.png" alt=""> IMC</div>
            <hr />
        <div class="datosCliente" ><img src="../img/cuerpo-humano.png" alt=""> % de Grasa corporal</div>
            <hr />
        <div class="datosCliente" ><img src="../img/fuerte.png" alt=""> Masa múscular</div>
            <hr />
        <div class="datosCliente"><img src="../img/limite-de-altura.png" alt=""> Altura</div>
            <hr />
        <div class="datosCliente"><img src="../img/gluten.png" alt=""> Alérgenos y enfermedades</div>
      </div>
      <?php }
      ?>
    </div>
    <br>
    <br>
  </body>
  
  <script src="../js/app.js"></script>
</body>
</html>