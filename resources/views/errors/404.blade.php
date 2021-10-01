@extends('layouts.errors')

@section('title')
    {{ __('Букинист - страница не найдена') }}
@endsection

@section('description')
    {{ __('Страница не найдена - 404') }}
@endsection

@section('big-banner-class')
    big-banner-page
@endsection

@section('content')
    <div class="container text-main">
        <div style="margin-bottom: 300px; margin-top: 30px">

            @include('includes.link-to-filter')

            <div class="text-main mb-5"><h3>{{ __('Похоже запрашиваемая вами страница не найдена.') }}</h3></div>

        </div>
    </div>
@endsection
