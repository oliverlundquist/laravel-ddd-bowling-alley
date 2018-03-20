<?php

Route::namespace('BowlingAlley\UI\Web\Controllers')->group(function () {

    Route::get(
        'next-maintenance-date',
        'Janitor\PinsetterMaintenanceController@nextMaintenanceDate'
    );

});
