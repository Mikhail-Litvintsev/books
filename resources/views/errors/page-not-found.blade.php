@extends('layouts.main')

@section('title')
    {{ __('Букинист - страница не найдена') }}
@endsection

@section('description')
    {{ __('Страница не найдена') }}
@endsection

@section('big-banner-class')
    big-banner-page
@endsection

@section('content')
    <div class="container text-main">
        <div style="margin-bottom: 300px; margin-top: 30px">

            @include('includes.link-to-filter')

            <div class="text-main">{{ __('Похоже запрашиваемая вами страница не найдена.') }}</div>

        </div>
    </div>
@endsection
