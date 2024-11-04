<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Evaluable 2 DWES</title>
</head>

<body>
    <h1>Gestor de viajes MLG</h1>
    <?php
    include 'lugares.php';
    ?>
    <form action="pagina2.php" method="POST">
        Usuario: <input type="text" name="name"> <br>
        <select name="lugares">
            <?php
            foreach ($paises as $pais) {
                echo '<option value="' . $pais . '">' . $pais . '</option>';
            }

            ?>
        </select> <br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if (isset($_GET['error'])) {
        echo '<p style="color: red">' . htmlspecialchars($_GET['error']) . "</p>";
    }
    ?>
</body>

</html>