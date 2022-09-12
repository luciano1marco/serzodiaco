<style>

#meiogeral {
    background-color: #E9E9E9;
    color: white;

}

#meiogeral h1{
    font-weight: bold;
    font-size: 26px;
    text-align: center;
    margin-top: 5px;
    color: #FF6600;
}
#meiogeral h2{
    font-weight: bold;
    font-size: 40px;
    text-align: left;
    margin-top: 30px;
    color: #FF6600;
}
#meiogeral h3{
    font-weight: bold;
    font-size: 36px;
    text-align: center;
    margin-top: 30px;
    color: #FF6600;
}
#meiogeral h4{
    font-weight: bold;
    font-size: 26px;
    text-align: center;
    margin-top: 5px;
    color: #FF6600;
}

#meiogeral h5{
    font-size: 20px;
    text-align: center;
    margin-top: 5px;
    color: #FF6600;
}
#meiogeral h6{
    font-size: 16px;
    text-align: justify;
    margin-top: 5px;
    color: #995CB4;
}
#meiogeral h7{
   /* font-weight: bold;*/
    font-size: 20px;
    text-align: left;
    margin-top: 5px;
    color: #FF6600;
}
#meiogeral h8{
    font-weight: bold;
    font-size: 36px;
    text-align: left;
    margin-top: 30px;
    color: #400229;
}
#meiogeral h9{
    font-weight: bold;
    font-size: 16px;
    text-align: center;
    margin-top: 30px;
    color: #775B75;
}
#meiogeral h10{
    font-size: 14px;
    text-align: center;
    margin-top: 30px;
    color: #FF6600;
}
body{
  text-align: center;
}
.slide-controller:nth-child(1):checked ~ .slide-show .slides-list{--selected-item: 0;}
.slide-controller:nth-child(2):checked ~ .slide-show .slides-list{--selected-item: 1;}
.slide-controller:nth-child(3):checked ~ .slide-show .slides-list{--selected-item: 2;}
.slide-controller:nth-child(4):checked ~ .slide-show .slides-list{--selected-item: 3;}

.slide-show{
  overflow: hidden;
}

.slides-list{
  --selected-item: 0;
  --total-items: 4;
  list-style-type: none;
  margin: 10px 0;
  padding: 0;
  position: relative;
  left: calc(var(--selected-item) * -100%);
  width: calc(var(--total-items) * 100%);
  transition: left 0.4s cubic-bezier(0.680, -0.550, 0.265, 1.550);
  
  display: grid;
  grid-auto-flow: column;
  grid-auto-columns: 1fr;
}
</style>

<div id="meiogeral">
    <section class="content">
        <div class="row">
             <!-- fundo rio grande por elas -->   
            <a href="#">
                <img class="img-responsive" src="public/images/fundomeio.jpg"  >
            </a>
            <!-- triangulo -->
            <a href="#">
                <img class="img-responsive" src="public/images/trian.png" >
            </a>
              <!-- o que é --> 
            <div class="container-fluid">
                <div class="row">       
                    <div class= "col-lg-12" id="oquee">
                        <h1>Nossa História</h1>
                        <h5>Zodíaco - 1978</h5><br><br><br><br><br><br>
                    </div>
                   
                    </div>
                    <div class="col-lg-12">
                        <div class="col-md-3">
                            <h1>Conceito</h1>
                        </div>
                        <div class="col-md-7">
                            <h5>Construimos e apoiamos iniciativas capazes de empoderar empreendedoras, possibilitando independência financeira e de decisão pessoal.</h5><br><br>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                </div>
           <!-- losango -->
            <div class="container-fluid">    
                    <div class="col-lg-12">
                        <a href="#">
                            <img class="img-responsive" src="public/images/losango.png" >
                        </a>
                    </div> 
            </div>
            <!-- pilares de atuação -->
            <div class="container-fluid">  
                    <div class="col-lg-12" id="atuacao">
                        <br><br><br><br> <h3>Pilares de Atuação</h3><br><br><br><br>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-md-2"></div>
                        <div class="col-md-3">
                            <div class="col-md-12">
                                <h2>01</h2>
                                <h4>COLABORAÇÃO SOCIAL</h4>
                                <h6>Conexão com pessoas que compartilharão seu conhecimento.</h6>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="col-md-12">
                                <h2>02</h2>
                                <h4>CAPACITAÇÃO ACESSÍVEL</h4>
                                <h6>Conhecimento e informação ao alcance de todas.</h6>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="col-md-12">
                                <h2>03</h2>
                                <H4>DESCENTRALIZAÇÃO</H4>
                                <h6>Estimular a troca de experiências e oportunizar novos negócios nos diversos bairros do município.</h6><br><br><br><br><br>
                            </div>
                        </div>
                        
                    </div>
                    
            </div>
            <!-- lista laranja -->
            <div class="col-lg-12">
                <a href="#">
                    <img class="img-responsive" src="public/images/laranja.png" >
                </a>
            </div> 
            
            <div class="col-md-12" ><h3>Galeria de Fotos</h3></div>
            <!-- imagens  --->
            <div class="col-md-12" id="imagens">
                <div class="col-md-4">
                    <h5>Escolinha</h5>
                    <div id="carouselExampleControls" class="carousel slide " data-ride="carousel" >
                        <div class="carousel-inner" >
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="public/images/imagem1.jpg?auto=yes&bg=777&fg=555&text=Primeiro Slide" alt="Primeiro Slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="public/images/imagem2.jpg?auto=yes&bg=666&fg=444&text=Segundo Slide" alt="Segundo Slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="public/images/imagem3.jpg?auto=yes&bg=555&fg=333&text=Terceiro Slide" alt="Terceiro Slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5>Conquistas</h5>
                    <div id="carouselExampleControls" class="carousel slide " data-ride="carousel" >
                        <div class="carousel-inner" >
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="public/images/imagem1.jpg?auto=yes&bg=777&fg=555&text=Primeiro Slide" alt="Primeiro Slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="public/images/imagem2.jpg?auto=yes&bg=666&fg=444&text=Segundo Slide" alt="Segundo Slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="public/images/imagem3.jpg?auto=yes&bg=555&fg=333&text=Terceiro Slide" alt="Terceiro Slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5>Eventos</h5>
                    <div id="carouselExampleControls" class="carousel slide " data-ride="carousel" >
                        <div class="carousel-inner" >
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="public/images/imagem1.jpg?auto=yes&bg=777&fg=555&text=Primeiro Slide" alt="Primeiro Slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="public/images/imagem2.jpg?auto=yes&bg=666&fg=444&text=Segundo Slide" alt="Segundo Slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="public/images/imagem3.jpg?auto=yes&bg=555&fg=333&text=Terceiro Slide" alt="Terceiro Slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- triangulo virado -->
            <div class="col-lg-12">
                <a href="#">
                    <img class="img-responsive" src="public/images/triangulovirado.png" >
                    </a>
            </div> 

            <!-- apoiadores -->

                    

         </div>   
    </section>
</div>

