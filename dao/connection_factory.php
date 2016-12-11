<?php
class ConnectionFactory {
	private $servername = "localhost";
	private $username = "root";
	private $password = "Root.123456";
	private $dbname = "bd_transporte";	

  public $connection;

  function __construct (){
	  $servername = "localhost";
	  $username = "root";
	  $password = "Root.123456";
	  $dbname = "bd_transporte";	
	  
    $this->connection = new mysqli ($servername, $username, $password, $dbname);
    //var_dump($connection);
    if ($this->connection->connect_error){
      error_log ("Erro na conexao com o banco de dados - ConnectionFactory".$connection->connect_error,0);
      throw new Exception ("Erro na conexao com o banco".$connection->connect_error);
	  }
  
  }

}	
