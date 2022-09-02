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
            <!-- Objetivos -->
         
                   <!--teste de slider -->
                    <input type="radio" class="slide-controller" name="slide" checked />
                    <input type="radio" class="slide-controller" name="slide" />
                    <input type="radio" class="slide-controller" name="slide" />
                    <input type="radio" class="slide-controller" name="slide" />

                    <div class="slide-show" >
                    <ul class="slides-list" >
                        <li class="slide" >
                        <img src="public/images/banner.png?image=8" />
                        </li>
                        <li class="slide" >
                        <img src="public/images/fundomeio.jpg?image=0" />
                        </li>
                        <li class="slide" >
                        <img src="public/images/logo.png?image=6" />
                        </li>
                        <li class="slide" >
                        <img src="public/images/triangulo.png?image=1" />
                        </li>
                    </ul>
                    </div>




                     <!-- lista laranja -->
                     <div class="col-lg-12">
                        <a href="#">
                            <img class="img-responsive" src="public/images/laranja.png" >
                         </a>
                    </div>
                    <!-- conheça nossas empreendedoras -->
                    <div class="col-lg-12">
                        <div class="col-md-3"> </div>
                        <div class="col-md-6" id="conheca">
                            <h3>Conheça nossoas Empreendedoras</h3><br><br>
                        </div>
                    </div> 
                    <div class="col-md-12">
                        
                        <div class="col-md-6">
                                <h1>Clique no vídeo para assistir!</h1><br><br>
                        </div>
                    </div>
                    <!-- videos ---->
                    <div class="col-md-12">
                        <div class="col-md-2"></div>
                        <div class="col-md-3" >
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item"  src="public/images/Video-2021-03-06-at-20.31.13.mp4" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" src="public/images/Video-2021-03-06-at-20.31.28.mp4" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" src="public/images/Video-2021-03-06-at-20.31.48.mp4" allowfullscreen ></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">espaço</div>
                    
                    <div class="col-md-12">
                    <div class="col-md-2"></div>
                        <div class="col-md-3">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" src="public/images/Video-2021-03-07-at-09.39.56.mp4" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" src="public/images/Video-2021-03-07-at-10.15.09.mp4" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" src="public/images/Video-2021-03-08-at-15.41.02.mp4" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">espaço</div>
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

