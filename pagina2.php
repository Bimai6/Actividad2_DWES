<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: Actividad2_DWES.php');
    exit;
} else {
    $nombreUsuario = trim($_POST['name']);
    $regEx =  "/^[A-Za-zÁÉÍÓÚáéíóúÑñ]+(?: [A-Za-zÁÉÍÓÚáéíóúÑñ]+)+$/";
    if (empty($nombreUsuario)) {
        header('Location: Actividad2_DWES.php?error=Rellene el campo del usuario');
        exit;
    } else {
        if (!preg_match($regEx, $nombreUsuario)) {
            header('Location: Actividad2_DWES.php?error=El usuario no sigue el formato válido');
            exit;
        } else {
            include 'lugares.php';
            $paisSeleccionado = $_POST['lugares'];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2</title>
</head>

<body>
    <form action="pagina3.php" method="POST">
        <h3>Seleccionada la ciudad para el país seleccionado: </h3>
        <?php echo '<h2>' .  $paisSeleccionado . '</h2>';

        echo '<select name="ciudades">';
        foreach ($lugares[$paisSeleccionado] as $ciudad) {
            echo '<option value="' . $ciudad . '">' . $ciudad . '</option>';
        }

        echo '</select> <br>';
        ?>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>