<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="{{ route('index') }}">
            <span style="font-family: Calibri; font-size: xxx-large">{{ __('БУКИНИСТ') }}</span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">

                <!-- Учебники Student books -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" style="font-size: x-large" href="#"
                       id="navbarDropdown"
                       role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <span class="navbar-font">{{ __('Учебники') }}</span>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach($grades as $grade)
                            <a class="dropdown-item navbar-font"
                               href="{{ route('studentBooks.byGrade', urlencode($grade->title)) }}">
                                {{ $grade->title }} {{ __('класс') }}</a>
                        @endforeach
                        <a class="dropdown-item navbar-font" href="{{ route('filter') }}">{{ __('Все') }}</a>
                    </div>
                </li>

                <!-- Доставка Delivery -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('delivery') }}"><span
                            class="navbar-font">{{ __('Доставка') }}</span></a>
                </li>
            </ul>

            <!-- Заявка Cart for request  -->
            <div class="mr-3" style="width: 100px">
                <a title="{{ __('Перейти к заявке на расчет цены') }}" href="{{ route('cart.list') }}"
                   style="text-decoration: none;">
                    <svg style="width: 35px; color: black" class="img-fluid" fill="none" stroke-linecap="round"
                         stroke-linejoin="round"
                         stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>

                    @if(Cart::getTotalQuantity())
                        <b class="text-main" style="font-size: 24px; color: black">(<span
                                class="text-danger">{{ Cart::getTotalQuantity() }}</span>)</b>
                    @endif
                </a>
            </div>

            <!-- написать Messengers -->
            <div class="row mr-3" style="width: 84px">
                @if($whatsapp)
                    <div class="col-sm-1 col-md-1 col-lg col-xl" style="width: 42px">
                        <div title="{{ __('написать в WhatsApp') }}" style="width: 30px">
                            <a href="{{ url("https://wa.me/?phone=$whatsapp") }}">
                                <img class="img-fluid" src="{{ asset('image/whatsapp-logo.png') }}">
                            </a>
                        </div>
                    </div>
                @endif

                @if($viber)
                    <div class="col-sm-1 col-md-1 col-lg col-xl" style="width: 42px">
                        <div title="{{ __('написать в Viber') }}" style="width: 30px">
                            <a href="{{ url("viber://chat?number=%2B$viber") }}">
                                <img class="img-fluid" src="{{ asset('image/viber-logo.png') }}">
                            </a>
                        </div>
                    </div>
                @endif
            </div>

            <!-- Позвонить Phone -->
            @include('includes.phone')
        </div>
    </nav>
</div>

