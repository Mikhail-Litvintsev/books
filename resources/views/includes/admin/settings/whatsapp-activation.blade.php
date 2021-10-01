<div class="col-xl-5">
    <h5 class="text-danger">{{  __('Необходимо активировать Whatsapp!')  }}</h5>
    <form method="POST" action="{{ route('admin.settings.whatsapp.store') }}">
        @csrf
        <label for="phone">{{  __('Номер телефона (на него будут отправляться сообщения):')  }}</label><br>
        <input type="tel" name="phone" id="phone" placeholder="прим 79000000000">
        <button class="btn btn-outline-success" type="submit">{{  __('активировать WhatsApp')  }}</button>
    </form>
</div>

@error('phone')
<p class="text-danger">{{ $message }}</p>
@enderror
