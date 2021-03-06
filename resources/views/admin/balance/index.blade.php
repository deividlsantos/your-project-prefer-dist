@extends('adminlte::page')

@section('title', 'Saldo')

@section('content_header')
    <h1>Saldo</h1>

    <ol class='breadcrumb'>
       <li><link href=''>Dashboard</a></li>
       <li><link href=''>Saldo</a></li>
    </ol>
@stop

@section('content')
    <div class='box'>
        <div class='box-header'>
            <a href="{{ route('balance.deposit') }}" class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i>Recarregar</a>
            <a href='' class='btn btn-danger'><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Sacar</a>
        </div>
        <div class='box-body'>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            
            <div class="inner">
              <h3>R$ {{ number_format($amount, 2, '.', '') }}</h3>
            </div><div class="icon">
              <i class="ion ion-cash"></i>
            </div>
            <a href="#" class="small-box-footer">Historico<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        </div>
    </div>
@stop