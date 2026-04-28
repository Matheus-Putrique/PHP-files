<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de login simples</title>
</head>
<body>
    <?php 
        $usuario_cadastrado = true;
        $senha_correta = true;

        if($usuario_cadastrado == true && $senha_correta == true){
            echo"<p> Acesso permitido </p>";
        }
        else{
            echo"<p> Acesso negado </p>";
        }
    ?>
</body>
</html>