    <!-- Footer -->    
    <!--
    <div class="search-text"> 
    <div class="container">
        <div class="row text-center">        
            <div class="form">
                <form id="search-form" class="form-search form-horizontal">
                    <input type="text" class="input-search" placeholder="Search">
                    <button type="submit" class="btn-search">Search</button>
                </form>
            </div>            
        </div>         
    </div>     
    </div>
    -->

    <footer>
        <div class="container">
            <div class="row text-center">
                <ul class="list-inline">
                    <li><a href="http://www.facebook.com/PrefeituraMunicipaldoRG" class="icon brands fa fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="http://twitter.com/PMRGoficial" class="icon brands fa fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="https://www.instagram.com/prefeituradoriogrande/" class="icon brands fa fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="https://www.youtube.com/channel/UCKp-F9htcpRVXTJUzEaSxzA" class="icon brands fa fa-youtube"><span class="label">YouTube</span></a></li>
                </ul>
            </div>
             
            <div class="row text-center">   
                <!--
                <ul class="menu list-inline">
                    <li>
                        <a href="#">Home</a>
                    </li>
                        
                    <li>
                    <a href="#">About</a>
                    </li>
                        
                    <li>
                        <a href="#">Blog</a>
                    </li>
                        
                    <li>
                        <a href="#">Gallery</a>
                    </li>
                        
                    <li>
                    <a href="#">Contact</a>
                    </li>
                </ul>
                -->
            </div>
        </div> 
    </footer>

    <div class="copyright">
        <div class="container">
            <div class="row text-center">
            <p>2020 PMRG - SMDIT</p>
            </div>
        </div>
    </div>
    <!-- END -->

    <!-- BASICO -->
    <script src="<?php echo base_url($frameworks_dir . '/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url($frameworks_dir . '/bootstrap/js/bootstrap.min.js'); ?>"></script>   

    <!-- JQUERY VALIDATE -->
    <script src="<?php echo base_url($plugins_dir . '/jquery-validate/jquery.validate.min.js'); ?>"></script>

    <!-- MASK -->
    <script src="<?php echo base_url($plugins_dir . '/jquery-mask/jquery.mask.min.js'); ?>"></script>
    
    <!-- ICHECK -->
    <script src="<?php echo base_url($plugins_dir . '/icheck/icheck.min.js'); ?>"></script>
     
    <!-- DATATABLES -->
    <script src="<?php echo base_url($plugins_dir . '/datatables/datatables.min.js'); ?>"></script>

    <!-- SELECT 2 -->
    <script src="<?php echo base_url($plugins_dir . '/bootstrap_select/bootstrap-select.min.js'); ?>"></script>
    <script src="<?php echo base_url($plugins_dir . '/select2/js/select2.full.min.js'); ?>"></script>

    <!-- TIMEPICKER -->
    <script src="<?php echo base_url($plugins_dir . '/bootstrap3-datetimepicker/moment.min.js'); ?>"></script>         
    <script src="<?php echo base_url($plugins_dir . '/bootstrap3-datetimepicker/bootstrap-datetimepicker.min.js'); ?>"></script>
    <script src="<?php echo base_url($plugins_dir . '/bootstrap3-datetimepicker/locales.min.js'); ?>"></script>  

    <!-- LEAFLET -->
    <script src="<?php echo base_url($plugins_dir . '/leaflet/leaflet/leaflet.js'); ?>"></script>
    <script src="<?php echo base_url($plugins_dir . '/leaflet/leaflet-markercluster/leaflet.markercluster.js'); ?>"></script>
    <script src="<?php echo base_url($plugins_dir . '/leaflet/beautify-marker/leaflet-beautify-marker-icon.js'); ?>"></script>
    <script src="<?php echo base_url($plugins_dir . '/leaflet/leaflet-pip/leaflet-pip.js'); ?>"></script>
    <script src="<?php echo base_url($plugins_dir . '/leaflet/map.js'); ?>"></script>

    <!-- AUTOCOMPLETE -->
    <script src="<?php echo base_url($plugins_dir . '/autocomplete/jquery.autocomplete.min.js'); ?>"></script>
  
    <?php
    $controller_atual =  $this->router->class;
    ?>

    <!-- BACKSTRECH -->
    <script src="<?php echo base_url($public_js . '/jquery.backstretch.min.js'); ?>"></script>

    <!-- FIX BODY -->
    <script src="<?php echo base_url($public_js . '/fix_body.js'); ?>"></script>
   
    <!--Arquivo JS -->    
    <script type="text/javascript" src="<?php echo $arq_js; ?>"></script>	
       
    <script type="text/javascript">
            var dir_img = "<?php echo $public_images; ?>", 
                dir_base = "<?php echo base_url(); ?>", 
                dir_site = "<?php echo base_url(); ?>", 
                dir_plugins = "<?php echo $public_plugins; ?>";         
    </script>

    <script type="text/javascript">
    $(document).ready(function ($) {    
        $('#datatable').DataTable({
            'language': { 'url': dir_base+'/assets/plugins/datatables/portugues-br.json' },
            'paging': true,
            'ordering': true,
            'info': true,
            'searching': true,
            'autoWidth': true
        });

        $('.icheck').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '40%' // optional
        });

        $.backstretch(dir_base+'public/images/fundo_1.jpg');     
    });
    </script>   
