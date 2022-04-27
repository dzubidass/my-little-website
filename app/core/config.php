<?php
/* Konstanta ktora zadefinuje nazov / titulok webstranky. */
define('WEBSITE_NAME', 'My website');

/* Nastavenia pre databazu */
define('DB_TYPE', 'mysql');
define('DB_NAME', 'sem pride nazov databazy');
define('DB_USER', 'root');
define('DB_PASS', 'sem pride heslo pre databazu');
define('DB_HOST', 'localhost');

/* Typ protokolu HTTP/ HTTPS */
define('PROTOCAL', 'https');

/* ROOT a ASSETS cesta k suborom */
$path = str_replace('\\', '/', PROTOCAL . '://' . $_SERVER['SERVER_NAME'] . __DIR__ . '/');
$path = str_replace($_SERVER['DOCUMENT_ROOT'], '', $path);

define('ROOT', str_replace('app/core', 'public', $path));
define('ASSETS', str_replace('app/core', 'public/assets', $path));

/* Nastavenie zobrazovania chy, nastavit ako false pri nasadeni na produkcny server. */
define('DEBUG', true);

if (DEBUG) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    ini_set('display_errors', 0);
}
