<?php
$hostname = "localhost";
$user = "root";
$password = "";
$basedados = "webconsulte";
$connect = mysql_connect($hostname,$user,$password) or die ("Impossível estabelecer conexão!");
mysql_select_db($basedados) or die ("Impossível estabelecer conexão!");

//Busca valor digitado no campo autocomplete "$_GET['term']"

@$text = mysql_real_escape_string($_GET['term']);
$query = "SELECT * FROM secretaria WHERE campoTexto LIKE '%$text%' ORDER BY campoTexto ASC";
$result = mysql_query($query);

// Formata o resultado para JSON

		$json = '[';
		$first = true;

		while(@$row = mysql_fetch_array($result)){
			if(!$first) {$json .= ',';} else{$first = false;}
			$json .='{"value":"'.utf8_encode($row['campoTexto']).'"}';
		}
	$json .= ']';
	echo $json;

?>