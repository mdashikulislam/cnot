<?php

    $MYSQL_HOST = $_ENV['MYSQL_HOST'];
    $MYSQL_USER = $_ENV['MYSQL_USER'];
    $MYSQL_DATABASE = $_ENV['MYSQL_DATABASE'];
    $MYSQL_PASSWORD = $_ENV['MYSQL_PASSWORD'];
    $JOURNAL_NAME = $_ENV['JOURNAL_NAME'];
    $APP_PASSWORD = $_ENV['APP_PASSWORD'];
    $SERVER_NAME = $_ENV['SERVER_NAME'];

    define("MYSQL_HOST", $MYSQL_HOST);
    define("MYSQL_USER", $MYSQL_USER);
    define("MYSQL_DATABASE", $MYSQL_DATABASE);
    define("MYSQL_PASSWORD", $MYSQL_PASSWORD); 
    define("JOURNAL_NAME", $JOURNAL_NAME);
    define("APP_PASSWORD", $APP_PASSWORD);
    define("SERVER_NAME", $SERVER_NAME);
?>