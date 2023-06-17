<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Show') }}
            </h2>
            <x-button target="_blank" href="https://github.com/kamona-wd/kui-laravel-breeze" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="flex m-2">
            <a href="{{ route('library.index') }}" class="btn btn-secondary text-lg"><i class="fas fa-solid fas fa-arrow-left"></i></a>
        </div>
        <div class="p-6 text-black dark:text-black">
            <div class="flex justify-center bg-slate-900">
                <div class="w-64 rounded-lg shadow-lg p-4 mx-2 my-2">
                    <div class="p-4 text-bold text-center text-xl">
                        {{ __('Title: '.$book->title) }}
                        <img src="{{ asset('storage/'.$book->image) }}" alt="Image" style="width: 250px; height: 250px;">
                        <h2>{{ $book->author }}</h2>
                        <p class="text-muted">{{ $book->published }}</p>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('library.edit',$book->id) }}">
                        <button class="btn btn-secondary me-2"><i class="fas fa-pen"></i></button>
                        </a>
                        <form action="{{ route('library.delete', $book->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-black hover:text-blue-300 btn btn-danger">
                                <i class="fas fa-solid fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
       </div>
    </div>
</x-app-layout>
