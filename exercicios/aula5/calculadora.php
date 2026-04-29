<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <?php 
        function Adicao($n1, $n2){
            return $n1 + $n2;
        }
        function Subtracao($n1, $n2){
            return $n1 - $n2;
        }
        function Multiplicacao($n1, $n2){
            return $n1 * $n2;
        }
        function Divisao($n1, $n2){
            return $n1 / $n2;
        }
    ?>
    
    <h1>Calculadora Simples</h1>
    
    <form action="" method="get">
        Numero1 = <input type="number" name="num1">
        <br><br>
        Numero2 = <input type="number" name="num2">
        <br><br>
        Operador = + <input type="radio" name="operador" value="adicao">
                   | - <input type="radio" name="operador" value="subtracao">
                   | x <input type="radio" name="operador" value="multiplicacao">
                   | / <input type="radio" name="operador" value="divisao">
                <br><br>
                   <button type="submit">Calcular</button>
    </form>

    <?php 
        if(isset($_GET['num1'], $_GET['num2'], $_GET['operador'])){
            $operacao = $_GET['operador'];
            $num1 = intval($_GET['num1']);
            $num2 = intval($_GET['num2']);
            
            
            switch($operacao){
                case $operacao == "adicao": 
                    echo"<p>".$num1. " + " .$num2. " = " .Adicao($num1, $num2). "</p>";
                    break;
                
                case $operacao == "subtracao":
                    echo"<p>".$num1. " - " .$num2. " = " .Subtracao($num1, $num2). "</p>";
                    break;

                case $operacao == "multiplicacao":
                    echo"<p>".$num1. " x " .$num2. " = " .Multiplicacao($num1, $num2). "</p>";
                    break;

                case $operacao == "divisao":
                    echo"<p>".$num1. " / " .$num2. " = " .Divisao($num1, $num2). "</p>";
            }
        }
    ?>
</body>
</html>