<?php

    // This is the bootstrapping file.
    // Recieves all requests and directs them to where it SHOULD be going.

    define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
    define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);
    define('CONTROLLERS', ROOT . 'app' . DIRECTORY_SEPARATOR . 'controllers' . '/');
    define('CORE', ROOT . 'app' . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR);
    define('DATA', ROOT . 'app' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR);
    define('MODELS', ROOT . 'app' . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR);
    define('VIEWS', ROOT . 'app' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
    define('INCLUDES', ROOT . 'app' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR);
    $modules = [ROOT, APP, CORE, CONTROLLERS, DATA, INCLUDES];

    set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $modules));
    // var_dump(get_include_path());
    // var_dump($_SERVER['REQUEST_URI']);

    // Starts the application.
    require_once "../app/init.php";

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

    $app = new Application();
    // echo "I am home";
?>