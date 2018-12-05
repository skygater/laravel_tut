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
}
