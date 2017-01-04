<?php

$dbopts = parse_url(getenv('DATABASE_URL'));
$app->register(new Herrera\Pdo\PdoServiceProvider(),
               array(
                   'pdo.dsn' => 'pgsql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["ec2-23-21-184-181.compute-1.amazonaws.com
"] . ';port=' . $dbopts["5432"],
                   'pdo.username' => $dbopts["vboszvnnbteipi"],
                   'pdo.password' => $dbopts["9b76f6ced090dfad9ff9be358c3f1a28d0c18eb3410f5ea31c550d04d0364903"]
               )
);

//original code from heroku will test if needing to put in  credentials.
// $dbopts = parse_url(getenv('DATABASE_URL'));
// $app->register(new Herrera\Pdo\PdoServiceProvider(),
//                array(
//                    'pdo.dsn' => 'pgsql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["host"] . ';port=' . $dbopts["port"],
//                    'pdo.username' => $dbopts["user"],
//                    'pdo.password' => $dbopts["pass"]
//                )
// );