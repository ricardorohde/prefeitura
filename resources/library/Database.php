<?php

namespace Library;

class Database
{
	private $dsn = "mysql:host=localhost;dbname=aponweb_prefeitura";
	private $username = 'aponweb_leno';
	private $password = 'meusucesso';

	private static $PDOInstance;

	/**
	 * Construtor
	 * Cria instancia de um objeto PDO com
	 * As configurações iniciais do banco
	 *
	 * @return PDO
	 */
    public function __construct() 
    {
        if(!self::$PDOInstance) { 
	        try {
				self::$PDOInstance = new \PDO($this->dsn, $this->username, $this->password, array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')); 
			} catch (PDOException $e) { 
			   die("[CONNECTION ERROR] : " . $e->getMessage() . "<br/>");
			}
    	}
      	return self::$PDOInstance;    	    	
    }

	/**
	 * query
	 * Consulta o banco e retorna resultado
	 *
	 * @param $statement Instrução Sql
	 * @return PDO_STATEMENT
	 */
	public function query($statement) {
    	return self::$PDOInstance->query($statement);
    }

	public function prepare($statement, $driver_options=false) {
    	if(!$driver_options) $driver_options=array();
    	return self::$PDOInstance->prepare($statement, $driver_options);
    }

    public function setAttribute($attribute, $value) {
    	return self::$PDOInstance->setAttribute($attribute, $value);
    }
}
