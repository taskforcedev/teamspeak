<?php

Route::group(['namespace' => 'Taskforcedev\Blog\Http\Controllers'], function() {

    $tsPage = config('taskforce-teamspeak.options.page', 'teamspeak');

    if ($tsPage) {
        $tsPath = '/' . $tsPage;
        Route::get($tsPath, ['as' => 'teamspeak.index', 'uses' => 'IndexController@index']);
    }

    /* Admin Routes */


    /* Api Routes */
    Route::get('teamspeak/api/clients', ['as' => 'teamspeak.api.clients', 'uses' => 'ApiController@clients']);
});
