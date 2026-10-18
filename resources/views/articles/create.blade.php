<x-layout>
    <main class="main-content">
        <div class="form-container">
            <h1>Aggiungi una Nuova Ricetta</h1>

            @if ($errors->any())
                <div class="alert alert-danger py-2 mt-3">
                    <ul class="m-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Titolo Ricetta *</label>
                    <input type="text" id="title" name="title" class="form-control" placeholder="Es. Lasagne al Forno" required>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="category">Categoria</label>
                        <select id="category" name="category" class="form-control">
                            <option value="Primo">Primo</option>
                            <option value="Secondo">Secondo</option>
                            <option value="Dolce">Dolce</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="time">Tempo di Preparazione *</label>
                        <input type="text" id="time" name="preparation_time" class="form-control" placeholder="Es. 45 min" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="ingredients">Ingredienti *</label>
                    <textarea id="ingredients" name="ingredients" class="form-control" rows="3" placeholder="Sfoglia, Ragù, Besciamella..." required></textarea>
                </div>

                <div class="form-group">
                    <label for="instructions">Preparazione *</label>
                    <textarea id="instructions" name="preparation" class="form-control" rows="5" placeholder="Strati alternati di pasta e condimento..." required></textarea>
                </div>

                <div class="form-actions">
                    <a href="{{ route('index') }}" class="btn btn-secondary">Annulla</a>
                    <button type="submit" class="btn btn-primary">Salva Ricetta</button>
                </div>
            </form>
        </div>
    </main>
</x-layout>
