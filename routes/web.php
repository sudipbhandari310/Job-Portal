<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


// Route::resource('jobs',JobController::class);
Route::view('/','home');
    
Route::get('/jobs' , [JobController::class, 'index']);
    
Route::get('/jobs/create', [JobController::class,'create']);

Route::get('/jobs/{job}', [JobController::class, 'show']);
    
Route::post('/jobs',[JobController::class , 'post']);

Route::get('/jobs/{job}/edit',[JobController::class , 'edit']);
    
Route::patch('/jobs/{job}', [JobController::class, 'update']);

Route::delete('/jobs/{job}', [JobController::class , 'delete']);
   
Route::view('/contact' , 'contacts');