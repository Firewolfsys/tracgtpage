 <!--================Footer Area =================-->
    <footer class="footer_area">
        <div class="footer_widget_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <aside class="f_widget about_widget">
                            <img src="img/footer-logo.png" alt="">
                            <p>Transportes de Carga Empresa con más de 22 años de experiencia en el sector logístico.</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <aside class="f_widget link_widget">
                            <div class="f_title">
                                <h3>Sobre Nosotros</h3>
                            </div>
                            <ul>
                                <li><a href="#">Quienes Somos?</a></li>
                                <li><a href="#">Nuestrea Misión</a></li>
                                <li><a href="#">Nuestra Visión</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <aside class="f_widget service_widget">
                            <div class="f_title">
                                <h3>Nuestros Servicios</h3>
                            </div>
                            <ul>
                                <li><a href="#">Logística de Transporte</a></li>
                                <li><a href="#">Día Siguiente</a></li>
                                <li><a href="#">Dos Días</a></li>
                                <li><a href="#">Terrestre</a></li>
                                <li><a href="#">Múltiple</a></li>
                                <li><a href="#">Retornos</a></li>
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
</script>
</body>

</html>