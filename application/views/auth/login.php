<style>
#logar{
    background-image: url("/riograndeporelas/public/images/fundologin.png");
    width: 100%;
    height: 100%;
    position: relative;
}

#borda{
    border: solid 1px !important;
   
    background-color:#fdfdffa1;
}
#bt{
    background-color:#A72AA0;
    text-align: center;
    color:aliceblue;
   
    font-size: 20px;
}
#bt:hover{
    background-color:#350B31;  
}
</style>


<div id="logar">
    <div class="content"><br><br><br><br><br>
            <div class="login-logo">
                <a href="#"><img src="/riograndeporelas/public/images/redelogin.png" ></a>
            </div>
   
            <div class="row" ><br>
                <div class="col-lg-12"> 
                    <div class="col-md-4"></div>
                    <div class="col-md-4"  id="borda" ><br>
                        <?php echo form_open('auth/login');?>
                            <div class="form-group has-feedback">
                                <span>Usuário</span>
                                <?php echo form_input($identity);?>
                               </div>
                            <div class="form-group has-feedback">
                                <span>Senha</span>
                                <?php echo form_input($password); ?>
                                
                                </div><br>
                            <?php $cancel = '<i class="fa fa-times"></i> <span>Cancelar</span>'; ?>                                                 
                            <?php $anchor = 'home'?> 
                            <?php $cadastrar = '<i class="fa fa-check"></i> <span>Cadastrar</span>'; ?>                                                 
                            <?php $ancho = 'register'?>               
                            <div class="row" >
                                <div class="col-xs-4"><br>
                                    <?php echo anchor($anchor, $cancel, array('class' => 'btn btn-default btn-flat', 'id' =>'bt')); ?>
                                </div>
                                <div class="col-xs-4"><br>
                                    <?php echo anchor($ancho, $cadastrar, array('class' => 'btn btn-default btn-flat', 'id' =>'bt')); ?>
                                </div>
                                <div class="col-xs-4"><br>
                                    <?php echo form_submit('submit', 'Entrar', array('class' => 'btn btn-danger btn-block btn-flat', 'id' =>'bt'));?>
                                </div>
                            </div><br><br>
                        <?php echo form_close();?>

                    
                        <?php if ($forgot_password == TRUE): ?>
                                        <?php echo anchor('#', lang('auth_forgot_password')); ?><br />
                        <?php endif; ?>
                        <?php if ($new_membership == TRUE): ?>
                                        <?php echo anchor('#', lang('auth_new_member')); ?><br />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
    </div>
</div>   
  
