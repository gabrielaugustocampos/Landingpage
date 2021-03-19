@extends('base.site.index', ["contato" => $contato, "rodape" => $rodape, "metas" => $metas, "site" => $site])
@section('content')

    @component('base.site.componentes.navbar', ["logo" => $logo])
    @endcomponent

    @component('pages.site.home.componentes.lead', ["lead" => $lead])
    @endcomponent

    @component('pages.site.home.componentes.banner', ["destaque" => $destaque])
    @endcomponent

    @component('pages.site.home.componentes.nosso_diferencial', ["servicos" => $servicos])
    @endcomponent

    @component('pages.site.home.componentes.sobre', ["sobre" => $sobre])
    @endcomponent

    @component('pages.site.home.componentes.team', ["equipe" => $equipe])
    @endcomponent

    {{-- @component('pages.site.home.componentes.depoimento')
    @endcomponent --}}

@endsection