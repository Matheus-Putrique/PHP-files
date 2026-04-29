<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        function SalarioBonus($salario, $cargo){
            if($cargo == "gerente"){
                $salario += $salario * 0.20;
            }
            else{
                $salario += $salario * 0.10;
            }
            return $salario;
        }
        function Saudacao($hora){
            if($hora >= 5 && $hora <= 12 ){
               return "<h2>Bom dia! </h2>";
            }
            else if($hora > 12 && $hora < 19){
               return "<h2>Boa tarde!</h2>";
            }
            else{
              return "<h2>Boa noite!</h2>";
            }
        }
    ?>

    <h1>Informações</h1>

    <form action="" method="get">
        Nome: <input type="text" name="nome">
        Senha: <input type="password" name="senha">
        Cargo: <input type="text" name="cargo">
        Salário: <input type="text" name="salario">
        Hora atual: <input type="number" name="hora">
        <br><br>
        <button type="submit">Pronto</button>
    </form>

    <?php 
        
        if(isset($_GET['senha'], $_GET['hora']) && !empty($_GET['senha']) && !empty($_GET['hora'])){
            if($_GET['senha'] == "php2025"){
                $salarioFinal = SalarioBonus($_GET['salario'], $_GET['cargo']);
                $saudacao = Saudacao($_GET['hora']);

               echo"<h2>".$saudacao. "</h2>";
               echo"<h2>Salario:</h2>";
               echo"<p> O salario com bonus incluso fica: ".number_format($salarioFinal, 2, "," , ".")."</p>";
            }
            else{
                $saudacao = Saudacao($_GET['hora']);
                echo"<h2>".$saudacao. "</h2>";
                echo"<h2>Acesso negado!</h2>";
            }
        }
    ?>
</body>
</html>