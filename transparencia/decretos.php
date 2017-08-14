<?php
    require "../resources/config.php";
    include "../resources/date_pt_br.php";
    $dbh = new Library\Database;
    //Pucha o Parametro da URL
    $item = $_GET['item'];
if($item == "suplementares"){
    $titulo_pagina = "Decretos Suplementares";
}elseif($item == "retificados"){
    $titulo_pagina = "Decretos Retificados";
}else{
    header('Location:'.$siteurl.'/transparencia/');
}

?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head> 
<meta charset="UTF-8">
    <title><?php echo $titulo_pagina." - ".$sitenome ?></title>
    
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
                <?php echo $titulo_pagina ?>
            </li>
        </ol>
        <h1 class="titulo"><?php echo $titulo_pagina ?></h1>
    </div>
</section>
<section id="decretos">
    <div class="container">
        <div>
        <table id="tabela" class="tabela">
        <thead>
            <tr>
                <th>Número + Resumo:</th>
                <th>Ano:</th>
                <th>Data:</th>
                <th>Ação:</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $list = $dbh->prepare("SELECT * FROM pw_decretos WHERE pd_tipo like '%$item%' ORDER BY pd_id DESC");
                $list->execute();
                    while ( $tabela = $list->fetch(\PDO::FETCH_OBJ) )
                {
            ?>
            <tr>
                <td><strong>Decreto Nº <?php echo $tabela->pd_num."</strong> - ".$tabela->pd_titulo ?></td>
                <td><p><?php echo date("Y", strtotime($tabela->pd_data)) ?></p></td>
                <td><p><?php echo date("d/m/Y", strtotime($tabela->pd_data)) ?></p></td>
                <td><div class="controles"><a target="_blank" href="/transparencia/files<?php echo $tabela->pd_pdf ?>">Ver PDF <i class="fa fa-eye" aria-hidden="true"></i></a></div></td>
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
        "order": [[ 1, "asc" ]],
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
