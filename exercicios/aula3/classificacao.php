<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro e Classificacao</title>
</head>
<body>
    <?php 
        $funcionarios =[
            ["nome" => "Matheus", "idade" => 18, "salario" => 1500.00, "cargo" => "Junior"],
            ["nome" => "Gilson", "idade" => 52, "salario" => 7000.00, "cargo" => "Senior"],
            ["nome" => "Renan", "idade" => 23, "salario" => 4000.00, "cargo" => "Pleno"]
        ];

        echo"<h1>Funcionários</h1>";
        
        foreach($funcionarios as $funcionario){
            echo"<p>Nome: {$funcionario['nome']} | Idade: {$funcionario['idade']} | Salario: {$funcionario['salario']} | Cargo: {$funcionario['cargo']}";
        }
        $media_idade = 0;
        $total_idade = 0;
        foreach($funcionarios as $funcionario){
            $total_idade += $funcionario['idade'];
            $media_idade = $total_idade / count($funcionarios);
        }
        echo"<h2>media de idade</h2>";
        
        echo"<p>Media:  " .$media_idade. "</p>";
    ?>
</body>
</html>