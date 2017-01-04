<?php

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


//*******************Heroku Provided Settings*****************
//original code from heroku will test if needing to put in  credentials.
$dbopts = parse_url(getenv('DATABASE_URL'));
//print_r(array_values($dbopts));
//echo "var_dump dbopts";
var_dump($dbopts);

$app->register(new Herrera\Pdo\PdoServiceProvider(),
               array(
                   'pdo.dsn' => 'pgsql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["host"] . ';port=' . $dbopts["port"],
                   'pdo.username' => $dbopts["user"],
                   'pdo.password' => $dbopts["pass"]
               )
);
//echo "var_dump app";
var_dump($app);


// **************some code that worked in another project******************

$host = $app['pdo.dsn'];
//$dbname = $app['pdo.dsn.pgsql:dbname']; // the db name and host name are together in pdo.dsn allong with port number
//     ["pdo.dsn"]=>"pgsql:dbname=d49b9lo16s6749;host=ec2-23-21-184-181.compute-1.amazonaws.com;port=5432"
//     ["pdo.username"]=>"vboszvnnbteipi"
//     ["pdo.password"]=>"9b76f6ced090dfad9ff9be358c3f1a28d0c18eb3410f5ea31c550d04d0364903"
$user = $app['pdo.username'];
$pass = $app['pdo.password'];
//$charset = 'utf8';
    // I dont think charset is necessary right now
/////////$dsn = 'mysql:dbname=inteltre_medialibrary;host=localhost';
    //This is axample from previous project, I may not need it

//commenting to fix dsn information
//$dsn = "pgsql:host=$host;dbname=$dbname;charset=$charset";
//$dsn = "pgsql:host=".$host.";dbname=".$dbname;       // ;charset=$charset";
    // since $host from pdo.dsn has host, db name and port i dont think $dsn is needed here.
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false
];
$pdo = new PDO($host, $user, $pass, $opt);
//$pdo = new PDO($dsn, $user, $pass, $opt);
    //original configuration from previous working example