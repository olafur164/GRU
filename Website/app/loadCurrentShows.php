<?php
require_once 'init.php';
$query = "SELECT shows.id, movies.mname AS 'name', movies.mdescription AS 'Description', movies.mimage AS 'image', screen_id_fk AS 'screen', movies.mrating AS 'rating', fdate AS 'date', time, price 
			FROM shows
			INNER JOIN movies ON shows.movie_id_fk = movies.id";

$showsQuery = $pdo->prepare($query);

try
{
	$showsQuery->execute();
	$shows = [];
	while($row =  $showsQuery->fetch(PDO::FETCH_OBJ))
	{
		$shows[$row->id] = [
			'Image'		=>	$row->image,
			'MovieName' => 	$row->name,
			'Screen' 	=> 	$row->screen,
			'Rating'	=>	$row->rating,
			'Date'		=>	$row->date,
			'Time'		=> 	$row->time,
			'Price'		=>	$row->price
		];
	}
	echo '<pre>', print_r($shows), '</pre>';
}
catch (PDOException $e) 
{
	echo $e->getMessage();
	die();
}
