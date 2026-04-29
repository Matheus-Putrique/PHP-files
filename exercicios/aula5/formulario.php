<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Nome Commpleto: <input type="text" name="nome">
        Email: <input type="email" name="email">
        Idade: <input type="number" name="idade">
        <br><br>
        <button type="submit">entrar</button>
    </form>

    <?php 
        function boas_vindas($nome, $email, $idade){
            return "<p>Olá, seja bem vindo usuário " .$nome. " com a idade de " . $idade . " e com o email cadastrado de " . $email ."</p>";
        }
        
        if(isset($_POST['nome'], $_POST['email'], $_POST['idade'])){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $idade = intval($_POST['idade']);

            echo boas_vindas($nome, $email, $idade);
        }
    
    ?>
</body>
</html>