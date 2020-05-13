<?php

class DefaultErrorcontroller extends Controller {
    public static function NotFoundError() {
        self::View("DefaultError" . DIRECTORY_SEPARATOR ."NotFoundErrorView");
    }

    public static function Boom() {
        self::View("DefaultAdmin" . DIRECTORY_SEPARATOR ."DefaultAdminView");
    }
}