<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Create a New Project</h1>

    <!-- This action direct to a route /projects page-->
    <form  method="post" action="/projects">
      <!-- This will set security token -->
      {{csrf_field()}}
      <div >
        <input type="text" name="title" value="{{old('title')}}" placeholder="Project title">
      </div>
      <div >
        <textarea name="description" placeholder="project description"rows="8" cols="80" >{{old('description')}}</textarea>
      </div>
      <div >
        <button type="submit">Submit</button>
      </div>

      @if ($errors->any())
      <div class="notification is-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
      @endif

    </form>


  </body>
</html>
