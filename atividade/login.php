<?php session_start(); 

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_SESSION['nome'] = $_POST['nome'];
        }
        if(isset($_POST['lembrar_nome'])){
            setcookie('nome_valido', $_POST['lembrar_nome'], time() + 3600);
            header('location: home.php');
        }
        else{
            setcookie('nome_valido', "", time() -3600);
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="post">
       Nome:  <input type="text" name="nome"><br>
       Lembrar nome: <input type="checkbox" name="lembrar_nome"><br>
        <button type="submit">enviar</button>
    </form>
    
</body>
</html>