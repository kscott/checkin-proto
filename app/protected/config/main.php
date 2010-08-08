<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath' => dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name' => 'CCB Checkin Demo',

	// preloading 'log' component
	'preload' => array('log'),

	// autoloading model and component classes
	'import' => array(
		'application.models.*',
		'application.components.*',
	),

	// application components
	'components' => array(
		'user' => array(
			// enable cookie-based authentication
			'allowAutoLogin' => true,
		),
		// uncomment the following to enable URLs in path-format
		'urlManager' => array(
			'urlFormat' => 'path',
			'rules' => array(
	            'gii' => 'gii',
	            'gii/<controller:\w+>' => 'gii/<controller>',
	            'gii/<controller:\w+>/<action:\w+>' => 'gii/<controller>/<action>',
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			),
		),
		/*
		'db' => array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		*/
		// uncomment the following to use a MySQL database
		'db' => array(
			'connectionString' => 'mysql:host=localhost;dbname=ccb_dev',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'enableProfiling' => true,
			'enableParamLogging' => true,
		),
		'ccb' => array(
			'class' => 'CDbConnection',
			'connectionString' => 'mysql:host=localhost;dbname=ccbcompany',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'enableProfiling' => true,
			'enableParamLogging' => true,
		),
		'errorHandler' => array(
			// use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
		'log' => array(
			'class' => 'CLogRouter',
			'routes' => array(
				array(
					'class' => 'CFileLogRoute',
					'levels' => 'error, warning',
				),
				// uncomment the following to show log messages on web pages
				array(
					'class' => 'CWebLogRoute',
					'showInFireBug' => true,
					'levels' => 'trace,info, error, warning',
				),
				// array(
				// 	'class' =>  'CProfileLogRoute',
				// 	'showInFireBug' => true,
				// 	'levels' => 'trace,info, error, warning',
				// ),
			),
		),
	),

	'modules' => array(
	    'gii' => array(
	        'class' => 'system.gii.GiiModule',
	        'password' => 'checkin',
	        // 'ipFilters' => array(...a list of IPs...),
	        // 'newFileMode' => 0666,
	        // 'newDirMode' => 0777,
	    ),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params' => array(
		// this is used in contact page
		'adminEmail' => 'webmaster@example.com',
	),
);
