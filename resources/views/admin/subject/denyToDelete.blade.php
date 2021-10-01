@extends('layouts.admin.main')

@section('title'){{ __('Ошибка') }}@endsection

@section('content')

    @include('includes.admin.announce')

    <h5>
        <a class="text-info" href="{{ route('admin.subjects.edit', $subject->id) }}">
            <i class="fas fa-angle-double-left"></i>
            {{ __('назад') }}
        </a>
    </h5>

    <h4 class="text-danger">{{ __('Невозможно удалить этот предмет, поскольку он присвоен к некоторым учебникам!') }}</h4>

    <h5 class="col-xl-8 mb-4">{{ __('Можно:') }}<br>
        {{ __('1) переименовать этот предмет (тогда новое имя предмета будет присвоено всем учебникам, которые его
        используют),') }}<br>
        {{ __('2) либо сначала присвоить другой предмет учебникам, а потом вернуться к удалению этого предмета.') }}
    </h5>

    <h5>{{ __('Список учебников ') }}({{ $subject->title }}):</h5>

    <div>
        @foreach($studentBooks as $stBook)
            <div class="row border border-dark">

                <div class="text-warning" style="width: 44px; margin-left: 5px">{{ $stBook->id }}</div>
                <div class="col-xl-3">
                    {{ $stBook->title }}
                    {{ $stBook->author }}
                </div>

            </div>
        @endforeach
    </div>
@endsection



