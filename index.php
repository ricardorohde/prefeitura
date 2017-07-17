<?php
    require "resources/config.php";
    include"resources/date_pt_br.php";
    $dbh = new Library\Database;
?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head> 
<meta charset="UTF-8">
    <title><?php echo $sitenome ?></title>

    <?php include"includes/head.php"; ?>
    
    <script src="/lib/slippry-1.4.0/dist/slippry.min.js"></script>
    <link rel="stylesheet" href="/lib/slippry-1.4.0/dist/slippry.css">
    <link rel="stylesheet" type="text/css" href="/lib/slick-1.6.0/slick/slick.css">
    
    <link rel="stylesheet" href="/teste/jalendar/style/jalendar.css" type="text/css" />
    <script type="text/javascript" src="/teste/jalendar/js/jalendar.min.js"></script>
</head>
<body>

<?php 
    include"modulos/header.php";
?>
    <section class="box_topo">
        <div class="container clearfix">
            <div class="row">
                <div class="box-slider col-md-7">
                    <ul id="slideprincipal">
                        <li><a href="#slide1"><img src="/thumb.php?w=630&h=350&img=media/noticias/01.jpg" alt="This is caption 1 <a href='#link'>Even with links!</a>"></a></li>
                        <li><a href="#slide2"><img src="/thumb.php?w=630&h=350&img=media/noticias/02.jpg"  alt="This is caption 2"></a></li>
                        <li><a href="#slide3"><img src="/thumb.php?w=630&h=350&img=media/noticias/03.jpg" alt="And this is some very long caption for slide 3. Yes, really long."></a></li>
                    </ul>
                </div>
                <div class="links col-md-5">
                    <ul class="row">
                        <li class="col-md-6 col-xs-6"><a><img src="/media/imagens/icones/nfe.png"><span>Nota Fiscal Eletrônica</span></a></li>
                        <li class="col-md-6 col-xs-6"><a><img src="/media/imagens/icones/nfe.png"><span>Nota Fiscal Eletrônica</span></a></li>
                        <li class="col-md-6 col-xs-6"><a><img src="/media/imagens/icones/nfe.png"><span>Nota Fiscal Eletrônica</span></a></li>
                        <li class="col-md-6 col-xs-6"><a><img src="/media/imagens/icones/nfe.png"><span>Nota Fiscal Eletrônica</span></a></li>
                    </ul>
                </div>
                
            </div>
        </div>
    </section>
    <section class="box1 marginbottom_30">
        <div class="container">
            <div class="linksprincipais">
                <ul>
                    <li><a><img src="/media/imagens/icones/clock.png"><span>Horários<br>de Atendimento</span></a></li>
                    <li><a><img src="/media/imagens/icones/sic.png"><span>e-Sic</span></a></li>
                    <li><a><img src="/media/imagens/icones/ouvidoria.png"><span>Ouvidoria</span></a></li>
                    <li><a><img src="/media/imagens/icones/test.png"><span>Editais e<br>Concursos</span></a></li>
                    <li><a><img src="/media/imagens/icones/boss.png"><span>Perguntas<br>Frequentes</span></a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="box2 paddingtb_30">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-3">
                    <div class="modulo mclaro box_secretarias">
                        <div class="titulo_modulo">
                            <span>Secretarias</span>
                        </div>
                        <div class="modulo-content">
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="modulo mclaro box_editais">
                        <div class="titulo_modulo">
                            <span>Ultimas Publicações</span>
                        </div>
                        <div class="modulo-content">
                            <ul>
                                <li>
                                    <div class="detalhes">
                                        <h3>Exemplo de Artigo</h3><span>Abertura: 10/07/2017</span>
                                    </div>
                                    <a class="vermais">Visualizar</a>
                                </li>
                                    
                                <li><h3>Exemplo de Artigo</h3><span>Abertura: 10/07/2017</span></li>
                                <li><h3>Exemplo de Artigo</h3><span>Abertura: 10/07/2017</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-d">
                    <div class="modulo">
                        <div class="titulo_modulo">
                            <span>Agenda do Prefeito</span>
                        </div>
                        <div class="modulo-content">
                            <div id="yourId" class="jalendar">
                                <div class="added-event" 
                                    data-link="http://pikselmatik.com" 
                                    data-date="10-07-2017" 
                                    data-title="WWDC 13 on San Francisco, LA">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </section>
    <section class="box_multimidia paddingtb_30">
        <div class="container">
            <div class="titulo_section textcenter marginbottom_20">
                <h2>Portal Multimídia</h2>
            </div>
            <ul class="row">
                <li class="col-md-3">
                    <a href="#" class="paddingbottom_20">
                        <span class="hover"><i class="fa fa-video-camera" aria-hidden="true"></i> Assistir</span>
                        <img src="http://i1.ytimg.com/vi/YykjpeuMNEk/mqdefault.jpg">
                        <div class="detalhes">
                            <span>15/07/2017</span>
                            <strong>Coldplay - Hymn For The Weekend</strong>
                        </div>
                    </a>
                </li>
                <li class="col-md-3">
                    <a href="#" class="paddingbottom_20">
                        <span class="hover"><i class="fa fa-video-camera" aria-hidden="true"></i> Assistir</span>
                        <img src="http://i1.ytimg.com/vi/60ItHLz5WEA/mqdefault.jpg">
                        <div class="detalhes">
                            <span>15/07/2017</span>
                            <strong>Alan Walker - Faded</strong>
                        </div>
                    </a>
                </li>
                <li class="col-md-3">
                    <a href="#" class="paddingbottom_20">
                        <span class="hover"><i class="fa fa-video-camera" aria-hidden="true"></i> Assistir</span>
                        <img src="http://i1.ytimg.com/vi/fKopy74weus/mqdefault.jpg">
                        <div class="detalhes">
                            <span>15/07/2017</span>
                            <strong>Imagine Dragons - Thunder</strong>
                        </div>
                    </a>
                </li>
                <li class="col-md-3">
                    <a href="#" class="paddingbottom_20">
                        <span class="hover"><i class="fa fa-video-camera" aria-hidden="true"></i> Assistir</span>
                        <img src="http://i1.ytimg.com/vi/aR1ByHWOuSE/mqdefault.jpg">
                        <div class="detalhes">
                            <span>15/07/2017</span>
                            <strong>Imagine Dragons - Believer/Thunder</strong>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
<?php 
    include"modulos/rodape.php";
    
?>
</body>
</html>
<?php 
    include"includes/footer.php";
?>
<script src="/lib/slick-1.6.0/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script>
    $(function() {
        var demo1 = $("#slideprincipal").slippry({
            // transition: 'fade',
            // useCSS: true,
            // speed: 1000,
            // pause: 3000,
            // auto: true,
            // preload: 'visible',
            // autoHover: false
        });


        $(".regular-slider").slick({
            autoplay: true,
            autoplaySpeed: 4000,
            dots: false,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1
          });
    });
    $(document).ready(function() {
        $('select').material_select();
    });
    
    
    $('#yourId').jalendar({
    customDay: '07/12/2017',
    color: '#577e9a', // Unlimited
    color2: '#57c8bf', // Unlimited
    lang: 'PT',
    sundayStart: true
});
</script>
