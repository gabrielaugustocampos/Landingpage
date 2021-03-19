<div class="dtr-preloader">
    <div class="dtr-preloader-inner">
        <div class="dtr-preloader-img"></div>
    </div>
</div>

<div class="dtr-responsive-header fixed-top">
    <div class="container"> 
        
        <!-- small devices logo --> 
        <a href="#home"><img src="{{asset('imagens_paginas/'.$logo->imagem)}}" alt="logo"></a> 
        <!-- small devices logo ends --> 
        
        <!-- menu button -->
        <button id="dtr-menu-button" class="dtr-hamburger" type="button"><span class="dtr-hamburger-lines-wrapper"><span class="dtr-hamburger-lines"></span></span></button>
    </div>
    <div class="dtr-responsive-header-menu"></div>
</div>

<header id="dtr-header-global" class="fixed-top">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between"> 
            
            <!-- header left starts -->
            <div class="dtr-header-left"> 
                
                <!-- logo --> 
                <a class="logo-default dtr-scroll-link" href="#home"><img src="{{asset('imagens_paginas/'.$logo->imagem)}}" alt="Ythan" title="Ythan"></a> 
                
                <!-- logo on scroll --> 
                <a class="logo-alt dtr-scroll-link" href="#home"><img src="{{asset('imagens_paginas/'.$logo->imagem)}}" alt="Ythan" title="Ythan"></a> 
                <!-- logo on scroll ends --> 
                
            </div>
            <!-- header left ends --> 
            
            <!-- menu starts-->
            <div class="main-navigation navbar navbar-expand-lg ml-auto">
                <ul class="dtr-scrollspy navbar-nav dtr-nav dark-nav-on-load dark-nav-on-scroll">
                    <li class="nav-item"> <a class="nav-link active" href="#home">Home</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#sobre">Sobre</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#destaque">Destaques</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#servicos">Serviços</a> </li>
                </ul>
            </div>
            <!-- menu ends--> 
            
            <!-- header right starts -->
            <div class="dtr-header-right"> </div>
            <!-- header right ends --> 
            
        </div>
    </div>
</header>