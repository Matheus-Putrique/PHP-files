<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index2</title>
</head>
<body>
    <?php
        $alunos = ["Ana", "Carlos", "Beatriz", "Daniel", "Fernanda", "Gustavo"];
        
        echo "<h2>Lista de presença</h2>";

        foreach($alunos as $aluno){
            $presenca = rand(0, 1) ? "Presente" : "Ausente";
            $cor = ($presenca == "Presente") ? "green" : "red";
            echo "<p style='color: $cor;'><strong>$aluno:</strong>$presenca</p>";
        }
    
    
    ?>
</body>
</html>
