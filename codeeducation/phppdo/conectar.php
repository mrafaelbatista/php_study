<?php
try {
	$conexao = new \PDO ( "mysql:host=192.168.99.100; dbname=study_pdo", "root", "1234" );
	
	//$query = "INSERT INTO clientes(nome, email) values('Messias', 'messias@messias.com.br')"; //RESULTA 1, POIS HÁ UMA INFORMAÇÃO DE RETORNO
	//$query = "SELECT * FROM clientes WHERE id = 1"; //RETORNA 0 POIS NÃO HÁ INFORMAÇÃO DE RETORNO
	
	//Exec deve ser utilizando precisamos executar manipulação de tabelas, manipulação de bancos de dados
	//$resultado = $conexao->exec($query);
	//print_r($resultado);
	
	
	//TRABALHANDO COM QUERYS E STATEMENS E COM FETCH E FETCHALL
	//$stmt = $conexao->query($query);
	//$resultado = $stmt->fetchAll(PDO::FETCH_CLASS);
	//$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
	//print_r($resultado); //Relacionados com outras clásulas acima
	
	//TESTE SQL INJECTION e PREPARE STMT
//	$query = "SELECT * FROM clientes WHERE id = {$_GET['id']}"; //TESTE SQL INJECTION 
	
	$query = "SELECT * FROM clientes WHERE id =:id";
	
	$stmt = $conexao->prepare($query);
	$stmt->bindValue(":id", $_GET['id'], PDO::PARAM_INT);
	$stmt->execute();
	
	print_r($stmt->fetch(PDO::FETCH_ASSOC));
	
	
	//SEM CRIAR STATEMENT
	/* foreach ($conexao->query($query) as $clientes) {
		echo $clientes['nome']."<br>";
	} */
	
	
	
	
} catch ( \PDOException $e ) {
	echo "Não foi possível estabelecer a conexão com o banco de dados. Erro: " . $e->getCode() . ":: | ::" . $e->getMessage();
}
    

    