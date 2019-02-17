<?php

    define('DB_HOST', 'localhost');
    define('DB_PORT', '3306');
    define('DB_NAME', 'phplog');
    define('DB_USER', 'root');
    define('DB_PASS', '');

    try
    {
        $GLOBALS['pdo'] = new PDO('mysql:dbname='.DB_NAME.';host='.DB_HOST.';port='.DB_PORT, DB_USER, DB_PASS);

        // Asking PDO to return objects
        $GLOBALS['pdo']->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }
    catch(PDOException $e)
    {
        die('ERROR: Can\'t reach database, make sure login informations are correct.');
    }