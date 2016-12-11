<?php
class ConnectionFactory {
	private $servername = "localhost";
	private $username = "root";
	private $password = "root.123";
	private $dbname = "bd_tranporte";	

  function __construct (){

	  $connection = new mysqli ($servername, $username, $password, $dbname);
  
	  if ($connection->connect_error){
      throw new Exception ("Erro na conexao com o banco");
	  }
  
  }
  
}	
