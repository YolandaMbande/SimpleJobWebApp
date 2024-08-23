<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
//Basically importing ...
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', ['jobs' => Job::all()]);
});

//Jobs Route to return the description of the job the person has picked.
Route::get('/jobs/{id}', function ($id) {
    // Find the job with the matching ID
    $job = Job::find($id);

    // Pass the found job to the view
    return view('job', ['job' => $job]);
});

//Contact Route
Route::get('/contact', function () {
    return view('contact');
});
