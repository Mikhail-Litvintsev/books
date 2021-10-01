<nav class="main-header navbar navbar-expand navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('index') }}" class="nav-link">
                <i class="fas fa-globe" style="margin-right: 5px"></i>
                <span>{{ __('На сайт') }}</span></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('admin.index') }}" class="nav-link">
                <i class="fas fa-wrench" style="margin-right: 5px"></i>
                <span>{{ __('Управление') }}
                    @if($messengers->count() < 4)
                        (<b class="text-danger">{{ 4 - $messengers->count() }}</b>)
                    @endif
                </span></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="nav-link" href="route('logout')"
                   onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    {{ __('Выйти') }}
                </a>
            </form>
        </li>
    </ul>
</nav>
