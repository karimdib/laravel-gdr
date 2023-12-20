<div>
    <h3 class="display-5 text-center mb-3">
        @yield('title')
    </h3>

    <nav class="container">
        <ul class="nav-menu d-flex justify-content-center gap-4 list-unstyled">
            <li class="nav-item">
                <a href="{{ route('characters.index') }}">Home</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('characters.create') }}">Create</a>
            </li>
        </ul>
    </nav>
</div>
