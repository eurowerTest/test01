<?php 

try{
	$db = new PDO('mysql:host=localhost;dbname=test', 'root', 'pass');
}
catch(Exception $e){
	echo 'Erreur : '.$e;
}
$req = $db->prepare('UPDATE
		ajaxtest
		SET
		Texte = :texte
		');
$req->bindParam(':texte', $_GET["txt"]);
$req->execute();

echo "<div id='change' onclick='change()'>";
echo $_GET["txt"];
echo "</div>";

?>