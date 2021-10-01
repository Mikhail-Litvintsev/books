<table>
    <thead>
    <tr>
        <th style="text-align: center; background-color: coral; font-size: 14" ><b>{{ __('id') }}</b></th>
        <th style="text-align: center; background-color: coral; font-size: 14"><b>{{ __('Предмет') }}</b></th>
    </tr>
    </thead>

    @foreach($subjects as $subject)
        <tr>
            <td style="text-align: center; font-size: 14">{{ $subject->id }}</td>
            <td style="width: 30%; font-size: 14">{{ $subject->title }}</td>
        </tr>
    @endforeach
</table>
