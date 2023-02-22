<?php 
include_once("database.php");
$db = new Database();
$conexion = $db->connect();
//var_dump($_POST); //Ver lo que se esta mandando en sql

if(!empty($_POST["crear_receta"])){
    if(empty($_POST["nombre_receta"]) or empty($_POST["tiempo_ejecucion"]) or empty($_POST["complejidad"]) or empty($_POST["tipo_comida"]) or empty($_POST["ingredientes"]) or empty($_POST["preparacion"]) or empty($_POST["calorias"]) or empty($_POST["carbohidratos"]) or empty($_POST["proteinas"])or empty($_POST["grasas"])){
        echo '<div>uno de los campos esta vacio</div>';
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
        $sql=$conexion->query("INSERT INTO receta(nombre_receta,tiempo_ejecucion,complejidad,tipo_comida,ingredientes,preparacion,calorias,carbohidratos,proteinas,grasas)values('$nombre_receta','$tiempo_ejecucion','$complejidad','$tipo_comida','$ingredientes','$preparacion','$calorias','$carbohidratos','$proteinas','$grasas')");
        if ($sql) {
            echo 'Receta creada correctamente';
        } else {
            echo 'Receta no creada';
        }
        
    }
}
?>