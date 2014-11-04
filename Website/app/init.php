<?php
try {
	$db_host = '';
	$db_name = '';
	$db_user = '';
	$user_pw = '';
	$pdo = new PDO('mysql:host='.$db_host.'; dbname='.$db_name, $db_user, $user_pw);  
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $pdo->exec('SET NAMES "utf8"');

}
catch (PDOException $e) {
	echo "Connection failed" . "<br>" . $e->getMessage();
}
?>