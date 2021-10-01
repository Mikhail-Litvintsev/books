@extends('layouts.admin.main')

@section('title'){{ __('Панель управления') }}@endsection

@section('content')
    <div class="row">
        <!-- Учебники Student books -->
        <div class="col-lg-6 col-12">
            <a href="{{ route('admin.studentBooks.index') }}">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ __('Учебники') }}</h3>
                        <h4>
                            <i class="fas fa-book-open"></i>
                            <span style="margin-left: 7px">{{ $studentBooks->count() }}</span>
                        </h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <span style="font-size: x-large" class="small-box-footer">
                        {{ __('Перейти') }}
                        <i class="fas fa-arrow-circle-right"></i>
                    </span>
                </div>
            </a>
        </div>

        <!-- Классы Grades -->
        <div class="col-lg-6 col-12">
            <a href="{{ route('admin.grades.index') }}">
                <div class="small-box bg-purple">
                    <div class="inner">
                        <h3>{{ __('Школьные классы') }}</h3>
                        <h4>
                            <i class="fas fa-graduation-cap"></i>
                            <span style="margin-left: 7px">
                                {{ $grades->count() }}
                            </span>
                        </h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <span style="font-size: x-large" class="small-box-footer">
                        {{ __('Перейти') }}
                        <i class="fas fa-arrow-circle-right"></i></span>
                </div>
            </a>
        </div>

        <!-- Предметы Subjects -->
        <div class="col-lg-6 col-12">
            <a href="{{ route('admin.subjects.index') }}">
                <div class="small-box bg-cyan">
                    <div class="inner">
                        <h3>{{ __('Школьные предметы') }}</h3>
                        <h4>
                            <i class="fas fa-university"></i>
                            <span style="margin-left: 7px">
                                {{ $subjects->count() }}
                            </span>
                        </h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <span style="font-size: x-large" class="small-box-footer">
                        {{ __('Перейти') }}
                        <i class="fas fa-arrow-circle-right"></i></span>
                </div>
            </a>
        </div>

        <!-- Обновление Renewal -->
        <div class="col-lg-6 col-12">
            <a href="{{ route('admin.studentBooks.renewal') }}">
                <div class="small-box bg-pink">
                    <div class="inner">
                        <h3>{{ __('Обновление базы') }}</h3>
                        <h4>
                            <i class="fas fa-database"></i>
                            <span style="margin-left: 7px">
                                @isset($studentBooks->sortByDesc('updated_ad')->first()->updated_at)
                                    {{ $studentBooks->sortByDesc('updated_ad')->first()->updated_at->format('d.m.Y - H:m') }}
                                @endisset
                            </span>
                        </h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <span style="font-size: x-large" class="small-box-footer">
                        {{ __('Перейти') }}
                        <i class="fas fa-arrow-circle-right"></i></span>
                </div>
            </a>
        </div>

        <!-- Настройки Settings -->
        <div class="col-lg-6 col-12">
            <a href="{{ route('admin.settings.index') }}">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><span>
                            {{ __('Настройки') }}
                            @if($messengers->count() < 4)
                                    <b style="color: red">({{ 4 - $messengers->count() }})</b>
                            @endif
                        </span></h3>
                        <h4>
                            <i class="fas fa-cog"></i>
                        </h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <span style="font-size: x-large" class="small-box-footer">
                        {{ __('Перейти') }}
                        <i class="fas fa-arrow-circle-right"></i>
                    </span>
                </div>
            </a>
        </div>

        <!-- Корзина Trash -->
        <div class="col-lg-6 col-12">
            <a href="{{ route('admin.trash.index') }}">
                <div class="small-box bg-gray">
                    <div class="inner">
                        <h3>{{ __('Корзина') }}</h3>
                        <h4>
                            <i class="fas fa-trash"></i>
                            <span style="margin-left: 7px">
                                {{ $trash->count() }}
                            </span>
                        </h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <span style="font-size: x-large" class="small-box-footer">
                        {{ __('Перейти') }}
                        <i class="fas fa-arrow-circle-right"></i></span>
                </div>
            </a>
        </div>
    </div>
@endsection
