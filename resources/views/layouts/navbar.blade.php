@php
    $currentRouteName = Route::currentRouteName();
@endphp
<nav class="navbar navbar-expand-lg bg-body-tertiary" bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="">Master Barang</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('barangs.index') }}">List Barang</a>
                </li>
            </ul>
            <span class="navbar-text">
                Telkom University Surabaya
            </span>
        </div>
    </div>
</nav>
