<x-main>
    
    <div class="container py-4">
        <div class="p-5 mb-4 bg-body-tertiary rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Benvenuto {{Auth::user()->name}}</h1>
                <a class="btn btn-primary btn-lg" href="{{route('post.index')}}">Nuovo Articolo</a>
            </div>
        </div>
    </div>
</x-main>