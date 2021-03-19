<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<title>{{$site[1]->descricao}}</title>

<link href="{{asset('imagens_paginas/'.$site[0]->imagem)}}" rel="shortcut icon">

@foreach ($metas as $meta)
@if ($meta->tipo_meta == 0)
@if ($meta->name == "og:image")
<meta property="{{$meta->name}}" content="{{asset('imagens_meta/'.$meta->content)}}">            
@else
<meta property="{{$meta->name}}" content="{{$meta->content}}">
@endif
@else
<meta name="{{$meta->name}}" content="{{$meta->content}}">
@endif
@endforeach

