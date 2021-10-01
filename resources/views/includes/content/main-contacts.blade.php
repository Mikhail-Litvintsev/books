<h3 class="text-center" style="font-family: 'Tahoma'">
    {{ __('Наш адрес: ') }}
    <b>{{ __('г. Кемерово, бульвар Строителей, 16') }}</b>
    {{ __(', бутик 12 в здании магазина «Магнит»') }}
</h3>
<div class="row">
    <div class="col-lg-6 col-xl">
        <img class="img-fluid" src="{{ asset('image/map.jpg') }}">
    </div>
    <div class="col-lg-5 col-xl">
        <img class="img-fluid mb-3" src="{{ asset('image/entrance.png') }}">

        @include('includes.content.contacts')

    </div>
</div>
