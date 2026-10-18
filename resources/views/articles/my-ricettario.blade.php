<x-layout>

    <main class="main-content">
        <h1 class="mb-4 text-center title">LE MIE RICETTE</h1>
        <div class="recipes-grid">
            @forelse($articles as $article)
                
                <div class="recipe-card text-center">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{{ $article->title }}</h5>
                        <p class="card-text"><strong>Tempo:</strong> {{ $article->preparation_time }}</p>
                        <p class="card-text text-muted">{{ str()->limit($article->ingredients, 100) }}</p>
                        <a href="{{ route('show', $article) }}" class="btn btn-primary px-4 mt-2">Visualizza</a>
                    </div>
                </div>
                
            @empty
                <div class="text-center text-muted">
                    <p>Non hai ancora caricato nessuna ricetta nel tuo ricettario.</p>
                </div>
            @endforelse
        </div>
    </main>
</x-layout>
