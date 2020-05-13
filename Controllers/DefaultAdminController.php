<?php

class DefaultAdminController extends Controller {
    public static function Index() {
        self::View("DefaultAdminView");
    }
}