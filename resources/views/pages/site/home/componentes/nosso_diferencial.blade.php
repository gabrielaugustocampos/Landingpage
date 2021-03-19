<section id="servicos" class="dtr-section dtr-py-100">
    <div class="container"> 
        
        <!-- section intro row starts -->
        <div class="row dtr-mb-30">
            <div class="col-12 text-center">
                <p class="text-size-md fontweight-500 color-green">{{$servicos->descricao}}</p>
                <h3>{{$servicos->titulo}}</h3>
            </div>
        </div>
        <!-- section intro row ends --> 
        
        <!-- row starts -->
        <div class="row"> 
            
            <!-- column 1 starts -->
            <div class="col-12 col-sm-6 col-lg-3"> 
                
                <!-- feature 1 starts -->
                <div class="dtr-feature dtr-feature-top dtr-feature-circle-lg-icon text-center accent-bg-hover">
                    <div class="dtr-feature-img accent-bg-hover-item feature-has-shadow"> <i class="{{$servicos->icones[0]->codigo_icone}}"></i> </div>
                    <div class="dtr-feature-content">
                        <h5>{{$servicos->icones[0]->titulo}}</h5>
                        <p>{!!strip_tags($servicos->icones[0]->descricao)!!}</p>
                    </div>
                </div>
                <!-- feature 1 ends --> 
                
            </div>
            <!-- column 1 ends --> 
            
            <!-- column 2 starts -->
            <div class="col-12 col-sm-6 col-lg-3"> 
                
                <!-- feature 2 starts -->
                <div class="dtr-feature dtr-feature-top dtr-feature-circle-lg-icon text-center accent-bg-hover">
                    <div class="dtr-feature-img accent-bg-hover-item feature-has-shadow"> <i class="{{$servicos->icones[1]->codigo_icone}}"></i> </div>
                    <div class="dtr-feature-content">
                        <h5>{{$servicos->icones[1]->titulo}}</h5>
                        <p>{!!strip_tags($servicos->icones[1]->descricao)!!}</p>
                    </div>
                </div>
                <!-- feature 2 ends --> 
                
            </div>
            <!-- column 2 ends --> 
            
            <!-- column 3 starts -->
            <div class="col-12 col-sm-6 col-lg-3"> 
                
                <!-- feature 3 starts -->
                <div class="dtr-feature dtr-feature-top dtr-feature-circle-lg-icon text-center accent-bg-hover">
                    <div class="dtr-feature-img accent-bg-hover-item feature-has-shadow"> <i class="{{$servicos->icones[2]->codigo_icone}}"></i> </div>
                    <div class="dtr-feature-content">
                        <h5>{{$servicos->icones[2]->titulo}}</h5>
                        <p>{!!strip_tags($servicos->icones[2]->descricao)!!}</p>
                    </div>
                </div>
                <!-- feature 3 ends --> 
                
            </div>
            <!-- column 3 ends --> 
            
            <!-- column 4 starts -->
            <div class="col-12 col-sm-6 col-lg-3"> 
                
                <!-- feature 4 starts -->
                <div class="dtr-feature dtr-feature-top dtr-feature-circle-lg-icon text-center accent-bg-hover">
                    <div class="dtr-feature-img accent-bg-hover-item feature-has-shadow"> <i class="{{$servicos->icones[3]->codigo_icone}}"></i> </div>
                    <div class="dtr-feature-content">
                        <h5>{{$servicos->icones[3]->titulo}}</h5>
                        <p>{!!strip_tags($servicos->icones[3]->descricao)!!}</p>
                    </div>
                </div>
                <!-- feature 4 ends --> 
                
            </div>
            <!-- column 4 ends --> 
            
        </div>
        <!-- row ends --> 
        
    </div>
</section>