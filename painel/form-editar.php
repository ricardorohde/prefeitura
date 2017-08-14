<?php
    require "../resources/config.php";
    include "../resources/date_pt_br.php";
    $dbh = new Library\Database;

?>
<!DOCTYPE html>  
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="/painel/plugins/images/favicon.png">
    <title><?php echo $sitenome ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="/painel/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="/painel/css/animate.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="/painel/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="/painel/css/animate.css" rel="stylesheet">
    <!-- Page plugins css -->
    <link href="/painel/plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    <!-- Dropzone css -->
    <link href="/painel/plugins/bower_components/dropzone-master/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <!-- Date picker plugins css -->
    <link href="/painel/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="/painel/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="/painel/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<?php
    include 'php/header.php';
    include 'php/left-sidebar.php'; include 'php/breadcrumbs.php';
    ?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Notifications</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <?php echo $msgform ?>
                    <h3 class="box-title">Success Message <small>(Click on image)</small></h3> <img src="../plugins/images/alert3.png" alt="alert" class="img-responsive model_img" id="sa-success">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Editar Item</h3>
                        <p class="text-muted m-b-30 font-13"> Preencha corretamente todos os campos solicitados. </p>
                        <form class="form-horizontal" data-toggle="validator" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group<?php if($objetoErr != null){echo " has-error";}?>">
                                        <label class="col-md-12">Título:</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" value="" name="iobjeto" placeholder="Objeto da Licitação" required="">
                                            <span class="error text-danger"><?php echo $objetoErr;?></span>
                                        </div>
                                    </div>
                                    <div class="form-group<?php if($modalidadeErr != null){echo " has-error";}?>">
                                        <label class="col-md-12">Modalidade:</label>
                                        <div class="col-md-12">
                                            <input type="text" name="imodalidade" value="" class="form-control" required="">
                                            <span class="error text-danger"><?php echo $modalidadeErr;?></span>
                                        </div>
                                    </div>
                                    <div class="form-group<?php if($tipoErr != null){echo " has-error";}?>">
                                        <label class="col-md-12">Selecione um tipo:</label>
                                        <div class="col-md-6">
                                            <select id="select1" name="type" class="form-control" required="on">
                                                <option>Selecione uma opção</option>
                                                <option value="lc" <?php if ($type == "lc") {echo "selected";}?>>Licitação</option>
                                                <option value="cd" <?php if ($type == "cd") {echo "selected";}?>>Contratação Direta</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select id="select2" name="itipo" class="form-control" <?php if(!isset($_POST['itipo'])){echo "disabled";} ?> required="on">
                                                <option >Selecione uma opção</option>
                                                <option data-value="cd" value="Carona" <?php if ($itipo == "Carona") {echo "selected";}?>>Carona</option>
                                                <option data-value="lc" value="Concorrência" <?php if ($itipo == "Concorrência") {echo "selected";}?>>Concorrência</option>
                                                <option data-value="lc" value="Convite" <?php if ($itipo == "Convite") {echo "selected";}?>>Convite</option>
                                                <option data-value="cd" value="Dispensa de Licitação" <?php if ($itipo == "Dispensa de Licitação") {echo "selected";}?>>Dispensa de Licitação</option>
                                                <option data-value="lc" value="Leilão" <?php if ($itipo == "Leilão") {echo "selected";}?>>Leilão</option>
                                                <option data-value="cd" value="Inexigibilidade" <?php if ($itipo == "Inexigibilidade") {echo "selected";}?>>Inexigibilidade</option>
                                                <option data-value="lc" value="Pregão" <?php if ($itipo == "Pregão") {echo "selected";}?>>Pregão</option>
                                                <option data-value="lc" value="Regime Diferenciado de Contratação" <?php if ($itipo == "Regime Diferenciado de Contratação") {echo "selected";}?>>Regime Diferenciado de Contratação</option>
                                                <option data-value="cd" value="Sem Licitação" <?php if ($itipo == "Sem Licitação") {echo "selected";}?>>Sem Licitação</option>
                                                <option data-value="lc" value="Tomada de Preço" <?php if ($itipo == "Tomada de Preço") {echo "selected";}?>>Tomada de Preço</option>
                                            </select>
                                            <span class="error text-danger"><?php echo $tipoErr;?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group<?php if($processoErr != null){echo " has-error";}?>">
                                        <label class="col-md-12">Nº do processo:</label>
                                        <div class="col-md-12">
                                            <input type="text" name="iprocesso" value="" class="form-control" placeholder="Ex: 2017-00001">
                                            <span class="error text-danger"><?php echo $processoErr;?></span>
                                        </div>
                                    </div>
                                    <div class="form-group<?php if($orgaoErr != null){echo " has-error";}?>">
                                        <label class="col-md-12">Orgão:</label>
                                        <div class="col-md-12">
                                            <input type="text" name="iorgao" value="" class="form-control">
                                            <span class="error text-danger"><?php echo $orgaoErr;?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Data e hora de abertura:</label>
                                        <div class="col-md-5<?php if($dataErr != null){echo " has-error";}?>">
                                            <div class="input-group">
                                                <input type="text" name="idata" value="<?php echo $_POST['idata'] ?>" class="form-control mydatepicker" placeholder="mm/dd/yyyy"> <span class="input-group-addon"><i class="icon-calender"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4<?php if($horaErr != null){echo " has-error";}?>">
                                            <div class="input-group">
                                                <input type="text" class="form-control" value="<?php echo $_POST['ihora'] ?>" id="single-input" name="ihora" placeholder="Hora"> <span class="input-group-addon"><i class="icon-clock"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <span class="error text-danger"><?php echo $diaErr;?></span>
                                            <span class="error text-danger"><?php echo $horaErr;?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <a href="/" class="btn btn-inverse waves-effect waves-light"><span class="btn-label"><i class="fa fa-chevron-left"></i></span>Cancelar</a>
                                </div>
                                <div class="col-md-6 text-right">
                                <button class="btn btn-success waves-effect waves-light" type="submit"><span class="btn-label"><i class="fa fa-check"></i></span>Cadastrar item</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <?php include 'php/right-sidebar.php';?>
        </div>
        <!-- /.container-fluid -->
        <?php include 'php/footer.php';?>
    </div>
    <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="/painel/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/painel/bootstrap/dist/js/tether.min.js"></script>
<script src="/painel/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/painel/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="/painel/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="/painel/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="/painel/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/painel/js/custom.min.js"></script>
    <script src="/painel/js/jasny-bootstrap.js"></script>
    <script src="/painel/js/validator.js"></script>
    <!-- Dropzone Plugin JavaScript -->
    <script src="/painel/plugins/bower_components/dropzone-master/dist/dropzone.js"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="/painel/plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <!--Style Switcher -->
    <script src="/painel/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="/painel/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>

<script type="text/javascript">
    $(".alerttop").fadeToggle(350);
    $(".myadmin-alert .closed").click(function (event) {
        $(this).parents(".myadmin-alert").fadeToggle(350);
        return false;
    });

    $("#select1").change(function() {
      if ($(this).data('options') == undefined) {
        $(this).data('options', $('#select2 option').clone());
      }
      var id = $(this).val();
      var options = $(this).data('options').filter('[data-value=' + id + ']');
      $('#select2').html(options).show();
      $('#select2').removeAttr("disabled");
    });
    
    // Clock pickers
        $('#single-input').clockpicker({
            placement: 'top'
            , align: 'left'
            , autoclose: true
            , 'default': 'Hora'
        });

    jQuery('.mydatepicker, #datepicker').datepicker();
</script>