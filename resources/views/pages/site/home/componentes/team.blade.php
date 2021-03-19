<section id="equipe" class="dtr-section dtr-py-100 bg-grey">
    <div class="container"> 

        @foreach ($equipe as $item)

            @if ($item->categorias[0]->id == 1)

            <div class="row dtr-mb-40">
                <div class="col-12 text-center">
                    <p class="text-size-md fontweight-500 color-green">{{$item->descricao}}</p>
                    <h3>{{$item->titulo}}</h3>
                    <p>{!!strip_tags($item->texto)!!}</p>
                </div>
            </div>
                
            @endif
            
        @endforeach
        
        <!-- row starts -->
        <div class="row">
            
            @foreach ($equipe as $item)

                @if ($item->categorias[0]->id == 2)

                <div class="col-12 col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.2s"> 
                
                    <!-- team member 1 starts -->
                    <div class="dtr-team text-center"> 
                        
                        <!-- image -->
                        <div class="dtr-team-img dtr-rounded"> <img src="{{asset('imagens_paginas/'.$item->imagem)}}" alt="image"> </div>
                        
                        <!-- content starts -->
                        <div class="dtr-team-content bg-grey">
                            <div class="dtr-member-info">
                                <h5 class="dtr-member-name">{{$item->titulo}}</h5>
                                <p>{{$item->descricao}}</p>
                            </div>
                            <ul class="dtr-social dtr-social-list color-green">

                                @for ($i = 0; $i < count($item->icones); $i++)

                                <li><a href="{!!strip_tags($item->icones[$i]->descricao)!!}"  target="_blank" title="{{$item->icones[$i]->titulo}}"><i class="{{$item->icones[$i]->codigo_icone}}"></i></a></li>
                                    
                                @endfor

                            </ul>
                        </div>
                        <!-- content ends --> 
                        
                    </div>
                    <!-- team member 1 ends --> 
                    
                </div>

                @endif
            
            @endforeach
            
            
        </div>
        <!-- row ends --> 
        
    </div>
</section>