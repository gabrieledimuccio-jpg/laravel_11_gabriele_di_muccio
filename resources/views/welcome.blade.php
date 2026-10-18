<x-layout>
    <main class="main-content">
        <div class="home-card">
            <span class="logo">👨‍🍳</span>
            <h1>Benvenuto nel tuo Ricettario Digitale</h1>
            <p>Il posto ideale per catalogare, modificare e organizzare tutte le tue creazioni culinarie.</p>
            <div class="btn-group div1">
                <a href="{{ route('index') }}" class="btn btn-primary">Esplora le Ricette</a>
                <a href="{{ route('create') }}" class="btn btn-secondary">Aggiungi una Ricetta</a>
            </div>
        </div>
    </main>
</x-layout>