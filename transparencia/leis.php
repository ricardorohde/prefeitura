<?php
    require "../resources/config.php";
    include "../resources/date_pt_br.php";
    $dbh = new Library\Database;

//Verifica se foi feito busca
if(isset($_POST['l_pesquisar'])){
    $l_num     =   $_POST['l_num'];
    $l_resumo       =   $_POST['l_resumo'];
    if($_POST['l_data'] != null){
        $l_data     =   date("Y-m-d",strtotime(str_replace('/','-',$_POST['l_data'])));
    }else{
        $l_data =   "";
    }
    $l_tipo        =   $_POST['l_tipo'];
}
?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head> 
<meta charset="UTF-8">
    <title>Legislação - <?php echo $sitenome ?></title>
    
    <?php include   "../includes/head.php"; ?>
    
    <link rel="stylesheet" href="/css/table.css" type="text/css" />
    <script type="text/javascript" src="/lib/DataTables/datatables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/lib/datetimepicker-master/jquery.datetimepicker.css"/>

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
                Legislação
            </li>
        </ol>
        <h1 class="titulo">Leis e Decretos</h1>
    </div>
</section>
<section id="Leis">
    <div class="container">
        <form class="filtro-tabela" method="post">
            <div class="row">
                <div class="col-md-3">
                    <label>Número:</label>
                    <input type="text" class="input" value="<?php echo $l_num ?>" placeholder="Número de Identificação da Lei" name="l_num">
                </div>
                <div class="col-md-3">
                    <label>Resumo:</label>
                    <input type="text" class="input" value="<?php echo $l_resumo ?>" placeholder="Resumo da Lei" name="l_resumo">
                </div>
                <div class="col-md-3">
                    <label>Data:</label>
                    <input type="text" class="input" value="<?php echo $_POST['l_data'] ?>" id="datetimepicker" placeholder="Escolha uma Data" name="l_data" data-date-format='yy-mm-dd'>
                </div>
                <div class="col-md-3">
                    
                    <label>Tipo:</label>
                    <select class="input" name="l_tipo">
                        <option disabled selected>Tudo</option>
                        <?php
                        $sel = $dbh->prepare("SELECT * FROM pw_leis GROUP BY pl_tipo ORDER BY pl_tipo ASC");
                        $sel->execute();
                        while ( $sel_tipo = $sel->fetch(\PDO::FETCH_OBJ) )
                        {
                        ?>
                        <option value="<?php echo $sel_tipo->pl_tipo ?>"><?php echo $sel_tipo->pl_tipo ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="col-md-2 col-md-offset-5 textcenter">
                    <input type="submit" name="l_pesquisar" value="Pesquisar" class="button btverde">
                </div>
            </div>
        </form>
        <div>
        <table id="tabela" class="tabela">
        <thead>
            <tr>
                <th>Tipo:</th>
                <th>Número + Resumo:</th>
                <th>Data:</th>
                <th>Ação:</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $list = $dbh->prepare("SELECT * FROM pw_leis WHERE pl_num LIKE '%$l_num%' AND pl_titulo LIKE '%$l_resumo%' AND pl_data LIKE '%$l_data%' AND pl_tipo LIKE '%$l_tipo%' ORDER BY pl_id DESC");
                $list->execute();
                    while ( $tabela = $list->fetch(\PDO::FETCH_OBJ) )
                {
            ?>
            <tr>
                <td width="140px"><?php echo $tabela->pl_tipo ?></td>
                <td><p><strong>Lei Nº <?php echo $tabela->pl_num ?></strong><span><?php echo $tabela->pl_titulo ?></span></p></td>
                <td><p><?php echo date("d/m/Y", strtotime($tabela->pl_data)) ?></p></td>
                <td><div class="controles"><a target="_blank" href="/transparencia/files<?php echo $tabela->pl_pdf ?>">Ver PDF <i class="fa fa-eye" aria-hidden="true"></i></a></div></td>
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
<script src="/lib/datetimepicker-master/build/jquery.datetimepicker.full.js"></script>
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
    
$('#datetimepicker').datetimepicker({
	timepicker:false,
	format:'d/m/Y',
	formatDate:'Y/m/d',
});
    
$.datetimepicker.setLocale('pt-BR');
</script>
