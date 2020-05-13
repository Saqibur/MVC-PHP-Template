<?php

/**
 * Add your routes here.
 * To keep things clean, perform any and all modifications within your controllers.
 * If you need to pass around data, well I haven't figured that out yet.
 */

Route::create('Test', function () {
    TestController::View('TestView');
});


Route::create('TestData', function () {
    TestController::View('TestView', ['Test' => 'Success']);
});
