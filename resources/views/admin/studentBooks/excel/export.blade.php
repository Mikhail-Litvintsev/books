<table>
    <thead>
    <tr>
        <th style="text-align: center; background-color: coral; font-size: 14"><b>{{ __('id') }}</b></th>
        <th style="text-align: center; background-color: coral; font-size: 14"><b>{{ __('Название учебника') }}</b></th>
        <th style="text-align: center; background-color: coral; font-size: 14"><b>{{ __('Автор') }}</b></th>
        <th style="text-align: center; background-color: coral; font-size: 14"><b>{{ __('Класс') }}</b></th>
        <th style="text-align: center; background-color: coral; font-size: 14"><b>{{ __('Предмет') }}</b></th>
    </tr>
    </thead>

    @foreach($studentBooks as $book)
        <tr>
            <td style="width: 8%; text-align: center; font-size: 14">{{ $book->id }}</td>
            <td style="width: 50%; font-size: 14">{{ $book->title }}</td>
            <td style="width: 30%; font-size: 14">{{ $book->author }}</td>
            <td style="width: 15%; font-size: 14">{{ $grades->find($book->grade_id)->title }}</td>
            <td style="width: 30%; font-size: 14">{{ $subjects->find($book->subject_id)->title }}</td>
        </tr>
    @endforeach
</table>
