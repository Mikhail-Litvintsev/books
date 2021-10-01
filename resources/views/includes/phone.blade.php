@if(now()->hour > 21 || now()->hour < 10)
    @if($telegram)
        <div class="text-center">
            <form method="POST" class="mr-auto form-inline text-center" action="{{ route('index.callMe') }}">
                @csrf
                <input class="form-control mr-sm-2" type="tel" placeholder="{{ __('ваш номер телефона') }}"
                       name="phone" aria-label="{{ __('ваш номер телефона') }}">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">{{ __('позвоните мне') }}</button>
            </form>
            <div class="text-comment mt-1 mr-auto">
                {{ __('вы можете оставить заявку на звонок,
                и мы вам перезвоним в рабочее время') }}
            </div>
        </div>
    @endif
@else
    @if($phone)
        <div class="justify-content-end" style="font-family: Calibri; font-size: xx-large">
            <a class="text-dark phone-link" style="text-decoration: none"
               href="tel:+{{ $phone }}">
                {{ $phoneView }}
            </a>
            <span class="phone-text">
                {{ $phoneView }}
            </span>
        </div>
    @endif
@endif
