<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <pre>
      <h1>liste des absents</h1>
      <ul>
         @foreach ($abs as $absence)
         {{$absence->id}}
          {{$absence->date}}
          {{$absence->nom_seance}}
      </ul>
         @endforeach
      <!-- {{print_r($abs)}} -->
    </pre>
  </body>
</html>
