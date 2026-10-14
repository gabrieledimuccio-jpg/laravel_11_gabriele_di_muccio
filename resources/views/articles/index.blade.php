<x-layout>
    <div class="container mt-5">
        <h1 class="mb-4 text-center title">TUTTE LE RICETTE</h1>
        
        <div class="row">

            @forelse($articles as $article)
                <div class="col-md-4 mb-3">
                    <div class="recipe-card w-75">
                        <div class="card-body">
                            <div class="card-meta">
                                <span class="badge">{{ $article->category }}</span>
                                <span class="time2">⏱️ {{ $article->preparation_time }}</span>
                            </div>
                            <h2>{{ $article->title }}</h2>
                            <p class="mt-1"><strong>Ingredienti:</strong> {{ str()->limit($article->ingredients, 100) }}</p>
                        </div>
                        <div class="card-footer">

                            <span class="data">Aggiunta: {{ $article->created_at->format('d/m/Y') }}</span>

                            <a href="{{ route('show', $article) }}" class="link-detail">Vedi Dettaglio &rarr;</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center text-muted">
                    <p>Non ci sono ancora ricette disponibili.</p>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>
