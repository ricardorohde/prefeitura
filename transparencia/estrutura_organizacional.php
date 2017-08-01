<?php
    require "../resources/config.php";
    include "../resources/date_pt_br.php";
    $dbh = new Library\Database;
?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head> 
<meta charset="UTF-8">
    <title>Horários de Atendimento<?php echo " - ". $sitename ?></title>
    
    <!--- Facebook Meta Tag --->
    <meta property="og:url"                content="<?php echo $urlatual ?>" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="When Great Minds Don’t Think Alike" />
    <meta property="og:description"        content="How much does culture influence creative thinking?" />
    <meta property="og:image"              content="http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg" />
    
    <?php include   "../includes/head.php"; ?>
    
    <link rel="stylesheet" href="/css/table.css" type="text/css" />

</head>
<body class="noticia">
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
                Autoridades e Horários de Atendimento
            </li>
        </ol>
        <h1 class="titulo">Autoridades e Horários de Atendimento</h1>
    </div>
</section>
<section id="horarios">
    <div class="container">
        <div class="row">
            <div class="col-e col-md-9">
                <?php
                    $list = $dbh->prepare("SELECT * FROM pw_autoridades ORDER BY pa_prioridade DESC");
                    $list->execute();
                        while ( $tabela = $list->fetch(\PDO::FETCH_OBJ) )
                    {
                ?>
                <table class="tabelabase w100 marginbottom_20">
                    <thead>
                        <tr>
                            <th colspan="2"><?php echo $tabela->pa_titulo ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Autoridade:</strong></td>
                            <td><?php echo $tabela->pa_autoridade ?></td>
                        </tr>
                        <tr>
                            <td><strong>Endereço:</strong></td>
                            <td><?php echo $tabela->pa_end ?></td>
                        </tr>
                        <tr>
                            <td><strong>Horário:</strong></td>
                            <td><?php echo $tabela->pa_horario ?></td>
                        </tr>
                        <tr>
                            <td><strong>Email:</strong></td>
                            <td><?php echo $tabela->pa_email ?></td>
                        </tr>
                        <tr>
                            <td><strong>Organograma:</strong></td>
                            <td><a>Visualizar Organograma</a></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p><?php echo $tabela->pa_desc ?></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php
                        }
                ?>
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
