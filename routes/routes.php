<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\JobController;


// Example resource routes for a "Job" controller

// Remove this file if you are using routes/api.php for API routes.
Route::apiResource('jobs', JobController::class);