<footer id="dtr-footer"> 
            
    <!-- footer columns starts -->
    <div class="dtr-footer-columns">
        <div class="container">
            <div class="row"> 

                <div class="col-12 col-md-6 col-lg-3 small-device-space">
                    <a href="#home" class="dtr-scroll-link d-block dtr-mb-20" style="margin-top: 35%;">
                        <img src="{{asset('imagens_paginas/'.$rodape->imagem)}}" alt="Ythan">
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-3"> 

                    @foreach ($contato as $item)

                        @if ($item->id_texto == 14)

                        <h5>{{$item->titulo}}</h5>
                        <p>{{$item->descricao}}</p>
                        <ul class="dtr-social dtr-social-list text-left dtr-mt-20">

                            @for ($i = 0; $i < count($item->icones); $i++)

                                <li><a href="{!!strip_tags($item->icones[$i]->descricao)!!}" title="{{$item->icones[$i]->titulo}}"><i class="{{$item->icones[$i]->codigo_icone}}"></i></a></li>
                                
                            @endfor

                        </ul>
                            
                        @endif
                        
                    @endforeach
                                    
                </div>

                <div class="col-12 col-md-6 col-lg-2 small-device-space">
                    <h5>Menu</h5>
                    <ul class="dtr-list-simple">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#sobre">Sobre</a></li>
                        <li><a href="#destaque">Destaques</a></li>
                        <li><a href="#servicos">Serviços</a></li>
                    </ul>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <h5>Contato</h5>

                    @foreach ($contato as $item)

                        @if ($item->id_texto != 14)

                        <p>
                            <span class="dtr-sm-info-icon bg-white color-dark"><i class="{{$item->icones[0]->codigo_icone}}"></i></span>
                            {{$item->descricao}}
                        </p>


                        @endif
                        
                    @endforeach
                    
                </div>
                
            </div>
        </div>
    </div>
    <!-- footer columns ends --> 
    
    <!-- copyright starts -->
    <div class="dtr-copyright-alt text-center dtr-py-10">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <P class="text-size-sm"> {!!str_replace(['<p>', '</p>'], "", $rodape->texto)!!}</P>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright ends --> 
    
</footer>