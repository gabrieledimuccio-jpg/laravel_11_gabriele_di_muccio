<x-layout>
<main class="main-content">
        <div class="detail-container">
            <div class="detail-header">
                <div>
                    <span class="badge">Primo</span>
                    <span style="margin-left: 10px; color: #6b7280;">⏱️ 25 min</span>
                </div>
                <div class="btn-group" style="align-items: center;">
                    <!-- Bottone per andare al form di modifica (Edit) -->
                    <a href="{{ route('edit') }}" class="btn btn-secondary">✏️ Modifica</a>

                    <!-- FUNZIONALITÀ DELETE: Un form nativo per distruggere l'elemento nel DB -->
                    <!-- Nota: Molti framework backend intercettano il POST simulando il metodo DELETE -->
                    <form action="/recipes/delete/1" method="POST" style="display: inline;">
                        <button type="submit" class="btn btn-danger">🗑️ Elimina</button>
                    </form>
                </div>
            </div>
            <div class="detail-body">
                <h1>Carbonara Perfetta</h1>
                <div class="ingredients-box">
                    <h3>📋 Ingredienti:</h3>
                    <p class="pre-line">Guanciale, Pecorino Romano, Tuorli, Pepe nero.</p>
                </div>
                <div>
                    <h3>🍳 Preparazione:</h3>
                    <p class="pre-line">Cuoci la pasta in acqua salata. Nel frattempo rosola il guanciale in padella senza aggiungere altri grassi finché non diventa croccante. 
                    Sbatti i tuorli con il pecorino romano grattugiato e abbondante pepe nero fino a creare una crema densa. Schiuma la pasta direttamente nella padella col guanciale a fuoco spento, aggiungi la crema d'uovo e un goccio d'acqua di cottura per amalgamare il tutto.</p>
                </div>
            </div>
        </div>
    </main>
</x-layout>
