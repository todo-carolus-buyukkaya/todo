
             <!-- Modal -->

    @yield('modalAjoutTacheSecondaire')
<div class="modal fade" id="modalAjoutTacheSecondaire" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajouter une sous tâches</h4>
            </div>
            <form id="modiftache" method="post" action="{{route('ajoutsoustache')}}"  >
                <div class="modal-body">

                        <div class="form-group">
                            <label>Tâche</label>
                            <textarea class="form-control" rows="3" id="nomtache" name="nomsoustache"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="input-group date form_date col-md-5" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                <input class="form-control" name="date" type="text" value="" readonly>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                            <input type="hidden" name="id" id="idtacheprincipal">
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

