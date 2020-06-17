@extends('layouts.app')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12 col-lg-6 col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title-wrap bar-success">
                <h4 class="card-title mb-0">Pedidos</h4>
            </div>
          </div>
          <div class="card-body">
            <button class="btn btn-outline-primary">Novo Pedido</button>
            <div class="card-block mt-3">
              <div class="card border-danger mb-3">
                <div class="card-header">Pedido: 001</div>
                  <div class="row">
                    <div class="col-6 display-flex">
                      <div class="card-body">
                        <p class="card-text">Garçon: Juarez</p>
                        <p class="card-text">Mesa: 23</p>
                        <p class="card-text">Tempo corrido:
                          <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            </div>
                          </div>
                        </p>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="card-body">
                        <p class="card-text">Pedido Realizado: 17:00</p>
                        <p class="card-text">Previsão entrega: 17:45</p>
                        <p>Situação do pedido: <strong class="text-danger">CANCELADO</strong></p>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer bg-transparent border-danger center">
                    <button class="btn btn-primary">Editar</button>
                    <button class="btn btn-danger">Encerrar</button>
                  </div>
                </div>

            </div>
            <!--<fieldset>
              <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" class="form-control" placeholder="Addon to Left" aria-describedby="basic-addon1">
              </div>
            </fieldset>-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
