<?php

define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__));
define("APP",ROOT.DS.'app');
define("CONTROLLERS",APP.DS.'controllers');
define("CORE",APP.DS.'core');
define("MODELS",APP.DS.'models');
define("VIEW",APP.DS."view");
define("CONFIG",APP.DS.'config');


//config

define("SERVER","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","proone");
define("DATABASE_TYPE","mysql");
define("DOMAIN_NAME","http://mvc.test/");


require_once ("../vendor/autoload.php");

$app = new MVC\core\app();