<?php
 require_once './Cliente.php';
 require_once './ServiceDB.php';

 try {
     $conexao = new \PDO("mysql:host=192.168.99.100; dbname=study_pdo", "root", "1234" );
 } catch (\PDOException $e) {
     die("Não foi possível estabelecer a conexão com o banco de dados. Erro código ".$e->getCode(). " | " . $e->getMessage());

 }
 
 $cliente = new Cliente();
 
 $cliente->setNome("Maria")
         ->setEmail("maria@gmail.com");
  
 $serviceDB = new ServiceDB($conexao, $cliente);
 $serviceDB->inserir();
 
 /*
 echo "##### DANDO UPDATE <br />";
 $cliente = new Cliente($conexao);
 $cliente->setId(3)
         ->setNome("Verônica")
         ->setEmail("jbatista@gmail.com");
 
 $resultado = $cliente->find(3);
 echo $resultado['nome'] . " " . $resultado['email'];
 
 #$resultado = $cliente->inserir();
 #echo $resultado;
 

 echo "LISTANDO OS USUÁRIOS <br />";
 foreach ($cliente->listar() as $c) {
     echo $c['nome']."<br />";
 }
  */