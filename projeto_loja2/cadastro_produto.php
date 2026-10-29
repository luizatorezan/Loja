<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro de Produto</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <nav>

        <a href="index.php" class="logo">
            Minha Loja
        </a>

        <div class="links">

            <a href="index.php">Início</a>

            <a href="cadastro_cliente.php">Cadastrar cliente</a>

            <a href="cadastro_produto.php">Cadastrar produto</a>

            <a href="consulta_cliente.php">Clientes</a>

            <a href="consulta_produto.php">Produtos</a>

        </div>

    </nav>


    <main class="container">

        <div class="card">

            <h1>Cadastro de Produto</h1>


            <?php if (isset($_SESSION["mensagem"])): ?>

                <div class="mensagem">

                    <?= htmlspecialchars($_SESSION["mensagem"]) ?>

                </div>

                <?php unset($_SESSION["mensagem"]); ?>

            <?php endif; ?>


            <form action="dados_produto.php" method="POST">

                <label for="nome_produto">
                    Nome do produto:
                </label>

                <input
                    type="text"
                    id="nome_produto"
                    name="nome_produto"
                    required
                >


                <label for="quantidade">
                    Quantidade:
                </label>

                <input
                    type="number"
                    id="quantidade"
                    name="quantidade"
                    min="0"
                    required
                >


                <label for="valor_compra">
                    Valor de compra:
                </label>

                <input
                    type="number"
                    id="valor_compra"
                    name="valor_compra"
                    step="0.01"
                    min="0"
                    required
                >


                <label for="valor_venda">
                    Valor de venda:
                </label>

                <input
                    type="number"
                    id="valor_venda"
                    name="valor_venda"
                    step="0.01"
                    min="0"
                    required
                >


                <button type="submit">
                    Cadastrar produto
                </button>

            </form>


            <a href="consulta_produto.php" class="voltar">
                Ver produtos cadastrados
            </a>

        </div>

    </main>

</body>

</html>