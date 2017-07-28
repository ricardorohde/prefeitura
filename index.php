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
    
    <link rel="stylesheet" href="/lib/jalendar/style/jalendar.css" type="text/css" />
    <script type="text/javascript" src="/lib/jalendar/js/jalendar.min.js"></script>
</head>
<body id="buttons">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9&appId=1828545577414262";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php 
    include"modulos/header.php";
?>
    <section class="box_topo">
        <div class="container">
            <div class="row">
                <div class="box-slider col-md-7">
                    <ul id="slideprincipal">
                        <li><a href="#slide1"><img src="/thumb.php?w=630&h=350&img=media/noticias/01.jpg" alt="This is caption 1 <a href='#link'>Even with links!</a>"></a></li>
                        <li><a href="#slide2"><img src="/thumb.php?w=630&h=350&img=media/noticias/02.jpg"  alt="This is caption 2"></a></li>
                        <li><a href="#slide3"><img src="/thumb.php?w=630&h=350&img=media/noticias/03.jpg" alt="And this is some very long caption for slide 3. Yes, really long."></a></li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <div class="links_transparencia">
                        <ul>
                            <li>
                                <a>
                                    <img src="/media/imagens/icones/e-sic.svg">
                                    <span>Portal da Transparência</span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <img src="/media/imagens/icones/call-center.svg">
                                    <span>Ouvidoria</span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <img src="/media/imagens/icones/e-sic.svg">
                                    <span>Portal E-SIC</span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <img src="/media/imagens/icones/e-sic.svg">
                                    <span>Estrutura Organizacional</span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <img src="/media/imagens/icones/e-sic.svg">
                                    <span>Licitações</span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <img src="/media/imagens/icones/e-sic.svg">
                                    <span>Legislação Municipal</span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <img src="/media/imagens/icones/e-sic.svg">
                                    <span>Contratos e Convênios</span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <img src="/media/imagens/icones/e-sic.svg">
                                    <span>Folha de Pagamento</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box1 sec_full marginbottom_10">
        <div class="container">
            <div class="linksprincipais">
                <div class="linkitem"><a><img src="/media/imagens/icones/clock.png"><span>Horários de Atendimento</span></a></div>
                <div class="linkitem"><a><img src="/media/imagens/icones/sic.png"><span>e-Sic</span></a></div>
                <div class="linkitem"><a><img src="/media/imagens/icones/ouvidoria.png"><span>Ouvidoria</span></a></div>
                <div class="linkitem"><a><img src="/media/imagens/icones/test.png"><span>Editais e Concursos</span></a></div>
                <div class="linkitem"><a><img src="/media/imagens/icones/boss.png"><span>Perguntas Frequentes</span></a></div>
            </div>
        </div>
    </section>
    <section class="marginbottom_20">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-e">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="modulo">
                                <div class="titulo_modulo">
                                    <span>Mais Notícias</span>        
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-e">
                            <div class="noticia_destaque">
                                <a>
                                    <div class="img">
                                        <img src="<?php echo $siteurl ."/thumb.php?w=400&h=230&img=media/noticias/02.jpg" ?>" />
                                    </div>
                                    <div class="info">
                                        <h3>And this is some very long caption for slide 3. Yes, really long.</h3>
                                        <i>18 de ago de 2017</i>
                                        <span>Exemplo de Descrição</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7 col-e col-d">
                            <ul class="mais_noticias">
                                <li class="item">
                                    <a>
                                        <div class="img">
                                            <img src="<?php echo $siteurl ."/thumb.php?w=400&h=230&img=media/noticias/01.jpg" ?>" />
                                        </div>
                                        <div class="info">
                                            <h3>And this is some very long caption for slide 3. Yes, really long.</h3>
                                            <i>18 de ago de 2017</i>
                                        </div>
                                    </a>
                                </li>
                                <li class="item">
                                    <a>
                                        <div class="img">
                                            <img src="<?php echo $siteurl ."/thumb.php?w=400&h=230&img=media/noticias/02.jpg" ?>" />
                                        </div>
                                        <div class="info">
                                            <h3>And this is some very long caption for slide 3. Yes, really long.</h3>
                                            <i>18 de ago de 2017</i>
                                        </div>
                                    </a>
                                </li>
                                <li class="item">
                                    <a>
                                        <div class="img">
                                            <img src="<?php echo $siteurl ."/thumb.php?w=400&h=230&img=media/noticias/03.jpg" ?>" />
                                        </div>
                                        <div class="info">
                                            <h3>And this is some very long caption for slide 3. Yes, really long.</h3>
                                            <i>18 de ago de 2017</i>
                                        </div>
                                    </a>
                                </li>
                                <li class="item">
                                    <a>
                                        <div class="img">
                                            <img src="<?php echo $siteurl ."/thumb.php?w=400&h=230&img=media/noticias/04.jpg" ?>" />
                                        </div>
                                        <div class="info">
                                            <h3>And this is some very long caption for slide 3. Yes, really long.</h3>
                                            <i>18 de ago de 2017</i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-e modulo_avisos">
                            <div class="modulo">
                                <div class="titulo_modulo">
                                    <span>Avisos e Notas</span>        
                                </div>
                                <div class="modulo-content">
                                    <ul>
                                        <li>
                                            <div class="data">
                                                <strong>15</strong>
                                                <span>Jan</span>
                                            </div>
                                            <a class="info">
                                                <h4>Exemplo de Aviso ou Nota de esclarecimento</h4>
                                                <span>Processo seletivo de indicação</span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="data">
                                                <strong>15</strong>
                                                <span>Jan</span>
                                            </div>
                                            <a class="info">
                                                <h4>Exemplo de Aviso ou Nota de esclarecimento</h4>
                                                <span>Processo seletivo de indicação</span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="data">
                                                <strong>15</strong>
                                                <span>Jan</span>
                                            </div>
                                            <a class="info">
                                                <h4>Exemplo de Aviso ou Nota de esclarecimento</h4>
                                                <span>Processo seletivo de indicação</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-d">
                            <div class="modulo">
                                <div class="titulo_modulo">
                                    <span>Editais e Licitações</span>        
                                </div>
                                <div class="modulo-content">
                                    <form class="mod-filtro">
                                        <label>
                                            <select>
                                                <option selected disabled>Escolha uma Opção</option>
                                                <option>Chamadas</option>
                                                <option>Licitações</option>
                                            </select>
                                        </label>
                                        <label>
                                            <select>
                                                <option selected disabled>Escolha uma Opção</option>
                                                <option>Chamadas</option>
                                                <option>Licitações</option>
                                            </select>
                                        </label>
                                    </form>
                                </div>
                            </div>
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
                                <?php
                                    $list_ag = $dbh->prepare("SELECT * FROM pw_agenda ORDER BY pa_id ASC");
                                    $list_ag->execute();
                                        while ( $agenda = $list_ag->fetch(\PDO::FETCH_OBJ) )
                                    {
                                ?>
                                    <div class="added-event" <?php if($agenda->pa_url != null){echo "data-link=\"".$agenda->pa_url."\"";} ?> data-date="<?php echo date("d-m-Y", strtotime($agenda->pa_data))?>" data-title="<?php echo $agenda->pa_titulo?>"></div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="modulo">
                        <div class="titulo_modulo">
                            <span>No Facebook</span>
                        </div>
                        <div class="modulo-content">
                            <div class="fb-page" data-href="https://www.facebook.com/aponweb/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box_multimidia sec_full paddingtb_30">
        <div class="container">
            <div class="titulo_section textcenter marginbottom_20">
                <h2>Portal Multimídia</h2>
            </div>
            <ul id="box-multimidia">
                <li>
                    <a href="#" >
                        <span class="hover"><i class="fa fa-video-camera" aria-hidden="true"></i> Assistir</span>
                        <img src="http://i1.ytimg.com/vi/YykjpeuMNEk/mqdefault.jpg">
                        <div class="detalhes">
                            <span>15/07/2017</span>
                            <strong>Coldplay - Hymn For The Weekend</strong>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" >
                        <span class="hover"><i class="fa fa-video-camera" aria-hidden="true"></i> Assistir</span>
                        <img src="http://i1.ytimg.com/vi/60ItHLz5WEA/mqdefault.jpg">
                        <div class="detalhes">
                            <span>15/07/2017</span>
                            <strong>Alan Walker - Faded</strong>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" >
                        <span class="hover"><i class="fa fa-video-camera" aria-hidden="true"></i> Assistir</span>
                        <img src="http://i1.ytimg.com/vi/fKopy74weus/mqdefault.jpg">
                        <div class="detalhes">
                            <span>15/07/2017</span>
                            <strong>Imagine Dragons - Thunder</strong>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" >
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


        $(".linksprincipais").slick({
            dots: false,
            arrows: false,
            slidesToShow: 5,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 750,
                    settings: {
                        arrows: false,
                        dots: true,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 2
                    }
                }
            ]
        });
        
        $("#box-multimidia").slick({
            dots: false,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 750,
                    settings: {
                        dots: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
    
    $('#yourId').jalendar({
    customDay: '07/12/2017',
    lang: 'PT',
    sundayStart: true
});
</script>
