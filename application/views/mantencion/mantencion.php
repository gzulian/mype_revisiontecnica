
<div class="row">
  <div class="col-xs-12 col-md-12">
     <div class="card">
        <div class="card-header">
          <h3>Revisión técnica</h3>
          <div class="col-md-12" style="margin-bottom : 20px">
          <a href="<?=site_url('mantencion/index/') ?>"><button class="btn btn-success pull-right" data-toggle="modal" data-target="#new_modal">
          <i class="fa fa-plus"></i> Ingresar manención</button></a>
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
                  <th></th>
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