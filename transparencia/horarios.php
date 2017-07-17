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
                <table class="tabelabase w100 marginbottom_20">
                    <thead>
                        <tr>
                            <th colspan="2">Autoridade 1</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Autoridade:</strong></td>
                            <td>Nome da Autoridade</td>
                        </tr>
                        <tr>
                            <td><strong>Endereço:</strong></td>
                            <td>Av. Monte líbano 320 Centro</td>
                        </tr>
                        <tr>
                            <td><strong>Horário:</strong></td>
                            <td>08h às 12h e 14h às 18h</td>
                        </tr>
                        <tr>
                            <td><strong>Email:</strong></td>
                            <td>contato@apon.com.br</td>
                        </tr>
                    </tbody>
                </table>
                <table class="tabelabase w100 marginbottom_20">
                    <thead>
                        <tr>
                            <th colspan="2">Autoridade 1</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Autoridade:</strong></td>
                            <td>Nome da Autoridade</td>
                        </tr>
                        <tr>
                            <td><strong>Endereço:</strong></td>
                            <td>Av. Monte líbano 320 Centro</td>
                        </tr>
                        <tr>
                            <td><strong>Horário:</strong></td>
                            <td>08h às 12h e 14h às 18h</td>
                        </tr>
                        <tr>
                            <td><strong>Email:</strong></td>
                            <td>contato@apon.com.br</td>
                        </tr>
                    </tbody>
                </table>
                <table class="tabelabase w100 marginbottom_20">
                    <thead>
                        <tr>
                            <th colspan="2">Autoridade 1</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Autoridade:</strong></td>
                            <td>Nome da Autoridade</td>
                        </tr>
                        <tr>
                            <td><strong>Endereço:</strong></td>
                            <td>Av. Monte líbano 320 Centro</td>
                        </tr>
                        <tr>
                            <td><strong>Horário:</strong></td>
                            <td>08h às 12h e 14h às 18h</td>
                        </tr>
                        <tr>
                            <td><strong>Email:</strong></td>
                            <td>contato@apon.com.br</td>
                        </tr>
                    </tbody>
                </table>
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
