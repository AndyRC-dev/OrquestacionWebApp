<?php
include 'php/conexion.php';

$pdo = new Conexion($file = 'settings_db.ini');
$stmt = $pdo->prepare("SELECT * FROM alumnos");
$stmt->execute();
$array = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();

function get_results($_array)
{
    $str = "";
    foreach ($_array as $valor) {
        $str .= "<tr>" .
            "<td>{$valor["nombre"]}</td>" .
            "<td>{$valor["apellido"]}</td>" .
            "<td>{$valor["email"]}</td>" .
            "<td>{$valor["telefono"]}</td>" .
            "<td><a href='actualizar.php?id={$valor["id"]}'>editar</a></td>" .
            "<td><a href='php/borrar.php?id={$valor["id"]}'>eliminar</a></td>" .
            "</tr>";
    }

    return $str;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/cervantes-ico.ico">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="school-name-container">
                <div class="school-name">Colegio de nivel medio superior "Cervantes Saavedra"</div>
            </div>
            <div style="width: fit-content;">
                <div class="list-title">
                    Lista de alumnos
                </div>
                <div class="list-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Teléfono</th>
                            </tr>
                        </thead>
                        <?php
                        echo get_results($array);
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>