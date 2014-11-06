<?php
require_once 'init.php';
$query = "SELECT DISTINCT(movies.id), movies.mname AS 'name', movies.mdescriptions AS 'descriptions', movies.mimage AS 'image', screen_id_fk AS 'screen', movies.mrating AS 'rating', fdate AS 'date', time, price
			FROM shows
			INNER JOIN movies ON shows.movie_id_fk = movies.id
			ORDER BY rating DESC";

$showsQuery = $pdo->prepare($query);

try
{
	$showsQuery->execute();
	$shows = [];
	while($row =  $showsQuery->fetch(PDO::FETCH_OBJ))
	{
		$shows[$row->id] = [
			'Image'			=>	$row->image,
			'MovieName' 	=> 	$row->name,
			'Descriptions'	=>	substr($row->descriptions, 0, 600) . '...',
			'Screen' 		=> 	$row->screen,
			'Rating'		=>	$row->rating,
			'Date'			=>	$row->date,
			'Time'			=> 	$row->time,
			'Price'			=>	$row->price
		];
	}
}
catch (PDOException $e)
{
	echo $e->getMessage();
	die();
}
