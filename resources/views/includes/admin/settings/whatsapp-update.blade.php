<div>
    <h5>{{ __('активен') }}</h5>
    <form method="POST" action="{{ route('admin.settings.whatsapp.update') }}">
        @csrf
        <div class="col-xl-5">
            <label for="phone">{{ __('Номер телефона (на него будут отправляться сообщения):') }}</label><br>
            <input type="tel" name="phone" id="phone" value="{{ $whatsapp->phone}}">
        </div>
        <div class="col-xl-5">
            <label for="message_order">{{ __('Сообщение при заявке:') }}</label><br>
            <input style="width: 100%" type="text" name="message_order" id="message_order"
                   value="{{ $whatsapp->message_order }}">
        </div>
        <div class="col-xl-5">
            <label for="message_question">{{ __('Сообщение при вопросе:') }}</label><br>
            <input style="width: 100%" type="text" name="message_question" id="message_question"
                   value="{{ $whatsapp->message_question }}">
        </div>
        <div class="col-xl-5 mt-3">
            <button class="btn btn-outline-success" type="submit">{{ __('Изменить настройки whatsapp') }}</button>
        </div>
    </form>
</div>

@error('phone')
<p class="text-danger">{{ $message }}</p>
@enderror
