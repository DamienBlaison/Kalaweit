<?php
if (is_array($_SERVER)) {
    if (array_key_exists('SERVER_NAME', $_SERVER)) {
        $host = strtolower($_SERVER['SERVER_NAME']);
    } else {
        $host = "localhost";
    }
} else {
    $host = gethostname();
}

$connexion = [

    "localhost" =>

    [
        "site" => 'localhost:8888',
        "host" => 'localhost:8889',
        "user" => "root",
        "pass" => "root",
        "db"   => 'kalaweitv2',
    ]
    ,

    "admin-pp.kalaweit.org" =>
    [
        "site" => 'admin-pp.kalaweit.org',
        "host" => '*****',
        "user" => "*****",
        "pass" => "*****",
        "db"   => '*******'
    ]
];
