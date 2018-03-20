<?php

Route::namespace('BowlingAlley\UI\Api\Controllers')->group(function () {

    Route::post(
        'janitor/pinsetter/maintenance/immediate',
        'Janitor\PinsetterMaintenanceController@immediateMaintenance'
    );

    Route::post(
        'janitor/pinsetter/maintenance/scheduled',
        'Janitor\PinsetterMaintenanceController@scheduleMaintenance'
    );

    Route::post(
        'janitor/cafeteria/cleaning/tables',
        'Janitor\CafeteriaCoffeeTableCleaningController@wipeCafeteriaCoffeeTable'
    );

});
