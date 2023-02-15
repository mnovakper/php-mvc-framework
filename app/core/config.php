<?php /** @noinspection SpellCheckingInspection */

if ($_SERVER['SERVER_NAME'] == 'localhost')
{
    // database config (local)
    define('DBNAME', 'my_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');

    // constant for absolute path for files (local)
    define('ROOT', 'http://localhost/TUTORIALS/php-mvc-framework/public');
} else {
    // database config (deployed)
    define('DBNAME', 'my_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');

    // constant for absolute path for files (deployed)
    define('ROOT', 'https://www.tvojnekaawebstranica.com');
}

define('APP_NAME', "Website Name");
define('APP_DESC', "Greatest Website In The Universe");
define('DEBUG', true); // true shows errors, false doesn't