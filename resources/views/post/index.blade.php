<x-main>
    
    <div class="rounded-3 py-5 px-4 px-md-5 mb-5">
        
        <div class="container mt-5">
            <div
            class="align-middle gap-2 d-flex justify-content-between">
            <h3>Elenco Articoli inseriti</h3>
            <form class="d-flex" role="search" action="#"
            method="POST">
            <input class="form-control me-2" name="search"
            type="search" placeholder="Cerca Articolo"
            aria-label="Search">
        </form>
        <a href="{{route('post.create')}}">
            Crea Nuovo Articolo
        </a>
    </div>
    <table class="table border mt-2">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Immagine</th>
                <th scope="col">Titolo</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($posts as $post)
            
            <tr>
                <th scope="row">#{{$post->id}}</th>
                <td>
                    <img class="card-img-top" style="width:3rem"
                    src="{{Storage::url($post->image)}}"
                    alt="..." />
                </td>
                <td>{{$post->title}}</td>
                <td>
                    
                    <div
                    class="d-grid gap-2 d-md-flex justify-content-md-end">
                    
                    <a href="{{route('post.show', ['post' => $post->id])}}"
                        class="btn btn-primary me-md-2">
                        Visualizza
                    </a>
                    <a href="{{route('post.edit', ['post' => $post->id])}}"
                        class="btn btn-warning me-md-2">
                        Modifica
                    </a>
                    <form action="{{route('post.destroy', ['post' => $post->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button"
                        class="btn btn-danger me-md-2" type="submit">Elimina</button>
                    </form>
                    
                </div>
            </td>
        </tr>
        
        @endforeach
        
    </tbody>
</table>
</div>
</div>

</x-main>