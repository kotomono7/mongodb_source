# MongoDB Datasource for CakePHP 1.2.x

# About
This is a modified MongoDD Datasource originally from Yasushi Ichikawa (ichikaway) fro CakePHP 1.2.x

# Requirements
PHP >= 5, pecl mongo (http://php.net/mongo)

# Installation
To install the driver for use in a single application:<br>
1. Place file "dbo_mongodb.php" into "cakephp/cake/libs/model/datasources/dbo"<br>
2. Place files "schemaless.php" and "sql_sompatible.php" into "cakephp/cake/libs/model/behaviors"

# Configuration
<code>
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
</code>

Special thanks to Yasushi Ichikawa (ichikaway)
