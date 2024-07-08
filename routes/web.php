<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
   
    return view('home');
});
    

Route::get('/jobs' ,function(){
    return view('jobs/index',[ 'jobs'=> Job::all()
        ]);
});




Route::get('/jobs/create',function(){
    return view('jobs.create');
});

Route::get('/jobs/{id}', function($id) {
    

$job= Job::find($id);

    return view('jobs.show', ['job'=> $job]);
});


Route::post('/jobs',function(){
    
    //validate

    Job::create([
        'title'=> request('title'),
        'salary'=> request('salary'),
        
    ]);
 
return redirect('/jobs');
});

Route::get('/contacts', function(){
    return view('contacts');
});