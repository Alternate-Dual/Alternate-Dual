<?php 
include("database.php");
if(!empty($_POST["registro"])){
    if(empty($_POST["nombre"]) or empty($_POST["apellidos"]) or empty($_POST["fecha_nacimiento"]) or empty($_POST["dni"]) or empty($_POST["sexo"]) or empty($_POST["correo_electronico"]) or empty($_POST["password"])){
        echo '<div>uno de los campos esta vacio</div>';
    }else{
        $nombre=$_POST["nombre"];
        $apellidos=$_POST["apellidos"];
        $fecha_nacimiento=$_POST["fecha_nacimiento"];
        $dni=$_POST["dni"];
        $sexo=$_POST["sexo"];
        $correo_electronico=$_POST["correo_electronico"];
        $password=$_POST["password"];
        $sql=$connection->query("INSERT INTO usuario(nombre,apellidos,fecha_nacimiento,dni,sexo,correo_electronico,password,rol_id)values('$nombre','$apellidos','$fecha_nacimiento','$dni','Mujer','$correo_electronico','$password','2')");
        if ($sql == 1) {
            echo 'usuario registrado correctamente';
        } else {
            echo 'usuario no registrado';
        }
        
    }
}
?>