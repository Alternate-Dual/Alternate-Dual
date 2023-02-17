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
</head>

<body>
    <h1>Datos personales</h1>
    <br>
    <br>

    <div class="contBlan">
        <form name="formulario" method="post" id="signupForm">
        
        <div class="detNom">

            <div id="group" class="form-group">
                <label for="nombre">Nombre</label><br>
                <input type="text"  name="fullname" class="inputregistro"><br>
                
            </div>

            <div id="group" class="form-group">
                <label for="apellido">Apellido</label><br>
                <input type="text"  name="subname" class="inputregistro "><br>
            </div>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha de nacimiento</label><br>
            <input type="date" name="date" min="1950-01-01" class="inputregistro"><br>
            </div>

            <div class="form-group">
            <label for="dni">DNI</label><br>
            <input type="text" id="dni" name="dni" class="inputregistro"><br>
            </div>
            

        
        
            <div class="form-group">
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
        </div>        

        </form>

        <button class="btnVerde" type="submit" id="enviar" onclick="window.modal1.showModal();" >Siguiente</button>

    </div>

    <dialog id="modal1">

        <h1>Datos de contacto</h1>
        <br>
        <br>

        <div class="contBlan">
            <form name="formulario" method="post" id="signupForm">
            <br>
            <div class="form-group">
                <label for="correo">Correo electrónico</label><br>
                <input type="text" id="email" name="email" class="inputregistro"><br>
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label><br>
                <input type="text" id="password" name="password" class="inputregistro"><br>
            </div>
           
                <button type="submit" id="enviar" class="btnVerde">Confirmar</button>
            
            </form>

            <a href="./index_nutricionista.html">Ir nutricionista</a>
        </div>
    </dialog>
</div>

<script src="../js/appRegistro.js"></script>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins)
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    Include all compiled plugins (below), or include individual files as needed 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script>-->

</body>
</html>