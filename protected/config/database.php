<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'pgsql:host=localhost;dbname=bd_san_sebastian',
	'emulatePrepare' => true,
	'username' => 'postgres',
	'password' => 'underunan',
	'charset' => 'utf8',
	
);