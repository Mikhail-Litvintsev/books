@extends('layouts.main')

@section('title'){{ __('Букинист') }}@endsection

@section('description')
    {{ __('учебники Б/У от 100 рублей! обмен, покупка, продажа. Букинист Кемерово официальный сайт.') }}
@endsection

@section('big-banner-class')
    big-banner-main
@endsection

@section('banner-search')
    @include('includes.search-select')
@endsection

@section('content')

    @include('includes.content.main-text-1')

    <h1 class="text-center" style="font-family: Calibri"><b>{{ __('СПИСОК УЧЕБНИКОВ') }}</b></h1>

    @include('includes.content.main-stbook-list')

    @include('includes.content.main-benefit')

    <h1 class="text-center mt-4 mb-4" style="font-family: Calibri; color: red">
        <b>{{ __('АКЦИЯ! Для тех, кто покупает учебники, скидка на канцтовары 10%!') }}</b></h1>

    @include('includes.content.main-contacts')

@endsection
