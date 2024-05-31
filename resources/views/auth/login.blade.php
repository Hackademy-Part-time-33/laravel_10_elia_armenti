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
        <form class="p-5 border rounded" action="{{route('login')}}"
        method="POST">
        @csrf
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
            <button type="submit"
            class="btn btn-dark">Accedi</button>
            <a href="{{route('register')}}" class="btn btn-outline-dark">Non sei
                registrato? Clicca qui</a>
            </form>
        </div>
    </x-main>