@extends('layouts.admin.main')

@section('title'){{ __('Обновление баз учебников') }}@endsection

@section('content')
    <h3>{{ __('Загрузите файл Excel') }}</h3>

    @if(session('succes'))
        <div class="alert alert-success">
            <h4><b>{{ session('succes') }}</b></h4>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            <h4><b>{{ session('error') }}</b></h4>
        </div>
    @endif

    @if($rollback)
        <div class="mt-3 mb-3">
            <form method="POST" action="{{ route('admin.studentBooks.rollback') }}">
                @csrf
                <button class="btn btn-outline-warning" type="submit">
                    <i class="fas fa-undo"></i>
                    {{ __('откатить последнее обновление базы данных') }}
                </button>
            </form>
        </div>
    @endif

    <div class="col-xl-8">
        <span class="text-lg">{{ __('Для обновления базы данных учебников, необходимо загрузить файл Excel.') }}</span><br>
        <span class="text-lg">
            {{ __('Образец можно получить') }}
            <a class="text-success" href="{{ route('admin.studentBooks.export') }}">
                <i class="fas fa-download"></i>
                <b>{{ __('скачав текущую базу Excell') }}</b>
            </a>
        </span><br>
        <span class="text-lg">{{ __('Важно, чтобы названия колонок (столбцов) совпадали с образцом. Столбец id заполнять не нужно.') }}</span><br>
        <span
            class="text-lg">{{ __('Любые записи (строки) с незаполненными значениями (кроме id) не будут добавлены в базу.') }}</span><br>
        <span class="text-lg">{{ __('Класс нужно указвать без слова "класс"') }}</span>
    </div>

    <div class="mt-5">
        <p class="text-lg">{{ __('Загрузить файл Excel:') }}</p>
        <form method="post" action="{{ route('admin.studentBooks.importExcel') }}" enctype="multipart/form-data">
            @csrf
            <input class="btn btn-outline-success" type="file" name="file">
            <button class="btn btn-success" type="submit">{{ __('Загрузить') }}</button>
        </form>
    </div>
@endsection
