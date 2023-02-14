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
<div id="login">
 <section class="side">
        <img src="../img/imgmovil.png" alt="">
    </section>

    <section class="main">
        <div class="login-container">
            <p class="title">¡ Bienvenid@ de nuevo !</p>
            <a href="../views/index_admin.html"><div class="separator"></div></a><br>

            <form class="login-form">
                <div class="form-control">
                    <input type="text" placeholder="Usuario" class="inputlogin">
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-control">
                    <input type="password" placeholder="Contraseña" class="inputlogin">
                    <i class="fas fa-lock"></i>
                </div>

                <button class="submit">Acceder</button>
                <a href="../views/index_paciente.html">*</a>
            </form>
            
            <br>
            <a href="../views/registro_nutricionista.html">Darse de alta</a>

        </div>
    </section>
</div>

<script src="../js/app.js"></script>
</body>
</html>