<?php
include 'conexion.php';

$name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$lastname = filter_input(INPUT_GET, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
$telephone = filter_input(INPUT_GET, 'telephone', FILTER_SANITIZE_SPECIAL_CHARS);

$pdo = new Conexion($file = 'settings_db.ini');

$query = "INSERT INTO alumnos VALUES(?,?,?,?,?)";
$stm = $pdo->prepare($query);
if($stm->execute(['',$name,$lastname,$email,$telephone])){
    header("Location: ../index.php");
}else{
    header("Location: ../error.php");
}
?>