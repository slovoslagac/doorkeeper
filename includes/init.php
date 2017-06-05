<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'doorkeeper');

defined('INC_PATH') ? null : define('INC_PATH', SITE_ROOT . DS . 'includes');


//Clasess

require INC_PATH . DS . 'config.php';
require INC_PATH . DS . 'user.php';
require INC_PATH . DS . 'db.php';
require INC_PATH . DS . 'functions.php';


//

$salt = "$%klsakdlkakal#$$";

