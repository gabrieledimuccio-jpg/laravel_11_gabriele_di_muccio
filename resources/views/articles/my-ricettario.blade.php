<x-layout>
    <div class="container mt-5">
        <h1 class="mb-4 text-center title">LE MIE RICETTE</h1>
        
        <div class="row">
            @forelse($articles as $article)
            <div class="col-md-4 mb-3">
                <div class="recipe-card text-center">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text"><strong>Tempo:</strong> {{ $article->preparation_time }}</p>
                        <p class="card-text">{{ str()->limit($article->ingredients, 100) }}</p>
                        <a href="{{ route('show', $article) }}" class="btn btn-primary">Visualizza</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center text-muted">
                <p>Non hai ancora caricato nessuna ricetta nel tuo ricettario.</p>
            </div>
            @endforelse
        </div>
    </div>
</x-layout>
