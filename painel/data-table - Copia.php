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
    <link href="/painel/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/painel/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!-- Menu CSS -->
    <link href="/painel/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="/painel/css/animate.css" rel="stylesheet">
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
                    <h4 class="page-title">Tabelas</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <div class="table-responsive">
                            <table id="myTable" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Título</th>
                                        <th>Data</th>
                                        <th data-orderable="false">Ação</th>
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
                                        <td><strong><?php echo $tabela->pl_processo ?></strong><span><?php echo $tabela->pl_objeto ?></span></td>
                                        <td><?php echo date("d/m/Y", strtotime($tabela->pl_abertura)) ?></td>
                                        <td style="min-width:100px;">
                                            <button class="jsgrid-edit-button" type="button" title="Edit"></button>
                                            <button class="jsgrid-delete-button" type="button" title="Delete"></button>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
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
    <script src="/painel/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="/painel/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="/painel/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="/painel/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/painel/js/custom.min.js"></script>
    <script src="/painel/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable({
                "language": {
                        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
                }
            });  
        });
    </script>
    <!--Style Switcher -->
    <script src="/painel/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="/painel/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>