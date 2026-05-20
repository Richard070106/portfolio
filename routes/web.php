<?php

use Illuminate\Support\Facades\Route;
use App\Models\Skill;
use App\Models\Project;

use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {

    $skills = Skill::all();

    $projects = Project::all();

    return view(
        'home',
        compact('skills','projects')
    );

});

Route::middleware(['auth'])->group(function(){

    Route::resource(
        'skills',
        SkillController::class
    );

    Route::resource(
        'projects',
        ProjectController::class
    );

});

require __DIR__.'/auth.php';