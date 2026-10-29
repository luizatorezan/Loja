<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro de Cliente</title>

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

            <h1>Cadastro de Cliente</h1>


            <?php if (isset($_SESSION["mensagem"])): ?>

                <div class="mensagem">

                    <?= htmlspecialchars($_SESSION["mensagem"]) ?>

                </div>

                <?php unset($_SESSION["mensagem"]); ?>

            <?php endif; ?>


            <form action="dados_cliente.php" method="POST">

                <label for="nome_cliente">
                    Nome:
                </label>

                <input
                    type="text"
                    id="nome_cliente"
                    name="nome_cliente"
                    required
                >


                <label for="email">
                    E-mail:
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    required
                >


                <label for="telefone">
                    Telefone:
                </label>

                <input
                    type="text"
                    id="telefone"
                    name="telefone"
                    required
                >


                <label for="rua">
                    Rua:
                </label>

                <input
                    type="text"
                    id="rua"
                    name="rua"
                    required
                >


                <label for="numero">
                    Número:
                </label>

                <input
                    type="text"
                    id="numero"
                    name="numero"
                    required
                >


                <label for="complemento">
                    Complemento:
                </label>

                <input
                    type="text"
                    id="complemento"
                    name="complemento"
                >


                <label for="bairro">
                    Bairro:
                </label>

                <input
                    type="text"
                    id="bairro"
                    name="bairro"
                    required
                >


                <label for="cidade">
                    Cidade:
                </label>

                <input
                    type="text"
                    id="cidade"
                    name="cidade"
                    required
                >


                <label for="estado">
                    Estado:
                </label>

                <input
                    type="text"
                    id="estado"
                    name="estado"
                    required
                >


                <button type="submit">
                    Cadastrar cliente
                </button>

            </form>


            <a href="consulta_cliente.php" class="voltar">
                Ver clientes cadastrados
            </a>

        </div>

    </main>

</body>

</html>