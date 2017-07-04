<?php
	include "connection.php";

?>
<html>
<head>
<meta charset="utf-8">
<title>Resultados de Pesquisa</title>
</head>

<body>
<?php

// Iniciamos o "contador"
list($usec, $sec) = explode(' ', microtime());
$script_start = (float) $sec + (float) $usec;

$buscar=$_POST['buscar'];
$sql = mysql_query("SELECT * FROM noticias WHERE texto or titulo or subtitulo LIKE '%".$buscar."%'");
$row = mysql_num_rows($sql);
if($row > 0){
	while ($linha = mysql_fetch_array($sql)){
		$titulo = $linha['titulo'];
		$texto = $linha['texto'];
		$subtitulo = $linha['subtitulo'];
		echo "<strong>Titulo: </strong>".@$titulo;
		echo "<br /><br />";
		echo "<strong>Subtitulo: </strong>".@$subtitulo;
		echo "<br /><br />";
		echo "<strong>Texto: </strong>".@$texto;
	}
}else{
	echo "Desculpe, nenhum resultado foi encontrado";
}

// Terminamos o "contador" e exibimos
list($usec, $sec) = explode(' ', microtime());
$script_end = (float) $sec + (float) $usec;
$elapsed_time = round($script_end - $script_start, 5);
echo "<br /><br />";
echo 'Elapsed time: ', $elapsed_time, ' secs. Memory usage: ', round(((memory_get_peak_usage(true) / 1024) / 1024), 2), 'Mb';

?>

</body>
</html>