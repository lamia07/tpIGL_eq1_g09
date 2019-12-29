<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

      <h1>liste des absents</h1>
    <table>
      <thead>
        <th> Id absence</th>
        <th> Matricule</th>
        <th> Etudiant</th>
        <th> Date</th>
        <th> Seance </th>
        <th> Groupe </th>
      </thead>
      <tbody>

         @foreach ($abs as $absence)
         <tr>

      <td>  {{$absence->id}} </td>
      <td>  {{$absence->matricule}} </td>
      <td>  {{$absence->nom}}</td>
      <td>  {{$absence->date}} </td>
      <td>  {{$absence->nom_seance}} </td>
      <td>  {{$absence->nom_groupe}}</td>
    </tr>
         @endforeach
       </tbody>

       </table>

  </body>
</html>
