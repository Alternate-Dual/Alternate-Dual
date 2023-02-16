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

    <table class="admin">

        <tr class="admin">
            <td class="admin"><img src="../img/favicon-32x32.png" alt=""></td>
            <td class="admin">Carlos Herrera Ruiz</td>
            <td class="admin">Certificacón</td>
            <td class="admin"><a href="#"><i class="fa-regular fa-eye"></i></a></td>
            <td class="admin">
                <button type="submit" class="btnVerde">Aceptar</button>
                <button type="submit" class="btnVerde">Rechazar</button>
                <button type="submit" class="btnVerde">Contactar</button>
            </td>
        </tr>

        <tr>
            <td class="admin"><img src="../img/favicon-32x32.png" alt=""></td>
            <td class="admin">Rosa Martinez García</td>
            <td class="admin"></td>
            <td class="admin"></td>
            <td class="admin">
                <button type="submit" class="btnVerde">Eliminar</button>
                <button type="submit" class="btnVerde">Contactar</button>
            </td>
        </tr>

        <tr class="admin">
            <td class="admin"><img src="../img/favicon-32x32.png" alt=""></td>
            <td class="admin">Lorena Gonzalez Mendez</td>
            <td class="admin"></td>
            <td class="admin"></td>
            <td class="admin">
                <button type="submit" class="btnVerde">Eliminar</button>
                <button type="submit" class="btnVerde">Contactar</button>
            </td>
        </tr>
    </table>
    <script src="../js/app.js"></script>
</body>
</html>