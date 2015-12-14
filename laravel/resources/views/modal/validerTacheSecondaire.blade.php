<!-- Modal qui de mande la confirmation de supprimer une tache principal -->

@yield('modalValTacheSecondaire')

<div class="modal fade" id="modalValTacheSecondaire" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Valider une sous tâche</h4>
            </div>
            <form id="valsoustache" method="post" action="{{route('valideroustache')}}" >
                <div class="modal-body">

                    <div class="form-group">
                        <p>  Etes-vous certain de vouloir valider  <label id="nomsoustacheVal"></label> ? </p>
                        <input type="hidden" id="idsoustacheVal" name="idsoustache">
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

