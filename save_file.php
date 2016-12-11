<?php
  require_once ("dao/connection_factory.php");

  $connection_factory = new ConnectionFactory ();
  $connection = $connection_factory->connection;

  $foto = $_FILES["foto"]['tmp_name'];
  $tamanho = $_FILES["foto"]['size'];
  $nome = $_FILES["foto"]['name'];

  if ($foto != 'none'){
    
    
    $estacao_nome = $_POST["estacao_nome"];
    $tipo_transporte = $_POST["tipo_transporte"];
    
    $fp = fopen ($foto,"rb");
    $conteudo = fread ($fp, $tamanho);
    fclose ($fp);
    
    
    $statement = $connection->prepare("update Endereco_Estacao_Tipo set (Imagem_estacao = '?') where Estacao_nome='?' and Tipo_transporte='?';");
    $statement->bind_param("b",$conteudo,$estacao_nome,$tipo_transporte);
    

    $statement->execute();

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }
