<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
#register h2 {
    font-size: 30px;
    color: #992691;
}

</style>

<?php echo $modulo_menu; ?>
<?php echo $modulo_cabecalho; ?>

<?php $anchor = 'public/'.$this->router->class; ?>

<body>

<section class="container questionario">
    <main role="main">
        
    
            <div id="register">
                    <h2>Cadastre-se para Virar Socio</h2>
            </div>
      
    </main>

    <?php if(!empty($this->session->flashdata('message'))) {  ?>
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
                if($this->session->userdata("message") != null OR !empty(validation_errors())){ ?>

                    <div class="alert alert-info alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <?php echo $this->session->userdata("message"); ?> 
                        <?php echo validation_errors(); ?> 			
                    </div>
                
                <?php } ?>
            </div>
            <!-- chama os forms em /public/questoes/ -->
             
                <?php echo $q_email; ?>
                <?php echo $q_nome; ?>
                <?php echo $q_datanasc; ?>
                <?php echo $q_logradouro; ?>
                <?php echo $q_cpf; ?>
                
              
                    
            <?php
            $submit     = '<i class="fa fa-check" id="btEnviar"></i> <span>Registrar</span>';               
            $redo       = '<i class="fa fa-refresh"></i> <span>Reiniciar</span>';             
            $cancel     = '<i class="fa fa-times"></i> <span>Cancelar</span>';                                                  
            ?>

                <div class="row mx-auto" style="width: 160px;">            
                    <?php echo form_button(array('type' => 'submit', 'class' => 'btn btn-warning btn-flat btn-lg float-right', 'content' => $submit)); ?>                           
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
                <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>           
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
            logradouro: {
                required: true,
            },
            email: {
                required: true,
            } ,
            nome: {
                required: true,
            } ,
            datanasc: {
                required: true,
            } ,
            nomeusuario: {
                required: true,
            } ,
            password: {
                required: true,
            } ,
            numero: {
                required: true,
            } ,
            bairro: {
                required: true,
            } ,
            cep: {
                required: true,
            } ,
            cidade: {
                required: true,
            } ,
            estado: {
                required: true,
            } ,
            cpf: {
                required: true,
            } ,
            celular: {
                required: true,
            } ,
            nomenegocio: {
                required: true,
            } ,
            negociocasa: {
                required: true,
            } ,
            formaatuacao: {
                required: true,
            } ,
            atividade: {
                required: true,
            } ,
            tempoatividade: {
                required: true,
            } ,
            porte: {
                required: true,
            } ,
            ramo: {
                required: true,
            } ,
            rede: {
                required: true,
            } ,
            termo: {
                required: true,
            } ,
        },
        messages: {
            email: 'O campo E-mail é obrigatório.',
            nome: 'O campo Nome Completo é obrigatório.',
            datanasc: 'O campo Data de Nascimento é obrigatório.',
            nomeusuario: 'O campo Nome de Usuário é obrigatório.',
            senha: 'O campo Senha é obrigatório.',
            logradouro: 'O campo Logradouro é obrigatório.',
            numero: 'O campo Número é obrigatório.',
            bairro: 'O campo Bairro é obrigatório.',
            cep: 'O campo CEP é obrigatório.',
            cidade: 'O campo CEP é obrigatório.',
            estado: 'O campo CEP é obrigatório.',
            cpf: 'O campo CPF é obrigatório.',
            celular: 'O campo CPF é obrigatório.',
            negocio: 'O campo Negócio funciona em casa é obrigatório.',
            formaatuacao: 'O campo Forma de Atuação é obrigatório.',
            atividade: 'O campo Atividade Econômica é obrigatório.',
            tempoatividade: 'O campo Há quanto tempo exerce essa Atividade é obrigatório.',
            porte: 'O campo Porte é obrigatório.',
            ramo: 'O campo Ramo de atividade é obrigatório.',
            rede: 'O campo Redes Sociais é obrigatório.',
            termo: 'O campo Redes Sociais é obrigatório.',

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