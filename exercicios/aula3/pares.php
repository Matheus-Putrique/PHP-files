<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pares Impares Fatoriais</title>
</head>
<body>
    <?php 
        $par = [];
        $impar = [];
        $fatorial = [];

        for($i = 0; $i <= 15; $i++){
            if($i % 2 == 0){
                $par[] = $i;
            }
            else{
                $impar[] = $i;
            }
        }

        echo "<h2> Pares </h2>";
        foreach($par as $num){
            echo $num . " ";
        }

        echo "<br><br>";
        echo"<h2> Impares </h2>";
        foreach($impar as $num){
            echo $num . " ";
        }
    ?>
</body>
</html>