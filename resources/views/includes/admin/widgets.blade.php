<div class="row">
    <div class="col">
        <a href="{{ route('admin.studentBooks.index') }}">
            <div class="info-box">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-book-open"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">{{ __('Учебники:') }}</span>
                    <span class="info-box-number">{{ $studentBooks->count() }}</span>
                </div>
            </div>
        </a>
    </div>

    <div class="col">
        <a href="{{ route('admin.grades.index') }}">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-purple elevation-1"><i class="fas fa-graduation-cap"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">{{ __('Классы:') }}</span>
                    <span class="info-box-number">{{ $grades->count() }}</span>
                </div>
            </div>
        </a>
    </div>

    <div class="col">
        <a href="{{ route('admin.subjects.index') }}">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-cyan elevation-1"><i class="fas fa-university"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">{{ __('Предметы:') }}</span>
                    <span class="info-box-number">{{ $subjects->count() }}</span>
                </div>
            </div>
        </a>
    </div>

    <div class="col">
        <a href="{{ route('admin.trash.index') }}">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-gray elevation-1"><i class="fas fa-trash"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">{{ __('Корзина:') }}</span>
                    <span class="info-box-number">{{ $trash->count() }}</span>
                </div>
            </div>
        </a>
    </div>

    <div class="col">
        <a href="{{ route('admin.studentBooks.renewal') }}">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-pink elevation-1"><i class="fas fa-database"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">{{ __('База учебников') }}</span>
                    <span
                        class="info-box-number">
                        @isset($studentBooks->sortByDesc('updated_ad')->first()->updated_at)
                            {{ $studentBooks->sortByDesc('updated_ad')->first()->updated_at->format('d.m.Y - H:m') }}
                        @endisset
                    </span>
                </div>
            </div>
        </a>
    </div>
</div>
