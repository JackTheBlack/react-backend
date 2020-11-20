<?
		if (isset($_POST))
{
//var_dump(Json_decode($_POST["text"]));
$contratos = implode("  ", $_POST);

 echo $contratos;
$fp = fopen('contrato.json', 'w');
fwrite($fp, $contratos);
fclose($fp);
 
} else{
	echo "is not working";
}
		?>