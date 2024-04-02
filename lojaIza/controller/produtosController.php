<?php

function loadAll() {
    require_once './model/produtosModel.php';
    $produto = new produtosModel();
    $listarProdutos = $produto->loadAll();
    return $listarProdutos;
}
