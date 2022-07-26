<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--teste de footer--->    
<style>
#myFooter {
    background-color: #350B31;
    color: white;
    padding-top: 0px;
}

#myFooter .row {
    margin-bottom: 60px;
}

#myFooter .navbar-brand {
    margin-top: 45px;
    height: 65px;
}

#myFooter ul {
    list-style-type: none;
    padding-left: 0;
    line-height: 1.7;
}

#myFooter h5 {
    font-size: 18px;
    color: white;
    font-weight: bold;
    margin-top: 30px;
}

#myFooter h2 {
    font-size: 35px;
    font-weight: bold;
    text-align: center;
    margin-top: 30px;
    color: #fff;
}

#myFooter a {
    color: #d2d1d1;
    text-decoration: none;
}

#myFooter a:hover,
#myFooter a:focus {
    text-decoration: none;
    color: white;
}


#myFooter .btn {
    color: white;
    background-color: #d84b6b;
    border-radius: 20px;
    border: none;
    width: 50px;
    display: block;
    margin: 0 auto;
    
    line-height: 25px;
}

@media screen and (max-width: 767px) {
    #myFooter {
        text-align: center;
    }
}


/* CSS used for positioning the footers at the bottom of the page. */
/* You can remove this. */

html{
    height: 100%;
}

body{
    display: flex;
    display: -webkit-flex;
    flex-direction: column;
    -webkit-flex-direction: column;
    height: 100%;
}

.content{
   flex: 1 0 auto;
   -webkit-flex: 1 0 auto;
   min-height: 100px;
}

#myFooter{
   flex: 0 0 auto;
   -webkit-flex: 0 0 auto;
}

div.topo {
    background:#AB2BA5;
    position: fixed;
    bottom: 25px;
    right: 25px;
    /*tentar usar z-index para aparecer apartir da segunda pagina*/
}
</style> 
   <footer id="myFooter">
       <div class="row"> </div>
        <div class="container">
            <div class="col-sm-3">
                <a href="#">
                    <img class="img-responsive" src="http://localhost/riograndeporelas/public/images/RMEDRG.png" >
                </a>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2">
                <h2><p>Realização </p></h2>
                <div class="row text-center">
                    <h2></h2>
                
                    <a href="#">
                        <img class="img-responsive" src="http://localhost/riograndeporelas/public/images/brasao.png" alt="100%" style="width:100%">
                    </a>
                </div>
            </div>
            <div class="col-sm-2"> </div>
            <div class="col-sm-3">
                <a href="#">
                    <img class="img-responsive" src="http://localhost/riograndeporelas/public/images/Sala.png" >
                </a>
            </div>      
        </div>
        <div class="topo">
            <a href="#topo"><i class="fa fa-angle-up" > </i></a>
        </div>
    </footer>
             
    
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

        $.backstretch(dir_base+'public/images/banne1.png');     
    });
    </script>   
