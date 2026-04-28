<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nota1 = 10.0;
        $nota2 = 10.0;
        $nota3 = 10.0;

        $media = (float) ($nota1 + $nota2 + $nota3) / 3;

        switch($media){
            case $media >= 9:
                echo"<p> Média: " .$media. "</p>";
                echo"<p>Excelente</p>";
                break;
            case $media >= 7 && $media <= 8.9:
                echo"<p> Média: " .$media. "</p>";
                echo"<p> Bom </p>";
                break;
            case $media >= 5 && $media <= 6.9:
                echo"<p> Média: " .$media. "</p>";
                echo"<p> Regular </p>";
                break;
            case $media < 5:
                echo"<p> Média: " .$media. "</p>";
                echo "<p> Reprovado </p>";
                break;
        }
    ?>
</body>
</html>