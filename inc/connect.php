<?php

// $dbopts = parse_url(getenv('DATABASE_URL'));
// $app->register(new Herrera\Pdo\PdoServiceProvider(),
//                array(
//                    'pdo.dsn' => 'pgsql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["ec2-23-21-184-181.compute-1.amazonaws.com
// "] . ';port=' . $dbopts["5432"],
//                    'pdo.username' => $dbopts["vboszvnnbteipi"],
//                    'pdo.password' => $dbopts["9b76f6ced090dfad9ff9be358c3f1a28d0c18eb3410f5ea31c550d04d0364903"]
//                )
// );



// a bunch of code from http://stackoverflow.com/questions/26091113/heroku-php-connecting-to-cleardb-via-herrera-pdo
//
require('../vendor/autoload.php');

use Herrera\Pdo\PdoServiceProvider;
use Silex\Application;

$app = new Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));
// Our web handlers
$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return 'Hello';
});



//original code from heroku will test if needing to put in  credentials.
$dbopts = parse_url(getenv('DATABASE_URL'));
print_r(array_values($dbopts));

$app->register(new Herrera\Pdo\PdoServiceProvider(),
               array(
                   'pdo.dsn' => 'pgsql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["host"] . ';port=' . $dbopts["port"],
                   'pdo.username' => $dbopts["user"],
                   'pdo.password' => $dbopts["pass"]
               )
);



// // some code that worked in another project

// $host = $app['pdo.dsn.host'];
// $dbname = $app['pdo.dsn.pgsql:dbname'];
// $user = $app['pdo.username'];
// $pass = $app['pdo.password'];
// $charset = 'utf8';

// //$dsn = 'mysql:dbname=inteltre_medialibrary;host=localhost';

// $dsn = "pgsql:host=$host;dbname=$dbname;charset=$charset";
// $opt = [
//     PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//     PDO::ATTR_EMULATE_PREPARES   => false
// ];
// $pdo = new PDO($dsn, $user, $pass, $opt);