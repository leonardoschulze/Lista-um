<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palíndromo</title>
</head>

<body>

    <form method="POST" action="">
        <label for="text">Informe uma Palavra :</label>
        <input type="text" id="text" name="text" required>
        <button type="submit" name="verificar">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verificar']));
        $text = $_POST['text'];


        function Palindromo($text)
        {
            //tive que pesquisar a fórmula para fazer o palíndromo , sorry
            $reverso = strrev($text);
            // strrev é para retornar a palavra invertida, pelo que vi
            return $text == $reverso;
        }

        if (Palindromo($text)) {
            echo "$text é um palíndromo.\n";
        } else {
            echo "$text não é um palíndromo.\n";
        }
    };
    ?>

</body>

</html>