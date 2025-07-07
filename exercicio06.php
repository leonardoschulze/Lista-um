<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe Número</title>
</head>
<body>

    <form method="POST" action="">
        <label for="numero">Informe um Número :</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar">Verificar</button>
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD']== 'POST'){
            
            if(isset($_POST['verificar']));
            $numero = $_POST['numero'];
            //$resultado = 1;
            
            for($i = 1; $i <= $numero; $i++){
                $resultado = $numero % $i;
                if($resultado == 0){
                    echo "<br>", $i;
                };
            };
        };
    ?>
    
</body>
</html>