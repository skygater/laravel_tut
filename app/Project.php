<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  //This will make this field - open to fill;
    protected $fillable = [
      'title', 'description'
    ];
    //This will guard just these fields
    //protect $guarded=[];

    //CONNECT tasks with project Eloquents
    public function tasks(){
      //Eloquent method hasMany = has => 1 Tasks
      return $this->hasMany(Task::class);
    }
    //Our method for adding Tasks to this project
    public function addTask ($description){
      $this->tasks()->create($description);

      //--Second way
      // return   Task::create([
      //     'project_id' => $this->id,
      //     'description' => $description
      //   ]);

    }


}
