<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercadinho JWT</title>
    <style>
    body {
        background-color: #C8C8C8;
        font-family: Arial, sans-serif;
        max-width: 600px;
        margin: 20px auto;
        color: black;

    }

    form {
        margin-bottom: 40px;
    }
    </style>
</head>

<body>
    <h1>Mercadinho JWT </h1>

    <?php
    // Array  dos produtos cadastrados

    $produtosCadastrados = [];

    // Aqui sera exibido informacoes do porduto informações do produto
    function getProduto($produto)
    {
        return "Produto: {$produto['nome']}, Preço: {$produto['preco']}, Quantidade: {$produto['quantidade']}";
    }

    // Função para setar informações de um produto
    function setProduto(&$produto, $data)
    {
        $produto['nome'] = $data['nome'];
        $produto['preco'] = $data['preco'];
        $produto['quantidade'] = $data['quantidade'];
    }

    // informacoes de venda de produtos
    function setVenda(&$produto, $data)
    {
        // Verifica se o produto está cadastrado
        if (!empty($produto['nome'])) {
            // Verifica se há estoque suficiente
            if ($produto['quantidade'] >= $data['quantidadeVenda']) {
                // Atualiza o estoque após a venda
                $produto['quantidade'] -= $data['quantidadeVenda'];
                return "Venda realizada com sucesso.";
            } else {
                return "Estoque insuficiente para realizar a venda.";
            }
        } else {
            return "Produto não cadastrado.";
        }
    }

    // Adiciona produtos ao estoque
    function adicionarProduto(&$produto, $data)
    {
        // Verifica se o produto está cadastrado
        if (!empty($produto['nome'])) {
            // Adiciona a quantidade ao estoque
            $produto['quantidade'] += $data['quantidadeAdicao'];
            return "Produto adicionado ao estoque.";
        } else {
            return "Produto não cadastrado.";
        }
    }

    // Aqui sera exibido lista de produtos cadastrados
    function listarProdutos($produtos)
    {
        echo "<h2>Lista de Produtos Cadastrados</h2>";

        if (empty($produtos)) {
            echo "<p>Nenhum produto cadastrado ainda.</p>";
        } else {
            echo "<ul>";
            foreach ($produtos as $produto) {
                echo "<li>" . getProduto($produto) . "</li>";
            }
            echo "</ul>";
        }
    }

    // Se o formulário for enviado, cadastra, vende ou adiciona produto
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['cadastrar'])) {
            // Cadastrar novo produto
            $novoProduto = [
                'nome' => $_POST['nome'],
                'preco' => $_POST['preco'],
                'quantidade' => $_POST['quantidade']
            ];

            setProduto($novoProduto, $novoProduto);
            $produtosCadastrados[] = $novoProduto;

            echo "<p>Produto cadastrado com sucesso.</p>";
            echo "<p>" . getProduto($novoProduto) . "</p>";
        } elseif (isset($_POST['vender'])) {
            // Realizar venda
            $resultadoVenda = setVenda(end($produtosCadastrados), ['quantidadeVenda' => $_POST['quantidadeVenda']]);
            echo "<p>" . $resultadoVenda . "</p>";
        } elseif (isset($_POST['adicionar'])) {
            // Adicionar produto ao estoque
            $resultadoAdicao = adicionarProduto(end($produtosCadastrados), ['quantidadeAdicao' => $_POST['quantidadeAdicao']]);
            echo "<p>" . $resultadoAdicao . "</p>";
        }
    }

    // Exibindo a lista de produtos cadastrados
    listarProdutos($produtosCadastrados);

    // Exibindo informações do produto no posto de venda
    if (!empty($produtosCadastrados)) {
        echo "<h2>Posto de Venda</h2>";
        $produtoPosto = end($produtosCadastrados);
        echo "<p>" . getProduto($produtoPosto) . "</p>";

        // Formulário para venda
        echo "<form method='post'>";
        echo "<label for='quantidadeVenda'>Quantidade para Venda:</label>";
        echo "<input type='number' name='quantidadeVenda' required>";
        echo "<button type='submit' name='vender'>Realizar Venda</button>";
        echo "</form>";

        // Formulário para adicionar produto ao estoque
        echo "<form method='post'>";
        echo "<label for='quantidadeAdicao'>Quantidade para Adição:</label>";
        echo "<input type='number' name='quantidadeAdicao' required>";
        echo "<button type='submit' name='adicionar'>Adicionar ao Estoque</button>";
        echo "</form>";
    }
    ?>

    <!-- Adicionando um formulário para cadastrar produto -->
    <h2>Cadastro de Produto</h2>
    <form method="post">
        <label for="nome">Nome do Produto:</label>
        <input type="text" name="nome" required>
        <label for="preco">Preço:</label>
        <input type="number" name="preco" step="0.01" required>
        <label for="quantidade">Quantidade em Estoque:</label>
        <input type="number" name="quantidade" required>
        <button type="submit" name="cadastrar">Cadastrar Produto</button>
    </form>


</body>

</html>