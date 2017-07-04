<html>
  
<head>
<title>Autenticando usuário</title>

<script type="text/javascript">
function loginsuccessfully() {
   setTimeout ("window.location='index.html'", 3000);
}

function loginfailed(){
     setTimeout ("window.location='login.php'", 3000);
    }
   </script>
  </head>
   
   <body>
   
<?php
   
$conn = @mysql_connect('127.0.0.1','root','1234');
if (!$conn) {
    die('Não foi possível Conectar: ' . mysql_error());
}
mysql_select_db('informasabara', $conn);

?>
<?php

// Iniciamos o "contador"
list($usec, $sec) = explode(' ', microtime());
$script_start = (float) $sec + (float) $usec;

$email=$_POST ['email'];
$senha=$_POST ['senha'];
$sql = mysql_query ("SELECT * FROM  usuarios WHERE email = '$email' AND senha = '$senha'") or die (mysql_error());
$row = mysql_num_rows ($sql);

if($row > 0) {
 $_SESSION ['email']=$_POST ['email'];
 $_SESSION ['senha']=$_POST ['senha'];
 echo "<script>loginsuccessfully()</script>";
 echo "<center>Você foi autenticado com sucesso! Aguade um instante.</center";
} else {
 echo "<center>Nome de usuário ou senha inválido! aguarde um instante.</center>";
 echo "<script>loginfailed()</script>";  
}

// Terminamos o "contador" e exibimos
list($usec, $sec) = explode(' ', microtime());
$script_end = (float) $sec + (float) $usec;
$elapsed_time = round($script_end - $script_start, 5);
echo "<br /><br />";
echo 'Elapsed time: ', $elapsed_time, ' secs. Memory usage: ', round(((memory_get_peak_usage(true) / 1024) / 1024), 2), 'Mb';

?>

   </body>
</html>﻿