@extends('layouts.admin.main')

@section('title'){{ __('Классы') }}@endsection

@section('content')

    @include('includes.admin.widgets')

    @include('includes.admin.announce')

    <div class="row mb-3">
        <div class="col-xl-2">
            <form method="GET" action="{{ route('admin.grades.create') }}">
                <button class="btn btn-warning" style="border-radius: 25px; border-color: grey">
                    <i class="fas fa-plus"></i>
                    {{ __('добавить класс') }}
                </button>
            </form>
        </div>
    </div>

    @foreach($grades as $grade)
        <div class="col-xl-2">
            <a class="text-light" href="{{ route('admin.grades.edit', $grade->id) }}">
                <div class="row align-middle">
                    <div class="text-warning" style="width: 22px; margin-left: 5px">
                        {{ $grade->id }}
                    </div>
                    <div class="col text-center">
                        {{ $grade->title }} {{ __('класс')}}
                    </div>
                    <div class="col text-left">
                        <small>
                            <i class="fas fa-pencil-alt text-success" style="margin-left: 7px;"></i>
                        </small>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
@endsection
