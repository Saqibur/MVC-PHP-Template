<?php
    class Controller {
        /**
         * Extend future controllers from this class.
         * Use views as needed to render your views, just pass the name.
         * Do the same for models.
         */
        public function model($model, $data = []) {
            /**
             * @param string $model The file name must match the model name.
             * @param array $data Do not send anything here. TODO. 
             */
            require_once '../app/models/' . $model . '.php';
            return new $model();
        }

        public function view($view, $data = []) {
            /**
             * @param string $view The filae name of the view.
             * @param array send an array of data you would like to 
             * pass along and access in that view.
             */
            require_once '../app/views/' . $view . '.php';
        }
    }

?>