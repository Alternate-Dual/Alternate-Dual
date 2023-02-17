<?php 

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

  <header>
    <a href="index_nutricionista" id="logo"><img src="../img/3.png"></a>
    <nav>
        <ul id="menu">
            <li><a href="index_nutricionista"><i class="fa-regular fa-address-book"></i> Pacientes</a></li>
            <li><a href="nutricionista_menu"><i class="fa-solid fa-bowl-food"></i> Menús</a></li>
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

   <div class="centrarContenidoPerfil">
   <img src="../img/icon.png" alt="cara" />
    <p>Nombre del nutricionista</p>
    </div>

    <div>
    <br>

      <h4 class="perfil">Mis datos</h4>
      
      <div class="FondoDatosNutricionista">
        <div class="datosNutricionista"><img src="../img/carnet.png" alt=""> Nombre y Apellidos</div>
            <hr/>
        <div class="datosNutricionista" contenteditable="true">02/03/1986</div>
            <hr/>
        <div class="datosNutricionista" contenteditable="true">21134742Z</div>
            <hr/>
        <div class="datosNutricionista" contenteditable="true">Sexo</div>
            <hr/>
        <div class="datosNutricionista" contenteditable="true"><a href = "mailto: NutriFit@gmail.com">NutriFit@gmail.com</a></div>
      </div>
    </div>
    <br>
    <br>
    <div>
      <br>
      <h4 class="perfil">Mi cuenta</h4>
      <div class="FondoDatosNutricionista">
        <div class="datosNutricionista"><a href="#"><img src="../img/contrasena.png" alt=""> Cambiar contraseña</a></div>
            <hr/>
        <div class="datosNutricionista"><img src="../img/salida.png" alt=""><a href="login.php"> Cerrar sesión</a></div>
      </div>
    </div>
    <script src="../js/app.js"></script>
</body>
</html>