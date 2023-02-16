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
    <h1>Datos personales</h1>
    <br>
    <br>

    <div class="contBlan">
        <form name="formulario" method="post" id="signupForm">
        
        <div class="detNom">

            <div class="form-group">
                <label for="nombre">Nombre</label><br>
                <input type="text" id="fullname" name="fullname" class="form-control"><br>
            </div>

            <div class="form-group">
                <label for="nombre">Apellido</label><br>
                <input type="text" id="apellidos" name="name" class="form-control"><br>
            </div>
        </div>
            <label for="fecha">Fecha de nacimiento</label><br>
            <input type="date" id="start" name="trip-start" min="1950-01-01" class="inputregistro"><br>

            <label for="dni">DNI</label><br>
            <input type="text" id="dni" name="dni" class="inputregistro"><br>
            <p id="userdniTest" name="userdniTest">test</p><br>

        
        
            <label for="sexo">Sexo</label><br>
            <div class="generoRad">
                <div>
                    <input type="radio" id="mujer" name="sexo" value="mujer" class="inputregistro">
                    <label for="mujer">Mujer</label>
                </div>
                <div>
                    <input type="radio" id="hombre" name="sexo" value="hombre" class="inputregistro">
                    <label for="hombre">Hombre</label><br>
                </div>
        </div>        

        </form>

        <button class="btnVerde" onclick="window.modal1.showModal();" >Siguiente</button>

    </div>

    <dialog id="modal1">

        <h1>Datos de contacto</h1>
        <br>
        <br>

        <div class="contBlan">
            <form>
            <br>
            <div class="form-group">
                <label for="correo">Correo electrónico</label><br>
                <input type="text" id="correo" name="useremail" class="form-control"><br>
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label><br>
                <input type="text" id="contraseña" name="userpassid" class="form-control"><br>
            </div>
           
                <button type="submit" class="btnVerde">Confirmar</button>
            
            </form>

            <a href="./index_nutricionista.html">Ir nutricionista</a>
        </div>
    </dialog>
</div>

<script src="../js/appRegistro.js"></script>


</body>
</html>