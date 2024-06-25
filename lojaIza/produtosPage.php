
<html>
    <html lang="en">
        <head>
            <title>Yjewels</title>
            <script src="js/jquery-3.7.1.min.js" type="text/javascript"></script>
            <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
            <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
            <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
            <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
            <style>
                body {
                    position: relative;
                    background-color: #fffdf3;
                }
                a{
                    color: #bdf0e979;
                }
                h1, h2{
                    text-align: center;
                }
                .container-fluid{
                    text-align: center;
                    color:black;
                }
                div.gallery {
                    margin: 2%;
                    border: 2px solid #ccc;
                    float: left;
                    width: 100%;
                    padding: 2%;
                    align-items: center;
                    background-color: #bdf0e979;
                }

                div.gallery:hover {
                    border: 1px solid #777;
                }

                div.gallery img {
                    width: 100%;
                    height: auto;
                }

                div.desc {
                    padding: 15px;
                    text-align: center;
                    align-items: center;
                }
                btn{
                    background-color: #bdf0e979;
                }
            </style> 
        </head>
        <body>
            <?php
                    require_once './shared/header.php';
            ?>
            <br>
            <div class="container">
            <?php if(isset($_REQUEST['search'])): ?>
            <br>
            <h2>Resultado da sua pesquisa:</h2>
            <br>
            <div class="row">
                <?php
                require_once 'controller/itensController.php';
                $pesquisas = searchItens($_REQUEST['search']);
                foreach ($pesquisas as $produto){
                    echo '<div class="col-sm-4">';
                        echo '<div class="gallery">';
                            echo '<img src="'.$produto['caminho'].'"  width="600" height="400">';
                            echo '<div class="desc"><h4>R$'.$produto['preco_venda'].'</h4>';
                                echo '<a href="./controller/carrinhoController.php?itensId='.$produto['id'].'"><button class="btn"style="background-color: #3596ea;">Adicionar ao Carrinho</button></a></div>';
                        echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
            <?php else: ?>

            
            <div id="aneis" class="container-fluid">
                <h1>Anéis</h1>
            </div>
            <div class="row">
                <?php
                require_once 'controller/itensController.php';
                $listarProdutos = loadAll();
                foreach ($listarProdutos as $produto){
                    if($produto['nome'] === 'anel'){
                        echo '<div class="col-sm-4">';
                            echo '<div class="gallery">';
                                echo '<img src="'.$produto['caminho'].'"  width="600" height="400">';
                                echo '<div class="desc"><h4>R$'.$produto['preco_venda'].'</h4>';
                                echo '<a href="./controller/carrinhoController.php?itensId='.$produto['id'].'"><button class="btn"style="background-color: #3596ea;">Adicionar ao Carrinho</button></a></div>';
                            echo '</div>';
                        echo '</div>';
                    }
                }
                ?>
            </div>


            <div id="brincos" class="container-fluid">
                <br>
                <h1>Brincos</h1>
                <br>
            </div>
            <div class="row">
                <?php
                foreach ($listarProdutos as $produto){
                    if($produto['nome'] === 'brinco'){
                        echo '<div class="col-sm-4">';
                            echo '<div class="gallery">';
                                echo '<img src="'.$produto['caminho'].'"  width="600" height="400">';
                                echo '<div class="desc"><h4>R$'.$produto['preco_venda'].'</h4>';
                                    echo '<a href="./controller/carrinhoController.php?itensId='.$produto['id'].'"><button class="btn"style="background-color: #3596ea;">Adicionar ao Carrinho</button></a></div>';
                            echo '</div>';
                        echo '</div>';
                    }
                }
                ?>
            </div>
            
            <div id="colares" class="container-fluid">
                <br>
                <h1>Colares</h1>
                <br>
            </div>
            <div class="row">
                <?php
                foreach ($listarProdutos as $produto){
                    if($produto['nome'] === 'colar'){
                        echo '<div class="col-sm-4">';
                            echo '<div class="gallery">';
                                echo '<img src="'.$produto['caminho'].'"  width="600" height="400">';
                                echo '<div class="desc"><h4>R$'.$produto['preco_venda'].'</h4>';
                                    echo '<a href="./controller/carrinhoController.php?itensId='.$produto['id'].'"><button class="btn"style="background-color: #3596ea;">Adicionar ao Carrinho</button></a></div>';
                            echo '</div>';
                        echo '</div>';
                    }
                }
                ?>
            </div>
            <div id="pulseiras" class="container-fluid">
                <br>
                <h1>Pulseiras</h1>
                <br>
            </div>
            <div class="row">
                <?php
                foreach ($listarProdutos as $produto){
                    if($produto['nome'] === 'pulseira'){
                        echo '<div class="col-sm-4">';
                            echo '<div class="gallery">';
                                echo '<img src="'.$produto['caminho'].'"  width="600" height="400">';
                                echo '<div class="desc"><h4>R$'.$produto['preco_venda'].'</h4>';
                                    echo '<a href="./controller/carrinhoController.php?itensId='.$produto['id'].'"><button class="btn"style="background-color: #3596ea;">Adicionar ao Carrinho</button></a></div>';
                            echo '</div>';
                        echo '</div>';
                    }
                }
                ?>
            </div>
            <?php endif ?>
            <br>
            </div>
        </body>
    </html>