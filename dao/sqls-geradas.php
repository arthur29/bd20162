<?php
  require_once ("connection_factory.php");

  class SqlsGeradas {
    private $connectionFactory = null;
    private $connection = null;


    function __construct (){
      try{
        $this->connectionFactory = new ConnectionFactory();
        $this->connection = $this->connectionFactory->connection;
      }catch (Exception $e){
        throw new Exception ($e->getMessage());
      }
    }
    
    function sql1 (){
      $sql = "select avg(roleta_entrada) as media_roleta from Especificacao_Metro";
      $result = $this->connection->query ($sql);
      $result = $result->media_roleta; 
      if ($result == null){
        $result = 0;
      }
      //$i=0
      //foreach $result as $linha_banco {
      //  $object[$i] = new ModelClass ();
      //  $object->property = $linha_banco["property"];
      //}
      //return $object;
      return $result;
    }
  }
