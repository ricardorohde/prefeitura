<?php
if (!empty($_POST['enviar'])) {
    $mytext = $_POST['mytext'];

foreach( $mytext as $v ) {
print $v;
}

}
?>
<html>
<head>
    <script src='/js/jquery-2.1.1.js' type="text/javascript" charset="utf-8"></script>
</head>
<body>
<form action="#" method="post">
<div class="input_fields_wrap">
    <button class="add_field_button">Adicionar</button>
    <div><input type="text" name="mytext[]"></div>
</div>
<input type="submit" name="enviar">
</form>
    
</body>    
</html>
<script>
    $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>