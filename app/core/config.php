<?php

if ($_SERVER['SERVER_NAME'] == 'localhost')
{
    // database config (local)
    define('DBNAME', 'my_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');

    // konstanta za apsolutni put za datoteke (local)
    define('ROOT', 'http://localhost/PROJECTS/php-mvc-framework/public');
} else {
    // database config (deployed)
    define('DBNAME', 'my_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');

    // konstanta za apsolutni put za datoteke (deployed)
    define('ROOT', 'https://www.tvojnekaawebstranica.com');
}

define('APP_NAME', "Website Name");
define('APP_DESC', "Greatest Website In The Universe");
define('DEBUG', true); // true pokazuje pogreške, false ne