<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$title = "";

Route::get('/', function () {
    $title = 'Home';
    return view('index', ['title' => $title]);
});

Route::get('/workers', function () {
    $title = 'Workers';

    $workers = [
        [
            'id' => 1,
            'firstname' => 'Hal',
            'lastname' => 'Jacobson',
            'age' => 25,
            'job-title' => 'programer',
            'salary' => 2500,
        ],
        [
            'id' => 2,
            'firstname' => 'Veronica',
            'lastname' => 'Wills',
            'age' => 28,
            'job-title' => 'programer',
            'salary' => 3000,
        ],
        [
            'id' => 3,
            'firstname' => 'Tehya',
            'lastname' => 'Williamson',
            'age' => 21,
            'job-title' => 'programer',
            'salary' => 1200,
        ],
        [
            'id' => 4,
            'firstname' => 'Harleen',
            'lastname' => 'Suarez',
            'age' => 19,
            'job-title' => 'programer',
            'salary' => 1000,
        ]
    ];

    return view('workers', ['title' => $title, 'workers' => $workers]);
});

Route::get('/about', function () {
    $title = 'About';

    $workers = [
        [
            'id' => 1,
            'firstname' => 'Hal',
            'lastname' => 'Jacobson',
            'age' => 25,
            'job-title' => 'programer',
            'salary' => 2500,
        ],
        [
            'id' => 2,
            'firstname' => 'Veronica',
            'lastname' => 'Wills',
            'age' => 28,
            'job-title' => 'programer',
            'salary' => 3000,
        ],
        [
            'id' => 3,
            'firstname' => 'Tehya',
            'lastname' => 'Williamson',
            'age' => 21,
            'job-title' => 'programer',
            'salary' => 1200,
        ],
        [
            'id' => 4,
            'firstname' => 'Harleen',
            'lastname' => 'Suarez',
            'age' => 19,
            'job-title' => 'programer',
            'salary' => 1000,
        ]
    ];

    $income = 25000;

    return view('about', ['title' => $title, 'workers' => $workers, 'income' => $income]);
});
