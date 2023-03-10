<?php
    if (!empty($_POST["modificar_usuario"])) {
        if (!empty($_POST["nombre"]) and !empty($_POST["apellidos"]) and !empty($_POST["fecha_nacimiento"]) and !empty($_POST["dni"]) and !empty($_POST["correo_electronico"])){
            $id=$_POST["id"];
            $nombre=$_POST["nombre"];
            $apellidos=$_POST["apellidos"];
            $fecha_nacimiento=$_POST["fecha_nacimiento"];
            $dni=$_POST["dni"];
            $correo_electronico=$_POST["correo_electronico"];
            $sql=$conexion->query(" update usuarios set nombre='$nombre', apellidos='$apellidos', fecha_nacimiento='$fecha_nacimiento', dni='$dni', correo_electronico='$correo_electronico' where id='$id' ");
            if ($sql==1) {
                header("location:index_admin.php");
            } else {
                echo "Usuario modificado";
                header("location:index_admin.php");
            }
            
        } else{
            echo "Hay un campo vacio";
        }
    }
?>