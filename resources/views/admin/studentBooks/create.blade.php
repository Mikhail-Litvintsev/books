@extends('layouts.admin.main')

@section('title'){{ __('Добавление') }}@endsection

@section('content')
    <h5>
        <a class="text-info" href="{{ route('admin.studentBooks.index') }}">
            <i class="fas fa-angle-double-left"></i>
            {{ __('назад') }}
        </a>
    </h5>

    <h4>{{ __('Учебник') }}</h4>

    <div>
        <form method="POST" action="{{ route('admin.studentBooks.store') }}">
            @csrf
            <div>
                <label for="title">{{ __('Наименование') }}</label>
                <p><input class="col-lg-4" type="text" name="title" id="title"></p>

                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror

                <label for="author">{{ __('Автор') }}</label>
                <p><input class="col-lg-4" type="text" name="author" id="author"></p>

                @error('author')
                <p class="text-danger">{{ $message }}</p>
                @enderror

                <label for="grade_id">{{ __('Класс') }}</label>
                <p>
                    <select class="col-lg-4" name="grade_id" id="grade_id">
                        <option value=""></option>

                        @foreach($grades as $grade)
                            <option value="{{ $grade->id }}">{{ $grade->title }}</option>
                        @endforeach
                    </select>
                </p>

                @error('grade_id')
                <p class="text-danger">{{ $message }}</p>
                @enderror

                <label for="subject_id">{{ __('Предмет') }}</label>
                <p>
                    <select class="col-lg-4" name="subject_id" id="subject_id">
                        <option value=""></option>

                        @foreach($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->title }}</option>
                        @endforeach
                    </select>
                </p>

                @error('subject_id')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <br>

                <div class="col-lg-4">
                    <button class="btn btn-success" style="border-radius: 10px; border-color: grey; width: 100%"
                            type="submit">
                        <b>{{ __('Сохранить') }}</b></button>
                </div>
            </div>
        </form>
    </div>
@endsection
