<?php
session_start(); //precisa estar no começo da página

$login = "teste";
$senha = "123";

if ($login == "teste" and $senha == "123") {
    $_SESSION['logado'] = true;
}

?>