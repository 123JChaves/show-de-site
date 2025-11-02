<?php
    session_start();

    $id = $_GET["id"] ?? NULL;
    $qtde = $_GET["qtde"] ?? NULL;

    $id = (int)$id;
    $qtde = (int)$qtde;

    if(empty($id)) {
        echo"Produto Iválido!";
    } else if($qtde < 1) {
        echo"Quantidade Inválida!";
    } else {
        $_SESSION["carrinho"][$id]["qtde"] = $qtde;
    }

