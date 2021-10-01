<form method="GET" action="{{ route('filter') }}">
    <select name="grade" class="search-select-first align-middle">
        <option value="" selected>{{ __('--класс--') }}</option>
        <option value="" style="font-weight:bold ;">{{ __('Все классы') }}</option>

        @foreach($grades as $grade)
            <option value="{{ $grade->title }}">{{ $grade->title }}{{ __(' класс') }}</option>
        @endforeach
    </select>

    <select name="subject" class="search-select-second align-middle">
        <option value="" selected>{{ __('--предмет--') }}</option>
        <option value="" style="font-weight:bold ;" value="">{{ __('Все предметы') }}</option>

        @foreach($subjects as $subject)
            <option value="{{ $subject->title }}">{{ $subject->title }}</option>
        @endforeach
    </select>

    <button class="button-search align-middle" style="">
        <i class="fas fa-search"></i>
        {{ __('Найти') }}
    </button>
</form>
