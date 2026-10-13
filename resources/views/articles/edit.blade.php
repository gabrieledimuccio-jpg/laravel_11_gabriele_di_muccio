<x-layout>
    <main class="main-content">
        <div class="form-container">
            <h1>Modifica Ricetta</h1>
            <p style="font-size: 0.85rem; color: #6b7280; margin-bottom: 20px;">Stai modificando una ricetta esistente</p>
            
            <!-- FUNZIONALITÀ UPDATE: L'action punterà alla rotta di aggiornamento (es: /recipes/update/1) -->
            <form action="/recipes/update/1" method="POST">
                
                <div class="form-group">
                    <label for="title">Titolo Ricetta *</label>
                    <input type="text" id="title" name="title" class="form-control" value="Carbonara Perfetta" required>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div class="form-group">
                        <label for="category">Categoria</label>
                        <select id="category" name="category" class="form-control">
                            <option value="Primo" selected>Primo</option>
                            <option value="Secondo">Secondo</option>
                            <option value="Dolce">Dolce</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="time">Tempo di Preparazione</label>
                        <input type="text" id="time" name="time" class="form-control" value="25 min">
                    </div>
                </div>

                <div class="form-group">
                    <label for="ingredients">Ingredienti *</label>
                    <textarea id="ingredients" name="ingredients" class="form-control" rows="3" required>Guanciale, Pecorino Romano, Tuorli, Pepe nero.</textarea>
                </div>

                <div class="form-group">
                    <label for="instructions">Preparazione</label>
                    <textarea id="instructions" name="instructions" class="form-control" rows="5">Cuoci la pasta in acqua salata...</textarea>
                </div>

                <div class="form-actions">
                    <a href="{{route ('show')}}" class="btn btn-secondary">Annulla</a>
                    <button type="submit" class="btn btn-primary" style="background-color: #2563eb;">Aggiorna Ricetta</button>
                </div>
            </form>
        </div>
    </main>
</x-layout>
