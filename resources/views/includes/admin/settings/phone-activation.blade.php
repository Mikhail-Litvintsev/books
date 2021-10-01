<div class="col-xl-5">
    <h5 class="text-danger">{{  __('Необходимо активировать номер телефона!')  }}</h5>
    <form method="POST" action="{{ route('admin.settings.phone.store') }}">
        @csrf
        <label for="phone">{{  __('Номер телефона (на него будут звонить):')  }}</label><br>
        <input type="tel" name="phone" id="phone" placeholder="прим 89000000000">
        <button class="btn btn-outline-success" type="submit">{{  __('активировать номер телефона')  }}</button>
    </form>
</div>

@error('phone')
<p class="text-danger">{{ $message }}</p>
@enderror
