<?php 
$conecta = mysql_connect("localhost", "root", "1234") or print (mysql_error()); 
mysql_select_db("testabd", $conecta) or print(mysql_error()); 
//print "Conexão e Seleção OK!";

//Adicionar um milhão de registros
$nome = "a";
$matricula = 609216;
$idade = 1;

for ($i=0; $i <= 400000; $i++) { 
    # code...
    $nome = $nome;
    $matricula = $matricula + 1;
    $idade = rand(18, 65);
    //$result = mysql_query("INSERT INTO pessoas (nome, matricula, idade) VALUES ('$nome', $matricula, $idade)");

    if (!result) {
        die("Invalid query: " . mysql_error());
    }
    
    echo "<br />" . $i;


}

mysql_close($conecta); 

?>