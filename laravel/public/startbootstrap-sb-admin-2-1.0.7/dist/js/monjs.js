$(document).ready(function()
{
                $("button[id^='bouton-']").on('click', function (event)
                {
								var id = $(this).attr("id").replace('bouton-','');
								
                               $('#nomtache').val($('#nom-'+id).text());
							   $('#tempstache').val($('#temps-'+id).text());
                             
                });
				  $("button[id^='bouton-t-']").on('click', function (event)
                {
								var id = $(this).attr("id").replace('bouton-t-','');
                               $('#nomtacheprincipal').val($('#nomtacheprincipal-'+id).text());
							   $('#descritacheprincipal').val($('#descritacheprincipal-'+id).text());
							   $('#idtacheprincipalmodif').val(id).text();            
                });
				$("button[id^='bouton-suppt-']").on('click', function (event)
                {
								var id = $(this).attr("id").replace('bouton-suppt-','');
                               $('#nomtacheprincipalasupp').text(($('#nomtacheprincipal-'+id)).text());
							   $('#idtacheprincipalasupp').val(id).text();            
                });
				  $("button[id^='bouton-modif-st-']").on('click', function (event)
                {
								var id = $(this).attr("id").replace('bouton-modif-st-','');
                               $('#nomsoustache').val($('#nom-st-'+id).text());
							    $('#date-soustache').val($('#date-st-'+id).text());
							   $('#idsoustache').val(id).text();            
                });
			$('.form_date').datetimepicker({
					language:  'fr',
					weekStart: 1,
					todayBtn:  1,
					autoclose: 1,
					todayHighlight: 1,
					startView: 2,
					minView: 2,
					forceParse: 0
				});
				
				  $("button[id^='bouton-ajoutst-']").on('click', function (event)
                {
								var id = $(this).attr("id").replace('bouton-ajoutst-','');
							   $('#idtacheprincipal').val(id).text();            
                });
				$("button[id^='bouton-supp-st-']").on('click', function (event)
                {
								var id = $(this).attr("id").replace('bouton-supp-st-','');
                               $('#nomsoustachesupp').text(($('#nom-st-'+id)).text());
							   $('#idsoustachesupp').val(id).text();            
                });
				$("button[id^='bouton-val-st-']").on('click', function (event)
                {
								var id = $(this).attr("id").replace('bouton-val-st-','');
                               $('#nomsoustacheVal').text(($('#nom-st-'+id)).text());
							   $('#idsoustacheVal').val(id).text();            
                });
				$("button[id^='bouton-val-t-']").on('click', function (event)
                {
								var id = $(this).attr("id").replace('bouton-val-t-','');
                               $('#nomtacheVal').text(($('#nomtacheprincipal-'+id)).text());
							   $('#idtacheVal').val(id).text();            
                });

});
