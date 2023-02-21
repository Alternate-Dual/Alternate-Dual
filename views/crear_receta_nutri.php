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
    <br>
    <div class="contener">

        <!--<div class="comida">-->

            <div class="foto" style="background-color:#545454;">
                <img src="../img/.png" alt="">
                <div id="imagen" style="color:white;">
                    <label id="labelImg" for="inputTag">
                      Seleccione imagen <br/>
                      <i class="fa fa-2x fa-camera"></i>
                      <input id="inputTag" type="file"/>
                      <br>
                      <span id="imageName"></span>
                    </label>
                  </div>
            </div>

            <div class="formu">
                <form action="">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre"><br>

                    <label for="nombre">Tiempo en ejecución (min):</label>
                    <input type="number" id="num" name="num"><br>

                    <label for="complej">Complejidad de realización</label>
                    <select id="dificul">
                        <option value="Fácil">Fácil</option>
                        <option value="Intermedio">Intermedio</option>
                        <option value="Complejo">Complejo</option><br>
                    </select>

                    <h4>Tipo de comida</h4>
                    
                    <input class="tipIn" type="radio" id="desay" name="tipo_comida" value="desay">
                    <label class="tipLa" for="desay"> Desayuno</label><br>
                    <input class="tipIn" type="radio" id="mediam" name="tipo_comida" value="mediam">
                    <label class="tipLa" for="mediam"> Media mañana</label><br>
                    <input class="tipIn" type="radio" id="almuer" name="tipo_comida" value="almuer">
                    <label class="tipLa" for="almuer"> Almuerzo</label><br>
                    <input class="tipIn" type="radio" id="meri" name="tipo_comida" value="meri">
                    <label class="tipLa" for="meri"> Merienda</label><br>
                    <input class="tipIn" type="radio" id="cena" name="tipo_comida" value="cena">
                    <label class="tipLa" for="cena"> Cena</label><br>
                   
                </form>
            </div>
        <!--</div>-->

        
        <!--<div class="list">-->
            <div class="ingre">
                <h4>Ingredientes</h4><br>
                <form>
                <textarea id="ingredientes" name="ingredientes" rows="4" cols="50"></textarea>
                </form>
            </div>

            <div class="prepa">
                <h4>Preparación</h4><br>
                <form>
                <textarea id="preparacion" name="preparacion" rows="4" cols="50"></textarea>
                </form>
            </div>
            <br>
        <!--</div>-->
        

        <div class="valores">
            <br>
            <h4>Valores nutricionales</h4> <br><br>

            <label for="cal">Calorías</label>
            <input class="valor" type="number">

            <label for="carbo">Carbohidratos</label>
            <input class="valor" type="number">

            <label for="prote">Proteinas</label>
            <input class="valor" type="number">

            <label for="grasa">Grasas</label>
            <input class="valor" type="number">

            <br><br>

            <button onclick="añadirIngrediente" class="btnVerde" style="padding-left: 10vh; padding-right: 10vh;">Añadir</button>
        </div>
    
    </div> 
    
    <script src="../js/app.js"></script>
</body>
</html>