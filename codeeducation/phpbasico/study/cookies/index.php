<?php

    $cor = "blue";
    setcookie("cor", $cor, time()+3600, "Posso definir uma pasta", ".mrafaelbatista.com.br"); //Cookie válido por uma hora

?>

<a href="testa.php">Testa o Cookie</a>