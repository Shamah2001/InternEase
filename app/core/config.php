<?php 

if($_SERVER['SERVER_NAME'] == 'localhost')
{
	/** database config **/
	define('DBNAME', 'PDC');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', '');
	
	define('ROOT', 'http://localhost/Student_frontend/public');

}else
{
	/** database config **/
	define('DBNAME', 'PDC');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', '');

	// define('ROOT', 'https://www.iQube.com');

}

define('APP_NAME', "PDC");
define('APP_DESC', "Empowering Education through Personalizing Learnign");

/** true means show errors **/
define('DEBUG', true);
