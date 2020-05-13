<?php

class DefaultAdminController extends Controller {
    public static function Index() {
        self::View("DefaultAdmin" . DIRECTORY_SEPARATOR ."DefaultAdminView");
    }

    public static function ShowAllRoutes() {
        
        self::View("DefaultAdmin" . DIRECTORY_SEPARATOR . "ShowAllRoutesView");
    }
}