<div class="row student-book-card"
     @if(Cart::getContent()->where('id', $studentBook->id)->first())
     style="background-color: #fbffcc"
    @endif>

    <div class="col-md-8 col-lg-8 col-xl-9" style="align-self: center; ">
        @if(Cart::getContent()->where('id', $studentBook->id)->first())
            <i class="fas fa-check text-success" style="width: 22px"></i>
        @endif
        {{ $studentBook->title }}{{ __(', ') }}
        {{ str_replace(' ', ', ',$studentBook->author) }}{{ __(', ') }}
        {{ $grades->find($studentBook->grade_id)->title }}{{ __(' класс') }}
    </div>

    <div class="col-md-4 col-lg-3 col-xl-2" style="align-self: center; margin-right: 0">
        <form method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{ $studentBook->id }}" name="id">
            <input type="hidden" value="{{ $studentBook->title }}" name="name">
            <input type="hidden" value="0" name="price">
            <input type="hidden" value="1" name="quantity">
            @if(Cart::getTotalQuantity())
                @if(Cart::getContent()->where('id', $studentBook->id)->first())
                    <div class="text-success text-center">
                        <button formaction="{{ route('cart.remove', ['idToRemove' => $studentBook->id]) }}"
                                class="btn btn-outline-dark text-center" style="
                        font-family: Tahoma;
                        border-width: 2px;
                        border-color: #fbffcc;
                        border-radius: 20px 20px 20px 20px;
                        font-size: 18px;
                        line-height: 27px;
                        width: 150px;">
                            <div>
                                <i class="fas fa-minus"></i>
                                {{ __('убрать') }}
                            </div>
                        </button>
                    </div>

                @else
                    <div class="text-center">
                        <button formaction="{{ route('cart.store') }}" class="btn btn-outline-success text-center"
                                style="
                        font-family: Tahoma;
                        border-width: 2px;
                        border-color: black;
                        border-radius: 20px 20px 20px 20px;
                        font-size: 18px;
                        line-height: 27px;
                        width: 150px;">
                            <div>
                                <i class="fas fa-plus"></i>
                                {{ __('добавить') }}
                            </div>
                        </button>
                    </div>
                @endif
            @else
                <button title="{{ __('Потребуется WhatsApp или Viber') }}" formaction="{{ route('cart.store') }}"
                        class="btn btn-warning text-center" style="
                font-family: Tahoma;
                border-width: 2px;
                border-color: black;
                border-radius: 20px 20px 20px 20px;
                font-size: 18px;
                line-height: 27px;
                width: 200px;">
                    <div>
                        {{ __('узнать:') }}
                    </div>
                    <div>
                        {{ __('наличие и цену') }}
                    </div>
                </button>
            @endif
        </form>
    </div>
</div>
