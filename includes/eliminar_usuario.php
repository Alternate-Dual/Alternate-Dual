<?php
include_once("database.php");
$db = new Database();
$conexion = $db->connect();

if (!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query("delete from usuarios where id=$id ");
}
?>