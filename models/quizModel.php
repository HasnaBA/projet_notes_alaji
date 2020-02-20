<?php



function getQuizzes()
{

	$db = new PDO('mysql:host=localhost;dbname=alaji', 'root', '');
	$listQuizzes = $db->prepare('SELECT * FROM quiz');
	$listQuizzes->execute();
	return $listQuizzes -> fetchAll(); 
}






?>