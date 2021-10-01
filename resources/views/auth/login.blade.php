<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Вход в систему</title>
    <!-- jQuery -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row align-items-center vh-100">
        <div class="col align-self-center">
            <div class="text-center">
                <form method="POST" action="{{ route('login') }}">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')"/>

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                    @csrf
                    <div>
                        <label for="email"/>{{  __('логин')  }}</label>
                        <p>
                            <input id="email" class="block w-full" type="email" name="email"
                                   value="{{  old('email')  }}"
                                   required
                                   autofocus/>
                        </p>
                    </div>

                    <div>
                        <label for="password""/>{{__('пароль')}}</label>

                        <p>
                            <input id="password" class="block w-full"
                                   type="password"
                                   name="password"
                                   required autocomplete="current-password"/>
                        </p>
                    </div>

                    <div>
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                   class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                   name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('запомнить меня') }}</span>
                        </label>
                    </div>

                    <div>
                        @if (Route::has('password.request'))
                            <a class="text-info"
                               href="{{ route('password.request') }}">
                                {{ __('не помню пароль?') }}
                            </a>
                        @endif

                        <p class="mt-2 h3">
                            <button type="submit" class="btn btn-secondary">
                                {{ __('---> войти <---') }}
                            </button>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
