<style>
#logar{
    background-image: url("/serzodiaco/public/images/banner.png");
    width: 100%;
    height: 100%;
    position: relative;
}
#bota{
    margin-left: 90px;
}
#borda{
    background-color:#fdfdffa1;
    align-items: center;
}
#bt:hover{
    background-color:#ea831aff;  
}
</style>


<div id="logar">
    <div class="content">
            <div class="login-logo">
                <a href="#"><img src="/serzodiaco/public/images/logo.png" ></a>
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
                            <?php $cancel = '<i class="fa fa-times"></i> <span>Voltar</span>'; ?>                                                 
                            <?php $anchor = 'home'?> 
                            <?php $ancho = 'register'?>               
                            <!-- botões do login-->
                            <div class="row" id="bota" >
                                
                                <div class="col-xs-4"><br>
                                    <?php echo form_submit('submit', 'Entrar', array('class' => 'btn btn-success btn-block btn-flat', 'id' =>'bt'));?>
                                </div>
                                <div class="col-xs-4 "><br>
                                    <?php echo anchor($anchor, $cancel, array('class' => 'btn btn-orange btn-block btn-flat', 'id' =>'bt')); ?>
                                </div>
                            </div><br><br>
                             <!--- fim botões---->    
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
  
