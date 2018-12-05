<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    //This will Route to /projects PAGE
    public function index(){
      //This get all info from Db
      $projects = Project::all();
      //This will look in RESURCES/VIEWS/PROJECT/index.blade.php
      //add the JSON array $projects
      return view('projects.index', compact('projects'));
    }
    //This will Route to /projects/create PAGE
    public function create(){
      return view('projects.create');
    }
    //Called by Route::post from Create
    public function store(){

    $validate = request()->validate([
        'title' => ['required','min:3'],
        'description' => ['required','min:3']
      ]);

      Project::create($validate);

      //This will add into DB trough Model;
      //request('#') will get frmo name field;
      // $project = new Project();
      // $project->title = request('title');
      // $project->description = request('description');
      // $project->save();
      //This will redirect to /projects ROUTE ---> index()
      return redirect('/projects');
    }

    //Show page of the project
    public function show(Project $project){
      $projects = $project;
      return view('projects.show', compact('projects'));
    }

    // for viewing edit.Page
    public function edit(Project $project){
      $projects = $project;
          return view('projects.edit', compact('projects'));
    }

    //On trigger patch
    public function update(Project $project){
    //  dd('Hello');
        $project->update(request(['title','description']));
        return redirect('/projects');
    }


    public function destroy( Project $project){
      //dd('You are in delete');
      $project->delete();
      return redirect('/projects');
    }


}
