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
            @include('../../shared.components.pedido')
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
