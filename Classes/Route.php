<?php

class Route
{
    /**
     * @var array $routes is a list of valid routes for the entire application.
     * @method void create($name, $function)adds a route to the valid route list.
     * @return void
     */
    public static $routes = array();

    public static function create($name, $function)
    {
        /**
         * @param string $name is the name of the route, often used to invoke the route.
         * @param function $function is the callback function to invoke when the named route is called.
         */

        self::$routes[] = $name;
        if ($_GET['url'] == $name)
            $function->__invoke();
    }
}
