<div class="mb-2" style="text-align: center; font-size: 20px">

    @include('includes.phone')

</div>
@if($viber || $whatsapp)
    <div class="text-main text-center" style="font-family: 'Times New Roman'">
        {{ __('напишите нам в:') }}
    </div>
@endif
<div class="row mt-1">
    <div class="col"></div>

    @if($whatsapp)
        <div class="col">
            <div title="{{ __('написать в WhatsApp') }}" style="width: 90px; margin-left: auto; margin-right: auto;">
                <a href="{{ url("https://wa.me/?phone=$whatsapp") }}">
                    <img class="img-fluid" src="{{ asset('image/whatsapp.png') }}">
                </a>
            </div>
        </div>
    @endif

    @if($viber)
        <div class="col">
            <div title="{{ __('написать в Viber') }}" style="width: 90px; margin-left: auto; margin-right: auto;">
                <a href="{{ url("viber://chat?number=%2B$viber") }}">
                    <img class="img-fluid" src="{{ asset('image/viber.png') }}">
                </a>
            </div>
        </div>
    @endif

    <div class="col"></div>
</div>
