<div>
    <form method="POST" action="{{ route('email.update') }}">
        @csrf
        <div class="col-xl-5 mb-1">
            <label for="email">{{ __('Логин (email):') }} </label><br>
            <input type="email" name="email" id="email" value="{{ $user->email}}">
            <button class="btn btn-outline-info" type="submit">{{ __('изменить email') }}</button>

            @error('email')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
    </form>
</div>
