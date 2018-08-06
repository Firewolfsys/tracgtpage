</br></br></br></br></br></br></br></br></br>
<div class="panel panel-primary">
  <div class="panel-heading"><h3 class="card-title">Ingreso nueva GUIA</h3></div>
  <div class="panel-body">

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Nueva GUIA</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url() ?>guias/guardar_guia/ ?>" >
                <div class="card-body">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Origen</label>
                        <input type="text"  name="origen" class="form-control" required="required" value="" >
                        <label>Destino</label>
                        <input type="text"  name="destino" class="form-control" required="required" value="" >
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar </button>
                </div>
            </form>

        </div>
        <!-- /.card -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

  </div>
</div>




