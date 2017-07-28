<?php
    require "../resources/config.php";
    include "../resources/date_pt_br.php";
    $dbh = new Library\Database;

//Verifica se foi feito busca
if(isset($_POST['l_pesquisar'])){
    $l_processo     =   $_POST['l_processo'];
    $l_objeto       =   $_POST['l_objeto'];
    $l_abertura     =   $_POST['l_abertura'];
    $l_orgao        =   $_POST['l_orgao'];
}
?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head> 
<meta charset="UTF-8">
    <title>Licitações - <?php echo $sitenome ?></title>
    
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
                Licitações
            </li>
        </ol>
        <h1 class="titulo">Processos Licitatórios</h1>
    </div>
</section>
<section id="licitacao">
    <div class="container">
        <form class="filtro-tabela" method="post">
            <div class="row">
                <div class="col-md-3">
                    <label>Número de Processo:</label>
                    <input type="text" class="input" placeholder="" name="l_processo">
                </div>
                <div class="col-md-3">
                    <label>Objeto:</label>
                    <input type="text" class="input" placeholder="" name="l_objeto">
                </div>
                <div class="col-md-3">
                    <label>Abertura:</label>
                    <input type="text" class="input" placeholder="" name="l_abertura">
                </div>
                <div class="col-md-3">
                    
                    <label>Orgão:</label>
                    <select class="input" name="l_orgao">
                        <option disabled selected>Tudo</option>
                        <?php
                        $sel = $dbh->prepare("SELECT * FROM pw_lic GROUP BY pl_orgao ORDER BY pl_orgao ASC");
                        $sel->execute();
                        while ( $sel_orgao = $sel->fetch(\PDO::FETCH_OBJ) )
                        {
                        ?>
                        <option value="<?php echo $sel_orgao->pl_orgao ?>"><?php echo $sel_orgao->pl_orgao ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="col-md-2 col-md-offset-5 textcenter">
                    <input type="submit" name="l_pesquisar" class="button btverde">
                </div>
            </div>
        </form>
        <div>
        <table id="tabela" class="tabela">
        <thead>
            <tr>
                <th>Nº Processo</th>
                <th>Objeto</th>
                <th>Abertura</th>
                <th>Orgão</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $list = $dbh->prepare("SELECT * FROM pw_lic WHERE pl_processo LIKE '%$l_processo%' AND pl_objeto LIKE '%$l_objeto%' AND pl_abertura LIKE '%$l_abertura%' AND pl_orgao LIKE '%$l_orgao%' ORDER BY pl_id DESC");
                $list->execute();
                    while ( $tabela = $list->fetch(\PDO::FETCH_OBJ) )
                {
            ?>
            <tr>
                <td width="140px"><?php echo $tabela->pl_processo ?></td>
                <td><?php echo $tabela->pl_objeto ?></td>
                <td><p><?php echo "<strong>".date("d/m/Y", strtotime($tabela->pl_abertura))."</strong><span>".date("H:i:s", strtotime($tabela->pl_abertura))."</span>" ?></p></td>
                <td style="min-width:180px;"><?php echo $tabela->pl_orgao ?></td>
                <td></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
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
<script>
$(function() {
    $(document).ready(function() {
        $('#tabela').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
        },
        searching: false,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'pdf', 'print'
        ]
});
    } );
});
</script>
