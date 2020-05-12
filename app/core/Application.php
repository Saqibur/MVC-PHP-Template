<?php

    class Application {
        /**
         * DO NOT MODIFY THIS FILE.
         * Do not take controller methods beyond 2 levels deep. It will break.
         */
    
        // This is the default controller and method.
        protected $controller = 'homepage';
        protected $method = 'index';
        protected $parameters = [];

        public function __construct() {
            // You can use this url to actually:
            // - Go to a controller/call it.
            // - Use a method of that controller.
            $parsed_url = ($this -> parseURL());

            // DEBUG: print_r($parsed_url);
            // DEBUG: echo CONTROLLERS;
            if (file_exists(CONTROLLERS . $parsed_url[0] . '.php')) {
                $this -> controller = $parsed_url[0];
                unset($parsed_url[0]);
                // DEBUG: echo 'The controller does exist';
            }
            else {
                // DEBUG: echo 'The controller does NOT exist';
            }

            require_once CONTROLLERS . $this -> controller . '.php';
            
            $this -> controller = new $this -> controller;

            if (isset($parsed_url[1])) {
                if (method_exists($this -> controller, $parsed_url[1])) {
                    $this -> method = $parsed_url[1];
                    // DEBUG: echo 'The method exists';
                } else {
                    // DEBUG: echo 'The method does NOT exist';
                }
            }

            // If there are params, get them, otherwise, set to empty object.
            // I don't think we will need this yet.
            $this -> parameters = $parsed_url ? array_values($parsed_url) : [];
            // var_dump($this -> parameters[1]);
            array_shift($this -> parameters);
            // var_dump($this -> parameters);
            call_user_func_array([$this -> controller, $this -> method], $this -> parameters);

        }

        public function parseURL() {
            if (isset($_GET['url'])) {
                $url = $_GET['url'];
                // DEBUG: echo $url;
                $clean_url = filter_var(rtrim($url, '/'), FILTER_SANITIZE_URL);
                return explode('/', $clean_url);
            }
            else {
                // DEBUG: echo 'No URL found';
            }
        }

    }

?>