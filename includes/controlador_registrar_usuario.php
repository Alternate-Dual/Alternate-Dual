<?php 
if(!empty($_POST["registro"])){
    if(empty($_POST["nombre"]) or empty($_POST["apellidos"]) or empty($_POST["fecha_nacimiento"]) or empty($_POST["dni"]) or empty($_POST["sexo"]) or empty($_POST["correo_electronico"]) or empty($_POST["password"])){
        echo 'uno de los campos esta vacio';
    }else{
        $nombre=$_POST["nombre"];
        $apellidos=$_POST["apellidos"];
        $fecha_nacimiento=$_POST["fecha_nacimiento"];
        $dni=$_POST["dni"];
        $sexo=$_POST["sexo"];
        $correo_electronico=$_POST["correo_electronico"];
        $password=$_POST["password"];
    }
}
?>