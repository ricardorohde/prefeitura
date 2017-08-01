<?php
    require "../resources/config.php";
    include "../resources/date_pt_br.php";
    $dbh = new Library\Database;
?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head> 
<meta charset="UTF-8">
    <title>Perguntas e Respostas - <?php echo $sitenome ?></title>
    
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
                <a href="<?php echo $siteurl ?>/transparencia/">Transparência</a>
            </li>
            <li>
                Perguntas e Respostas
            </li>
        </ol>
        <h1 class="titulo">Perguntas e Respostas</h1>
    </div>
</section>
<section id="perguntas" class="marginbottom_30">
    <div class="container">
        <div class="row">
            <div class="col-e col-md-9">
                <div id="perguntas">
                    <div class="box-busca">
                        <input type="text" name="search_input" placeholder="Digite sua duvida" id="search_input"/>
                    </div>
                    <div class="resultado">
                    
                    </div>
                </div>
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
<script>
$(document).ready(function(){
    load_data();
    function load_data(query)
    {
        $.ajax({
            url:"/transparencia/includes/busca_perguntas.php",
            method:"POST",
            data:{query:query},
            success:function(data)
            {
                $('.resultado').html(data);
            }
        });
    }
    $('#search_input').keyup(function(){
        var search = $(this).val();
        if(search != '')
        {
            load_data(search);
        }
        else
        {
            load_data();
        }
    });
});
</script>