<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('titreOnglet')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ToDo">
    <meta name="author" content="Carolus Dorian">

    <!-- Bootstrap Core CSS -->
    <link href="startbootstrap-sb-admin-2-1.0.7/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="startbootstrap-sb-admin-2-1.0.7/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- pour le calendrier -->
    <link href="startbootstrap-sb-admin-2-1.0.7/dist/datepicker/bootstrap-datetimepicker.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="startbootstrap-sb-admin-2-1.0.7/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="startbootstrap-sb-admin-2-1.0.7/dist/css/moncss.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
@yield('titre')
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="listtaches">Todo</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-tasks">

                   @foreach($taches=\App\Tache::where('idutilisateur', (Auth::user()->id) )->get() as $tache)
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>{{$tache->nom}}</strong>
                                        <span class="pull-right text-muted">  {{($tache->soustaches->count())==0 ? $pourcentage=0 : $pourcentage=round(((($tache->soustaches->where('etat',1)->count())/($tache->soustaches->count()))*100),0)}}% Completé</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{$pourcentage}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$pourcentage}}%">
                                            <span class="sr-only"> {{$pourcentage}}% Completé (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>

                    @endforeach
                </ul>
                <!-- /.dropdown-tasks -->
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><i class="fa fa-user fa-fw"></i> {{ isset(Auth::user()->name) ? Auth::user()->name : 'Guest'  }}</li>
                    <li class="divider"></li>
                    <li><a  href="/auth/logout"><i class="fa fa-sign-out fa-fw"></i> Déconnexion </a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="/listtaches"><i class="fa fa-table fa-fw"></i> Listes des tâches</a>
                    </li>
                    <li>
                        <a href="/apropos"><i class="fa fa-info fa-fw"></i> À propos</a>
                    </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <!-- Page Content -->
@yield('contenu')

</div>
<div class="erreurs">
    @if (count($errors) > 0)
    <div class="alert  alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

            @foreach ($errors->all() as $error)
               {{ $error }} <br>
            @endforeach

    </div>
        @endif
</div>

<!-- /#wrapper -->
<!-- jQuery -->
<script src="startbootstrap-sb-admin-2-1.0.7/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="startbootstrap-sb-admin-2-1.0.7/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>



<!-- Custom Theme JavaScript -->
<script src="startbootstrap-sb-admin-2-1.0.7/dist/js/sb-admin-2.js"></script>
<!--Pour le calendrier -->
<script src="startbootstrap-sb-admin-2-1.0.7/dist/datepicker/bootstrap-datetimepicker.js"></script>
<script src="startbootstrap-sb-admin-2-1.0.7/dist/datepicker/bootstrap-datetimepicker.fr.js"></script>

<script src="startbootstrap-sb-admin-2-1.0.7/dist/js/monjs.js"></script>

</body>
</html>