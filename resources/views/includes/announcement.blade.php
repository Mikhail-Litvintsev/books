@if(session('announce'))
    <div id="announcement">
        <window>
            <div class="text-center">
                <div class="text-main text-center">{{ session('announce') }}</div>
                <a href="#close_window" class="close_window btn btn-warning btn-lg border-dark mt-4">закрыть
                    окно</a>
            </div>
        </window>
    </div>
@elseif(session('warning'))
    <div id="announcement">
        <window>
            <div class="text-center">
                <div class="text-main text-center" style="color: red">{{ session('warning') }}</div>
                <a href="#close_window" class="close_window btn btn-warning btn-lg border-dark mt-4">закрыть
                    окно</a>
            </div>
        </window>
    </div>
@endif
