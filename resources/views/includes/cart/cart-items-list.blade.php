@foreach ($cartItems as $item)
    @csrf
    @php($studentBook = $studentBooks->where('id', $item->id)->first())
    <div class="row student-book-card mt-2 mb-2">
        <div class="row col-md-8 col-lg-8 col-xl-8">
            <div class="mr-1 ml-2">{{ $item->name }}{{__(',')}}</div>
            <div class="mr-1">{{ $studentBook->author }}{{__(',')}}</div>
            <div
                class="mr-1">{{ $grades->where('id', $studentBook->grade_id)->first()->title }}{{ __(' класс ') }}</div>
        </div>

        <div class="row col-md-3 col-lg-2 col-xl-2 justify-content-center">
            <div class="mr-1">
                <input type="number" size="2" name="quantity[]"
                       value="{{ $item->quantity }}"
                />
                <input type="number" name="id[]" value="{{ $item->id }}"
                       hidden/>
            </div>
            <div>{{ __(' шт.') }}</div>
        </div>

        <div class="col-md-3 col-lg-2 col-xl-2 text-right" style="align-self: end; margin-right: 0">
            <button type="submit" class="btn btn-link btn-sm text-main"
                    style="color: #AF4F8A"
                    formaction="{{ route('cart.remove', ['idToRemove' => $item->id]) }}">
                <i class="far fa-times-circle"></i> {{ __('убрать') }}
            </button>
        </div>
    </div>
@endforeach
