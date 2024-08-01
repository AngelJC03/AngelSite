<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use function Pest\Laravel\get;
use App\Models\Projects;

Route::get('/', function () {
    return view('home', [
        'name' => 'Angel Castano'
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/projects', function ()  {
    return view('projects', [
        'projects' => Projects::getAllProjects()
    ]);
});

Route::get('/projects/{id}', function ($id) {

    $project = Projects::getProject($id);

    if ($project === null) {
        abort(404);
    }

    return view('project', ['project' => Projects::getProject($id)]);
});
