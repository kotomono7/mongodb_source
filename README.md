# MongoDB Datasource for CakePHP 1.2.x

## About
This is a modified MongoDB Datasource originally from Yasushi Ichikawa (ichikaway) for CakePHP 1.2.x

## Requirements
PHP >= 5, pecl mongo (http://php.net/mongo)

## Installation
To install the driver for use in a single application:<br>
1. Place file __"dbo_mongodb.php"__ into directory _"cakephp/cake/libs/model/datasources/dbo"_<br>
2. Place file __"schemaless.php"__ and __"sql_sompatible.php"__ into directory _"cakephp/cake/libs/model/behaviors"_

## Configuration
```php
<?php
// app/config/database.php
class DATABASE_CONFIG {
	var $default = array(
		'driver' => 'mongodb',
		'database' => 'sample',
		'host' => 'localhost',
		'port' => 27017,
	);
	var $test = array(
		'driver' => 'mongodb',
		'database' => 'sample',
		'host' => 'localhost',
    	'port' => 27017,
	);
}
```
Special thanks to Yasushi Ichikawa (ichikaway)
