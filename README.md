Mercadinho JWT - Guia Rápido
Bem-vindo ao Mercadinho JWT, uma aplicação de gerenciamento de produtos em PHP. Este guia irá ajudá-lo a configurar e usar o sistema localmente através do XAMPP.

Configuração Inicial
Instalação do XAMPP:

Baixe e instale o XAMPP de acordo com o seu sistema operacional.
Ativar Apache:

Inicie o XAMPP e ative o Apache.
Configurar Diretório:

Coloque a pasta do projeto no diretório C:\xampp\htdocs\.
Acesso no Navegador:

Abra o navegador e acesse http://localhost/nome-da-pasta, onde nome-da-pasta é o nome da pasta do projeto.
Funcionalidades
Cadastro de Produto
Utilize o formulário abaixo para cadastrar um novo produto. Preencha o nome, preço e a quantidade em estoque e clique em "Cadastrar Produto".

html
Copy code
<form method="post">
    <label for="nome">Nome do Produto:</label>
    <input type="text" name="nome" required>
    <label for="preco">Preço:</label>
    <input type="number" name="preco" step="0.01" required>
    <label for="quantidade">Quantidade em Estoque:</label>
    <input type="number" name="quantidade" required>
    <button type="submit" name="cadastrar">Cadastrar Produto</button>
</form>
Venda de Produto
No posto de venda, você pode realizar vendas e adicionar produtos ao estoque. As informações do produto disponível para venda são exibidas, e você pode utilizar os formulários correspondentes.

html
Copy code
<h2>Posto de Venda</h2>
<p>Informações do Produto: Produto, Preço, Quantidade</p>

<!-- Formulário para venda -->
<form method="post">
    <label for="quantidadeVenda">Quantidade para Venda:</label>
    <input type="number" name="quantidadeVenda" required>
    <button type="submit" name="vender">Realizar Venda</button>
</form>

<!-- Formulário para adicionar produto ao estoque -->
<form method="post">
    <label for="quantidadeAdicao">Quantidade para Adição:</label>
    <input type="number" name="quantidadeAdicao" required>
    <button type="submit" name="adicionar">Adicionar ao Estoque</button>
</form>
Lista de Produtos Cadastrados
Veja a lista de produtos cadastrados até o momento.

html
Copy code
<h2>Lista de Produtos Cadastrados</h2>

<ul>
    <!-- Os produtos cadastrados serão listados aqui -->
    <li>Produto: Nome, Preço, Quantidade</li>
</ul>
Como Usar
Clone este repositório ou baixe e descompacte o ZIP.
Coloque a pasta do projeto em C:\xampp\htdocs\.
Acesse http://localhost/nome-da-pasta no navegador.
Utilize os formulários para cadastrar produtos, realizar vendas e controlar o estoque.
Divirta-se gerenciando seu Mercadinho JWT localmente!






