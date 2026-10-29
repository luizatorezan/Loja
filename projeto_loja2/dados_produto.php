<?php

session_start();

require_once "banco.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome_produto"];

    $quantidade = $_POST["quantidade"];

    $valor_compra = $_POST["valor_compra"];

    $valor_venda = $_POST["valor_venda"];


    $sql = "
        INSERT INTO produto
        (
            nome_produto,
            quantidade,
            valor_compra,
            valor_venda
        )

        VALUES
        (
            :nome,
            :quantidade,
            :valor_compra,
            :valor_venda
        )
    ";


    $comando = $banco->prepare($sql);


    $comando->execute([

        ":nome" => $nome,

        ":quantidade" => $quantidade,

        ":valor_compra" => $valor_compra,

        ":valor_venda" => $valor_venda

    ]);


    $_SESSION["mensagem"] = "Produto cadastrado com sucesso!";


    header("Location: cadastro_produto.php");

    exit;


} else {

    header("Location: cadastro_produto.php");

    exit;

}