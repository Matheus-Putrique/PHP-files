<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de desconto</title>
</head>
<body>
    <?php  
        $preco_original = 20;
        $desconto = 10;

        $preco_original = (float) 20;

        $preco_final = $preco_original - ($preco_original * ($desconto / 100 ));

        echo "<p> preço original: ".number_format($preco_original, 2, ",", "."). "</p>";  
        echo "<p> Desconto: $desconto% </p>";
        echo "<p> Preço final: ".number_format($preco_final, 2, ",", ".")."</p>";

    ?>
</body>
</html>