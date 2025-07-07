<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe Número</title>
</head>
<body>

    <form method="POST" action="">
        <label for="numero">Verifica número :</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar">Verificar</button>
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD']== 'POST'){
            
            if(isset($_POST['verificar']));
            $numero = $_POST['numero'];
            
            if($numero > 0){
                echo "Número positivo!";
            }else if($numero < 0){
                echo "Número negativo!";
            }else{
                echo "Número é igual zero";
            };
        };
    ?>
    
</body>
</html>