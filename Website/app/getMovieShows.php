<?php
$hasShows = false;
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);

if (isset($id)) 
{
	$getData = "SELECT movies.id, shows.fdate as 'date', shows.time as 'time'
				FROM movies
				INNER JOIN shows ON movies.id = shows.movie_id_fk
				WHERE movies.id = " . $id;
	$query = $pdo ->prepare($getData);
	try 
	{
		$query->execute();
		$showTimes = [];
		while ($row = $query->fetch(PDO::FETCH_OBJ)) 
		{
			$showTimes[$row->id] = [
				'Date' => $row->date,
				'Time' => $row->time
			];
			$hasShows = true;
		}
	} 
	catch (PDOException $e) 
	{
		die();
	}
}
?>