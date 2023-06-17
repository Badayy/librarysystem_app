<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Edit') }}
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
            <a href="{{ route('borrower.index') }}" class="btn btn-secondary text-lg"><i class="fas fa-solid fas fa-arrow-left"></i></a>
        </div>
        <div class="p-6 text-black dark:text-black">
            <div class="mb-5 text-bold text-xl">
                <form action="{{ route('borrower.update',$borrower->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                    <div class="alert alert-error bg-red-500 text-black">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="container text-center p-3 justify-center">
                    <div class="form-group mb-3">
                        <label for="studentid">Student ID</label>
                        <input class="" type="text" name="studentid" value="{{ $borrower->studentid }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Name of the Student</label>
                        <input class="" type="text" name="name" value="{{ $borrower->name }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="course">Course</label>
                        <input class="" type="text" name="course" value="{{ $borrower->course }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="yearandsection">Year and Section</label>
                        <input class="" type="text" name="yearandsection" value="{{ $borrower->yearandsection }}">
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary text-black">Submit</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
