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
Utilize o formulário  para cadastrar um novo produto. Preencha o nome, preço e a quantidade em estoque e clique em "Cadastrar Produto".


Como Usar
Clone este repositório ou baixe e descompacte o ZIP.
Coloque a pasta do projeto em C:\xampp\htdocs\.
Acesse http://localhost/nome-da-pasta no navegador.
Utilize os formulários para cadastrar produtos, realizar vendas e controlar o estoque.
Divirta-se gerenciando seu Mercadinho JWT localmente!



Desafio Proposto:

Você está encarregado de desenvolver um sistema de Ponto de Venda (PDV) para o
cliente: Mercadinho JWT. A aplicação deve incluir uma classe responsável pelo cadastro
de produtos, com os atributos de nome, preço e quantidade. A classe Produto deve
conter um método setProduto, que terá um parâmetro chamado data, representando
um array contendo informações como nome, preço e quantidade. Esse método será
responsável por cadastrar o produto e alimentar os atributos da classe. Além disso, a
classe deve possuir o método getProduto, que será responsável apenas por exibir o
produto atualmente cadastrado.
Após a conclusão da classe Produto, deve-se criar a classe Venda, que herdará os
atributos da classe produto, possuindo em seus próprios atributos a quantidade e
desconto.
Dentro da classe `Venda`, devem ser implementados os seguintes métodos:
- getVenda;
- setVenda.
O método setVenda é responsável pelo registro da venda. Inicialmente, ele deve
verificar se o produto está cadastrado. Em caso afirmativo, deve validar o estoque do
produto e, em seguida, permitir a venda do produto. Após a conclusão da venda, é
necessário utilizar o método getVenda para exibir a última venda registrada e informar o
estoque atual do produto.
Observações:
● O código resposta deverá ser hospedado no gitHub e enviado o link do repositório
para: erivan@objetivosistemas.com.br
● É estritamente proibido utilizar trechos de códigos plagiados da internet;
● É necessário explicar através de comentários a lógica aplicada;
● Você terá total liberdade para a criação do código, desde que não fuja das
funcionalidades básicas do sistema (Lançar venda e Cadastrar Produto);
● É obrigatório o uso de conceitos de POO com PHP, caso o contrário o candidato
será eliminado;
● Prazo para conclusão: 13/01/2024 ATÉ AS 12 HORAS



