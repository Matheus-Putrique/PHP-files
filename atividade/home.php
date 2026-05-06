<?php 
       session_start();
       
       if(isset($_SESSION['nome'])){
            $nome = $_SESSION['nome'];
        
            echo "Seja bem-vindo" .$_SESSION['nome']. "!";
            echo "Dado veio da: SESSION";
        }
        elseif(isset($_POST['lembrar_nome'])){
            $nome = $_COOKIE['nome_valido'];
            echo "Bem_vindo, " .$nome . "!";
            echo "Dado veio da: COOKIE";
        }
        else{
            header('location: login.php');
            exit();
        }
        $tema = isset($_COOKIE['tema']) ? $_COOKIE['tema'] : 'claro'; // padrão: claro

        $cor = ($tema == 'escuro') ? '#333333' : '#ffffff';
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <body style="background-color: <?php echo $cor; ?>"><br>
    <a href="preferencias.php">Tema</a><br> 
    <a href="logout.php">Logout</a>
</body>
</html>