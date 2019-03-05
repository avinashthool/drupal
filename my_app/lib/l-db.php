<?php
/**
*
**/
function db_connect(){
	try {
	    $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
	} catch (PDOException $e) {
	    print "Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
}

function db_close(){
	$dbh = null;
}
?>