<?php
try {
    $base_name = 'lovesfoo_appxcelerate';
    $username = 'lovesfoo';
    $password = '357a[F-IYY8nbx';
    $host = '/var/run/postgresql';
    //$db = new PDO('mysql:host='.$host.';dbname='.$base_name, $username, $password); // Connexion MYSQL

    // Connexion PostgreSQL
    $dsn = "pgsql:host=$host;port=5432;dbname=$base_name;";
    $db = new PDO($dsn, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

}catch (Exception $e){
    die("Erreur de connexion à la base de données : ".$e->getMessage());
}
