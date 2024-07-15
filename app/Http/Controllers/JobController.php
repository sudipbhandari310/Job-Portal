<?php

namespace App\Http\Controllers;

use App\Models\Job;



use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        $jobs = Job::latest()->paginate(7);
        return view('jobs.index',[ 'jobs'=> $jobs
            ]);
    }

    public function create(){
        return view('jobs.create');
    }

    public function show(Job $job){
        return view('jobs.show', ['job'=> $job]);
    }


    public function post(){
        request()->validate([
            'title'=> ['required','min:5'],
            'salary'=>['required']
        ]);
    
        Job::create([
            'title'=> request('title'),
            'salary'=> request('salary'),
            
        ]);
     
    return redirect('/jobs');

    }
    public function edit(Job $job){
        return view('jobs.edit', ['job'=> $job]);
    }

    public function update(Job $job){
       //validate
    request()->validate([
        'title'=> ['required','min:5'],
        'salary'=>['required']
    ]);
    
    
    $job->update([
        'title'=> request('title'),
        'salary'=>request('salary')
    ]);

return redirect('/jobs/'. $job->id);
    
}

    public function delete(Job $job){
        $job->delete();
        return redirect('/jobs');
        
    }

    public function contacts(){
        return view('contacts');
    }
}