<x-layout>
    @if (session('delete'))
        <div class="alert alert-warning">
            {{ session('delete') }}
        </div>
    @endif
    @livewire('article-index')
</x-layout>