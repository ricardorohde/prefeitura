<?php
    require "resources/config.php";
    include"resources/date_pt_br.php";
    $dbh = new Library\Database;
?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head> 
<meta charset="UTF-8">
    <title><?php echo $news_title." - ". $sitename ?></title>
    
    <!--- Facebook Meta Tag --->
    <meta property="og:url"                content="<?php echo $urlatual ?>" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="When Great Minds Don’t Think Alike" />
    <meta property="og:description"        content="How much does culture influence creative thinking?" />
    <meta property="og:image"              content="http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg" />
    
    <?php include"includes/head.php"; ?>

</head>
<body class="noticia">
<?php 
    include"modulos/header.php";
?>
<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li>
                <a href="http://www.example.com/books">Início</a>
            </li>
            <li>
                <a href="http://www.example.com/sciencefiction">Notícias</a>
            </li>
            <li>
                <a href="http://www.example.com/sciencefiction">Categoria</a>
            </li>
            <li>
                Prefeitura será premiada com selo digital por transparência na prestação de contas
            </li>
        </ol>
        <h1 class="titulo">Prefeitura será premiada com selo digital por transparência na prestação de contas</h1>
    </div>
</section>
<section id="noticia">
    <div class="container">
        <div class="row">
            <div class="col-e col-md-9">
                <div class="corpo-noticia">
                    <div class="resumo"><span>A capital paraense recebe, pelo segundo ano consecutivo, o Festival das Flores de Holambra, evento itinerante que ocorre no país há mais de 20 anos.</span></div>
                    <ul class="detalhes-noticia">
                        <li><i class="fa fa-calendar-o" aria-hidden="true"></i> 18 de Dez de 2016</li>
                        <li><i class="fa fa-tag" aria-hidden="true"></i> Infraestrutura</li>
                    </ul>
                    <div class="noticia_img">
                        <img src="/thumb.php?w=860&img=media/noticias/01.jpg" alt="Leno Sousa"> 
                    </div>
                    <div class="conteudo_noticia conteudo_texto">
                        <p> A capital paraense recebe, pelo segundo ano consecutivo, o Festival das Flores de Holambra, evento itinerante que ocorre no país há mais de 20 anos. Este ano, o Festival inicia nesta sexta-feira (31), na Praça dos Estivadores, em frente à Estação das Docas, e segue até o domingo (9). A entrada é gratuita. </p>
                        <p> As flores são produzidas em Holambra (SP), cidade que concentra mais de 400 produtores de flores e plantas ornamentais através maior cooperativa da América Latina. Com espécies de mudas de flores e plantas cuidadosamente selecionadas que se adequem ao clima da região, o evento retorna à Belém com ainda mais opções de flores e plantas ornamentais para ambientes internos e externos a preços populares. </p>
                        <p> Entre os destaques, estão as plantas carnívoras que se alimentam de pequenos insetos, sendo a preferida das crianças. Outra novidade é a rosa do deserto, uma planta rara típica do sul da África e da península arábica. No Festival, há ainda variadas palmeiras, podocarpos, buchinhos e outras espécies de paisagismo bem como diversas mudas de frutíferas. </p>
                        <h2>Exemplo Título 2</h2>
                        <h3>Exemplo Título 3</h3>
                        <h4>Exemplo Título 4</h4>
                        <h5>Exemplo Título 5</h5>
                        <h6>Exemplo Título 6</h6>
                        <ul>
                            <li>Lista 2</li>
                            <li>Lista 1</li>
                            <li>Lista 1</li>
                        </ul>
                    </div>
                    <ul class="compartilhe">
                        <li>
                            <a class="fb"><i class="fa fa-facebook" aria-hidden="true"></i><span>Compartilhar no Facebook</span></a>
                        </li>
                    </ul>
                    <ul class="tags">
                        <li><a>Tag 1</a></li>
                        <li><a>Tag 2</a></li>
                    </ul>
                    <div class="comentarios">
                        <div class="t_section"> 
                            <h3>Comentários</h3>
                        </div>
                        <div class="fb-comments" data-href="http://prefeitura.apon.com.br/" data-width="100%" data-numposts="5"></div>
                    </div>
                    <div class="noticias-semelhantes">
                        <div class="t_section"> 
                            <h3>Mais sobre <b>Cultura</b></h3>
                        </div>
                        <ul>
                            <li><a class="row"><div class="img col-md-5"><img src="/thumb.php?w=300&h=150&img=media/noticias/planta3.jpg"></div> <div class="det col-md-7"><h5>Belém recebe o Festival das Flores de Holambra</h5><span>15 de Março de 2016</span></div></a></li>
                            <li><a class="row"><div class="img col-md-5"><img src="/thumb.php?w=300&h=150&img=media/noticias/planta3.jpg"></div> <div class="det col-md-7"><h5>Belém recebe o Festival das Flores de Holambra</h5><span>15 de Março de 2016</span></div></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    include"modulos/rodape.php";
?>
</body>
</html>
<?php include"includes/footer.php";
?>
