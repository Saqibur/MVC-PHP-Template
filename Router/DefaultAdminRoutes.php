<?php
/**
 * Admin Routes for a basic admin panel for your MVC application.
 * Feel free to get rid of everything.
 */
include_once('AdminRoutes');

Route::create('Admin', function () {
    DefaultAdminController::Index();
});
