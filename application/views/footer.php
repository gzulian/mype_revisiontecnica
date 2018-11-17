<footer class="app-footer col-xs-12">
  <div class="row">
    <div class="col-xs-12">
      <div class="footer-copyright">
      <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        Copyright © 2018 CENTRO DE DESARROLLO MYPE INACAP - SEDE RENCA
      </div>
    </div>
  </div>
</footer>

</div>

</div>
  <script type="text/javascript" src="<?= base_url()?>resources/js/app.js"></script>
  <script type="text/javascript" src="<?= base_url()?>resources/js/jquery-ui/jquery-ui.js"></script>
   <script type="text/javascript" src="<?= base_url()?>resources/js/jQuery-Timepicker-Addon-master/dist/jquery-ui-timepicker-addon.min.js"></script>
   
  <script type="text/javascript">
    $(function(){

            $('#datepicker').datepicker({
                inline: true,
                showOtherMonths: true,
                dayNamesMin: ['S', 'M', 'T', 'W', 'T', 'F', 'S'],
                altField: "#date",
            });
            $('.datepicker').datepicker({ dateFormat: 'yy-mm-dd',changeYear: true});



           $('.fechas').datetimepicker({ dateFormat: 'yy-mm-dd',timeFormat:  "HH:mm:ss",
             beforeShow: function (input, inst) {
                setTimeout(function () {
                    inst.dpDiv.css({
                        top: 400,
                        left: 500
                    });
                }, 0);
              }
            });
           $('.select2').select2({
            placeholder: "Seleccionar"
         });
               $(".datatable").dataTable({
                  lengthMenu: [5,10, 20, 50, 100],
                  cache: false,
                  responsive: true,
                  "bDestroy": true,
                  //"language": {
                  //"url": "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                  //}
              });
              $(".datatable2").dataTable({
                  lengthMenu: [5,10, 20, 50, 100],
                  cache: false,
                  responsive: true,
                  "pagingType": "simple",
                  "bPaginate": true,
                  "bLengthChange": false,
                  "bFilter": true,
                  "bInfo": false,
                  "bAutoWidth": false,
                  "bDestroy": true,
                  "language": {
                  
                  }
              });
              $(".datatable3").dataTable({
                  lengthMenu: [5,10, 20, 50, 100],
                  cache: false,
                  responsive: true,
                  "bPaginate": false,
                  "bLengthChange": false,
                  "bFilter": false,
                  "bInfo": false,
                  "bAutoWidth": false,
                  "bDestroy": true,
                  "language": {
                  
                  }
              });

    });



  </script>


</body>
</html>