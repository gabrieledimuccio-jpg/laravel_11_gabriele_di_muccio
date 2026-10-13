<x-layout>
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 mt-5 mb-3">
                <form class="form-container p-4" action="{{ route('login') }}" method="POST">
                    @csrf
                    <h2 class="text-center mt-3 mb-4">
                        LOGIN
                    </h2>
                    @if ($errors->any())
                    <div class="alert alert-danger py-2">
                        <ul class="m-0">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" class="btn btn-add2 p-2">ACCEDI</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>