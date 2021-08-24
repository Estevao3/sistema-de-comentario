<?php
try{
	$pdo = new PDO("mysql:dbname=projeto_comentarios;host=localhost","root","");
} catch(PODException $e){
	echo "ERRO: ".$e->getMessage();
	exit;
}
?>

<fieldset>
	<form>
		Nome:<br>
		<input type="text" name="nome"><br><br>
		Mensagem:<br>
		<textarea name="mensagem"></textarea><br><br>
		<input type="submit" value="Enviar Mensagem">
	</form>
</fieldset>