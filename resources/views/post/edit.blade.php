<x-main>
    
    <div class="px-4 px-md-5 mb-5">
        <div class="row gx-5 justify-content-center ">
            <div class="col-lg-8 col-xl-6 border p-5 rounded">
                
                <form action="{{route ('post.update', ['post' => $post])}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-floating mb-3">
                        <input class="form-control" id="title" value = "{{$post->title}}"
                        name="title" type="text">
                        <label for="title">Titolo</label>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="body" name="title" type="text" value="">{{$post->body}}</textarea>
                        <label for="name">Corpo</label>
                    </div>
                    
                    
                    <div class="form-floating mb-3">
                        <input type="radio" name="status" value="0">
                        @if (!$post->status)
                        checked
                        @endif
                        <label>Non Attivo</label><br>
                        <input type="radio" name="status" value="1">
                        @if (!$post->status)
                        checked
                        @endif
                        <label>Attivo</label><br>
                        
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="image"
                        name="image" value
                        type="file">
                        
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg"
                        type="submit">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</x-main>