<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>
</head>
<body>
    <?php 
        $produtos = [
        ["nome" => "Cadeira", "quantidade" => 4, "preco" => 80.00, "categoria" => "Cozinha" ],
        ["nome" => "Sofa", "quantidade" => 2, "preco" => 600.00, "categoria" => "Sala"],
        ["nome" => "Cama", "quantidade" => 3, "preco" => 400.00, "categoria" => "Quarto"]

        ];

        foreach($produtos as $produto){
            echo"<p> Produto: {$produto['nome']}|  Valor: {$produto['preco']}| Quantidade: {$produto['quantidade']}| Categoria: {$produto['categoria']}";


        }
        echo "<br>";
        echo"--------------------";
        $totalGeral = 0;
        foreach($produtos as $produto){
            $total = $produto['quantidade'] * $produto['preco']; 
            $totalGeral += $total;        
        }
        echo"<p> Valor total de estoque:" .$totalGeral. "</p>";

        $media = 0;
        $preco = 0;
        foreach($produtos as $produto){
            $preco += $produto ['preco'];
            $media = $preco / 3;
        }
        echo"<p> Media de preços: " .$media. "</p>";

        $mais_aparece = 0;

        foreach($produtos as $produto){
            if($produto['quantidade'] > $mais_aparece){
                $mais_aparece = $produto;
            }
        }
        echo"<p>Categoria que mais aparece: " .$produto['categoria']. "</p>";
    ?>
</body>
</html>