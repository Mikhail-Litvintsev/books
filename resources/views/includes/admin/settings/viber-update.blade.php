<div>
    <h5>{{ __('активен') }}</h5>
    <form method="POST" action="{{ route('admin.settings.viber.update') }}">
        @csrf
        <div class="col-xl-5">
            <label for="phone">{{ __('Номер телефона (на него будут отправляться сообщения):') }}</label><br>
            <input type="tel" name="phone" id="phone" value="{{ $viber->phone}}">
        </div>
        <div class="col-xl-5 mt-3">
            <button class="btn btn-outline-success" type="submit">{{ __('Изменить настройки viber') }}</button>
        </div>
    </form>
</div>

@error('phone')
<p class="text-danger">{{ $message }}</p>
@enderror
