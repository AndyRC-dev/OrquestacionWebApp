<?php
include 'php/conexion.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

$pdo = new Conexion($file = 'settings_db.ini');
$stmt = $pdo->prepare("SELECT * FROM alumnos WHERE id='$id'");
$stmt->execute();
$array = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();

$name = $array[0]["nombre"];
$lastname = $array[0]["apellido"];
$email = $array[0]["email"];
$telephone = $array[0]["telefono"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/cervantes-ico.ico">
    <link rel="stylesheet" href="styles.css">
    <title>Escuela</title>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="school-name-container">
                <div class="school-name">Colegio de nivel medio superior "Cervantes Saavedra"</div>
            </div>
            <div class="form-container">
                <div class="title-container">Agregar estudiante +</div>
                <div class="form-wrapper">
                    <form action="php/actualizacion.php" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <table>
                            <tr>
                                <td class="label-cell">
                                    <span class="label">Nombre</span>
                                </td>
                                <td>
                                    <div class="input-wrapper name-input-container">
                                        <input type="text" name="name" id="name" placeholder="Juan" 
                                                value="<?php echo $name ?>" required>
                                        <input type="text" name="lastname" id="lastname1" placeholder="López" 
                                                value="<?php echo $lastname ?>" required>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-cell">
                                    <span class="label">Email</span>
                                </td>
                                <td>
                                    <div class="input-wrapper">
                                        <input type="email" name="email" id="email" placeholder="correo@ejemplo.com"
                                                value="<?php echo $email ?>" required>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-cell">
                                    <span class="label">Teléfono</span>
                                </td>
                                <td>
                                    <div class="input-wrapper">
                                        <input type="tel" name="telephone" id="telephone" placeholder="4771234567"
                                                value="<?php echo $telephone ?>" required>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <div class="save-button-container">
                            <button class="save-button">ACTUALIZAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>