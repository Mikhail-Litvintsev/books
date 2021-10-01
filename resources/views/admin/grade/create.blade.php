@extends('layouts.admin.main')

@section('title'){{ __('Добавление') }}@endsection

@section('content')
    <h5>
        <a class="text-info" href="{{ route('admin.grades.index') }}">
            <i class="fas fa-angle-double-left"></i>
            {{ __('назад') }}
        </a>
    </h5>
    <h4>{{ __('Класс') }}</h4>
    <div>
        <form method="POST" action="{{ route('admin.grades.store') }}">
            @csrf
            <div>
                <label for="title">
                    {{ __('Название (без слова "класс")') }}
                </label>
                <div class="row mb-5">
                    <div class="col-xl-1">
                        <input style="width: 100%" type="text" name="title" id="title">
                    </div>
                    <div class="col-xl-1">
                        <button class="btn btn-success btn-sm" style="border-radius: 10px; border-color: grey"
                                type="submit">
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
