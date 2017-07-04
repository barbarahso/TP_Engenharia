<html>
<head>
<title>Cadastrando</title>
</head>
<body>

<?php

// Iniciamos o "contador"
list($usec, $sec) = explode(' ', microtime());
$script_start = (float) $sec + (float) $usec;

$host= "127.0.0.1";
$user = "root";
$pass = "1234";
$banco = "informasabara";

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$conexao = mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($banco) or die (mysql_error());
?>

<?php

$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];

$sql = mysql_query("INSERT INTO usuarios(nome, email, senha) 
values('$nome', '$email', '$senha')");

echo"<center><h1>Cadastro efetuado com sucesso!</h1>";

// Terminamos o "contador" e exibimos
list($usec, $sec) = explode(' ', microtime());
$script_end = (float) $sec + (float) $usec;
$elapsed_time = round($script_end - $script_start, 5);

echo "<br /><br />";
echo 'Elapsed time: ', $elapsed_time, ' secs. Memory usage: ', round(((memory_get_peak_usage(true) / 1024) / 1024), 2), 'Mb';

?>

</body>

</html>