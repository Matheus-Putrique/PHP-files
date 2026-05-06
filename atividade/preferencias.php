<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        setcookie('tema', $_POST['tema'], time() + 3600);
        header('location:home.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferencias</title>
</head>
<body>
    <h1>Tema</h1>
        <form action="" method="post">
        Claro<input type="radio" name="tema" value = "claro"><br>
        Escuro <input type="radio" name="tema" value = "escuro"><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>