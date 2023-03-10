<?php 
include ("../includes/database.php");

$ID=$_GET["ID"];

$db = new Database();
$conexion = $db->connect();
$sql=$conexion->query("select * from receta where ID=$ID");

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
                <h3>¡ Hola **** !<br><span>Nutricionista</span></h3>
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
    <br>

    <a href="menu_semanal_nutri_cliente.php">🡰</a>
    
    <?php

     while($datos=$sql->fetchObject()){ ?>

    <div class="contenedor">
    
        <div class="receta1">
            <div class="foto1">
            <!--imagen-->
            <img src="<?= $datos->foto?>" id="plato">
            </div>

            <div class="foto2">
                <h3><?= $datos-> nombre_receta ?></h3><br>
                <h4>Tiempo de realización (min):</h4><p><?= $datos-> tiempo_ejecucion ?></p><br>
                <h4>Tipo de comida:</h4><p><?= $datos-> tipo_comida ?></p>
            </div>

        </div>

        <div class="receta2">
            <h3>¿Qué necesitas?</h3>
            <p><?= $datos-> ingredientes ?></p>
        </div>

        <div class="receta3">
            
            <h3>Cómo prepararlo:</h3>
            <p><?= $datos-> preparacion ?></p>
        </div>

        <div class="receta4">
            <h3>Valores nutricionales</h3><br>
            <div>
                <ul id="horizon">
                    <li><b>Calorias: </b><?= $datos-> calorias ?></li>
                    <li><b>Carbohidratos: </b><?= $datos-> carbohidratos ?></li>
                    <li><b>Proteinas: </b><?= $datos-> proteinas ?></li>
                    <li><b>Grasas: </b><?= $datos-> grasas ?></li>
                </ul>
            </div>
        </div>
   
    </div>
    <?php }
    ?>

    <br>

<script src="../js/app.js"></script>
</body>
</html>