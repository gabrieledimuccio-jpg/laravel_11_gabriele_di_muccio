<x-layout>
    <main class="main-content">
        <div class="detail-container">
            <div class="detail-header">
                <div>

                    <span class="badge">{{ $article->category }}</span>

                    <span class="time-custom">⏱️ {{ $article->preparation_time }}</span>
                </div>
                <div class="btn-group" >

                    <a href="{{ route('edit', $article) }}" class="btn btn-secondary">✏️ Modifica</a>

                    <form action="{{ route('destroy', $article) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro di voler eliminare questa ricetta?')">🗑️ Elimina</button>
                    </form>
                </div>
            </div>
            <div class="detail-body">
                <h1>{{ $article->title }}</h1>
                
                <div class="ingredients-box">
                    <h3>📋 Ingredienti:</h3>
                    <p class="pre-line">{{($article->ingredients)}}</p>
                </div>
                <div>
                    <h3>🍳 Preparazione:</h3>
                    <p class="pre-line">{{($article->preparation)}}</p>
                </div>
            </div>
        </div>
    </main>
</x-layout>
