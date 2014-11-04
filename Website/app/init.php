<?php
try {
	$db_host = 'tsuts.tskoli.is';
	$db_name = 'gru_h15_biohusid';
	$db_user = 'GRU_H15';
	$user_pw = 'gru';
	$pdo = new PDO('mysql:host='.$db_host.'; dbname='.$db_name, $db_user, $user_pw);  
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $pdo->exec('SET NAMES "utf8"');

}
catch (PDOException $e) {
	echo "Connection failed" . "<br>" . $e->getMessage();
}
?>