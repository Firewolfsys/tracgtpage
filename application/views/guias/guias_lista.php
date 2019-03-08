</br></br></br></br></br></br></br></br></br>
<div class="panel panel-primary">
  <div class="panel-heading"><h3 class="card-title">Mis Guias</h3></div>
  <div class="panel-body">
<!-- Main content -->
<section class="content"> 
  <div class="row">
    <div class="col-12">
      <div class="card card-primary">
        <!-- /.card-header -->
        <div class="card-body">
              <?php if (count($guias_lista)):  ?>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th class="text-center" width="10%">No. Guia</th>
                      <th class="text-center">Origen</th>
                      <th class="text-center">Destino</th>
                      <th class="text-center" width="15%">Fecha Creacion</th>
                      <th class="text-center" width="15%">Estado</th>
                      <th> &nbsp; </th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php foreach($guias_lista as $item): ?>
                        <tr>
                          <td width="10%"> <?php echo $item->codigo_guia ?>  </td>
                          <td> <?php echo $item->lugar_origen ?>  </td>
                          <td> <?php echo $item->lugar_destino ?>  </td>
                          <td width="15%"> <?php echo $item->fecha_creacion ?>  </td>
                          <td width="15%"> <?php echo $item->estado ?>  </td>
                          <td width="10%">
                            <div class="btn-group">
                              <a class="btn btn-primary" title="Ver Guia" href="<?php echo base_url() ?>verguia/<?php echo $item->id_guia ?>"> <i class="fa fa-eye"></i> </a>
                              <!--<a class="btn btn-primary" title="Modificar Guia" href="<?php echo base_url() ?>editarguia/<?php echo $item->id_guia ?>"> <i class="fa fa-edit"></i></a>-->
                              <a class="btn btn-primary" title="Ver Tracking" href="<?php echo base_url() ?>tracking/ver_tracking/<?php echo $item->codigo_guia ?>"> <i class="fa fa-list"></i></a>
                              <a class="btn btn-primary" title="Imprimir Guia"  href="<?php echo base_url() ?>guias/imprimir_guia/<?php echo $item->id_guia ?>"><i class="fa fa-print"></i></a>
                            </div>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>

                  </table>
                <?php else: ?>
                      <p> No tiene guias creadas</p>
          <?php endif; ?>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section> 
  </div>
</div>