<!--- Meta Basicos -->
<meta name='copyright' content='Apon Web - Desenvolvimento'>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel='shortcut icon' type='image/ico' href='<?php echo $siteurl ?>/imagens/ico.png'>
<link rel='shortcut icon' type='image/ico' href='<?php echo $siteurl ?>/imagens/ico.ico'>
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl ?>/css/estilo.css">
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl ?>/css/responsive.css">
<script src='/js/jquery-2.1.1.js' type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $siteurl ?>/css/fonte/css/font-awesome.css">

<!--- Menu --->
<link href="/lib/drop_nav/css/examples.css" rel="stylesheet">
<link href="/lib/drop_nav/css/navigation.css" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="/lib/bootstrap-3.3.7-dist/css/bootstrap.css" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript" src="/lib/garand-sticky-73b0fbe/jquery.sticky.js"></script>
<script>
    $(window).load(function(){
      $(".navigation").sticky({ topSpacing: 0 });
    });
</script>

<script src="/lib/Lightweight-jQuery-Font-Accessibility-Plugin-EasyView/EasyView.js"></script>
<script>
	$(function(){

		/* Custom buttons */
		$('#font-setting-buttons').easyView({
			container: 'body',
            bootstrap: true,
            tags: ['h1','h2','h3','h4','h5','h6', 'div', 'p', 'a', 'span', 'strong', 'em', 'ul', 'ol', 'li', 'section'],
			increaseSelector: '.increase-me',
			decreaseSelector: '.decrease-me',
			normalSelector: '.reset-me',
			contrastSelector: '.change-me'
		});

	});
	</script>