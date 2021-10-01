@extends('layouts.main')

@section('title')
    {{ __('Корзина заявки: итого') }}
@endsection

@section('big-banner-class')
    big-banner-searchPage
@endsection

@section('banner-search')
    <h1 style="font-family: Tahoma; color: green; text-shadow: 0 0 4px white, 0 0 30px white">
        <b>{{ __('Заявка на на расчет цены') }}</b>
    </h1>
@endsection

@section('content')
    <div class="container text-main">
        <div style="margin-bottom: 300px; margin-top: 30px">
            @if($cartItems->first())
                <div class="mb-3">
                    <a href="{{ url()->previous() }}">{{ __('<< назад') }}</a>
                </div>
                <h3 class="mb-3"><b>{{ __('Заявка:') }}</b></h3>
                <div class="mb-4">
                    @foreach ($cartItems as $item)
                        @csrf
                        @php($studentBook = $studentBooks->where('id', $item->id)->first())
                        <div class="row student-book-card mt-2 mb-2">

                            <div class="row col-md-8 col-lg-8 col-xl-8">
                                <div class="mr-1 ml-2">{{ $item->name }}{{__(',')}}</div>
                                <div class="mr-1">{{ $studentBook->author }}{{__(',')}}</div>
                                <div
                                    class="mr-1">{{ $grades->where('id', $studentBook->grade_id)->first()->title }}{{ __(' класс ') }}</div>
                            </div>
                            <div class="row col-md-3 col-lg-2 col-xl-2">
                                <div class="mr-1">{{ $item->quantity }}{{ __(' шт.') }}</div>
                            </div>

                        </div>
                    @endforeach
                </div>

                <div class="text-right">
                    {{ __('Итого учебников:') }} {{ Cart::getTotalQuantity() }} {{ __(' шт.') }}
                </div>

                @include('includes.cart.preparing-messengers')

            @else
                <div>
                    @include('includes.link-to-filter')
                    <div>
                        {{ __('Пусто. Для того, чтобы добавить учебник в заявку, нажмите рядом с ним на кнопку: "узнать: наличие и цену".') }}
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
