<?php
class ConnectionFactory {
	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $dbname = "mydb";

  public $connection;

  function __construct (){
	  $servername = "localhost";
	  $username = "root";
	  $password = "";
	  $dbname = "mydb";
	  
    $this->connection = new mysqli ($servername, $username, $password, $dbname);
    //var_dump($connection);
    if ($this->connection->connect_error){
      error_log ("Erro na conexao com o banco de dados - ConnectionFactory".$this->connection->connect_error,0);
      throw new Exception ("Erro na conexao com o banco".$this->connection->connect_error);
	  }
  
  }

}	
