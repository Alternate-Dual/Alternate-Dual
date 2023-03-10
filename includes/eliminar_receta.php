<?php
include_once("database.php");
$db = new Database();
$conexion = $db->connect();


if (!empty($_GET["ID"])){
    $ID=$_GET["ID"];
    $sql=$conexion->query("delete from receta where id=$ID ");
}
?>