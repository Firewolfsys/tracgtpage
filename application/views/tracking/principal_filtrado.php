
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
        
        <!--================Tracking Timeline Area =================-->
        <?php if (count($tracking_lista)):  ?>
        <section class="timeline_tracking_area">
            <div class="container">
                <div class="timeline_tracking_inner"> 
                    <div class="timeline_tracking_box">
                        <div class="tracking_head">
                            <h4><strong>Guia No. <?php echo($guia); ?></strong></h4>
                        </div>
                        <div class="scheduled_area">
                            <ul>
                                <li>
                                    <div class="schedul_box">
                                        <h5> En Bodega </h5>
                                    </div>
                                    <div class="<?php if($ultimo_tracking->estado=="En bodega"){echo('s_icon active');}else{echo('s_icon');} ?>"></div>
                                </li>
                                <li>
                                    <div class="schedul_box">
                                        <h5> En Transito </h5>
                                    </div>
                                    <div class="<?php if($ultimo_tracking->estado=="En transito"){echo('s_icon active');}else{echo('s_icon');} ?>"></div>
                                </li>
                                <li>
                                    <div class="schedul_box">
                                        <h5> Entregada </h5>
                                    </div>
                                    <div class="<?php if($ultimo_tracking->estado=="Entregada"){echo('s_icon active');}else{echo('s_icon');} ?>"></div>
                                </li>
                            </ul>
                        </div>
                        <div class="tracking_in tag-delivered">
                            <h4><?php echo($ultimo_tracking->estado); ?></h4>
                        </div>
                        <div class="tracking_list">
                            <ul>
                                 <?php foreach($tracking_lista as $item): ?>
                                <li>
                                    <div class="checkpoint__time"><strong><?php echo $item->fecha ?></strong><div class="hint"><?php echo $item->hora ?></div></div>
                                    <?php if($item->estado=="Creada" || $item->estado=="En transito"){ ?>
                                    <div class="checkpoint__icon intransit"></div>
                                    <?php } ?>
                                    <?php if($item->estado=="En bodega"){ ?>
                                    <div class="checkpoint__icon outfordelivery"></div>
                                    <?php } ?>
                                    <?php if($item->estado=="Entregada"){ ?>
                                    <div class="checkpoint__icon delivered"></div>
                                    <?php } ?>
                                    <div class="checkpoint__content"><strong><?php echo $item->descripcion ?></strong></div>
                                </li>
                                 <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Tracking Timeline Area =================-->
        <?php else: ?>
                      <p> La Guia que busca no existe</p>
         <?php endif; ?>

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