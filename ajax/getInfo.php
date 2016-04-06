<?php 
try{
	$db = new PDO('mysql:host=localhost;dbname=test', 'root', 'pass');
}
catch(Exception $e){
	echo 'Erreur : '.$e;
}

$req = $db->prepare('SELECT
		Texte
		FROM
		ajaxtest
		');
$req->execute();
$result = $req->fetchColumn();


echo $result; 

?>