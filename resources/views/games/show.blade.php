@extends('layouts.base')
@section('title', 'Game: ' . $game->name . ' - ')
@section('content')
<div class="row">
  <div class="col text-center">
    <img class="img-fluid" src="{{ asset('images/scheme.svg') }}" alt="">
  </div>
</div>
<div class="row">
  <h1 class="col-12 text-center mb-3 text-primary border-bottom border-primary"><i class="fa fa-play"></i> {{
  $game->name }}</h1>
  <h6 class="col-12 text-center">
    Escolha um dos stakeholders para jogar.<br>
    <small class="text-secondary">Note que você pode jogar sozinho, o computador faz pedidos automaticamente quando
      faltam algum dos stakeholders.</small>
  </h6>
</div>
<div class="row justify-content-center mb-5">
  <div class="col-md-6 mt-3 mb-3 text-center">
    <a href="{{ route('retailer.index', ['gameId' => $game->id]) }}"
       class="btn btn-success btn-block @if($isPlaying['retailer']) disabled @endif">
      <i class="fa fa-store-alt"></i> Varejista
      @if($isPlaying['retailer']) - <small>( jogando )</small> @endif
    </a>
    <a href="{{ route('wholesaler.index', ['gameId' => $game->id]) }}"
       class="btn btn-secondary btn-block @if($isPlaying['wholesaler']) disabled @endif">
      <i class="fa fa-building"></i> Atacadista
      @if($isPlaying['wholesaler']) - <small>( jogando )</small> @endif
    </a>
    <a href="{{ route('distributor.index', ['gameId' => $game->id]) }}"
       class="btn btn-info btn-block @if($isPlaying['distributor']) disabled @endif">
      <i class="fa fa-dolly-flatbed"></i> Distribuidor
      @if($isPlaying['distributor']) - <small>( jogando )</small> @endif
    </a>
    <a href="{{ route('manufacturer.index', ['gameId' => $game->id]) }}"
       class="btn btn-primary btn-block @if($isPlaying['manufacturer']) disabled @endif">
      <i class="fa fa-industry"></i> Fabricante
      @if($isPlaying['manufacturer']) - <small>( jogando )</small> @endif
    </a>
  </div>
</div>
@endsection()