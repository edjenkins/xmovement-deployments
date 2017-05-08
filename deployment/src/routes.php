<?php

Route::group(['middleware' => ['web']], function () {

    Route::get('event', 'deployment\deployment\PageController@event');

});
