
@extends('layout')

@section('contenu')
    <form action="/inscription" method="post">
    	{{ csrf_field() }}
        <input type="email" name="email" placeholder="email">
        <input type="texte" name="prenom" placeholder="prenom">
        <input type="texte" name="groupe" placeholder="groupe">
        <input type="texte" name="matricule" placeholder="matricule">
        <input type="texte" name="nom" placeholder="nom">
        <input type="submit" value="S'inscrire">
    </form>
@endsection