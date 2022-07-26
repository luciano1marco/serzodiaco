<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<style>
/* ---css faleconosco----*/

#fale {
    background-image: url("public/images/banner.png");
    /*overflow: hidden; /* para que não tenha rolagem se a imagem de fundo for maior que a tela */
    width: 100%;
    height: 100%;
    position: sticky;
    /* criamos um contexto para posicionamento */
}

.form-group {
    border-color: #2F3337;
}

#fale h3 {
    font-weight: bold;
    font-size: 56px;
    text-align: center;
    margin-top: 30px;
    color: #992691;
}

#fale h5 {
    font-size: 26px;
    font-weight: bold;
    text-align: center;
    margin-top: 5px;
    color: #350B31;
}

#fale label {
    text-align: center;
    color: aliceblue;
}

#bt {
    background-color: #A72AA0;
    text-align: center;
    color: aliceblue;
    font-weight: bold;
    font-size: 20px;
}

#bt:hover {
    background-color: #350B31;
}

#botao {
    text-align: center;
    margin: -10;
}

#apoio {
    width: 100%;
    height: 900px;
    /*same height as jumbotron */
    top: 0;
    min-height: 900px;
    left: 0;
}

#apoio h3 {
    font-weight: bold;
    font-size: 56px;
    text-align: center;
    color: #FF6600;
}

.bg {
    background: url('public/images/fundofinal.png') no-repeat center center;
    position: fixed;
    width: 100%;
    left: 0;
    z-index: -1;
    padding: 0;
    margin: 0;
    border: 0;
}

.jumbotron {
    margin-bottom: 0px;
    height: 1200px;
}

#imagens {
    width: 100%;
    height: 650px;
}

#imagens h4 {
    font-weight: bold;
    font-size: 36px;
    font-family: "Poppins", Sans-serif;
    letter-spacing: 1px;
    line-height: 42px;
    text-align: center;
    color: #FF6600;
}

#nome {
    text-align: center;
    padding: 30;
    margin: 30;
    border: 30;
}

#figuras {
    padding: 100;
}


/* ---fim css faleconosco ---*/
</style>


<div class="bg">
    <div class="jumbotron">
    
           
    </div>
</div>    
  
<div class="apoio">
        <div class="row">
            <div id="imagens">
                <div id="nome">
                    <div class="col-md-12" id="apoiadores">
                        <h4>Apoiadores</h4>
                    </div>
                </div>
                <div id="figuras">
                    <div class="col-lg-12">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <a href="#">
                                <img class="img-responsive" src="public/images/sebrae.jpeg"  width="300" height="200" >
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#">
                                <img class="img-responsive" src="public/images/telerig.jpg"  width="300" height="200">
                            </a>
                        </div>
               
                    </div>
                </div> 
            </div>   
        </div>
</div>


<div id="fale">
    <section class="content-fluid">
    <main role="main">
       
            <div class="row ">
                <div class="col-lg-12">
                    <h3>Fale com a gente</h3><br>
                    <h5> Queremos ajudar você a conquistar seus objetivos</h5>
                </div>
                
                
                <div class="row"></div>
                
                
                <div class="col-lg-12">
                    <div class="col-md-3"></div>
                    <div class="col-md-8" >
                      
                        <div class="container">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-1 col-xs-12">
                                        <label >Seu nome</label>
                                            <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" size="12" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-1 col-xs-12">
                                        <label >Seu email</label><input type="text" name="titulo" size="48" class="form-control" placeholder="Digite seu email" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-1 col-xs-12">
                                        <label >Assunto</label>
                                            <input type="text" name="assunto" size="48" class="form-control" placeholder="Digite um Assunto" required="">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="container">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-1 col-xs-12">
                                        <br>
                                        <label>Sua Mensagem</label> 
                                        <textarea name="mensagem" id="input" class="form-control" rows="12" cols="63" placeholder="Deixe sua Mensagem" required="required" ></textarea>

                                        <div id="botao" >
                                            <br>
                                            <button type="submit" id="bt"> Enviar</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                       
                    </div>
                </div>
                
            </div>
            
               
              
           
    </main>       
    </section>    
</div>