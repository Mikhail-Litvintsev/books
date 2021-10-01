<div>
    <form method="POST" action="{{ route('user.password.update') }}">
        @csrf
        <div class="col-xl-5">
            <p><label for="password">{{ __('Смена пароля:') }} </label><br>
                <input type="password" name="password" id="password" autocomplete="new-password"
                       placeholder="{{ __('Новый пароль') }}"></p>
            <input type="password" name="password_confirmation" id="password_confirmation"
                   placeholder="{{ __('Повторите пароль') }}">
            <button class="btn btn-outline-info" type="submit">{{ __('сменить пароль') }}</button>

            @error('password')
            <p class="text-danger">{{ $message }}</p>
            @enderror

            @error('password_confirmation')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
    </form>
</div>
