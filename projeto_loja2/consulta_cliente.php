<?php

require_once "banco.php";


$sql = "
    SELECT
        nome_cliente,
        email,
        telefone,
        cidade
    FROM cliente
    ORDER BY nome_cliente
";


$resultado = $banco->query($sql);

$clientes = $resultado->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Clientes cadastrados</title>

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

            <h1>Clientes cadastrados</h1>


            <?php if (count($clientes) > 0): ?>

                <table class="tabela">

                    <tr>

                        <th>Nome</th>

                        <th>E-mail</th>

                        <th>Telefone</th>

                        <th>Cidade</th>

                    </tr>


                    <?php foreach ($clientes as $cliente): ?>

                        <tr>

                            <td>
                                <?= htmlspecialchars($cliente["nome_cliente"]) ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($cliente["email"]) ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($cliente["telefone"]) ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($cliente["cidade"]) ?>
                            </td>

                        </tr>

                    <?php endforeach; ?>

                </table>


            <?php else: ?>

                <div class="mensagem">

                    Nenhum cliente cadastrado.

                </div>

            <?php endif; ?>


            <a href="cadastro_cliente.php" class="botao">
                Cadastrar cliente
            </a>

        </div>

    </main>

</body>

</html>