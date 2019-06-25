 <!--================Footer Area =================-->
    <footer class="footer_area">
        <div class="footer_widget_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <aside class="f_widget about_widget">
                            <!--<img src="img/footer-logo.png" alt="">-->
                            <div class="f_title">
                            <h3>Transportes de Carga</h3>
                             </div>
                            <p>Transportes de Carga Empresa con más de 22 años de experiencia en el sector logístico.</p>
                            <ul>
                                <li><a href="https://www.facebook.com/transportesdecargagt" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCTmNHVBnbQi2FX6IrJ3x-Pw" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <aside class="f_widget service_widget">
                            <div class="f_title">
                                <h3>Nuestros Servicios</h3>
                            </div>
                            <ul>
                                <li><a href="<?php echo base_url('servicios_info/logistica_transporte') ?>">Logística de Transporte</a></li>
                                <li><a href="<?php echo base_url('servicios_info/nuestros_servicios') ?>">Nuestros Servicios</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <aside class="f_widget service_widget">
                            <div class="f_title">
                                <h3>Atención al Cliente</h3>
                            </div>
                            <ul>
                                <li><a href="<?php echo base_url('atencion_cliente/articulos_prohibidos') ?>">Artículos Prohibidos?</a></li>
                                <li><a href="<?php echo base_url('atencion_cliente/manual_empaque') ?>">Manual de Empaque</a></li>
                                <li><a href="<?php echo base_url('atencion_cliente/proceso_reclamos') ?>">Proceso de Reclamos</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <aside class="f_widget info_widget">
                            <div class="f_title">
                                <h3>Contactenos</h3>
                            </div>
                            <div class="contact_details">
                                <p>16 Avenida 23-33 Zona 12.<br class="info_br" /> Colonia Reformita, Ciudad de Guatemala</p>
                                <p>Telefono: <a href="tel:+50222094242">+502 2209-4242</a></p>
                                <p>Email: <a href="mailto:info@transportesdecarga.com.gt">info@transportesdecarga.com.gt</a></p>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_copy_right">
            <div class="container">
                <h4>Copyright TecnoSoluciones©
                    <script>
                        document.write(new Date().getFullYear());
                    </script>. All rights reserved.</h4>
            </div>
        </div>
    </footer>
    <!--================End Footer Area =================-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?= base_url('js/jquery-2.2.4.js')?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?= base_url('js/bootstrap.min.js')?>"></script>
    <!-- Rev slider js -->
    <script src="<?= base_url('vendors/revolution/js/jquery.themepunch.tools.min.js')?>"></script>
    <script src="<?= base_url('vendors/revolution/js/jquery.themepunch.revolution.min.js')?>"></script>
    <script src="<?= base_url('vendors/revolution/js/extensions/revolution.extension.actions.min.js')?>"></script>
    <script src="<?= base_url('vendors/revolution/js/extensions/revolution.extension.video.min.js')?>"></script>
    <script src="<?= base_url('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')?>"></script>
    <script src="<?= base_url('vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')?>"></script>
    <script src="<?= base_url('vendors/revolution/js/extensions/revolution.extension.navigation.min.js')?>"></script>
    <!-- Extra Plugin js -->
    <script src="<?= base_url('vendors/owl-carousel/owl.carousel.min.js')?>"></script>
    <script src="<?= base_url('vendors/magnific-popup/jquery.magnific-popup.min.js')?>"></script>
    <!-- jVector maps -->
    <script src="<?= base_url('vendors/jvectormap/jvectormap.min.js')?>"></script>
    <script src="<?= base_url('vendors/jvectormap/jvectormap-worldmill.js')?>"></script>
    <script src="<?= base_url('js/locations.js')?>"></script>
    <!-- Main js -->
    <script src="<?= base_url('js/script.js')?>"></script>


<!-- DataTables -->
<script src="<?= base_url('plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('plugins/datatables/dataTables.bootstrap4.min.js')?>"></script>

<!-- PAGE SCRIPTS  --> 
<script src="<?= base_url('dist/js/pages/administracion.js')?>"></script>

<!-- Select2 -->
<script src="<?= base_url('plugins/select2/select2.full.min.js')?>"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })
  $(document).on('focus', '.select2', function (e) {
  if (e.originalEvent) {
    $(this).siblings('select').select2('open');    
  } 
});
  $("#success-alert").fadeTo(2000, 900).slideUp(900, function(){
    $("#success-alert").slideUp(900);
});
</script>
</body>

</html>