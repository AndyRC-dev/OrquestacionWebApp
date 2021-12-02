<?php
include 'conexion.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$lastname = filter_input(INPUT_GET, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
$telephone = filter_input(INPUT_GET, 'telephone', FILTER_SANITIZE_SPECIAL_CHARS);

$pdo = new Conexion($file = 'settings_db.ini');

$query = "UPDATE alumnos set nombre='$name', "
    . "apellido='$lastname',"
    . "telefono='$telephone',"
    . "email='$email'"
    . " WHERE id=$id";
$stm = $pdo->prepare($query);
if ($stm->execute()) {
    header("Location: ../lista.php");
} else {
    header("Location: ../error.php");
}