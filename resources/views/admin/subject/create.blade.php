@extends('layouts.admin.main')

@section('title'){{ __('Добавление') }}@endsection

@section('content')
    <h5>
        <a class="text-info" href="{{ route('admin.subjects.index') }}">
            <i class="fas fa-angle-double-left"></i>
            {{ __('назад') }}
        </a>
    </h5>

    <h4>{{ __('Предмет') }}</h4>

    <div>
        <form method="POST" action="{{ route('admin.subjects.store') }}">
            @csrf
            <div>
                <label for="title">{{ __('Название') }}</label>

                <div class="row">

                    <div class="col-xl-3">
                        <input style="width: 100%" type="text" name="title" id="title">
                    </div>

                    <div class="col-xl-1">
                        <button class="btn btn-success btn-sm" style="border-radius: 10px; border-color: grey" type="submit">
                            <b>{{ __('Сохранить') }}</b></button>
                    </div>

                </div>

                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror

            </div>
        </form>
    </div>
@endsection
