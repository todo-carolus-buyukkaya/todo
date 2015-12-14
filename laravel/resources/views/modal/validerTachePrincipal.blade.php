<!-- Modal qui de mande la confirmation de supprimer une tache principal -->

@yield('modalValTachePrincipal')

<div class="modal fade" id="modalValTachePrincipal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Valider une tâche</h4>
            </div>
            <form id="valtache" method="post" action="{{route('validertache')}}" >
                <div class="modal-body">

                    <div class="form-group">
                        <p>  Etes-vous certain de vouloir valider  <label id="nomtacheVal"></label> ? </p>
                        <input type="hidden" id="idtacheVal" name="idtache">
                        <input type="hidden" name="_token"  value="{{csrf_token()}}"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Confirmer</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

