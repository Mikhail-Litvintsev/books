@extends('layouts.admin.main')

@section('title'){{ __('Предметы') }}@endsection

@section('content')

    @include('includes.admin.widgets')

    @include('includes.admin.announce')

    <div class="row mb-3">
        <div class="col-xl-2">
            <form method="GET" action="{{ route('admin.subjects.create') }}">
                <button class="btn btn-warning" style="border-radius: 25px; border-color: grey">
                    <i class="fas fa-plus"></i>
                    {{ __('добавить предмет') }}
                </button>
            </form>
        </div>
    </div>

    @foreach($subjects as $subject)
        <div class="col-xl-3">
            <a class="text-light" href="{{ route('admin.subjects.edit', $subject->id) }}">
                <div class="row align-middle">

                    <div class="text-warning" style="width: 22px; margin-left: 5px">{{ $subject->id }}</div>
                    <div class="col text-left">
                        {{ $subject->title }}
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

