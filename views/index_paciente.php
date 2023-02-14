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
                <li><a href="login.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>Cerrar sesión</a></li>
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

    <!-----------------------Lunes------------------------------------------------>
        
    <div class="contBlan2">

        <h3>Menú de hoy</h3>
        <br>
        <div class="carrousel">
            <div class="elemento">
                <p>Desayuno</p>
                <div id="plato">
                    <h4>Nombre</h4>
                    <img src="../img/favicon-32x32.png" alt="">
                    <div id="check">
                        <a href="receta_desayuno_paciente.php" id="dietacliente"><i class="fa-solid fa-info"></i></a>
                        <input type="checkbox" id="dietaclientein">
                    </div>
                </div>
            </div>

            
            <div class="elemento">
                <p>Media Mañana</p>
                <div id="plato">
                    <h4>Nombre</h4>
                    <img src="../img/favicon-32x32.png" alt="">
                    <div id="check">
                        <div>
                            <a href="receta_desayuno_paciente.php" id="dietacliente"><i class="fa-solid fa-info"></i></a>
                        </div>
                        <div>
                            <input type="checkbox" id="dietaclientein">
                        </div>
                    </div>
                </div>
            </div>

            <div class="elemento">
                <p>Comida</p>
                <div id="plato">
                    <h4>Nombre</h4>
                    <img src="../img/favicon-32x32.png" alt="">
                    <div id="check">
                        <div>
                            <a href="receta_desayuno_paciente.php" id="dietacliente"><i class="fa-solid fa-info"></i></a>
                        </div>
                        <div>
                            <input type="checkbox" id="dietaclientein">
                        </div>
                    </div>
                </div>
            </div>


            <div class="elemento">
                <p>Merienda</p>
                <div id="plato">
                    <h4>Nombre</h4>
                    <img src="../img/favicon-32x32.png" alt="">
                    <div id="check">
                        <div>
                            <a href="receta_desayuno_paciente.php" id="dietacliente"><i class="fa-solid fa-info"></i></a>
                        </div>
                        <div>
                            <input type="checkbox" id="dietaclientein">
                        </div>
                    </div>
                </div>
            </div>

            <div class="elemento">
                <p>Cena</p>
                <div id="plato">
                    <h4>Nombre</h4>
                    <img src="../img/favicon-32x32.png" alt="">
                    <div id="check">
                        <div>
                            <a href="receta_desayuno_paciente.php" id="dietacliente"><i class="fa-solid fa-info"></i></a>
                        </div>
                        <div>
                            <input type="checkbox" id="dietaclientein">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="contBlan2">
        <h3>Mi entrenamiento</h3>
    </div>
    
    <script src="../js/app.js"></script>
</body>
</html>