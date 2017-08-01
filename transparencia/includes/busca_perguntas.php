<?php
    require "../../resources/config.php";
    include "../../resources/date_pt_br.php";
    $dbh = new Library\Database;
$num = "1";
if(isset($_POST["query"]))
{
    $termo = $_POST["query"];
?>
<div id="accordion" role="tablist" aria-multiselectable="true">
<?php
    $list = $dbh->prepare("SELECT * FROM pw_perguntas WHERE pp_titulo LIKE '%$termo%' ORDER BY pp_titulo ASC");
    $list->execute();
        while ( $itens = $list->fetch(\PDO::FETCH_OBJ) )
    {
?>
    <div class="item panel">
    <div class="head" role="tab" id="heading<?php echo $itens->pp_id?>">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $itens->pp_id?>" aria-expanded="true" aria-controls="collapse<?php echo $itens->pp_id?>">
                <span><?php echo $num++ ?></span>
                <?php echo $itens->pp_titulo ?>
            </a>
        </h4>
    </div>
    <div id="collapse<?php echo $itens->pp_id?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $itens->pp_id?>">
        <div class="body">
            <?php echo $itens->pp_resposta ?>
        </div>
    </div>
    </div>
<?php
    }
?>
</div>
<?php
}
else
{
?>
<div id="accordion" role="tablist" aria-multiselectable="true">
<?php
    $list = $dbh->prepare("SELECT * FROM pw_perguntas ORDER BY pp_titulo ASC LIMIT 0,10");
    $list->execute();
        while ( $itens = $list->fetch(\PDO::FETCH_OBJ) )
    {
?>
    <div class="item panel">
    <div class="head" role="tab" id="heading<?php echo $itens->pp_id?>">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $itens->pp_id?>" aria-expanded="true" aria-controls="collapse<?php echo $itens->pp_id?>">
                <span><?php echo $num++ ?></span>
                <?php echo $itens->pp_titulo ?>
            </a>
        </h4>
    </div>
    <div id="collapse<?php echo $itens->pp_id?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $itens->pp_id?>">
        <div class="body">
            <?php echo $itens->pp_resposta ?>
        </div>
    </div>
    </div>
<?php
    }
?>
</div>

<?php
}
?>