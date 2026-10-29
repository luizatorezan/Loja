<?php

require_once "banco.php";


$sql = "
    SELECT
        nome_produto,
        quantidade,
        valor_compra,
        valor_venda
    FROM produto
    ORDER BY nome_produto
";


$resultado = $banco->query($sql);

$produtos = $resultado->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Produtos cadastrados</title>

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

            <h1>Produtos cadastrados</h1>


            <?php if (count($produtos) > 0): ?>

                <table class="tabela">

                    <tr>

                        <th>Nome</th>

                        <th>Quantidade</th>

                        <th>Valor de compra</th>

                        <th>Valor de venda</th>

                    </tr>


                    <?php foreach ($produtos as $produto): ?>

                        <tr>

                            <td>
                                <?= htmlspecialchars($produto["nome_produto"]) ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($produto["quantidade"]) ?>
                            </td>

                            <td>
                                R$
                                <?= number_format(
                                    $produto["valor_compra"],
                                    2,
                                    ",",
                                    "."
                                ) ?>
                            </td>

                            <td>
                                R$
                                <?= number_format(
                                    $produto["valor_venda"],
                                    2,
                                    ",",
                                    "."
                                ) ?>
                            </td>

                        </tr>

                    <?php endforeach; ?>

                </table>


            <?php else: ?>

                <div class="mensagem">

                    Nenhum produto cadastrado.

                </div>

            <?php endif; ?>


            <a href="cadastro_produto.php" class="botao">
                Cadastrar produto
            </a>

        </div>

    </main>

</body>

</html>