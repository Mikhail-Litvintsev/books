<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('admin.index') }}" class="brand-link">
        <i class="fas fa-atlas" alt="Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8; margin-right: 8px; margin-left: 5px"></i>
        <span class="brand-text font-weight-light">{{ __('Букинист') }}</span>
    </a>

    <div class="sidebar">

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('admin.studentBooks.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>{{ __('Учебники') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.grades.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-graduation-cap"></i>
                        <p>{{ __('Школьные классы') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.subjects.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-university"></i>
                        <p>{{ __('Школьные предметы') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.studentBooks.renewal') }}" class="nav-link">
                        <i class="nav-icon fas fa-database"></i>
                        <p>{{ __('Обновить базу') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.settings.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            {{ __('Настройки') }}
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.trash.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-trash"></i>
                        <p>
                            {{ __('Корзина') }}
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>


