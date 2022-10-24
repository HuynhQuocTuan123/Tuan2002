<?php

$conn = pg_connect("postgres://oloymrxmishpid:b6c1b49d3d73f7f0a1042a8b912c267c18d380ee99fe0dacb3a67c8e4e05d990@ec2-54-82-205-3.compute-1.amazonaws.com:5432/ddbhoi81dkfn80");
	if(!$conn)
	{
		die("Could not connect to database");
    }

	
/*	
$conn = pg_connect("host=localhost port=5432 dbname=ATNshop user=postgres password=20102001");
if (!$conn) {
	die("Connection failed");
}*/
?>