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

<body id="bodyMenuSemanal">

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
    <br>
    
    <div class="contBlan3">
        <div class="centrarContenidoPerfil">
            <img src="../img/icon1.jpg" alt="cara" />
            <h4>Nombre del cliente</h4>
        </div>
    </div>
  
      
            <h2>Semana 1</h2>
            <br>
        
   
    <div class="contBlan2">
        <h2>Lunes</h2>
        <br>
        <br>

        <div class="cabeza">
            <h3><a href="receta_categoria_nutri.php">Desayuno</a></h3>

            <div class="buscar">
            <input type="search" placeholder="🔍Buscar" name="" id="searchMenuDia">
            </div>
        </div>
        

       
        <div class="carrousel2">
            
                
            <div class="elemento">
            
            <div class="plato2">
            <img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                <div id="check">
                    <a href="receta_desayuno_paciente.php" id="dietacliente"><i class="fa-solid fa-info"></i></a>
                    <input type="checkbox" id="dietaclientein">
                </div>
            </div>
            <p>Sandwich de manzana y granola</p>
        </div>
        <div class="elemento">
            
            <div class="plato2">
            <img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                <div id="check">
                    <a href="receta_desayuno_paciente.php" id="dietacliente"><i class="fa-solid fa-info"></i></a>
                    <input type="checkbox" id="dietaclientein">
                </div>
            </div>
            <p>Sandwich de manzana y granola</p>
        </div>

        <div class="elemento">
            
            <div class="plato2">
            <img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                <div id="check">
                    <a href="receta_desayuno_paciente.php" id="dietacliente"><i class="fa-solid fa-info"></i></a>
                    <input type="checkbox" id="dietaclientein">
                </div>
            </div>
            <p>Sandwich de manzana y granola</p>
        </div>

    </div>
    <div class="cabeza">
            <h3><a href="receta_categoria_nutri.php">Media mañana</a></h3>

            <div class="buscar">
            <input type="search" placeholder="🔍Buscar" name="" id="searchMenuDia">
            </div>
        </div>
        
        <div class="carrousel2">
            
                
            <div class="elemento">
            
            <div class="plato2">
            <img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                <div id="check">
                    <a href="receta_desayuno_paciente.php" id="dietacliente"><i class="fa-solid fa-info"></i></a>
                    <input type="checkbox" id="dietaclientein">
                </div>
            </div>
            <p>Sandwich de manzana y granola</p>
        </div>
        <div class="elemento">
            
            <div class="plato2">
            <img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                <div id="check">
                    <a href="receta_desayuno_paciente.php" id="dietacliente"><i class="fa-solid fa-info"></i></a>
                    <input type="checkbox" id="dietaclientein">
                </div>
            </div>
            <p>Sandwich de manzana y granola</p>
        </div>

        <div class="elemento">
            
            <div class="plato2">
            <img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                <div id="check">
                    <a href="receta_desayuno_paciente.php" id="dietacliente"><i class="fa-solid fa-info"></i></a>
                    <input type="checkbox" id="dietaclientein">
                </div>
            </div>
            <p>Sandwich de manzana y granola</p>
        </div>

    </div>

        <div class="cabeza">
            <h3><a href="receta_categoria_nutri.php">Comida</a></h3>

            <div class="buscar">
            <input type="search" placeholder="🔍Buscar" name="" id="searchMenuDia">
            </div>
        </div>
       
        <div class="carrousel2">
            
                
            <div class="elemento">
            
            <div class="plato2">
            <img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                <div id="check">
                    <a href="receta_desayuno_paciente.php" id="dietacliente"><i class="fa-solid fa-info"></i></a>
                    <input type="checkbox" id="dietaclientein">
                </div>
            </div>
            <p>Sandwich de manzana y granola</p>
        </div>
        <div class="elemento">
            
            <div class="plato2">
            <img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                <div id="check">
                    <a href="receta_desayuno_paciente.php" id="dietacliente"><i class="fa-solid fa-info"></i></a>
                    <input type="checkbox" id="dietaclientein">
                </div>
            </div>
            <p>Sandwich de manzana y granola</p>
        </div>

        <div class="elemento">
            
            <div class="plato2">
            <img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                <div id="check">
                    <a href="receta_desayuno_paciente.php" id="dietacliente"><i class="fa-solid fa-info"></i></a>
                    <input type="checkbox" id="dietaclientein">
                </div>
            </div>
            <p>Sandwich de manzana y granola</p>
        </div>

    </div>

    <div class="cabeza">
            <h3><a href="receta_categoria_nutri.php">Merienda</a></h3>

            <div class="buscar">
            <input type="search" placeholder="🔍Buscar" name="" id="searchMenuDia">
            </div>
        </div>
        
        <div class="carrousel2">
            
                
                <div class="elemento">
                
                <div class="plato2">
                <img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                    <div id="check">
                        <a href="receta_desayuno_paciente.php" id="dietacliente"><i class="fa-solid fa-info"></i></a>
                        <input type="checkbox" id="dietaclientein">
                    </div>
                </div>
                <p>Sandwich de manzana y granola</p>
            </div>
            <div class="elemento">
                
                <div class="plato2">
                <img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                    <div id="check">
                        <a href="receta_desayuno_paciente.php" id="dietacliente"><i class="fa-solid fa-info"></i></a>
                        <input type="checkbox" id="dietaclientein">
                    </div>
                </div>
                <p>Sandwich de manzana y granola</p>
            </div>

            <div class="elemento">
                
                <div class="plato2">
                <img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                    <div id="check">
                        <a href="receta_desayuno_paciente.php" id="dietacliente"><i class="fa-solid fa-info"></i></a>
                        <input type="checkbox" id="dietaclientein">
                    </div>
                </div>
                <p>Sandwich de manzana y granola</p>
            </div>

        </div>

        <div class="cabeza">
            <h3><a href="receta_categoria_nutri.php">Cena</a></h3>

            <div class="buscar">
            <input type="search" placeholder="🔍Buscar" name="" id="searchMenuDia">
            </div>
        </div>
        
        <div class="carrousel2">
            
                
                <div class="elemento">
                
                <div class="plato2">
                <img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                    <div id="check">
                        <a href="receta_desayuno_paciente.php" id="dietacliente"><i class="fa-solid fa-info"></i></a>
                        <input type="checkbox" id="dietaclientein">
                    </div>
                </div>
                <p>Sandwich de manzana y granola</p>
            </div>
            <div class="elemento">
                
                <div class="plato2">
                <img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                    <div id="check">
                        <a href="receta_desayuno_paciente.php" id="dietacliente"><i class="fa-solid fa-info"></i></a>
                        <input type="checkbox" id="dietaclientein">
                    </div>
                </div>
                <p>Sandwich de manzana y granola</p>
            </div>

            <div class="elemento">
                
                <div class="plato2">
                <img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                    <div id="check">
                        <a href="receta_desayuno_paciente.php" id="dietacliente"><i class="fa-solid fa-info"></i></a>
                        <input type="checkbox" id="dietaclientein">
                    </div>
                </div>
                <p>Sandwich de manzana y granola</p>
            </div>

        </div>
        
       
    </div>
    
    <script src="../js/app.js"></script>
</body>
</html>