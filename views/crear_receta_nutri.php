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
    <br>
    <h1>Crear receta</h1>
    <br>
    <br>
    <div class="contener">

        <!--<div class="comida">-->

            <div class="foto">
                <img src="../img/.png" alt="">
                <div id="imagen">
                    <label id="labelImg" for="inputTag">
                      Seleccione imagen <br/>
                      <i class="fa fa-2x fa-camera"></i>
                      <input id="inputTag" type="file"/>
                      <br/>
                      <span id="imageName"></span>
                    </label>
                  </div>
            </div>

            <div class="formu">
                <form action="">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre"><br>

                    <label for="nombre">Tiempo en ejecución:</label>
                    <input type="number" id="num" name="num"><br>

                    <label for="complej">Complejidad de realización</label>
                    <select id="dificul">
                        <option value="Fácil">Fácil</option>
                        <option value="Intermedio">Intermedio</option>
                        <option value="Complejo">Complejo</option><br>
                    </select>

                    <h4>Tipo de comida</h4>
                    
                    <input class="tipIn" type="radio" id="desay" name="desay" value="desay">
                    <label class="tipLa" for="desay"> Desayuno</label><br>
                    <input class="tipIn" type="radio" id="mediam" name="mediam" value="mediam">
                    <label class="tipLa" for="mediam"> Media mañana</label><br>
                    <input class="tipIn" type="radio" id="comid" name="comid" value="comid">
                    <label class="tipLa" class="tip" for="comid"> Comida</label><br>
                    <input class="tipIn" type="radio" id="meri" name="meri" value="meri">
                    <label class="tipLa" for="meri"> Merienda</label><br>
                    <input class="tipIn" type="radio" id="cena" name="cena" value="cena">
                    <label class="tipLa" for="cena"> Cena</label><br>
                   
                </form>
            </div>
        <!--</div>-->

        
        <!--<div class="list">-->
            <div class="ingre">

                <h4>Ingredientes</h4>
                <div id="list">
                <ul>
                    <li>ejemplo</li>
                    <li>ej</li>
                    <li>ej</li>
                </ul>
                </div>
                <p>Añadir</p>

            </div>

            <div class="prepa">

                <h4>Preparación</h4>
                <div id="list">
                <ol>
                    <li>ej</li>
                    <li>ej</li>
                    <li>ej</li>
                </ol>
                </div>
                <p>Añadir</p>
                
            </div>
        <!--</div>-->
        

        <div class="valores">

            <h4>Valores nutricionales</h4>

            <label for="cal">Calorías</label>
            <input class="valor" type="number">

            <label for="carbo">Carbohidratos</label>
            <input class="valor" type="number">

            <label for="prote">Proteinas</label>
            <input class="valor" type="number">

            <label for="grasa">Grasas</label>
            <input class="valor" type="number">
        </div>

    
    </div> 
    
    <table id="recetatabla">

        <tr id="recetatabla">
            <td id="recetatabla">
                <img src="img/.png" alt="">
                <div id="imagen">
                    <label id="labelImg" for="inputTag">
                      Seleccione imagen <br/>
                      <i class="fa fa-2x fa-camera"></i>
                      <input id="inputTag" type="file"/>
                      <br/>
                      <span id="imageName"></span>
                    </label>
                  </div>
            </td>

            <td id="recetatabla">
                <form action="">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre"><br>

                    <label for="nombre">Tiempo en ejecución</label>
                    <input type="number" id="num" name="num"><br>

                    <label for="complej">Complejidad de realización</label>
                    <select id="dificul">
                        <option value="Fácil">Fácil</option>
                        <option value="Intermedio">Intermedio</option>
                        <option value="Complejo">Complejo</option>
                    </select>

                    
                        <h4>Tipo de comida</h4> 
                            <input type="radio" id="desay" name="desay" value="desay">
                            <label for="desay"> Desayuno</label><br>
                            <input type="radio" id="mediam" name="mediam" value="mediam">
                            <label for="mediam"> Media mañana</label><br>
                            <input type="radio" id="comid" name="comid" value="comid">
                            <label for="comid"> Comida</label><br>
                            <input type="radio" id="meri" name="meri" value="meri">
                            <label for="meri"> Merienda</label><br>
                            <input type="radio" id="cena" name="cena" value="cena">
                            <label for="cena"> Cena</label>
        
                </form>
            </td>

        </tr>      

        <tr id="recetatabla">
            <td id="recetatabla">

                <h4>Ingredientes</h4>

                <div id="list">
                <ul>
                    <li>ej</li>
                    <li>ej</li>
                    <li>ej</li>
                </ul>
                </div>
                <p>Añadir</p>

            </td>
            <td id="recetatabla">

                <h4>Preparación</h4>
                <div id="list">
                <ol>
                    <li>ej</li>
                    <li>ej</li>
                    <li>ej</li>
                </ol>
                </div>
                <p>Añadir</p>
            </td>

            

        </tr>

    
        <tr id="recetatabla">
            <td colspan="3" id="recetatabla">

                <h4>Valores nutricionales</h4>
    
                <label for="cal">Calorías</label>
                <input class="valor" type="text">
    
                <label for="carbo">Carbohidratos</label>
                <input class="valor" type="text">
    
                <label for="prote">Proteinas</label>
                <input class="valor" type="text">
    
                <label for="grasa">Grasas</label>
                <input class="valor" type="text">
            </td>
        </tr>

    </table>
    <script src="../js/app.js"></script>
</body>
</html>