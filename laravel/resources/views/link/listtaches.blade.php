@extends('../master')
@extends('../modal/ajouterTachePrincipal')
@extends('../modal/modifierTachePrincipal')
@extends('../modal/ajouterTacheSecondaire')
@extends('../modal/modifierTacheSecondaire')
@extends('../modal/supprimerTachePrincipal')
@extends('../modal/supprimerTacheSecondaire')
@extends('../modal/validerTacheSecondaire')
@extends('../modal/validerTachePrincipal')

@section('titreOnglet')
    Liste des tâches
@endsection
@section('contenu')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Listes des taches  <button type="button" class="btn btn-primary btn-circle" id="bouton-new"   data-toggle="modal" data-target="#modalAjoutTachePrincipal"  ><i class="fa fa-plus"></i>
                        </button></h1>

                </div>
                <!-- /.col-lg-12 -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            </div>
                            <!-- .panel-heading -->
                            <div class="panel-body">
                                <div class="panel-group" id="accordion">
                                    @foreach($taches as $tache)
                                        <div class="panel panel-default ">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" id="nomtacheprincipal-{{$tache-> id}}" data-parent="#accordion" href="#collapse{{$tache-> id}}"> {{$tache->  nom}}</a>
                                                    <p class=" btn-circle btn-default right">{{$tache->soustaches->where('etat',1)->count()}}/{{$tache->soustaches->count()}}</p>
                                                    <button type="button" class="right btn btn-info btn-circle " id="bouton-t-{{$tache-> id}}"  data-toggle="modal" data-target="#modalModifTachePrincipal"><i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" class="right btn btn-success btn-circle " id="bouton-val-t-{{$tache-> id}}"  data-toggle="modal" data-target="#modalValTachePrincipal" ><i class="fa fa-check"></i>
                                                    </button>
                                                    <button type="button" class="right btn btn-danger btn-circle " data-toggle="modal" data-target="#modalSuppTachePrincipal" id="bouton-suppt-{{$tache-> id}}" ><i class="fa fa-times"></i>
                                                    </button>
                                                    <button type="button" class="right btn btn-primary btn-circle" id="bouton-ajoutst-{{$tache-> id}}" data-toggle="modal" data-target="#modalAjoutTacheSecondaire"><i class="fa fa-plus"></i>
                                                    </button>
                                                    <div class="clear"></div>
                                                </h4>
                                            </div>
                                            <div id="collapse{{$tache-> id}}" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                    <ul class="nav nav-pills">
                                                        <li class="active"><a href="#home-pills-{{$tache-> id}}" data-toggle="tab">Liste</a>
                                                        </li>
                                                        <li><a href="#descriptionphils-{{$tache-> id}}" data-toggle="tab">Description</a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                    <!-- Afficher les sous taches -->
                                                    <div class="tab-pane fade in active" id="home-pills-{{$tache-> id}}">
                                                            <div class="row show-grid">
                                                                <div class="table-responsive">
                                                                    <table class="table text-center tableautaches">
                                                                        <thead>
                                                                        <tr>
                                                                            <th class="text-center" >A faire</th>
                                                                            <th class="text-center"> Date d’échéance</th>
                                                                            <th class="text-center" >Action</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                       @foreach($tache->soustaches as $soustache)
                                                                           <tr>
                                                                               <td class="col-md-8" id="nom-st-{{$soustache-> id}}"> {{$soustache-> soustaches}} </td>
                                                                           @if ($soustache->etat == 1 )
                                                                                   <td id="date-st-{{$soustache-> id}}" class="effectuer">{{$soustache-> date}} </td>
                                                                                   <td>

                                                                                   @else
                                                                                       <td id="date-st-{{$soustache-> id}}">{{$soustache-> date}}</td>
                                                                                        <td>
                                                                                            <button type="button" class="btn btn-info btn-circle" id="bouton-modif-st-{{$soustache-> id}}"  data-toggle="modal" data-target="#modalModifTacheSecondaire" ><i class="fa fa-edit"></i>
                                                                                            </button>
                                                                                            <button type="button" class="btn btn-success btn-circle" id="bouton-val-st-{{$soustache-> id}}"  data-toggle="modal" data-target="#modalValTacheSecondaire"><i class="fa fa-check"></i>
                                                                                            </button>
                                                                           @endif

                                                                                <button type="button" class="btn btn-danger btn-circle" id="bouton-supp-st-{{$soustache-> id}}"  data-toggle="modal" data-target="#modalSuppTacheSecondaire" ><i class="fa fa-times"></i>
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        @endforeach
                                                                        </tbody>
                                                                    </table>
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <!-- Afficher la description -->
                                                    <div class="tab-pane fade" id="descriptionphils-{{$tache-> id}}">
                                                        <p id="descritacheprincipal-{{$tache-> id}}">{{$tache-> description}}.</p>
                                                    </div>

                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    @endforeach
                                </div>



                            </div>
                            <!-- .panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection
