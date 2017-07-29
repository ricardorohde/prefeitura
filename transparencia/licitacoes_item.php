<?php
    require "../resources/config.php";
    include "../resources/date_pt_br.php";
    $dbh = new Library\Database;

    $url_item = $_GET['item'];
	$itemcheck = $dbh->prepare('SELECT * FROM pw_lic WHERE pl_alias=?');
	$itemcheck->bindParam(1, $url_item);
	$itemcheck->execute();
	$item = $itemcheck->fetchAll(\PDO::FETCH_OBJ);
	if ($itemcheck->rowCount() == 0) {
		header('Location:'.$siteurl.'/transparencia/licitacoes/');
	}

?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head> 
<meta charset="UTF-8">
    <title>Processo <?php echo $item[0]->pl_processo. " / Licitações - " .$sitenome ?></title>
    
    <!--- Facebook Meta Tag --->
    <meta property="og:url"                content="<?php echo $urlatual ?>" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="When Great Minds Don’t Think Alike" />
    <meta property="og:description"        content="How much does culture influence creative thinking?" />
    <meta property="og:image"              content="http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg" />
    
    <?php include   "../includes/head.php"; ?>
    
    <link rel="stylesheet" href="/css/table.css" type="text/css" />
    <script type="text/javascript" src="/lib/DataTables/datatables.min.js"></script>

</head>
<body class="edital">
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
                <a href="<?php echo $siteurl ?>/transparencia/">Transparência</a>
            </li>
            <li>
                <a href="<?php echo $siteurl ?>/transparencia/licitacoes/">Licitações</a>
            </li>
            <li>
                Ver Processo
            </li>
        </ol>
        <h1 class="titulo">Item nº <?php echo $item[0]->pl_processo; ?></h1>
    </div>
</section>
<section id="licitacao">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-e">
                <table class="item">
                    <tr>
                        <td>
                            <strong>Nº do Processo Licitatório:</strong>
                            <span><?php echo $item[0]->pl_processo; ?></span>
                        </td>
                        <td>
                            <strong>Tipo:</strong>
                            <span><?php echo $item[0]->pl_tipo; ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Modalidade:</strong>
                            <span><?php echo $item[0]->pl_modalidade; ?></span>
                        </td>
                        <td>
                            <strong>Objeto:</strong>
                            <span><?php echo $item[0]->pl_objeto; ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Orgão:</strong>
                            <span><?php echo $item[0]->pl_orgao; ?></span>
                        </td>
                        <td>
                            <strong>Data de Abertura:</strong>
                            <span><?php echo date("d/m/Y H:i", strtotime($item[0]->pl_abertura)); ?></span>
                        </td>
                    </tr>
                    <?php
                        $list = $dbh->prepare("SELECT * FROM pw_lic_pdf WHERE pl_item = '$url_item' ORDER BY pl_id DESC");
                        $list->execute();
                        if ($list->rowCount() == 0) {
                    ?>
                    <tr>
                        <td colspan="2">
                            <strong>Documentos e Anexos:</strong>
                            <span>Nenhum anexo disponível no momento.</span>
                        </td>
                    </tr>
                    <?php
                        }else{
                            
                    ?>
                    <tr>
                        <td colspan="2">
                            <strong>Documentos e Anexos:</strong>
                            <div class="files">
                                <?php
                                    while ( $tabela = $list->fetch(\PDO::FETCH_OBJ) )
                                    {
                                ?>
                                <a href="/files/licitacoes/<?php echo $tabela->pl_item."/".$tabela->pl_file ?>" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php echo $tabela->pl_titulo ?></a>
                                <?php
                                    }
                                ?>
                            </div>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
            <div class="col-md-3 col-d"></div>
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
