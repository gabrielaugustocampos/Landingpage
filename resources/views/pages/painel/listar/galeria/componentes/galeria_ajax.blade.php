<div class="col-sm-6 col-md-6 mb-4">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <h3 style="color:green;width:100%;text-align: center;">Ativado</h3>
      </div>
      @if (!empty($galerias_ativo[0]))
        @foreach ($galerias_ativo as $galeria)
          <div class="col-sm-12 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="no-gutters align-items-center">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12 mr-2" style="padding-bottom: 1pc;text-align:center;">

                          <div type="text" class="h5 mb-0 font-weight-bold text-gray-800">{{$galeria->nome}}</div>

                        {{-- <div class="h6 mb-0 font-weight-bold text-gray-800">{{$galeria->descricao}}</div> --}}
                        <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: green;">Ativo</div>
                      </div>
                    </div>
                    <div class="row" style="display: flex;justify-content: center;flex-wrap: wrap;">
                      <div class="col-md-12 col-sm-12">
                        <button value="{{$galeria->id_localizacao_galeria}}" type="button" class="btn btn-danger btn_alterar_status_galeria" style="width: 100%;">
                          <i class="fas fa-trash-alt"></i> Excluir
                        </button>
                      </div>
                      <div class="col-md-12 col-sm-12" style="padding-top:1pc;">
                      <a href="{{url('fotos', [$galeria->id_localizacao_galeria])}}">
                        <button value="{{$galeria->id_localizacao_galeria}}" type="button" class="btn btn-info btn_editar_galeria" style="width: 100%;">
                          <i class="fas fa-pen-square"></i> Editar
                        </button>
                      </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      @else
        <div class="col-md-12">
          <div class="alert alert-info" role="alert" style="text-align: center;">
            Nenhuma galeria est?? ativa!
          </div>
        </div>
      @endif
    </div>
</div>

<div class="col-sm-6 col-md-6 mb-4">
  <div class="row">
    <div class="col-md-12 col-sm-12">
      <h3 style="color:red;width:100%;text-align: center;">Excluido</h3>
    </div>
    @if (!empty($galerias_excluido[0]))
      @foreach ($galerias_excluido as $galeria)
        <div class="col-sm-12 col-md-6 mb-4">
          <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
              <div class="no-gutters align-items-center">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12 mr-2" style="padding-bottom: 1pc;text-align: center;">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$galeria->nome}}</div>
                      {{-- <div class="h6 mb-0 font-weight-bold text-gray-800">{{$galeria->descricao}}</div> --}}
                      <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: red;">Excluido</div>
                    </div>
                  </div>
                  <div class="row" style="display: flex;justify-content: center;flex-wrap: wrap;">

                    <div class="col-md-12 col-sm-12">
                      <button value="{{$galeria->id_localizacao_galeria}}" type="button" class="btn btn-primary btn_alterar_status_galeria" style="width: 100%;">
                        <i class="fas fa-trash-restore-alt"></i> Restaurar
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    @else
      <div class="col-md-12">
        <div class="alert alert-info" role="alert" style="text-align: center;">
          Nenhuma galeria est?? excluida!
        </div>
      </div>
    @endif
  </div>
</div>
