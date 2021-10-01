@extends('layouts.admin.main')

@section('title'){{ __('Корзина') }}@endsection

@section('content')

    @include('includes.admin.widgets')

    @include('includes.admin.announce')

    <h4>{{ __('Элементов в корзине: ') }}{{ $trash->count() }}</h4>

    @if(Route::has('admin.trash.clearStudentBook'))
        <div class="col-xl-5">
            <h4 class="text-danger">{{ __('Внимание! Очистка корзины уничтожает возможность восстановления.') }}</h4>
            <h4>
                {{ __('Перед очисткой,нужно убедиться, что сайт работает корректно с текущей базой данных!') }}
            </h4>
        </div>

        <div class="mt-3">
            <form method="POST" action="{{ route('admin.trash.clearStudentBook') }}">
                @csrf
                <button class="btn btn-outline-danger" type="submit">{{ __('Очистить') }}</button>
            </form>
        </div>

    @else
        <div class="col-xl-5">
            <p>
                {{ __('Для доступа к очистке корзины, раскомментируйте соответствующий route в web.php') }}
            </p>
        </div>
    @endif
@endsection
