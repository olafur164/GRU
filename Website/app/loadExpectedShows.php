<?php
require_once 'init.php';
$query = "SELECT DISTINCT(movies.id), movies.mname AS 'name', movies.mdescriptions AS 'descriptions', movies.mimage AS 'image', movies.mrating AS 'rating', movies.starts AS 'starts'
	FROM movies
	WHERE movies.starts > date";

$showsQuery = $pdo->prepare($query);

try
{
	$showsQuery->execute();
	$expected = [];
	while($row =  $showsQuery->fetch(PDO::FETCH_OBJ))
	{
		$expected[$row->id] = [
			'Image'			=>	$row->image,
			'MovieName' 	=> 	$row->name,
			'Descriptions'	=>	substr($row->descriptions, 0, 175) . '...',
			'Starts'        =>  $row->starts
		];
	}
}
catch (PDOException $e) 
{
	echo $e->getMessage();
	die();
}
