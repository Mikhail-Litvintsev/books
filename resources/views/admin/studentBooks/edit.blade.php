@extends('layouts.admin.main')

@section('title'){{ __('Редактирование') }}@endsection

@section('content')

    @include('includes.admin.announce')

    <h5>
        <a class="text-info" href="{{ route('admin.studentBooks.index') }}">
            <i class="fas fa-angle-double-left"></i>
            {{ __('назад') }}
        </a>
    </h5>

    <h4>{{ __('Учебник') }}</h4>

    <div>
        <form method="POST" action="{{ route('admin.studentBooks.update', $studentBook->id) }}">
            @csrf
            @method('PATCH')
            <div>
                <label for="title">{{ __('Наименование') }}</label>
                <p><input class="col-lg-4" type="text" name="title" id="title" value="{{ $studentBook->title }}"></p>

                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror

                <label for="author">{{ __('Автор') }}</label>
                <p><input class="col-lg-4" type="text" name="author" id="author" value="{{ $studentBook->author }}"></p>

                @error('author')
                <p class="text-danger">{{ $message }}</p>
                @enderror

                <label for="grade_id">{{ __('Класс') }}</label>
                <p>
                    <select class="col-lg-4" name="grade_id" id="grade_id">
                        @foreach($grades as $grade)
                            <option
                                value="{{ $grade->id }}"
                                @if($grade->id == $studentBook->grade_id)
                                selected
                                @endif>
                                {{ $grade->title }}
                            </option>
                        @endforeach
                    </select>
                </p>

                @error('grade_id')
                <p class="text-danger">{{ $message }}</p>
                @enderror

                <label for="subject_id">{{ __('Предмет') }}</label>
                <p>
                    <select class="col-lg-4" name="subject_id" id="subject_id">
                        @foreach($subjects as $subject)
                            <option
                                @if($subject->id == $studentBook->subject_id)
                                selected
                                @endif
                                value="{{ $subject->id }}">
                                {{ $subject->title }}
                            </option>
                        @endforeach
                    </select>
                </p>

                @error('subject_id')
                <p class="text-danger">{{ $message }}</p>
                @enderror

                <div class="col-lg-4 mb-5">
                    <button class="btn btn-success" style="border-radius: 10px; border-color: grey; width: 100%"
                            type="submit">
                        <b>{{ __('Сохранить') }}</b></button>
                </div>
            </div>
        </form>

        <div>
            <form method="post" action="{{ route('admin.studentBooks.destroy', $studentBook->id) }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-outline-danger" type="submit">
                    <i class="fas fa-times-circle"></i>
                    <span>{{ __('удалить') }}</span>
                </button>
            </form>
        </div>
    </div>
@endsection

