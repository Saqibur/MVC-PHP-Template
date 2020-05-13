<?php

/**
 * Admin Routes for a basic admin panel for your MVC application.
 * Feel free to get rid of everything.
 */

Route::Create('Admin', function () {
    DefaultAdminController::Index();
});

Route::Create("Admin/ShowAllRoutes", function () {
    DefaultAdminController::ShowAllRoutes();
});
