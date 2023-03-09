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
    if($_SESSION['rol'] != 1){
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
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png"> <!-- Favicon -->
    <link rel="stylesheet" href="../css/style.css"> <!-- style.css ubicado en la carpeta public -->
    <script src="https://kit.fontawesome.com/4a0af06348.js" crossorigin="anonymous"></script> <!-- Script para libreria de iconos -->
    <title>Modificar usuario</title>
</head>
<body>
<header>
        <a href="index_admin.php" id="logo"><img src="../img/3.png"></a>
        <nav>
            <ul id="menu">
                <li><a href="index_admin.php"><i class="fa-regular fa-address-book"></i> Pacientes</a></li>
                <li><a href="administrar_nutricionistas.php"><i class="fa-solid fa-bowl-food"></i> Nutricionistas</a></li>
            </ul>
        </nav>
        
        <div id="user">
            <div id="profile" onclick="menuToggle();">
                <img src="../img/icon2.png">
            </div>
            <div id="profilemenu">
                <h3>¡ Hola **** !<br><span>Administrador</span></h3>
                <ul>
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

    <h1>Modificar usuario</h1>
    
    <div class="contBlan">
        <a href="index_admin.php" style="margin-right: 100vh;">🡰</a>
        <?php
        include ("../includes/modificar_producto.php");

        while($datos=$sql->fetchObject()){ ?>
            <form name="formulario" method="post" id="signupForm" action="" novalidate="novalidate">
            <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
            <div class="detNom">
                <div id="group" class="form-group">
                    <label for="nombre">Nombre</label><br>
                    <input type="text" name="nombre" class="inputregistro" value="<?= $datos -> nombre?>"><br>

                </div>

                <div id="group" class="form-group">
                    <label for="apellido">Apellidos</label><br>
                    <input type="text"  name="apellidos" class="inputregistro" value="<?= $datos -> apellidos?>"><br>
                </div>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha de nacimiento</label><br>
                <input type="date" name="fecha_nacimiento" min="1950-01-01" class="inputregistro" value="<?= $datos -> fecha_nacimiento?>"><br>
                </div>

                <div class="form-group">
                <label for="dni">DNI</label><br>
                <input type="text" id="dni" name="dni" class="inputregistro" value="<?= $datos -> dni?>"><br>
                </div>

                <div class="form-group">

            </div>  
            
            <div class="form-group">
                    <label for="correo">Correo electrónico</label><br>
                    <input type="email" id="email" form="signupForm" name="correo_electronico" class="inputregistro" value="<?= $datos -> correo_electronico?>"><br>
                </div>

                <button type="submit" id="enviar" form="signupForm" class="btnVerde" name="modificar_usuario" value="Modificar">Modificar</button>

            
            </div>
        </form>
        <?php }
        ?>

        <br>
        <br>
    </div>
</body>
</html>