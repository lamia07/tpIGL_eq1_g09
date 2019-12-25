@extends('layout')

@section('contenu')
    <form action="{{ url('/inscription') }}" method="post">
    	{{ csrf_field() }}
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <form class="" action="" method="">
                <div class="form-group">
                  <label for="nem">Nom</label>
                  <input type="text" name="nom" placeholder="nom" value="">
                </div>
                <div class="form-group">
                  <label for="prenom">Prenom</label>
                  <input type="text" name="prenom" placeholder="prenom" value="">
                </div>
                <div class="form-group">
                  <label for="groupe">Groupe</label>
                  <input type="text" name="groupe" placeholder="groupe" value="">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" placeholder="email" value="">
                </div>
                <div class="form-group">
                  <label for="matricule">Matricule</label>
                  <input type="text" name="matricule" placeholder="matricule" value="">
                </div>
                <div class="form-group">

                  <input type="submit" class="form-control btn btn-primary" value="S'inscrire">
                </div>

              </form>

            </div>

          </div>

        </div>

    </form>
@endsection
