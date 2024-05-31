

<div class="container">
    <header class="border-bottom lh-1 py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4">
                @guest
                    <a class="btn btn-sm btn-outline-secondary mx-2" href="{{ route('register') }}">Registrati</a>
                    <a class="btn btn-sm btn-outline-secondary mx-2" href="{{ route('login') }}">Entra</a>
                @endguest

                @auth
                    <span>{{ Auth::user()->name ?? 'Anonimo' }} Benvenuto</span>
                    <a href="{{ route('items.dashboard') }}" class="btn btn-sm btn-outline-secondary mx-2">Dashboard</a>
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-secondary mx-2">Logout</button>
                    </form>
                @endauth

                <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#">
                    <img height="48px" src="./assets/aulab-logo.svg" alt="Aulab Logo">
                </a>
            </div>
        </div>
    </header>
</div>
