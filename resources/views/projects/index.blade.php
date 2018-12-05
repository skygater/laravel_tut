<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Projects</h1>
    @foreach ($projects as $project )
      <li><a href="/projects/{{$project->id}}">
        {{ $project->title }}</a></li>
    @endforeach
    <br><br>
    <a href="/projects/create">Create Project</a>
  </body>
</html>
