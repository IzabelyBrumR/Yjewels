
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
                h1{
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
                    width: 80%;
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
            <div id="aneis" class="container-fluid">
                <h1>Anéis</h1>
            </div>
            <div class="row">
                <?php
                require_once 'controller/produtosController.php';
                $listarProdutos = loadAll();
                foreach ($listarProdutos as $produto){
                    if($produto['nome'] === 'anel'){
                        echo '<div class="col-sm-4">';
                            echo '<div class="gallery">';
                                echo '<img src="'.$produto['caminho'].'"  width="600" height="400">';
                                echo '<div class="desc"><h4>'.$produto['preco_venda'].'</h4>';
                                    echo '<button class="btn"style="background-color: #3596ea;">Adicionar ao Carrinho</button></div>';
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
                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="img/brincos/brinco1.png"  width="600" height="400">
                        <div class="desc"><h4>R$3800,00</h4>
                            <button class="btn"style="background-color: #3596ea;">Adicionar ao Carrinho</button></div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="img/brincos/brinco2.png"  width="600" height="400">
                        <div class="desc"><h4>R$2500,00</h4>
                            <button class="btn"style="background-color: #3596ea;">Adicionar ao Carrinho</button></div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="img/brincos/brinco3.png"  width="600" height="400">
                        <div class="desc"><h4>R$7800,00</h4>
                            <button class="btn"style="background-color: #3596ea;">Adicionar ao Carrinho</button></div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="img/brincos/brinco4.png"  width="600" height="400">
                        <div class="desc"><h4>R$1549,00</h4>
                            <button class="btn"style="background-color: #3596ea;">Adicionar ao Carrinho</button></div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="img/brincos/brinco5.png"  width="600" height="400">
                        <div class="desc"><h4>R$11650,00</h4>
                            <button class="btn"style="background-color: #3596ea;">Adicionar ao Carrinho</button></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="img/brincos/brinco6.png"  width="600" height="400">
                        <div class="desc"><h4>R$4569,00</h4>
                            <button class="btn"style="background-color: #3596ea;">Adicionar ao Carrinho</button></div>
                    </div>
                </div>
            </div>
            
            <div id="colares" class="container-fluid">
                <br>
                <h1>Colares</h1>
                <br>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="img/colar/colar1.png"  width="600" height="400">
                        <div class="desc"><h4>R$9875,00</h4>
                            <button class="btn"style="background-color: #3596ea;">Adicionar ao Carrinho</button></div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="img/colar/colar2.png"  width="600" height="400">
                        <div class="desc"><h4>R$7845,00</h4>
                            <button class="btn"style="background-color: #3596ea;">Adicionar ao Carrinho</button></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="img/colar/colar3.png"  width="600" height="400">
                        <div class="desc"><h4>R$3498,00</h4>
                            <button class="btn"style="background-color: #3596ea;">Adicionar ao Carrinho</button></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="img/colar/colar4.png"  width="600" height="400">
                        <div class="desc"><h4>R$6548,00</h4>
                            <button class="btn"style="background-color: #3596ea;">Adicionar ao Carrinho</button></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="img/colar/colar5.png"  width="600" height="400">
                        <div class="desc"><h4>R$1525,00</h4>
                            <button class="btn"style="background-color: #3596ea;">Adicionar ao Carrinho</button></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="img/colar/colar6.png"  width="600" height="400">
                        <div class="desc"><h4>R$3254,00</h4>
                            <button class="btn"style="background-color: #3596ea;">Adicionar ao Carrinho</button></div>
                    </div>
                </div>
            </div>
            <div id="pulseiras" class="container-fluid">
                <br>
                <h1>Pulseiras</h1>
                <br>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="img/pulseira/pulseira1.png"  width="600" height="400">
                        <div class="desc"><h4>R$4568,00</h4>
                            <button class="btn"style="background-color: #3596ea;">Adicionar ao Carrinho</button></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="img/pulseira/pulseira2.png"  width="600" height="400">
                        <div class="desc"><h4>R$2480,00</h4>
                            <button class="btn"style="background-color: #3596ea;">Adicionar ao Carrinho</button></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="img/pulseira/pulseira3.png"  width="600" height="400">
                        <div class="desc"><h4>R$6790,00</h4>
                            <button class="btn"style="background-color: #3596ea;">Adicionar ao Carrinho</button></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="img/pulseira/pulseira4.png"  width="600" height="400">
                        <div class="desc"><h4>R$3489,00</h4>
                            <button class="btn"style="background-color: #3596ea;">Adicionar ao Carrinho</button></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="img/pulseira/pulseira5.png"  width="600" height="400">
                        <div class="desc"><h4>R$4597,00</h4>
                            <button class="btn"style="background-color: #3596ea;">Adicionar ao Carrinho</button></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="img/pulseira/pulseira6.png"  width="600" height="400">
                        <div class="desc"><h4>R$7859,00</h4>
                            <button class="btn"style="background-color: #3596ea;">Adicionar ao Carrinho</button></div>
                    </div>
                </div>
            </div>
            <br>
            <?php
            require_once './shared/footer.php';
            ?>
        </body>
    </html>