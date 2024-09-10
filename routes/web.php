<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello 👋 ',
        'name' => 'janak',
        'jobs' => Job::all()
    ]);
});

// get job details
Route::get('/jobs/{id}', function ($id) {

    $myjob = Job::find($id);
    if (! $myjob) abort(404);
    // dd($myjob);
    return view('job', [
        'job' => $myjob
    ]);
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about1', function () {
    return [
        "name" => "janak",
        "age" => 25
    ];
});
