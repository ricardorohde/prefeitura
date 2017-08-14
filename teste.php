<?php
    require "resources/config.php";
    include"resources/date_pt_br.php";
    $dbh = new Library\Database;


?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head> 
<meta charset="UTF-8">
    <title><?php echo $news_title." - ". $sitename ?></title>
    
    <?php include"includes/head.php"; ?>

</head>
<body class="noticia">
<?php 
    include"modulos/header.php";
?>
<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li>
                <a href="http://www.example.com/books">Início</a>
            </li>
            <li>
                <a href="http://www.example.com/sciencefiction">Notícias</a>
            </li>
            <li>
                <a href="http://www.example.com/sciencefiction">Categoria</a>
            </li>
            <li>
                Prefeitura será premiada com selo digital por transparência na prestação de contas
            </li>
        </ol>
        <h1 class="titulo">Prefeitura será premiada com selo digital por transparência na prestação de contas</h1>
    </div>
</section>
<section id="noticia">
    <div class="container">
        <div class="row">
            <div class="col-e col-md-9">
                <form action="testeup.php" class="dropzone" id="my-awesome-dropzone">
                    
                </form>
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

<script src="/js/dropzone.js"></script>
