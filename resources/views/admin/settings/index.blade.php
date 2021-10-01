@extends('layouts.admin.main')

@section('title'){{ __('Настройки') }}@endsection

@section('content')

    @include('includes.admin.announce')

    <div>
        <h4>
            <i class="far fa-user"></i>
            <span class="ml-1">{{ __('Учетная запись') }}</span>
        </h4>

        @include('includes.admin.settings.email-update')

        @include('includes.admin.settings.password-update')

    </div>

    <div class="mt-5">
        <h4>
            <span class="ml-1">{{ __('Номер телефона') }}</span>
        </h4>

        @if($phone)

            @include('includes.admin.settings.phone-update')

        @else

            @include('includes.admin.settings.phone-activation')

        @endif
    </div>

    <div class="mt-5">
        <h4>
            <img class="img-sm" src="{{ asset('image/whatsapp-logo.png') }}">
            <span class="ml-1">{{ __('WhatsApp') }}</span>
        </h4>

        @if($whatsapp)

            @include('includes.admin.settings.whatsapp-update')

        @else

            @include('includes.admin.settings.whatsapp-activation')

        @endif
    </div>

    <div class="mt-5">
        <h4>
            <img class="img-sm" src="{{ asset('image/telegram-logo.png') }}">
            <span class="ml-1">{{ __('Telegram') }}</span>
        </h4>

        @if($telegram)

            @include('includes.admin.settings.telegram-update')

        @else

            @include('includes.admin.settings.telegram-activation')

        @endif
    </div>

    <div class="mt-5">
        <h4>
            <img class="img-sm" src="{{ asset('image/viber-logo.png') }}">
            <span class="ml-1">{{ __('Viber') }}</span>
        </h4>

        @if($viber)

            @include('includes.admin.settings.viber-update')

        @else

            @include('includes.admin.settings.viber-activation')

        @endif
    </div>
@endsection

