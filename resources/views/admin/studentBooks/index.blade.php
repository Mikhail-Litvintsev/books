@extends('layouts.admin.main')

@section('title'){{ __('Учебники') }}@endsection

@section('content')

    @include('includes.admin.widgets')

    @include('includes.admin.announce')

    <div class="row mb-3">

        <div class="col-xl-2">
            <form method="GET" action="{{ route('admin.studentBooks.create') }}">
                <button class="btn btn-warning" style="border-radius: 25px; border-color: grey">
                    <i class="fas fa-plus"></i>
                    {{ __('добавить учебник') }}
                </button>
            </form>
        </div>

        <div class="col-xl-2">
            <form method="GET" action="{{ route('admin.studentBooks.export') }}">
                <button class="btn btn-success" style="border-radius: 15px; border-color: darkgray">
                    <i class="fas fa-download"></i>
                    <b>{{ __('скачать Excel') }}</b>
                </button>
            </form>
        </div>

    </div>

    @php($num = 1)
    @foreach($studentBooks as $stBook)
        <div class="border border-dark">
            <a class="text-light" href="{{ route('admin.studentBooks.edit', $stBook->id) }}">
                <div class="row align-middle mt-1 mb-1">

                    <div class="text-warning text-center"
                         style="width: 44px; margin-left: 5px">{{ $num }}</div>@php($num++)
                    <div class="col col-xl-3">{{ $stBook->title }}</div>
                    <div class="col col-xl-2">{{ $stBook->author }}</div>
                    <div style="width: 60px">{{ $grades->find($stBook->grade_id)->title }} класс</div>
                    <div class="col col-xl-2">{{ $subjects->find($stBook->subject_id)->title }}</div>
                    <div class="col">
                        <i class="fas fa-pencil-alt text-success"></i>
                        <span class="ml-1">{{ __('редактировать') }}</span>
                    </div>

                </div>
            </a>
        </div>
    @endforeach
@endsection

