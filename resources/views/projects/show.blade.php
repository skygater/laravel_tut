<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <h1>{{$projects->title}}</h1><a href="/projects/{{ $projects-> id }}/edit">Edit the Project</a>
  <br><br>
  <p>{{$projects->description}}</p>

  @if ($projects->tasks->count())

    <h1>Tasks</h1>
    <ul>
      @foreach ($projects->tasks as $task)
        <form method="post" action="/tasks/{{$task->id}}">
          @method('PATCH')
          {{ csrf_field() }}
          <li>
            <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
            {{$task->description}}
          </li>
        </form>
      @endforeach

    </ul>
  @endif

  <form class="" action="/projects/{{$projects->id}}/tasks" method="post">
    {{ csrf_field() }}
    <input type="text" name="description" placeholder="New Task">
    <button type="submit" name="button">Add Task</button>
  </form>

</body>
</html>
