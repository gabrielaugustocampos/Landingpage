<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Paginas;
use App\Fotos;
use App\Localizacao_Galeria;
use App\Localizacao;
use App\Icone;
use App\Segmentos;
use App\Videos;
use App\Cases;
use App\Meta;
use App\Arquivo;



class SiteHomeController extends Controller
{
  public function index(){

    $logo = Paginas::select('imagem')->where('localizacao', 1)->where('excluido',0)->first();
 
    $lead = Paginas::where('localizacao', 2)->where('excluido',0)->with('categorias')->get();

    $destaque = Paginas::where('localizacao', 3)->where('excluido',0)->get();

    $servicos = Paginas::where('localizacao', 4)->where('excluido',0)->with('icones')->first();

    $sobre = Paginas::where('localizacao', 5)->where('excluido',0)->first();

    $equipe = Paginas::where('localizacao', 6)->where('excluido',0)->with('categorias')->with('icones')->get();

    $contato = Paginas::where('localizacao', 7)->where('excluido',0)->with('icones')->get();

    $rodape = Paginas::where('localizacao', 8)->where('excluido',0)->first();

    $metas = Meta::where('ativo', 1)->get();

    $site = Paginas::where('localizacao', 9)->where('excluido',0)->get();
    
    return view('pages.site.home.index', compact(
      'lead',
      'logo',
      'destaque',
      'servicos',
      'sobre',
      'equipe',
      'contato',
      'rodape',
      'metas', 
      'site'
    ));
  }

}
