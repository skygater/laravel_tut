<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


  <h1>Edit Project</h1>
 <form method="POST" action='/projects/{{$projects->id}}'>
   {{method_field('PATCH')}}

   {{csrf_field()}}
  <div class="field">
    <label class="lable" for="title">Title</label>
    <div class="control">
      <input type="text" name="title" class="input" placeholder="Title" value="{{ $projects->title }}">
    </div>
  </div>

  <div class="field">
    <label class="lable" for="description">Description</label>
    <div class="control">
      <textarea name="description" placeholder="Enter Description" rows="8" cols="80">{{$projects->description}}</textarea>
    </div>
  </div>

  <div class="field">
    <div class="control">
      <button type="submit" name="button">Update project</button>
    </div>
  </div>

</form>
<form action='/projects/{{$projects->id}}' method="post">
  {{method_field('DELETE')}}
  {{ csrf_field() }}
  <div class="field">
    <div class="control">
      <button type="delete" name="button">Delete</button>
    </div>
  </div>
</form>

</body>
</html>
