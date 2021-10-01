@extends('layouts.main')

@section('title')
    {{ __('Букинист доставка') }}
@endsection

@section('description')
    {{ __('Условия доставки учебников. Букинист Кемерово.') }}
@endsection

@section('big-banner-class')
    big-banner-page
@endsection

@section('banner-search')
    @include('includes.search-select')
@endsection

@section('content')
    <div class="container text-main">
        <div style="margin-bottom: 300px; margin-top: 30px">
            <h2 style="font-family: 'Tahoma'; margin-bottom: 20px; margin-top: 15px"><b>
                    {{ __('Доставка учебников') }}
                </b>
            </h2>

            @include('includes.link-to-filter')

            @include('includes.content.delivery-conditions')

        </div>

        @include('includes.content.main-contacts')

    </div>
@endsection
