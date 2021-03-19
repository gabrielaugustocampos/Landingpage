<section id="sobre" class="dtr-section dtr-py-100 bg-grey">
    <div class="container"> 
        
        <!-- row starts -->
        <div class="row d-flex align-items-center"> 
            
            <!-- column 1 starts -->
            <div class="col-12 col-md-5 small-device-space">
                <h2>{{$sobre->titulo}}</h2>
                <p class="text-size-md fontweight-500 color-green">{{$sobre->descricao}}</p>
                <p class="dtr-mt-20">{!!strip_tags($sobre->texto)!!}</p>
                <a href="{{$sobre->url}}" class="dtr-btn btn-green dtr-mt-15">Saiba Mais</a> </div>
            <!-- column 1 ends --> 
            
            <!-- column 2 starts -->
            <div class="col-12 col-md-6 offset-md-1"> <img src="{{asset('imagens_paginas/'.$sobre->imagem)}}" alt="{{$sobre->titulo}}"> </div>
            <!-- column 2 ends --> 
            
        </div>
        <!-- row ends --> 
        
    </div>
</section>