<div class="mb-4 mt-3">
    <form method="GET" action="{{ route('filter') }}">
        <div class="text-main text-center">
            <div class="m-1">
                <label for="grade"><b>{{ __('Класс:') }}</b></label>
                <select name="grade" class="align-middle">
                    <option value="" style="font-weight:bold;">{{ __('Все классы') }}</option>

                    @foreach($grades as $grade)
                        <option value="{{ $grade->title }}"
                                @if(request()->get('grade') == $grade->title)
                                selected
                            @endif
                        >{{ $grade->title }} {{ __('класс') }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="m-1">
                <label for="subject"><b>{{ __('Предмет:') }}</b></label>
                <select name="subject" class="align-middle">
                    <option value="" style="font-weight:bold ;" value="">{{ __('Все предметы') }}</option>

                    @foreach($subjects as $subject)
                        <option value="{{ $subject->title }}"
                                @if(request()->get('subject') == $subject->title)
                                selected
                            @endif
                        >{{ $subject->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="text-main text-center">
            <button class="align-middle btn btn-lg btn-outline-success"
                    style=" border-radius: 20px 20px 20px 20px; margin-top: 10px;">
                {{ __('Подбор') }}
            </button>

            @if(request()->get('grade') || request()->get('subject'))
                <div class="align-bottom" style="font-size: 18px">
                    <a href="{{ route('filter') }}">{{ __('сбросить параметры') }}</a>
                </div>
            @endif
        </div>
    </form>
</div>
