<!-- Modal qui ajoute une tache principal -->

@yield('modalAjoutTachePrincipal')

<div class="modal fade" id="modalAjoutTachePrincipal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajouter une tâche principale</h4>
            </div>
            <form id="modiftache" method="post" action="{{route('ajouttache')}}" >
                <div class="modal-body">

                    <div class="form-group">
                        <label>Tâche</label>
                        <input class="form-control" type="text" id="nomtacheprincipal" name="inputtacheprincipal"/>
                        <input type="hidden" name="_token"  value="{{csrf_token()}}"/>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" id="descriptionprincipal" name="descriptionprincipal"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

