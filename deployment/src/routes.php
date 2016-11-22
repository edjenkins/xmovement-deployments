<?php

Route::group(['middleware' => ['web']], function () {

    Route::get('competition', function() {
		return redirect()->action('PageController@home'); // 'deployment\deployment\PageController@competition'
	});

});
