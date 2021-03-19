<section class="slider1 slider cid-rtcIkSEgR3" id="slider1-c">



    {{-- <div class="container">
        <div class="container">
            <h2 class="mbr-section-title align-center mbr-fonts-style mbr-bold mbr-white display-2">NOSSOS CLIENTES<br>
            </h2>
            <br>
            <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style mbr-white display-4 text-black"><span
                    style="font-style: normal;"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Suspendisse potenti.</strong></span><br><br><span style="font-style: normal;"><strong>
                    </strong></span></h3>
        </div>
        <div class="slider-box">
            <amp-carousel
                class="carousel i-amphtml-element i-amphtml-layout-fixed-height i-amphtml-layout-size-defined i-amphtml-carousel-has-controls i-amphtml-layout"
                height="100" layout="fixed-height" type="carousel" i-amphtml-layout="fixed-height"
                style="overflow-x: hidden!important;">



                <div id="carousel_id" class="i-amphtml-scrollable-carousel-container"
                    style="overflow-x: hidden!important;">
                    <div class="row" style="flex-wrap: nowrap;overflow-x: hidden!important;">
                        @for ($i = 0; $i <= $inicio_for_parceiros; $i++) <amp-img
                            class="carousel-img mobirise-loader i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined amp-carousel-slide amp-scrollable-carousel-slide i-amphtml-layout"
                            src="{{asset('imagens_galerias').'/'.$parceiros_galeria[$i]->imagem}}" alt="Mobirise"
                            width="177.30496453900707" height="100" i-amphtml-layout="fixed"
                            style="width: 177.305px; height: 100px;">
                            <div placeholder="" class="placeholder amp-hidden">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div>
                            </div>
                            <a href="{{$parceiros_galeria[$i]->titulo}}" target="_blank"></a>
                            <img decoding="async" alt="Mobirise"
                                src="{{asset('imagens_galerias').'/'.$parceiros_galeria[$i]->imagem}}"
                                class="i-amphtml-fill-content i-amphtml-replaced-content">
                            </amp-img>
                            @endfor

                    </div>

                    <div class="row" style="flex-wrap: nowrap;overflow-x: hidden!important;">
                        @for ($i = ($inicio_for_parceiros + 1); $i < $fim_for_parceiros; $i++) <amp-img
                            class="carousel-img mobirise-loader i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined amp-carousel-slide amp-scrollable-carousel-slide i-amphtml-layout"
                            src="{{asset('imagens_galerias').'/'.$parceiros_galeria[$i]->imagem}}" alt="Mobirise"
                            width="177.30496453900707" height="100" i-amphtml-layout="fixed"
                            style="width: 177.305px; height: 100px;">
                            <div placeholder="" class="placeholder amp-hidden">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div>
                            </div>
                            <a href="{{$parceiros_galeria[$i]->titulo}}" target="_blank"></a>
                            <img decoding="async" alt="Mobirise"
                                src="{{asset('imagens_galerias').'/'.$parceiros_galeria[$i]->imagem}}"
                                class="i-amphtml-fill-content i-amphtml-replaced-content">
                            </amp-img>

                            @endfor
                    </div>








                </div>
                <div tabindex="0" class="amp-carousel-button amp-carousel-button-prev" role="presentation"
                    title="Previous item in carousel" aria-disabled="false"></div>
                <div tabindex="0" class="amp-carousel-button amp-carousel-button-next" role="presentation"
                    title="Next item in carousel" aria-disabled="false"></div>
            </amp-carousel>



        </div>

    </div> --}}

    <!-- Novo Carrousel de Parceiros - OBS: ESTÁ SEM A LÓGICA -->

    <div class="container my-4">

        <h2 class="mbr-section-title align-center mbr-fonts-style mbr-bold mbr-white display-2">GALERIA<br></h2>
        <hr class="my-4">


        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">


            <div class="controls-top">
                <a class="btn-floating-left text-red" href="#multi-item-example" data-slide="prev"><i
                        class="fas fa-arrow-circle-left fa-2x" style="position: absolute;top: 50%;left: -3%;z-index: 2;"></i></a>
                <a class="btn-floating-right text-red" href="#multi-item-example" data-slide="next"><i
                        class="fas fa-arrow-circle-right fa-2x" style="position: absolute;top: 50%;right: -3%;z-index: 2;"></i></a>
            </div>

            <div class="carousel-inner" role="listbox">
            @foreach ($parceiros_pagina->gallery as $parceiros)
              @if ($loop->first || $loop->index % 8 == 0)
              <div class="carousel-item {{$loop->index == 0 ? 'active' : ''}}">  
              @endif
                @if ($loop->first || $loop->index % 8 == 0)
                <div class="row mb-3">
                @endif
                  <div class="col-md-3">
                      <div class="card mb-2 d-flex align-items-center justify-content-center">
                        <a href="{{$parceiros->titulo}}">
                          <img class="card-img-top w-75"
                              src="{{asset('imagens_galerias').'/'.$parceiros->imagem}}"
                              alt="Card image cap">
                        </a>
                      </div>
                  </div>
                @if ($loop->last || $loop->iteration % 8 == 0)
                </div>    
                @endif
                
              @if ($loop->last || $loop->iteration % 8 == 0)
              </div>      
              @endif
            @endforeach
            </div>
        </div>
    </div>

</section>
