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

<body>

    <header>
        <a href="index_nutricionista" id="logo"><img src="../img/3.png"></a>
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
                    <li><a href="perfil_nutricionista"><i class="fa-solid fa-sliders"></i>Ajustes</a></li>
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
    <h1>Crear receta</h1>
    <?php
        include("../includes/database.php");
        include("../includes/controlador_crear_receta.php");
    ?>
    <br>
    <div class="contener">
            <div class="foto" style="background-color:#545454;">
        <form name="crear_receta_form" method="post" action="" novalidate="novalidate" id="crearReceta" enctype="multipart/form-data">
                <img src="../img/.png" alt="">
                <div id="imagen" style="color:white;">
                    <label id="labelImg" for="inputTag">
                        <i class="fa fa-2x fa-camera"></i>
                        <p>Por favor, seleccione una imagen</p>
                        <input type="file" name="foto"/>
                        <br>
                        <span id="imageName"></span>
                    </label>
                  </div>
            </div>

            <div class="formu">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre_receta" name="nombre_receta"><br>
                    
                    <label for="nombre">Tiempo en ejecución (min):</label>
                    <input type="number" id="tiempo_ejecucion" name="tiempo_ejecucion"><br>
                    <br>
                   <h4>Complejidad de realización</h4>
                   <input class="tipIn" type="radio" id="facil" name="complejidad" value="facil">
                    <label class="tipLa" for="facil"> Fácil</label>
                    <input class="tipIn" type="radio" id="intermedio" name="complejidad" value="intermedio">
                    <label class="tipLa" for="intermedio"> Intermedio</label>
                    <input class="tipIn" type="radio" id="complejo" name="complejidad" value="complejo">
                    <label class="tipLa" for="almuerzo">Complejo</label>
                    <br>
                    <br>
                    <h4>Tipo de comida</h4>
                    <input class="tipIn" type="radio" id="desayuno" name="tipo_comida" value="desayuno">
                    <label class="tipLa" for="desayuno"> Desayuno</label><br>
                    <input class="tipIn" type="radio" id="media_mañana" name="tipo_comida" value="media_mañana">
                    <label class="tipLa" for="media_mañana"> Media mañana</label><br>
                    <input class="tipIn" type="radio" id="almuerzo" name="tipo_comida" value="almuerzo">
                    <label class="tipLa" for="almuerzo"> Almuerzo</label><br>
                    <input class="tipIn" type="radio" id="merienda" name="tipo_comida" value="merienda">
                    <label class="tipLa" for="merienda"> Merienda</label><br>
                    <input class="tipIn" type="radio" id="cena" name="tipo_comida" value="cena">
                    <label class="tipLa" for="cena"> Cena</label><br>
            </div>

            <div class="ingre">
                <h4>Ingredientes</h4><br>
                <textarea id="ingredientes" name="ingredientes" rows="4" cols="50"></textarea>
            </div>

            <div class="prepa">
                <h4>Preparación</h4><br>
                <textarea id="preparacion" name="preparacion" rows="4" cols="50"></textarea>
            </div>
           <br>
        
        <div class="valores">
            <br>
            <h4>Valores nutricionales</h4> <br><br>

            <label for="calorias">Calorías (kcal)</label>
            <input class="valor" type="number" name="calorias">

            <label for="carbohidratos">Carbohidratos (g)</label>
            <input class="valor" type="number" name="carbohidratos">

            <label for="proteinas">Proteinas (g)</label>
            <input class="valor" type="number" name="proteinas">

            <label for="grasas">Grasas (g)</label>
            <input class="valor" type="number" name="grasas">

            <br><br>
        </form>
            <button type="submit" form="crearReceta" name="crear_receta" value="Crear" class="btnVerde" style="padding-left: 8vh; padding-right: 8vh; transition: all .30s ease;">Añadir</button>
        </div>
    
    </div> 
    <br>
    <br>
    <script src="../js/app.js"></script>
</body>
</html>