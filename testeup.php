<?php
define('DEST_DIR', __DIR__ . 'upload/');
if(!empty($_FILES)){
    if (file_exists( DEST_DIR )) {//Verifica se a Pasta $pasta_pdf existe.
        } else {
            mkdir( DEST_DIR );
        }
    
    // se o "name" estiver vazio, é porque nenhum arquivo foi enviado
     
    // cria uma variável para facilitar
    $name = $_FILES['name'];
 
    // total de name enviados
    $total = count($name['name']);
 
    for ($i = 0; $i < $total; $i++)
    {
        // podemos acessar os dados de cada arquivo desta forma:
        // - $name['name'][$i]
        // - $name['tmp_name'][$i]
        // - $name['size'][$i]
        // - $name['error'][$i]
        // - $name['type'][$i]
         
        if (!move_uploaded_file($name['tmp_name'][$i], DEST_DIR . '/' . $name['name'][$i]))
        {
         //Mensagem de Erro
        }
    }
}
?>