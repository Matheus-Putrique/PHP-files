<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>
    <?php 
    $produtos = [
        ["nome" => "Celular", "preco" => 1500, "categoria" => "Eletrônicos"],
        ["nome" => "Geladeira", "preco" => 3500, "categoria" => "Eletrodomésticos"],
        ["nome" => "Sofá", "preco" => 1200, "categoria" => "Móveis"],
        ["nome" => "Notebook", "preco" => 4000, "categoria" => "Eletrônicos"]
    ];

    echo "<h2>Lista de produtos</h2>";

    $totalPreco = 0;
    $quantidadeProdutos = count($produtos);

    foreach ($produtos as $item){
        echo "<p><strong>Nome:</strong> {$item['nome']} | 
              <strong>Preço:</strong> R$ " . number_format($item['preco'], 2, ',', '.') . " | 
              <strong>Categoria:</strong> {$item['categoria']}</p>";

        $totalPreco += $item['preco'];
    }

    echo "<h3>Média de preços: R$ " . number_format($totalPreco / $quantidadeProdutos, 2, ',', '.') . "</h3>";
    ?>
</body>
</html>