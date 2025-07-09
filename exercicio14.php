<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>

<body>

    <form method="POST" action="">
        <label for="numero">Informe um ano :</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verificar']));
        $numero = $_POST['numero'];
        
        //Achei a fórmula no google , até pq já estava com dor de cabeça de fazer isto
        if($numero % 4 == 0 AND ($numero % 100 != 0 OR $numero % 400 == 0)){
            echo "Ano bixessto";
        }else{
            echo "Ano não bixessto";
        }

    };
    ?>

</body>

</html>