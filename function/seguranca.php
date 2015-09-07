<?php

function anti_sql_injection($string){
        $string = preg_replace(mb_sql_regcase("/(\n|\r|%0a|%0d|Content-Type:|bcc:|to:|cc:|Autoreply:|from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"), "", $string);
        $string = strip_tags($string);  # Remove tags HTML e PHP.
        $string = addslashes($string);  # Adiciona barras invertidas Ã© uma string.
        return $string;
}
function mb_sql_regcase($string,$encoding='auto'){
	$max=mb_strlen($string,$encoding);
	$ret='';
	for ($i = 0; $i < $max; $i++) {
		$char=mb_substr($string,$i,1,$encoding);
		$up=mb_strtoupper($char,$encoding);
		$low=mb_strtolower($char,$encoding);
		$ret.=($up!=$low)?'['.$up.$low.']' : $char;
	}
	return $ret;
}

?>