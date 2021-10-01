@extends('layouts.main')

@section('title')
    {{ __('Букинист подбор учебника') }}
@endsection

@section('description')
    {{ __('Подбор учебников Б/У от 100 рублей! обмен, покупка, продажа. Букинист Кемерово.') }}
@endsection

@section('big-banner-class')
    big-banner-searchPage
@endsection

@section('banner-search')
    <h1 style="font-family: Tahoma; color: green; text-shadow: 0 0 4px white, 0 0 30px white"><b>{{ __('ПОДБОР УЧЕБНИКА') }}</b>
    </h1>
@endsection

@section('content')

    @include('includes.filter')

    @include('includes.button-to-cart')

    @include('includes.filter-title')

    <div class="text-page">
        @php($groups = $studentBooks->groupBy('grade_id'))
        @foreach($groups as $group)
            @if(request()->get('grade') == null)
                <div class="mt-3">
                    <h3><b>
                            {{ $grades->where('id', $group->first()->grade_id)->first()->title }}{{ __(' класс') }}
                        </b></h3>
                </div>
            @endif
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
