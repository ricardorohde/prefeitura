<?php
/*    require "resources/config.php";
    include"resources/date_pt_br.php";
    $dbh = new Library\Database;*/

?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head> 
<meta charset="UTF-8">
    <title>Secretaria - <?php echo $sitename ?></title>
    <?php include"includes/head.php"; ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl ?>css/secretaria.css">

</head>
<body>
<?php 
    include"modulos/header.php";
?>
<div id="pg_titulo">
    <div class="container">
        <h1>Secretaria de Saúde</h1>
    </div>
</div>
<section>
    <div class="container">
        <div class="box_news row">
            <div class="bl col-md-6">
                <div class="noticia"></div>
            </div>
            <div class="br col-md-6">
                <div class="noticia"></div>
                <div class="noticia"></div>
            </div>
        </div>
    </div>
</section>
    
<?php 
    include"modulos/rodape.php";
?>
</body>
</html>
<?php include"includes/footer.php";
?>

