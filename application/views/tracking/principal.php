
        <!--================Tracking Button Area =================-->
        <section class="tracking_search_area">
            <div class="container">
                <div class="tracking_search_inner">
                    <h2 class="single_title">Busca tu Paquete</h2>
                    <h5>Ingrese el numero de guia, y obten el estado en el que se encuentra.</h5>
                    <div class="input-group">
                      <input type="text" class="form-control" id="codigo_guia" placeholder="Numero de Guia">
                      <input type="hidden" class="form-control" id="url" value="<?php echo base_url() ?>">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button" onclick="buscar()"><i class="fa fa-circle-o-notch" aria-hidden="true"></i> Buscar</button>
                      </span>
                    </div><!-- /input-group -->
                  
                </div>
            </div>
        </section>
        <!--================End Tracking Button Area =================-->
        
       <script type="text/javascript">
          function buscar() {
                var url = document.getElementById('url').value +"tracking/ver_tracking/";
                var codigo_guia = document.getElementById('codigo_guia').value;
                if(codigo_guia!="")
                {
                window.location.href = url+codigo_guia;
                }else{alert("Debe ingresar un numero de guia.")}
            }
      </script>