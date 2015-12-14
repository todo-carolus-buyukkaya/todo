@extends('../auth/master_connections')
@section('titreOnglet')
    Inscription
@endsection
@section('contenu')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Inscrivez-vous</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="/auth/register">
                            {!! csrf_field() !!}
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Entrez votre nom" name="name" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Entrez votre e-mail" name="email" type="email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Entrez votre mot de passe" name="password" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Confirmez votre mot de passe" name="password_confirmation" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <a href="login">Vous avez deja un compte ?</a>
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block">S'inscrire</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection