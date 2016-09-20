<?php 
session_start();
?>

<?php
if(isset($_SESSION['logado']):


?>

<h1>PÁGINA SECRETA</h1>
<p>O resultado da mega-sena é 123456798.</p>

<?php
else:
?>
<h1>Você precisa estar logaod</h1>
<?php
endif;
?>