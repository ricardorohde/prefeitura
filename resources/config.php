<?php
/*
 * Arquivo de configuração do sistema
 */
// Variável Global de Configuração
$config = array (
	// Ambiente
	"env" => array (
		'debug' => false
	),
	// Informações do Banco de Dados
	"db" => array (
		"dbname"	=> "aponweb_prefeitura",
		"host"		=> "localhost",
		"username"	=> "aponweb_leno",
		"password"		=> "meusucesso"
	),
	// Url base do sistema
	"urls" => array (
		"baseUrl" => "http:/localhost/platform/"
	),
	// Diretório de Bibliotecas
	"paths" => array (
		"resources" => "resources/"
	)
);

// Se Debug for true, mostra todos os errors
if ( $config['env']['debug'] == true ) {
	ini_set('display_errors', true);
} else {
	ini_set('display_errors', -1);
}

// Define Constantes
define( "LIBRARY_PATH", realpath(dirname(__FILE__)).'/library/');


function __autoload($classe) {
	$classe = explode('\\', $classe);
	$file = LIBRARY_PATH.end($classe).".php";
	if ( file_exists($file) ) {
		require_once $file;
	}
}

//Dados Padrão do Site
$siteurl 		= "http://prefeitura.apon.com.br";
$sitenome 		= "Portal da Prefeitura Municipal";
$sitediretorio	= "";
$urlatual 		= "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$dataatual		= date('Y-m-d');


function format_uri( $string, $separator = '_' )
{
    $accents_regex = '~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i';
    $special_cases = array( '&' => 'and', "'" => '');
    $string = mb_strtolower( trim( $string ), 'UTF-8' );
    $string = str_replace( array_keys($special_cases), array_values( $special_cases), $string );
    $string = preg_replace( $accents_regex, '$1', htmlentities( $string, ENT_QUOTES, 'UTF-8' ) );
    $string = preg_replace("/[^a-z0-9]/u", "$separator", $string);
    $string = preg_replace("/[$separator]+/u", "$separator", $string);
    return $string;
}
