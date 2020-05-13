<?php

class Controller
{
    /**
     * The controller is the main man on the job.
     * Handles communication between the Model and View.
     * These two methods are essential for the so-called 'transfer'.
     * @method Model retrieves a named model based on the models you have.
     * @method View creates and sets the current named view. Supports data passing.
     */

    public static function Model($name, $data = []) {
        /**
         * TODO: Needs to have a dynamic construtor.
         */

        require_once MODELS . $name . '.php';
        return new $model();
    }

    public static function View($name, $data = [])
    {
        /**
         * @param string $view The file name of the view.
         * @param array send an array of data you would like to 
         * pass along and access in that view.
         */

        require_once VIEWS . $name . '.php';
    }
}
