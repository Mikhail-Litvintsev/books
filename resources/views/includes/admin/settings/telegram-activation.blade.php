<div class="col-xl-5">
    <h5 class="text-danger">{{  __('Необходимо активировать Telegram!')  }}</h5>
    <form method="POST" action="{{ route('admin.settings.telegram.store') }}">
        @csrf
        <div class="col-xl-5">
            <label for="token">{{ __('token (telegram бота, предварительно его нужно создать @BotFather):') }}</label><br>
            <input style="width: 100%" type="text" name="token" id="token"
                   value="">
        </div>
        <div class="col-xl-5">
            <label for="chat_id">{{ __('chat_id (id чата в который будут приходить сообщения, туда нужно присоединить бота созданного бота; узнать id чата можно @myidbot) ') }}</label><br>
            <input style="width: 100%" type="text" name="chat_id" id="chat_id"
                   value="">
        </div>
        <button class="btn btn-outline-success mt-3" type="submit">{{  __('активировать Telegram')  }}</button>
    </form>
</div>

@error('phone')
<p class="text-danger">{{ $message }}</p>
@enderror
