<section id="destaque" class="dtr-section dtr-hero-section-padding bg-grey">
    <div class="container dtr-py-100"> 
        
        <!--===== slider starts =====-->
        <div class="dtr-slick-slider dtr-hero-2col-slider dtr-slick-arrows-left"> 

            @foreach ($destaque as $item)

            <div class="dtr-hero-2col-slide">
                <div class="row d-flex align-items-center"> 
                    
                    <!-- column 1 starts -->
                    <div class="col-12 col-md-6 small-device-space">
                        <div class="hero-2col-slider-img"> 
                            
                            <!-- small image -->
                            <div class="absolute-top-left"> <img src="{{asset('assets_site/images/dots.png')}}" alt="image" class="fadeInDown-fadeOutUp dtr-delay-3"> </div>
                            <!-- main image -->
                            <div class="dtr-pt-50 dtr-pl-50"> <img src="{{asset('imagens_paginas/'.$item->imagem)}}" alt="{{$item->titulo}}" class="fadeInLeft-fadeOutLeft dtr-delay-1"> </div>
                        </div>
                    </div>
                    <!-- column 1 ends --> 
                    
                    <!-- column 2 starts -->
                    <div class="col-12 col-md-6">
                        <p class="text-size-md fontweight-500 color-green fadeIn-fadeOut dtr-delay-1">{{$item->descricao}}</p>
                        <h2 class="fadeIn-fadeOut dtr-delay-2">{{$item->titulo}}</h2>
                        <a href="{{$item->url}}" class="dtr-btn btn-green dtr-mt-10 zoomIn-fadeOut dtr-delay-3">Saiba Mais</a> </div>
                    <!-- column 2 ends --> 
                    
                </div>
            </div>
                
            @endforeach
            
        </div>
        <!-- row ends --> 
        
    </div>
</section>