<section id="home" class="dtr-section dtr-hero-section-padding dtr-section-with-bg" style="background-image: url({{asset('imagens_paginas/'.$lead[0]->imagem)}});">
    <div class="container"> 
        
        <!-- row starts -->
        <div class="row d-flex align-items-center dtr-py-100"> 
            
            <!-- column 1 starts -->
            <div class="col-12 col-md-6">
                <p class="fontweight-500 color-white wow fadeIn" data-wow-duration="1.5s">{{$lead[0]->descricao}}</p>
                <h2 class="color-white wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1.5s">{{$lead[0]->titulo}}</h2>
                <p class="color-white wow fadeIn" data-wow-delay="1s" data-wow-duration="1.5s">{!!strip_tags($lead[0]->texto)!!}</p>
            </div>
            <!-- column 1 ends --> 
            
            <!-- column 2 starts -->
            <div class="col-12 col-md-5 offset-md-1"> 
                
                <!-- box starts -->
                <div class="dtr-box bg-white">
                    <h5 class="text-center">{{$lead[1]->titulo}}</h5>
                    <p class="dtr-mb-20 text-center fontweight-500 text-size-md color-dark">{{$lead[1]->descricao}}</p>
                    

                    @if (\Session::has('success'))

                    <center><h3>{!! \Session::get('success') !!}</h3></center>

                    @else

                    <form action="{{url('/contatos/enviar')}}" method="POST">
                        @csrf

                        <fieldset>
                            <p>
                                <input name="nome"  type="text" placeholder="Nome">
                            </p>
                            <p>
                                <input name="telefone" id="telefone" type="text" placeholder="Telefone">
                            </p>
                            <p>
                                <input name="email"  class="required email" type="email" placeholder="Email">
                            </p>
                            <p class="text-center">
                                <button class="dtr-btn btn-gold" type="submit">Enviar</button>
                            </p>
                        </fieldset>

                    </form>

                    @endif

                    
                </div>
                <!-- box ends --> 
                
            </div>
            <!-- column 2 ends --> 
            
        </div>
        <!-- row ends --> 
        
    </div>
</section>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
<script src="{{asset('js/sb-admin-2.js')}}"></script>
<script src="{{asset('js/jquery.mask.min.js')}}"></script>
<script>
    $("#telefone").mask("(00) 000000009");
</script>