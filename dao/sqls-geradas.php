<?php
  require_once ("connection_factory.php");
  class SQLS_GERADAS {
    private $connectionFactory = null;
    private $connection = null;


    function __construct (){
      try{
        $connectionFactory = new ConnectionFactory ();
      }catch (Exception $e){
        throw new Exception ($e->getMessage());
      }
      $connection = $connectionFactoy->connection;
    }
    
    function sql1 (){
      $sql = "select avg(roleta_entrada) as media_roleta from Especificacao_Metro";
      $result = $connection->query ($sql);
      return $result;
    }
  }
