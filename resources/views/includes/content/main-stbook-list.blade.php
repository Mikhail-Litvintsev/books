<div class="row">
    <div class="col-lg col-md col-xl text-main mb-2">
        <b>{{ __('Список учебников для старших классов:') }}</b>
        <p style="text-align: left">
            {{ __('В наличии учебники бу и новые различных издательств, в том числе ФГОС.') }}
        </p>
        @foreach($grades as $grade)
            @if(Str::substr($grade->title,0,2) > 4)
                <div>
                    <a href="{{ route('studentBooks.byGrade', urlencode($grade->title)) }}">
                        {{__('учебники')}} {{ $grade->title }} {{__('класс купить')}}
                    </a>
                </div>
            @endif
        @endforeach
    </div>
    <div class="col-lg col-md col-xl text-main">
        <b>{{ __('Список учебников для начальной школы:') }}</b>
        <p>
            {{ __('В наличии учебники бу и новые по программе Школа России, Перспективная, Перспектива 21 век, Начальная школа 21 века в том числе ФГОС.') }}
        </p>
        @foreach($grades as $grade)
            @if(Str::substr($grade->title,0,2) < 5)
                <div>
                    <a href="{{ route('studentBooks.byGrade', urlencode($grade->title)) }}">
                        {{__('учебники')}} {{ $grade->title }} {{__('класс купить')}}
                    </a>
                </div>
            @endif
        @endforeach
    </div>
</div>
