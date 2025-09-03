<?php

use Illuminate\Support\Facades\Route;
use App\Models\Edu;
use App\Models\Project;
use App\Models\User;

Route::get('/', function () {
    return view('home', [
        'user' => User::with('skills')->first(),
        'education' => Edu::all(),
        'projects' => Project::all()
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'user' => User::first()
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'user' => User::first()
    ]);
});

Route::get('/education', function () {
    return view('education', [
        'education' => Edu::all(),
        'user' => User::first()
    ]);
});

Route::get('/projects', function () {
    return view('projects', [
        'projects' => Project::all()
    ]);
});

Route::get('/temp', function () {
    return view('temp');
});
