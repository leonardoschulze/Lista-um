<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>

<body>

    <form method="POST" action="">
        <label for="numero">Informe a temperatura em celsius :</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verificar']));
        $numero = $_POST['numero'];
        
        $fahrenheit = ($numero*1.8) + 32;
        echo ($fahrenheit . " Fahrenheit");

    };
    ?>

</body>

</html>