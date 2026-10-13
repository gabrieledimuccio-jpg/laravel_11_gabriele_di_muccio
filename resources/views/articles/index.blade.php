<x-layout>
    <main class="main-content">
        <div class="index-header">
            <h1>Le Mie Ricette</h1>
        </div>
        
        <div class="recipes-grid">
            <!-- ESEMPIO ARTICOLO 1 -->
            <div class="recipe-card">
                <div class="card-body">
                    <div class="card-meta">
                        <span class="badge">Primo</span>
                        <span style="color: #6b7280; font-size: 0.85rem;">⏱️ 25 min</span>
                    </div>
                    <h2>Carbonara Perfetta</h2>
                    <p style="margin-top: 10px;"><strong>Ingredienti:</strong> Guanciale, Pecorino Romano, Tuorli, Pepe nero.</p>
                </div>
                <div class="card-footer">
                    <span style="color: #9ca3af;">Aggiunta: 10/10/2026</span>
                    <a href="{{ route('show') }}" class="link-detail">Vedi Dettaglio &rarr;</a>
                </div>
            </div>
            
            <!-- ESEMPIO ARTICOLO 2 -->
            <div class="recipe-card">
                <div class="card-body">
                    <div class="card-meta">
                        <span class="badge">Dolce</span>
                        <span style="color: #6b7280; font-size: 0.85rem;">⏱️ 30 min</span>
                    </div>
                    <h2>Tiramisù Classico</h2>
                    <p style="margin-top: 10px;"><strong>Ingredienti:</strong> Mascarpone, Savoiardi, Caffè, Uova fresche, Zucchero.</p>
                </div>
                <div class="card-footer">
                    <span style="color: #9ca3af;">Aggiunta: 09/10/2026</span>
                    <a href="{{ route('show') }}" class="link-detail">Vedi Dettaglio &rarr;</a>
                </div>
            </div>
        </div>
    </main>
</x-layout>
    