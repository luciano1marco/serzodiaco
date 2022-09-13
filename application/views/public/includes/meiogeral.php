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
                    <img class="img-responsive" src="public/images/laranja.png">
                </a>
            </div> 
            
            <div class="col-md-12" ><h3>Galeria de Fotos</h3></div>
            <!-- imagens  --->
            <div class="col-md-12">
                 <!-----carrocel primeiro quadro  id=1------------------------------------------------------------->
                <div class="col-md-4">
                    <h5>Escolinha</h5>
                    <div id="quadro1" class="carousel slide " data-ride="carousel" >	
                        <div class="carousel-inner" >
                            <?php $count = 0; 
                                $indicators = ''; 
                                foreach ($imagem as $row): 
                                    $count++; 
                                    if ($count === 1)    { $class = 'active'; } 
                                    else                 { $class = '';       }?> 
                                    <?php  if($row->tipo == 1):
                                        $indicators .= '<li data-target="#quadro1" data-slide-to="' . $count . '" class="' . $class . '"></li>' ;?><br> 
                                        <div class="item <?php echo $class; ?>"> 
                                            <img src="<?= base_url().'upload/ser/'.$row->nome?>" width="100%"  alt="Menu"> 
                                        </div>
                                    <?php endif;?>
                                <?php endforeach;?> 
                                <ol class="carousel-indicators"> 
                                    <?= $indicators; ?> 
                                </ol>
                        </div>
                        <a class="carousel-control-prev" href="#quadro1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#quadro1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div>
                </div>  
                <!-----carrocel segundo quadro  id=2------------------------------------------------------------->
                <div class="col-md-4">
                    <h5>Conquistas</h5>
                    <div id="quadro2" class="carousel slide " data-ride="carousel" >	
                        <div class="carousel-inner" >
                            <?php $count2 = 0; 
                                $indicators2 = ''; 
                                foreach ($imagem as $row2): 
                                    $count2++; 
                                    if ($count2 === 1)    { $class2 = 'active'; } 
                                    else                  { $class2 = '';       }?> 
                                    <?php  if($row2->tipo == 2):
                                        $indicators2 .= '<li data-target="#quadro2" data-slide-to="'.$count2.'" class="' . $class2 . '"></li>' ;?><br> 
                                        <div class="item <?php echo $class2; ?>"> 
                                            <img src="<?= base_url().'upload/ser/'.$row2->nome?>" width="100%" alt="Menu"> 
                                        </div>
                                    <?php endif;?>
                                <?php endforeach;?> 
                                <ol class="carousel-indicators"> 
                                    <?= $indicators2; ?> 
                                </ol>
                        </div>
                        <a class="carousel-control-prev" href="#quadro2" role="button" data-slide="next">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#quadro2" role="button" data-slide="prev">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div>
                </div>
                <!-----carrocel terceiro quadro  id=3------------------------------------------------------------->
                <div class="col-md-4">
                    <h5>Eventos</h5>
                    <div id="quadro3" class="carousel slide " data-ride="carousel" >	
                        <div class="carousel-inner" >
                            <?php $count3 = 0; 
                                $indicators3 = ''; 
                                foreach ($imagem as $row3): 
                                    $count3++; 
                                    if ($count3 === 1)    { $class3 = 'active'; } 
                                    else                  { $class3 = '';       }?> 
                                    <?php  if($row3->tipo == 3):
                                        $indicators3 .= '<li data-target="#quadro3" data-slide-to="' . $count3 . '" class="' . $class3 . '"></li>' ;?><br> 
                                        <div class="item <?php echo $class3; ?>"> 
                                            <img src="<?= base_url().'upload/ser/'.$row3->nome?>" width="100%" height="100%" alt="Menu"> 
                                        </div>
                                    <?php endif;?>
                                <?php endforeach;?> 
                                <ol class="carousel-indicators"> 
                                    <?= $indicators3; ?> 
                                </ol>
                        </div>
                        <a class="carousel-control-prev" href="#quadro3" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#quadro3" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div>
                </div>
                <!------fim carrocel----------->
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

