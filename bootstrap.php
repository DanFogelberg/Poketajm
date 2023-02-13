<?php
use App\Database\QueryBuilder;
use App\Database\Connection;
use Dotenv\Dotenv;



$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

require "./src/database/config.php";



$database = new QueryBuilder(
    Connection::make(
        $config['driver'],
        $config['host'],
        $config['database'],
        $config['username'],
        $config['password']
    )
);
