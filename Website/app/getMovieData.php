<?php
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);

if (isset($id)) {
	$getData = "SELECT movies.id, movies.mname, movies.mdescriptions, movies.mimage, movies.mtrailer, movies.mrating, 
					shows.movie_id_fk, shows.fdate, shows.time
	FROM movies
	JOIN shows
	ON shows.movie_id_fk = movies.id	
	WHERE movies.id = " . $id;
	try {
		$query = $pdo ->prepare($getData);
		$query->execute();
	} catch (Exception $e) {
		$error = true;
	}
	while ($row = $query -> fetch()) {
		$mname = $row['mname'];
		$mdesc = $row['mdescriptions'];
		$mimage = $row['mimage'];
		$mtrailer = $row['mtrailer'];
		$mrating = $row['mrating'];
		$date[] = array($row['fdate']);
		$time[] = array($row['time']);
		$error = false;
	}
}
?>