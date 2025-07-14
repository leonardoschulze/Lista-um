    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Maior Número</title>
    </head>

    <body>

        <form method="POST" action="">
            <label for="numero1">Informe o 1° Número :</label>
            <input type="number" id="numero1" name="numero1" required>
            <br>
            <label for="numero2">Informe o 2° Número :</label>
            <input type="number" id="numero2" name="numero2" required>
            <br>
            <label for="numero3">Informe o 2° Número :</label>
            <input type="number" id="numero3" name="numero3" required>
            <br>
            <button type="submit" name="verificar">Verificar</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (isset($_POST['verificar']));
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $numero3 = $_POST['numero3'];
            if ($numero1 > $numero2 and $numero1 > $numero3) {
                echo ($numero1 . " É maior");
            } else if ($numero2 > $numero1 and $numero2 > $numero3) {
                echo ($numero2 . " É maior");
            } else {
                echo ($numero3 . " É maior");
            };
        };
        ?>

    </body>

    </html>