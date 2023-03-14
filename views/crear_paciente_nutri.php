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
    
    <script src="../jquery/jquery-3.6.3.js"></script>
    <script src="../jquery/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
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
    <br>
    <br>
    <h1>Añadir paciente</h1>
    <?php
        include("../includes/database.php");
        include("../includes/controlador_registrar_usuario.php");
    ?>
    <div class="contBlan">
        <a href="login.php" style="margin-right: 100vh;">🡰</a>
        <form name="formulario" method="post" id="signupForm" action="" novalidate="novalidate">
        <div class="detNom">

            <div id="group" class="form-group">
                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre" class="inputregistro" required><br>
                
            </div>

            <div id="group" class="form-group">
                <label for="apellido">Apellidos</label><br>
                <input type="text"  name="apellidos" class="inputregistro" required><br>
            </div>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha de nacimiento</label><br>
            <input type="date" name="fecha_nacimiento" min="1950-01-01" class="inputregistro" required><br>
            </div>

            <div class="form-group">
            <label for="dni">DNI</label><br>
            <input type="text" id="dni" name="dni" class="inputregistro" required><br>
            </div>
            
            <div class="form-group">
            <label for="sexo">Sexo</label><br>
            <div class="generoRad">
                <div>
                    <input type="radio" id="mujer" name="sexo" value="mujer" class="inputregistro" >
                    <label for="mujer">Mujer</label>
                </div>
                <div>
                    <input type="radio" id="hombre" name="sexo" value="hombre" class="inputregistro">
                    <label for="hombre">Hombre</label><br>
                </div>
        </div>
        </div>  
        
        <div class="form-group">
                <label for="correo">Correo electrónico</label><br>
                <input type="email" id="email" form="signupForm" name="correo_electronico" class="inputregistro" required><br>
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label><br>
                <input type="password" id="password" form="signupForm" name="password" class="inputregistro" required><br>
            </div>
                <button type="submit" id="enviar" form="signupForm" class="btnVerde" name="registro" value="Registrar">Añadir</button>
           
        </div>

        </form>

        <br>
        <br>
    </div>

   


<script src="../js/appRegistro.js"></script>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins)
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    Include all compiled plugins (below), or include individual files as needed 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script>-->

</body>
</html>