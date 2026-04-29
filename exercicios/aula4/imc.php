<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function calcularIMC($peso, $altura){
            return $peso / ($altura * $altura);
        }
    ?>
    <h1>Calculadora de IMC</h1>
    
    <form action="" method="get">
        Peso: <input type="number" name="peso" step="0.01">
        Altura: <input type="number" name="altura" step="0.01">
        Idade: <input type="number" name="idade" step="0.01">
        <br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php 
        if(isset($_GET['peso'], $_GET['altura'], $_GET['idade'])){
         $peso = floatval($_GET['peso']);
         $altura = floatval($_GET['altura']);   
        
        $calculo = calcularIMC($peso, $altura);

            if($calculo < 18.5){
                echo"<p>Abaixo do peso</p>";
            }
            else if($calculo >= 18.5 && $calculo <= 24.9){
                echo"<p>Normal</p>";
            }
            else if($calculo >= 25 && $calculo <= 29.9){
                echo"<p>Sobrepeso</p>";
            }
            else{
                echo"<p>Obeso</p>";
            }
        }
    ?>
</body>
</html>