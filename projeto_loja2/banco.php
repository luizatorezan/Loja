<?php

try {

    $banco = new PDO('sqlite:loja.db');

    $banco->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    // Tabela de clientes
    $banco->exec("
        CREATE TABLE IF NOT EXISTS cliente (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            nome_cliente TEXT NOT NULL,
            email TEXT NOT NULL,
            telefone TEXT NOT NULL,
            rua TEXT NOT NULL,
            numero TEXT NOT NULL,
            complemento TEXT,
            bairro TEXT NOT NULL,
            cidade TEXT NOT NULL,
            estado TEXT NOT NULL
        )
    ");

    // Tabela de produtos
    $banco->exec("
        CREATE TABLE IF NOT EXISTS produto (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            nome_produto TEXT NOT NULL,
            quantidade INTEGER NOT NULL,
            valor_compra REAL NOT NULL,
            valor_venda REAL NOT NULL
        )
    ");

} catch (PDOException $erro) {

    die("Erro ao conectar ao banco: " . $erro->getMessage());

}