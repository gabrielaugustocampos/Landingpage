<!DOCTYPE html>
<html lang="en">

<head>

    @component('base.site.componentes.meta', ["metas" => $metas, "site" => $site])
    @endcomponent

    @component('base.site.componentes.header')
    @endcomponent

</head>

<body>

    <div id="dtr-wrapper" class="clearfix"> 

    @yield('content')

    @component('base.site.componentes.footer', ["contato" => $contato, "rodape" => $rodape])
    @endcomponent

    @component('base.site.componentes.scripts')
    @endcomponent

    </div>

</body>

</html>