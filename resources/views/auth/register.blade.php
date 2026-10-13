<x-layout>
    
    <div class="container-fluid pt-5 mt-2">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mt-5">
                <h1 class="title-custom text-center mb-4">REGISTRATI</h1>
                <form class="form-container p-4" action="{{ route('register') }}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input name="name" type="text" class="form-control" id="name" value="{{ old('name') }}">
                        @error('name')
                        <div class="alert alert-danger mt-2 py-2 px-3 bootstrap-aler">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email" value="{{ old('email') }}">
                        @error('email')
                        <div class="alert alert-danger mt-2 py-2 px-3 bootstrap-aler">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                        <small class="text-white-50 d-block mt-1">La password deve contenere almeno 8 caratteri.</small>
                        @error('password')
                        <div class="alert alert-danger mt-2 py-2 px-3 bootstrap-aler">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
                    </div>
                    
                    
                    <div class="text-center">
                        <button type="submit" class="btn btn-add2 p-2">ISCRIVITI</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    
</x-layout>
