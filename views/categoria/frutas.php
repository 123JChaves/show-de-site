<?php

    $urlCategoria8 = "http://localhost/show-de-feira/public/apis/produto.php?categoria=8";
    $dadosCategoria8 = json_decode(file_get_contents($urlProduto));

    //print_r($dadosProduto);

?>

<div class="card">
    <div class="card-header">

        <?php
        if(empty($dadosCategoria8->id)) {
            echo "<h2>Categoria inválida!</h2>";
        } else {
            echo "<h2>{$dadosCategoria8->nome}</h2>"; 
        }
        ?>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-md-4">
                <img src="<?=$img?><?=$dadosCategoria8->imagem?>" class="w-100" alt="<?=$dadosCategoria8->nome?>">
            </div>
            <div class="col-12 col-md-8">
                <p><strong>Frutas:</strong></p>
                <?=$dadosCategoria8->descricao?>
                <p class="float-start valor">
                R$ <?=number_format($dadosCategoria8->valor, 2, ",",".")?>
                </p>
                <p class="float-end">
                    <a href="carrinho/adicionar/<?=$dadosCategoria8->id?>" class="btn btn-success">
                        <i class="fas fa-plus"></i>Adicionar ao Carrinho
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>