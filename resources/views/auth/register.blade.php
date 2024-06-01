<x-main>
    
    <div class="class container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form class="p-5 border rounded" action="{{route('register')}}"
        method="POST">
        @csrf
        <div class="mb-3">
            <label for="name"
            class="form-label">Nome e cognome</label>
            <input type="name" name="name"
            class="form-control" id="password"
            required>
        </div>
        @error('name')
        {{$message}}
        @enderror
        <div class="mb-3">
            <label for="email" class="form-label">Email
                utente</label>
                <input type="email" name="email"
                class="form-control" id="email"
                required>
            </div>
            @error('email')
            {{$message}}
            @enderror
            <div class="mb-3">
                <label for="password"
                class="form-label">Password</label>
                <input type="password" name="password"
                class="form-control" id="password"
                required>
            </div>
            @error('password')
            {{$message}}
            @enderror
            <div class="mb-3">
                <label for="password_confirmation"
                class="form-label">Conferma Password</label>
                <input type="password" name="password_confirmation"
                class="form-control" id="password"
                required>
            </div>
            @error('password_confirmation')
            {{$message}}
            @enderror
            <button type="submit"
            class="btn btn-dark">Accedi</button>
        </form>
    </div>
    
</x-main>