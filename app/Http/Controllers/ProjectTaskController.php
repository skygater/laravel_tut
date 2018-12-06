<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;

class ProjectTaskController extends Controller
{
  public function update (Task $task){
    //dd(request()->all());
    $task -> update([
      'completed' => request()->has('completed')
    ]);
    return back();
  }


  public function store (Project $project){
  $atributes = request()->validate([
      'description' => 'required'
    ]);
    //This goes to Model to a method to add task - passing $description
    $project->addTask($atributes);
    // Task::create([
    //   'project_id' => $project->id,
    //   'description' => request('description')
    // ]);
    return back();

  }

}
