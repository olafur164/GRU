<?php
try {
	$sql = "SELECT id, mname, mdescriptions, mtrailer, mrating
	FROM movies
	WHERE movies.id = " . mysql_real_escape_string($_GET['id']);
	$result = $pdo ->query($sql);
} catch (Exception $e) {
	echo "Fetching data from database failed" . "<br>" . $e->getMessage();
}
while ($row = $result -> fetch()) {
	$movie[] = array($row[''], $row['name'], $row['description']);
}
?>