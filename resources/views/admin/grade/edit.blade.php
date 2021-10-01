@extends('layouts.admin.main')

@section('title'){{ __('Редактирование') }}@endsection

@section('content')

    @include('includes.admin.announce')

    <h5>
        <a class="text-info" href="{{ route('admin.grades.index') }}">
            <i class="fas fa-angle-double-left"></i>
            {{ __('назад') }}
        </a>
    </h5>
    <h4>{{ __('Класс') }}</h4>

    <div>
        <form method="POST" action="{{ route('admin.grades.update', $grade->id) }}">
            @csrf
            @method('PATCH')
            <div>
                <label
                    for="title">{{ __('Наименование') }}
                </label>
                <div class="row mb-5">
                    <div class="col-xl-1">
                        <input style="width: 100%" type="text" name="title" id="title"
                               value="{{ $grade->title }}">
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

        <form method="POST" action="{{ route('admin.grades.destroy', $grade->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">
                <i class="fas fa-times-circle"></i>
                <span>{{ __('удалить') }}</span>
            </button>
        </form>
    </div>
@endsection


