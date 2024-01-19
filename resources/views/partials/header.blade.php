<header>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div>
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo Comics-DC">
            </div>
            <div class="container d-flex">
                <a class="navbar-brand text-primary text-decoration-underline" href="{{ route('home') }}">DC Comic</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="navbar-brand text-primary text-decoration-underline" aria-current="page" href="{{ route('comics.index') }}">Comic</a>
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </nav>
</header>
