<?php

session_start();

require_once "banco.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome_cliente"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];


    $sql = "
        INSERT INTO cliente
        (
            nome_cliente,
            email,
            telefone,
            rua,
            numero,
            complemento,
            bairro,
            cidade,
            estado
        )

        VALUES
        (
            :nome,
            :email,
            :telefone,
            :rua,
            :numero,
            :complemento,
            :bairro,
            :cidade,
            :estado
        )
    ";


    $comando = $banco->prepare($sql);


    $comando->execute([

        ":nome" => $nome,
        ":email" => $email,
        ":telefone" => $telefone,
        ":rua" => $rua,
        ":numero" => $numero,
        ":complemento" => $complemento,
        ":bairro" => $bairro,
        ":cidade" => $cidade,
        ":estado" => $estado

    ]);


    $_SESSION["mensagem"] = "Cliente cadastrado com sucesso!";


    header("Location: cadastro_cliente.php");

    exit;


} else {

    header("Location: cadastro_cliente.php");

    exit;

}