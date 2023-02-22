<?php 
include_once("database.php");
$db = new Database();
$conexion = $db->connect();
//var_dump($_POST); //Ver lo que se esta mandando en sql

if (isset($_FILES["foto"])){
    $file = $_FILES["foto"];
    $nombre = $file["name"];
    $tipo = $file["type"];
    $ruta_provisional = $file["tmp_name"];
    $size = $file["size"];
    $dimensiones = getimagesize($ruta_provisional);
    $witdh = $dimensiones[0];
    $height = $dimensiones[1];
    $carpeta = "../fotos/";
  if ($tipo != 'image/jpg' && $tipo != 'image/JPG' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/PNG'){
    echo "Error, el archivo no es una imagen";
  } else if ($size > 3*1024*1024){
    echo "Error, el tamaño máximo permitido es un 3MB";
  } else{
    $src = $carpeta.$nombre;
    move_uploaded_file($ruta_provisional, $src);
    $imagen = "../fotos/".$nombre;
  }
}

if(!empty($_POST["crear_receta"])){
    if(empty($_POST["nombre_receta"]) or empty($_POST["tiempo_ejecucion"]) or empty($_POST["complejidad"]) or empty($_POST["tipo_comida"]) or empty($_POST["ingredientes"]) or empty($_POST["preparacion"]) or empty($_POST["calorias"]) or empty($_POST["carbohidratos"]) or empty($_POST["proteinas"])or empty($_POST["grasas"])){
        echo '<div>Uno de los campos esta vacio</div>';
    }else{
        $nombre_receta=$_POST["nombre_receta"];
        $tiempo_ejecucion=$_POST["tiempo_ejecucion"];
        $complejidad=$_POST["complejidad"];
        $tipo_comida=$_POST["tipo_comida"];
        $ingredientes=$_POST["ingredientes"];
        $preparacion=$_POST["preparacion"];
        $calorias=$_POST["calorias"];
        $carbohidratos=$_POST["carbohidratos"];
        $proteinas=$_POST["proteinas"];
        $grasas=$_POST["grasas"];
        $sql=$conexion->query("INSERT INTO receta(nombre_receta,tiempo_ejecucion,complejidad,tipo_comida,ingredientes,preparacion,calorias,carbohidratos,proteinas,grasas,foto)values('$nombre_receta','$tiempo_ejecucion','$complejidad','$tipo_comida','$ingredientes','$preparacion','$calorias','$carbohidratos','$proteinas','$grasas','$imagen')");
        if ($sql) {
            echo 'Receta creada correctamente';
        } else {
            echo 'Receta no creada';
        }
        
    }
}
?>