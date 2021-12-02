<?php
include 'conexion.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

$pdo = new Conexion($file='settings_db.ini');
$stmt = $pdo->prepare("DELETE FROM alumnos WHERE id=$id");

if($stmt->execute()){
    header("Location: ../lista.php");
}else{
    header("Location: ../error.php");
}

