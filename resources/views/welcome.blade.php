<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
  </head>
  <body>
    <h3>Tasks</h3>
    <hr>
    <ul>
      @foreach($tasks as $tasks)
        
        <li><a href="/tasks/{{ $tasks->id }}">{{ $tasks->body }}</a></li>
      @endforeach
    </ul>

  </body>
</html>


<body>
  <head>
    <h3></h3>
  </head>
</body>
