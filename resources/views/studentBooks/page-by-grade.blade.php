@extends('layouts.main')

@section('title')
    {{ __('Букинист ') }}{{ $grades->where('id', $studentBooks->first()->grade_id)->first()->title }}{{ __(' класс учебники') }}
@endsection

@section('description')
    {{ __('Учебники ') }}{{ $grades->where('id', $studentBooks->first()->grade_id)->first()->title }}{{ __(' класс Б/У от 100 рублей! обмен, покупка, продажа. Букинист Кемерово.') }}
@endsection

@section('big-banner-class')
    big-banner-page
@endsection

@section('banner-search')
    @include('includes.search-select')
@endsection

@section('content')
    <h2 style="font-family: 'Tahoma'; margin-bottom: 20px; margin-top: 15px"><b>
            {{ __('СПИСОК УЧЕБНИКОВ для ') }}
            {{ $grades->where('id', $studentBooks->first()->grade_id)->first()->title }}
            {{ __(' класса:') }}
        </b>
    </h2>

    @include('includes.button-to-cart')

    <div class="text-page">
        @php($groups = $studentBooks->groupBy('subject_id'))
        @foreach($groups as $group)
            <div class="mt-3">
                <h3><b>
                        {{ $subjects->where('id', $group->first()->subject_id)->first()->title }}
                    </b></h3>
            </div>
            @foreach($group as $studentBook)

                @include('includes.student-book-card')

            @endforeach
        @endforeach
    </div>

    @include('includes.paginate')

    <div class="mt-5 mb-5">
        @include('includes.content.page-conditions')
    </div>

    @include('includes.content.page-contacts')

@endsection
