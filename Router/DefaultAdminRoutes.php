<?php
/**
 * Admin Routes for a basic admin panel for your MVC application.
 * Feel free to get rid of everything.
 */

Route::create('Admin', function () {
    DefaultAdminController::Index();
});

Route::create("ShowAllRoutes", function () {
    DefaultAdminController::ShowAllRoutes();
});
