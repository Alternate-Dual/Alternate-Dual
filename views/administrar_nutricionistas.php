<?php 

session_start();

if(!isset($_SESSION['rol'])){
    header('location: login.php');
}else{
    if($_SESSION['rol'] != 1){
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
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png"> <!-- Favicon -->
    <link rel="stylesheet" href="../css/style.css"> <!-- style.css ubicado en la carpeta public -->
    <script src="https://kit.fontawesome.com/4a0af06348.js" crossorigin="anonymous"></script> <!-- Script para libreria de iconos -->
</head>

<body>

    <header>
        <a href="index_admin.php" id="logo"><img src="../img/3.png"></a>
        <nav>
            <ul id="menu">
                <li><a href="index_admin.php"><i class="fa-regular fa-address-book"></i> Pacientes</a></li>
                <li><a href="administrar_nutricionistas.php"><i class="fa-solid fa-bowl-food"></i> Nutricionistas</a></li>
            </ul>
        </nav>
        
        <div id="user">
            <div id="profile" onclick="menuToggle();">
                <img src="../img/icon2.png">
            </div>
            <div id="profilemenu">
                <h3>¡ Hola **** !<br><span>Administrador</span></h3>
                <ul>
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
    <h1 class="admin">Nutricionistas</h1>

    <?php
     include ("../includes/database.php");
     include ("../includes/eliminar_usuario.php");
    ?>

    <table class="admin">
        
        <?php
        $db = new Database();
        $conexion = $db->connect();
        
        $sql=$conexion->query("select * from usuarios where rol_id='2'");
        while ($datos = $sql->fetchObject()){ ?>
            <tr class="admin">
            <td class="admin"><img src="../img/favicon-32x32.png" alt=""></td>
            <td class="admin"><?= $datos->nombre?> <?= $datos->apellidos?></td>
            <td class="admin">
                <button type="submit" class="btnVerde" style="transition: all .30s ease;" onclick="window.location.href='#abrir_modal_contacto'">Contactar</button> <br>
                    <div id="abrir_modal_contacto" class="modal-window">
                          <div>
                            <a href="#" title="Cerrar" class="modal-close">Cerrar</a>
                            <h3>Nombre y apellidos: </h3>
                            <p><?= $datos->nombre?> <?= $datos->apellidos?></p>
                            <h3>Fecha de nacimiento:</h3>
                            <p><?= $datos->fecha_nacimiento?></p>
                            <h3>DNI:</h3>
                            <p><?= $datos->dni?></p>
                            <h3>Correo electronico:</h3>
                            <p><?= $datos->correo_electronico?></p>
                        </div>
                    </div>
                <button class="btnVerde" style="transition: all .30s ease;" onclick="window.location.href='modificar_usuario.php?id=<?= $datos->id ?>'">Modificar</button> <br>
                <button type="submit" class="btnVerde" style="transition: all .30s ease;" onclick="window.location.href='administrar_nutricionistas.php?id=<?= $datos->id ?>'">Eliminar</button>
            </td>
        </tr>
        <?php }
        ?>

    </table>
    <br>
    <br>
    <script src="../js/app.js"></script>
</body>
</html>