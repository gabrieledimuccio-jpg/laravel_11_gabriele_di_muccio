<x-layout>
    <main class="main-content">
        <div class="form-container">
            <h1>Modifica Ricetta</h1>
            <p class="p-custom">Stai modificando una ricetta esistente</p>

            <form action="{{ route('update', $article) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="title">Titolo Ricetta</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $article->title) }}" required>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="category">Categoria</label>
                        <select id="category" name="category" class="form-control">
                            <option value="Primo" {{ old('category', $article->category) == 'Primo' ? 'selected' : '' }}>Primo</option>
                            <option value="Secondo" {{ old('category', $article->category) == 'Secondo' ? 'selected' : '' }}>Secondo</option>
                            <option value="Dolce" {{ old('category', $article->category) == 'Dolce' ? 'selected' : '' }}>Dolce</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="time">Tempo di Preparazione</label>
                        <input type="text" id="time" name="preparation_time" class="form-control" value="{{ old('preparation_time', $article->preparation_time) }}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="ingredients">Ingredienti</label>
                    <textarea id="ingredients" name="ingredients" class="form-control" rows="3" required>{{ old('ingredients', $article->ingredients) }}</textarea>
                </div>

                <div class="form-group">
                    <label for="instructions">Preparazione</label>
                    <textarea id="instructions" name="preparation" class="form-control" rows="5" required>{{ old('preparation', $article->preparation) }}</textarea>
                </div>

                <div class="form-actions">
                    <a href="{{ route('show', $article) }}" class="btn btn-secondary">Annulla</a>
                    <button type="submit" class="btn btn-primary">Aggiorna Ricetta</button>
                </div>
            </form>
        </div>
    </main>
</x-layout>
