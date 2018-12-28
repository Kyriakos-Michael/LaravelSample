<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class ProjectsController extends Controller
{

    public function index() {

        $projects = Project::all();


        // Return the Data as a JSON Object Structure. 
        // ==> With this Line of Code::  
            //  return $projects;

        return view('projects.index', compact('projects'));
    }

    public function create() {
        return view('projects.create');
    }

    public function edit ($id) {

        
        $project = Project::findOrFail($id);

        return view('projects.edit', compact('project'));

    }

    public function update($id) {


        $project = Project::find($id);

        $project->title = request('title');
        $project->description = request('description');
        $project->save();

        return redirect('/projects');

    }

    public function destroy(){

        $project = Project::find($id);

        $project->title = request('title');
        $project->description = request('description');

        $project->save();

        return redirect('/projects');
    }
    

    public function store() {

        $project = new Project();

        $project->title = request('title');
        $project->description = request('description');

        $project->save();


            return redirect('/projects');


  }
}
