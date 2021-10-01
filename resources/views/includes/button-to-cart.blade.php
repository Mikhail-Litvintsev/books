@if(Cart::getTotalQuantity())
    <div class="text-right">
        <a class="btn btn-warning" href="{{ route('cart.list') }}" style="text-decoration: none;
            font-family: Tahoma;
            border-width: 3px;
            border-color: black;
            border-radius: 20px 20px 20px 20px;
            width: 300px;">
            <svg style="width: 35px; color: black" class="img-fluid" fill="none" stroke-linecap="round"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path
                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>

            <span class="text-main">(<b>{{ Cart::getTotalQuantity() }}</b>){{ __(' перейти к заявке') }}</span>
        </a>
    </div>
@endif
