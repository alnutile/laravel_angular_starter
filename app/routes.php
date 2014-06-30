<?php

use Carbon\Carbon;

Route::get('/', function()
{
    $date = Carbon::now()->timestamp;
	return View::make('examples.content_one', compact('date'));
});

/**
 * Angular with mocked data see app-dev.js for the results
 */

Route::get('/dashboard', function()
{
    return View::make('layouts.angular');
});

/**
 * Example with real data
 * see app-dev.js for this request as well but I pass it through
 */

Route::group(array('prefix' => 'api/v1'), function() {
    Route::resource('dashboard', 'DashboardController');
});

Route::get('/queue_example', function()
{
    //Group the functions by number of threads
    $count = 1;
    $max = 4;
    $current = 1;
    $job_group = [];
    foreach(range(1,20) as $index) {
        if($count >= $max) {
            $push = array(
                'thread' => $current,
                'job_count' => count($job_group[$current]),
                'jobs' => $job_group[$current]);
            Queue::push('ScreenShooter\QueueExample', $push);
            $pushed[] = $push;
            $count = 1; //
            $current++; //Set the new group up
            $job_group[$current][] = "date";
        } else {
            $job_group[$current][] = "date";
            $count++;
        }
    }
    return $pushed;
});