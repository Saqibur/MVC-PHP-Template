<?php

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR . basename(__DIR__) . DIRECTORY_SEPARATOR);
define('CLASSES', ROOT . 'Classes' . DIRECTORY_SEPARATOR);
define('CONTROLLERS', ROOT . 'Controllers' . DIRECTORY_SEPARATOR);
define('VIEWS', ROOT . 'Views' . DIRECTORY_SEPARATOR);
define('MODELS', ROOT . 'Models' . DIRECTORY_SEPARATOR);
define('RESOURCES', ROOT . 'Resources' . DIRECTORY_SEPARATOR);
define('ROUTER', ROOT . 'Router' . DIRECTORY_SEPARATOR);


$modules = [ROOT, CLASSES, CONTROLLERS, VIEWS, MODELS, RESOURCES, ROUTER];

set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $modules));

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$time = $_SERVER['REQUEST_TIME'];

/**
* for a 30 minute timeout, specified in seconds
*/
$timeout_duration = 1800;

/**
* Here we look for the user's LAST_ACTIVITY timestamp. If
* it's set and indicates our $timeout_duration has passed,
* delete away any previous $_SESSION data and start a new one.
*/
if (isset($_SESSION['LAST_ACTIVITY']) && 
   ($time - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
    session_unset();
    session_destroy();
    session_start();
}

/**
* Finally, update LAST_ACTIVITY so that our timeout
* is based on it and not the user's login time.
*/
$_SESSION['LAST_ACTIVITY'] = $time;

/**
 * Reference: https://solutionfactor.net/blog/2014/02/08/implementing-session-timeout-with-php/
 */


/**
 * This is where it all begins.
 */


/**
 * Refactor these loaders.
 */

function load_classes($class_name) {
    $file = CLASSES . $class_name . '.php';
    if (file_exists($file)) 
    {
        require_once $file;
    }
     
}

function load_controllers($controller_name) {
    $file = CONTROLLERS . $controller_name . '.php';
    if (file_exists($file)) 
    {
        require_once $file;
    }
}


spl_autoload_register('load_classes');
spl_autoload_register('load_controllers');


require_once(ROUTER . 'Routes.php');
