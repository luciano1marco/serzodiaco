<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php echo $modulo_cabecalho; ?>
<?php echo $modulo_menu; ?>

<?php $anchor = 'public/'.$this->router->class; ?>

<body>

<section class="container questionario">
    <main role="main">
    <!--
    <div class="jumbotron jumbotron-fluid fundo">
        <div class="container">
            <h1>Bootstrap Tutorial</h1>
            <p>Bootstrap is the most popular HTML, CSS...</p>
        </div>
    </div>  
    -->

    <div class="jumbotron jumbotron-fluid bg-dark">
  
  <div class="jumbotron-background">
    <img src="<?php echo $public_images.'/brasao.svg';?>" width="600" height="500" style="margin-top:7%; opacity:0.3">  
    
  </div>

  <div class="container text-white">

   <h4 class="text-center font-weight-bold"><strong>PREFEITURA MUNICIPAL DO RIO GRANDE</strong></h4>
   <h4 class="text-center font-weight-bold"><strong>SECRETARIA DE MUNICÍPIO DA EDUCAÇÃO</strong></h4>
   <h4 class="text-center font-weight-bold"><strong>COMITÊ COVID-19 SMEd</strong></h4>
  
    <h1 class="display-4 text-center" >Consulta Pública</h1>
    <h2 class="text-center">Pesquisa do Sistema Municipal de Ensino com a Comunidade Escolar de Rio Grande</h2>
    <p>A Prefeitura Municipal do Rio Grande, através da Secretaria de Município da Educação e do Comitê Municipal que elabora o Plano de Contingência para a COVID-19 no âmbito do Sistema Municipal de Ensino, convida toda a comunidade escolar do nosso município para participar dessa pesquisa pública, de modo a que possamos identificar o sentimento das famílias dos nossos estudantes sobre algumas questões importantes para o dimensionamento e planejamento de novas ações do nosso sistema educacional. </p>
    <p><strong>Contamos com a sua participação!</strong></p>
  </div>
  <!-- /.container -->
  
 
</div>
<!-- /.jumbotron -->

<!-- 
For IE support of object-fit add this to your document
&lt;script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.4/ofi.min.js"&gt;&lt;/script&gt;
-->
    </main>

    <?php 
    if(!empty($this->session->flashdata('message'))) { 
    ?>
    
    <script>
       $(document).ready(function() {
            $('#modalsucesso').modal('show');
        });
    </script>
    
    <?php } ?>

    <?php echo form_open(current_url(), array('class' => 'form-horizontal', 'id' => 'form-questionario', 'name' => 'questionario'  )); ?>
        <div class="row clearfix"></div>
       
        <!--col-md-12 column-->
        <div class="col-md-12 column">

        <!-- ERROS -->
        <div style="margin-top: 8px" id="alert_message">
	    <?php
	    if($this->session->userdata("message") != null OR !empty(validation_errors()))
	    {
	    ?>

		<div class="alert alert-info alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<?php echo $this->session->userdata("message"); ?> 
            <?php echo validation_errors(); ?> 			
        </div>
        
	    <?php
	    }
	    ?>
        </div>
        <!-- ERROS -->
            <?php echo $q_responsavel; ?>
            <?php echo $q_telefone; ?>
            <?php echo $q_qts_est; ?>
            <?php echo $q_escola; ?>
            <?php echo $q_especial; ?>
            <?php echo $q_etapas_ensino; ?>
            <?php echo $q_derisco; ?>
            <?php echo $q_voltar; ?>
            <?php echo $q_presencial; ?>
            <?php echo $q_eq_prevencao; ?>
            <?php echo $q_acesso; ?>
            <?php echo $q_aparelhos; ?>
            <?php echo $q_nao_presencial; ?>
            <?php echo $q_sugestao; ?>
           
                
        <?php
        $submit     = '<i class="fa fa-check" id="btEnviar"></i> <span>Enviar</span>';               
        $redo       = '<i class="fa fa-refresh"></i> <span>Reiniciar</span>';             
        $cancel     = '<i class="fa fa-times"></i> <span>Cancelar</span>';                                                  
        ?>

            <div class="row text-center m-b-lg">               
                <?php echo form_button(array('type' => 'submit', 'class' => 'btn btn-primary btn-flat btn-lg float-right', 'content' => $submit)); ?>                            
            </div>

        </div>    
        <!--col-md-12 column-->
       
    <div class="row clearfix"></div>

    <?php echo form_close();?>
    </section>    

    <!-- Modal -->
    <div class="modal fade" id="modalsucesso" tabindex="-1" role="dialog" aria-labelledby="modalsucesso" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">            
            <div class="modal-header">
                <h4 class="modal-title" id="modalsucesso">SUCESSO
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </h4>
            </div>

            <div class="modal-body">
                <?php echo $this->session->flashdata('message'); ?>               
            </div>
        
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>           
            </div>
        
        </div>
    </div>
    </div>

   
</body>

<?php echo $modulo_rodape; ?>

</html>

<style>
.error{
    color: red;
}
</style>

<script>
$(document).ready(function() {

    // Desliga o Validate para poder usar apenas validação SERVER CI
    $("#form-questionario").validate({ ignore: "*" });

    $.validator.setDefaults({     
        // O Select Picker precisa mudar o erro de local         
        errorPlacement: function (error, element) {     
            if (element.hasClass('especial')) {
                error.insertAfter('.especial_erro');  
            }
            else if(element.hasClass('qtdpresencial')) {
                error.insertAfter('.qtdpresencial_erro');         
            } else {
                error.insertAfter(element);
            }          
        }
	});

    $("#form-questionario").validate({   
        errorClass: "error",
        validClass: "success",         
        rules: {
            responsavel: {
                required: true,
            },
            telefone: {
                required: true,
            } ,
            qts_est: {
                required: true,
            } ,
            especial: {
                required: true,
            },
            qtdpresencial: {           
                required: true,                 
			},                     
        },
        messages: {
            responsavel: 'O campo Nome do responsavel é obrigatório.',
            telefone: 'O campo Telefone é obrigatório.', 
            qts_est: 'O campo Quantidade de Estudantes é obrigatório.', 
            especial: 'O campo Publico-Alvo da Educação Especial é obrigatório.',  
            qtdpresencial: 'O Campo Trabalhando de forma presencial é obrigatorio'                   
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
    
    $("#form-questionario").submit(function(){
        if($("#form-questionario").valid()){   
            return true;
        }
    });

});

</script>