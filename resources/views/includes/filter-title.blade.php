@if($studentBooks->first() == null)
    <div class="text-page m-5">
        <h3>{{ __('Учебников не найдено. Попробуйте изменить параметры поиска.') }}</h3>
    </div>
@else
    <div>
        <h2 style="font-family: 'Tahoma'; margin-bottom: 20px; margin-top: 15px">
            <b>
                @if(request()->get('grade') || request()->get('subject'))
                    {{ __('Учебники ') }}
                    @if(request()->get('grade'))
                        {{ __('за ') }}
                        {{ request()->get('grade') }}
                        {{ __(' класс ') }}
                    @endif
                    @if(request()->get('subject'))
                        {{ __('по предмету: ') }}
                        {{ request()->get('subject') }}
                    @endif
                @else
                    {{ __('Учебники:') }}
                @endif
            </b>
        </h2>
    </div>
@endif
