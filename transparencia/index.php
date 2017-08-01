<?php
    require "../resources/config.php";
    include "../resources/date_pt_br.php";
    $dbh = new Library\Database;
?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head> 
<meta charset="UTF-8">
    <title>Portal da Transparência<?php echo " - ". $sitename ?></title>
    
    <?php include   "../includes/head.php"; ?>
    
    <link rel="stylesheet" href="/css/table.css" type="text/css" />

</head>
<body>
<?php 
    include "../modulos/header.php";
?>
<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo $siteurl ?>">Início</a>
            </li>
            <li>
                Portal da Transparência
            </li>
        </ol>
        <h1 class="titulo">Portal da Transparência</h1>
    </div>
</section>
<section id="transparencia">
    <div class="container">
        <div class="row">
            <div class="col-e col-md-6">
                <h4 class="title"><span>Acesso a Informação</span></h4>
                <ul>
                    <li><a>Receitas e Despesas</a></li>
                    <li><a>Contratos e Convênios</a></li>
                    <li><a href="/transparencia/estrutura_organizacional/">Estrutura Organizacional</a></li>
                    <li><a href="/transparencia/licitacoes/">Licitações</a></li>
                    <li><a>Contratos</a></li>
                    <li><a>Convênios</a></li>
                    <li><a href="/transparencia/perguntas/">Perguntas Frequentes</a></li>
                    <li><a>Relatórios de Resumido da Execução Orçamentária – RREO</a></li>
                    <li><a>Relatórios de Gestão Fiscal – RGF</a></li>
                </ul>
                <h4 class="title"><span>Leis e Decretos Municipais</span></h4>
                <ul>
                    <li><a href="/transparencia/leis/">Buscar todas as leis</a></li>
                    <li><a href="/transparencia/decretos_suplementares/">Decretos Suplementares</a></li>
                    <li><a href="/transparencia/decretos_retificados/">Decretos Retificados</a></li>
                    <li><a href="/transparencia/leis/lai/">LAI - Lei de Acesso a informação</a></li>
                    <li><a href="/transparencia/leis/ppa/">PPA - Plano Plurianual</a></li>
                    <li><a href="/transparencia/leis/ldo/">LDO - Lei de Diretrizes Orçamentárias</a></li>
                    <li><a href="/transparencia/leis/loa/">LOA - Lei Orçamentária Municipal</a></li>
                </ul>
            </div>
            <div class="col-e col-md-6">
                <h4 class="title"><span>Despesas com Pessoal</span></h4>
                <ul>
                    <li><a>Estrutura Remuneratória</a></li>
                    <li><a>Legislação Municipal</a></li>
                    <li><a>Detalhamento de Despesas com Pessoal</a></li>
                    <li><a>Resumo de Despesas com Pessoal</a></li>
                    <li><a>Servidores</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php 
    include "../modulos/rodape.php";
?>
</body>
</html>
<?php include   "../includes/footer.php";
?>
