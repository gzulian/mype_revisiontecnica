
<div class="row">
  <div class="col-xs-12 col-md-12">
     <div class="card">
        <div class="card-header">
          <div class="col-md-12" style="margin-bottom : 20px">
          <h2>Revisión técnica</h2>
          <a class="btn btn-success pull-right" href="<?=site_url('mantencion/mantencion/') ?>">
          <i class="fa fa-plus"></i> Mantención</a>
          </div>
        </div>
      </div>
  </div>
</div>
<div class="row">
      <div class="col-xs-12 col-md-12">
      <div class="card">
        <div class="card-header"> 
        </div>
        <div class="card-body " >
          <table style=""  class="datatable10 table" >
              <thead>
                  <th>#</th>
                  <th>Vehículo</th>
                  <th>Modelo</th>
                  <th>Acción</th>
              </thead>
              <tbody>
                <?php foreach ($mantenciones as $key => $value):?>
                    <tr>
                      <td><?=$value->get('man_id')?></td>
                      <td><?=$value->get('man_patente')?></td>
                      <td><?=$value->get('man_modelo')?></td>
                      <td>
                          <a class="btn btn-info" href='<?=site_url("mantencion/mantencion/".$value->get("man_id"))?>'>Editar</a>
                      </td>
                    </tr>  
                <?php endforeach;?>
              </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
<script type="text/javascript">
  $(function(){
    $(".datatable10").dataTable({
        lengthMenu: [5,10, 20, 50, 100],
        cache: false,
        responsive: true,
        //dom:'<"top"f>rt<""flp><"clear">'
    });
  })
</script>