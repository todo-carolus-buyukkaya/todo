<!-- Modal qui modifie le nom d'une tache principal -->

@yield('modalModifTachePrincipal')

<div class="modal fade" id="modalModifTachePrincipal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajouter une tâche principale</h4>
            </div>
            <form id="modiftache" method="post" action="{{route('modiftache')}}"  >
                <div class="modal-body">

                    <div class="form-group">
                        <label>Tâche</label>
                        <input class="form-control" type="text" id="nomtacheprincipal" name="inputtacheprincipal"/>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="descritacheprincipal" name="descritacheprincipal"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="idtacheprincipal" id="idtacheprincipalmodif"/>
                        <input type="hidden" name="_token"  value="{{csrf_token()}}"/>
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
