<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <x-button target="_blank" href="https://github.com/kamona-wd/kui-laravel-breeze" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="p-6 text-black-900">
            <div class="container flex justify-end">
                <a href="{{ route('library.create') }}" class="btn btn-danger" title="Add Image to the gallery"><i class="fas fa-solid fas fa-plus"></i><span class="pe-3"></span><i class="fas fa-solid fas fa-book"></i></a>
             </div>
             @if (count($books) == 0)
             <div class="text-center text-bold text-xl text-cyan-700">
                {{ __('Empty books') }}
             </div>
             @else
             <div class="flex flex-wrap bg-slate-900">
                 @foreach($books as $book)
                 <a href="{{ route('library.show',$book->id) }}">
                    <div class="w-64 rounded-lg hover:bg-slate-400 shadow-lg p-4 mx-2 my-2">
                        <div class="p-4 text-bold text-center text-xl">
                            {{ __('Title: '.$book->title) }}
                            <img src="{{ asset('storage/'.$book->image) }}" alt="Image" style="width: 250px; height: 250px;">
                            <h2>{{ 'Author: '.$book->author }}</h2>
                            <p class="text-muted">{{ 'Date Published: '.$book->published }}</p>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('borrower.create',$book->id) }}" class="btn btn-danger">Borrow</a>
                        </div>
                    </div>
                </a>
            @endforeach
            </div>
             @endif
        </div>
    </div>
</x-app-layout>
