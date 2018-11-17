$(document).ready(function(){

   var $loading = $('#loadingDiv').hide();

   $('#fechas').datetimepicker({ dateFormat: 'yy-mm-dd',timeFormat:  "HH:mm:ss",
     beforeShow: function (input, inst) {
        setTimeout(function () {
            inst.dpDiv.css({
                top: 200,
                left: 600
            });
        }, 0);
      } 
    });
  var idConsejero;
   $(".modalDis").click(function(){
      idConsejero = $(this).attr("id");
      //alert(idConsejero);
      $('#empresa').val(idConsejero);
    }); 

   $('#historia').on('shown.bs.modal', function (e) {
     var button = e.relatedTarget;
     idConsejero = button.id; 
     $('#empresa').val(idConsejero);
     if(typeof button.id !='undefined'){
        $.ajax({
          type:'post',
          dataType:'json',
          url:url+idConsejero,
          beforeSend:function(){
              $loading.show();
          },
          success:function(data){
            $("#tabla").empty();
            var types = data;
            var tabl = '';
            var d =  '<tr>'+
            '<td> </td>'+
            '<td> </td>'+
            '<td> </td>'+
            '</tr>';
            for(x=0; x<types.length; x++) {
               d+= '<tr>'+
               '<td class="his">'+types[x]._columns.his_fecha+'</td>'+
               '<td class="his">'+types[x]._columns.his_accion+'</td>'+
               '<td class="his">'+types[x]._columns.his_obs+'</td>'+
               '<td class="his">'+types[x]._columns.his_usu_nombre+'</td>'+
               '</tr>';
            }
            $("#divtabla").append(tabl);
            $("#tabla").append(d);
          },complete:function(){
            $loading.hide();
          }
        });
        
      }
    });
  });
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered



function ususcon(sel) {
    document.getElementById("divconsejero").style.display="block";
    document.getElementById("divasesor").style.display="none";
}
 function ususase(sel) {
    document.getElementById("divconsejero").style.display="none";
    document.getElementById("divasesor").style.display="block";
}
