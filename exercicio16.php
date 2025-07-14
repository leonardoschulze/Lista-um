    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fibonacci</title>
    </head>

    <body>

        <form method="POST" action="">
            <label for="numero">Informe sua idade :</label>
            <input type="number" id="numero" name="numero" required>
            <button type="submit" name="verificar">Verificar</button>
        </form>

        <form method="POST1" action="">
            <label for="text">Informe seu nome :</label>
            <input type="text" id="text" name="text" required>
            <button type="submit" name="verificar1">Verificar</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (isset($_POST['verificar']));
            $numero = $_POST['numero'];
            
            if (isset($_POST1['verificar1']));
            $text = $_POST1['text'];

            if ($numero < 16){
                echo ($text . " não pode votar ainda");
            }else{
                echo ($text . " pode votar ainda");
            }
        };
        ?>

    </body>

    </html>