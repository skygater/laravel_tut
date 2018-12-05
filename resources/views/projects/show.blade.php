<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <h1>{{$projects->title}}</h1>
  <br><br>
  <p>{{$projects->description}}</p>
  </body>

  <a href="/projects/{{ $projects-> id }}/edit">Edit the Project</a>
</html>
