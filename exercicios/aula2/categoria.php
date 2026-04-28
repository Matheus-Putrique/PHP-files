<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $idade = 59;

        if($idade < 12){
            echo "<p> Idade: ".$idade. "</p>";
            echo "<p> Criança </p>";
        }
        else if($idade >= 12 && $idade <= 17){
            echo "<p> Idade: ".$idade. "</p>";
            echo "<p> Adolescente </p>";
        }
        else if($idade >= 18 && $idade <= 59){
            echo "<p> Idade: ".$idade. "</p>";
            echo "<p>  Adulto </p>";
        }
        else{
            echo "<p> Idade: ".$idade. "</p>";
            echo "<p> Idoso </p>";
        }
    ?>
</body>
</html>