<?php //SESIONES
    include_once '../database.php'

    session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset();

        session_destroy();
    }

    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: index_admin.php');
            break;

            case 2:
                header('location: index_nutricionista.php');
            break;

            case 3:
                header('location: index_paciente.php');
            break;

            default:
        }
    }

    if(isset($_POST['correo_electronico']) && isset($_POST['contraseña'])){
        $correo_electronico = $_POST['correo_electronico'];
        $contraseña = $_POST['contraseña'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT*FROM usuarios WHERE correo_electronico = :correo_electronico AND contraseña = :contraseña');
        $query->execute(['correo_electronico' => $correo_electronico, 'contraseña' => $contraseña]);

        row =
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
<div id="login">
 <section class="side">
        <img src="../img/imgmovil.png" alt="">
    </section>

    <section class="main">
        <div class="login-container">
            <p class="title">¡ Bienvenid@ de nuevo !</p>
            <div class="separator"></div><br>

            <form class="login-form" method="POST" action="#">
                <div class="form-control">
                    <input type="text" placeholder="Correo electronico" class="inputlogin" name="correo_electronico">
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-control">
                    <input type="password" placeholder="Contraseña" class="inputlogin" name="contraseña">
                    <i class="fas fa-lock"></i>
                </div>
                <button class="submit">Acceder</button>
            </form>
            
            <br>
            <a href="../views/registro_nutricionista.php">Darse de alta</a>

        </div>
    </section>
</div>

<script src="../js/app.js"></script>
</body>
</html>