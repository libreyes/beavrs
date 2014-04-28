<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'RRD Dataset - version 1.1 30/7/2013',
	
	// Import models so they are available to console commands
	 'import'=>array(
        'application.models.*',
    ),
	
	// Application components
	'components'=>array(
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// Same database connection as main application
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=rrd_dataset',
			'emulatePrepare' => true,
			'username' => 'rrd_dataset',
			'password' => 'rrd_dataset',
			'charset' => 'utf8',
			'tablePrefix' => 'tbl_',
		),
	),
);