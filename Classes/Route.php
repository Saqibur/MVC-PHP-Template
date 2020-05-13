<?php

class Route
{
    /**
     * @var array $routes is a list of valid routes for the entire application.
     * @method void Create($name, $function)adds a route to the valid route list.
     * @return void
     */
    public static $routes = array();

    public static function Create($name, $function)
    {
        /**
         * @param string $name is the name of the route, often used to invoke the route.
         * @param function $function is the callback function to invoke when the named route is called.
         */

        
        self::$routes[$name] = $name;

        // TODO: IDK if this is the best way to do it.
        // Yeah don't do this, it's not what actually happens and it's not the way to do it.
        // self::$routes = array_unique(self::$routes);
        
        if ($_GET['url'] == $name)
            $function->__invoke();
    }
}
