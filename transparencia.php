<?php
/*    require "resources/config.php";
    include"resources/date_pt_br.php";
    $dbh = new Library\Database;*/
?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head> 
<meta charset="UTF-8">
    <title>Portal da Prefeitura Municipal</title>

    <?php include"includes/head.php"; ?>

</head>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8&appId=1828545577414262";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<body>

<?php 
    include"modulos/header.php";
?>

    
<?php 
    include"modulos/rodape.php";
?>
</body>
</html>
<?php include"includes/footer.php";
?>
