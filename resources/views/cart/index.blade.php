@extends('layouts.main')

@section('title')
    {{ __('Корзина заявки: цена / наличие') }}
@endsection

@section('description')
    {{ __('Узнать цену на учебники. Букинист Кемерово.') }}
@endsection

@section('big-banner-class')
    big-banner-searchPage
@endsection

@section('banner-search')
    <h1 style="font-family: Tahoma; color: green; text-shadow: 0 0 4px white, 0 0 30px white">
        <b>{{ __('Заявка на расчет цены') }}</b>
    </h1>
@endsection

@section('content')
    <div class="container text-main">
        <div style="margin-bottom: 300px; margin-top: 30px">
            <div>
                @if ($message = Session::get('success'))
                    <div class="m-4">
                        <p class="text-success">{{ $message }}</p>
                    </div>
                @endif

                @include('includes.link-to-filter')

                @if($cartItems->first())
                    <div class="row mb-3">
                        <div>
                            <h3>{{ __('Заявка:') }}</h3>
                        </div>
                        <div class="col-md-6 col-lg-8 col-xl-8"></div>
                        <div>
                            <form action="{{ route('cart.clear') }}" method="POST">
                                @csrf
                                <button class="btn-link text-main"
                                        style="color: #AF4F8A; background-color: #FFE3FA; padding-left: 15px; padding-right: 15px; border-width: 2px; border-color: #fbffcc; border-radius: 20px 20px 20px 20px;">
                                    {{ __('убрать все') }}</button>
                            </form>
                        </div>
                    </div>

                    <div>
                        <form method="POST">

                            @include('includes.cart.cart-items-list')

                            <div class="row mt-3 mb-5">

                                <div class="col-md-3 col-lg-5 col-xl-6"></div>
                                <div class="mr-2">
                                    <button type="submit" class="btn btn-outline-info"
                                            formaction="{{ route('cart.update') }}">
                                        <i class="fas fa-sync"></i>
                                        <span class="text-main">{{ __('обновить количество') }}</span>
                                    </button>
                                </div>
                                <div>
                                    {{ __('Итого учебников:') }} {{ Cart::getTotalQuantity() }} {{ __(' шт.') }}
                                </div>

                            </div>

                            @include('includes.cart.cart-text-footer')

                            <div class="text-right">
                                <button type="submit" class="btn btn-success"
                                        formaction="{{ route('cart.preparing') }}"
                                        style="width: 200px">
                                    <span
                                        style="font-family: Tahoma; font-size: 24px"><b>{{ __('далее >>') }}</b></span>
                                </button>
                            </div>
                        </form>
                    </div>
                @else
                    <div class="text-main">
                        {{ __('Пусто. Для того, чтобы добавить учебник в заявку, нажмите рядом с ним на кнопку: "узнать: наличие и цену".') }}
                    </div>
                @endif
            </div>
        </div>

        @include('includes.content.page-contacts')

    </div>
@endsection
