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
                    <form action="php/insercion.php" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td class="label-cell">
                                    <span class="label">Nombre</span>
                                </td>
                                <td>
                                    <div class="input-wrapper name-input-container">
                                        <input type="text" name="name" id="name" required>
                                        <input type="text" name="lastname" id="lastname1" required>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-cell">
                                    <span class="label">Email</span>
                                </td>
                                <td>
                                    <div class="input-wrapper">
                                        <input type="email" name="email" id="email" required>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-cell">
                                    <span class="label">Teléfono</span>
                                </td>
                                <td>
                                    <div class="input-wrapper">
                                        <input type="tel" name="telephone" id="telephone" required>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <div class="save-button-container">
                            <button class="save-button">GUARDAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>