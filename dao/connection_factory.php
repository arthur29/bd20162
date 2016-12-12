<?php
class ConnectionFactory {
	private $servername = "localhost";
	private $username = "u368612708_root";
	private $password = "123456";
	private $dbname = "u368612708_mydb";

  public $connection;

  function __construct (){
	  $servername = "localhost";
	  $username = "u368612708_root";
	  $password = "123456";
	  $dbname = "u368612708_mydb";

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
