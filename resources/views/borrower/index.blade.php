<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Borrower') }}
            </h2>
            <x-button target="_blank" href="https://github.com/kamona-wd/kui-laravel-breeze" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-dark-eval-1 rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="p-6 text-black dark:text-white">
            @if (count($borrowers) == 0)
            <div class="text-center text-bold text-xl text-cyan-700">
               {{ __('No Borrowers') }}
            </div>
            @else
            <div class="flex flex-wrap bg-white text-black">
                <table class="table table-responsive">
                   <thead>
                       <tr>
                           <th>Student ID</th>
                           <th>Name</th>
                           <th>Course</th>
                           <th>Year & Section</th>
                           <th>Name of the Book</th>
                           <th>Author of the Book</th>
                           <th>Image</th>
                           <th>Date of published</th>
                           <th>Date Borrowed</th>
                           <th>Action</th>
                       </tr>
                   </thead>
                   @foreach ($borrowers as $borrower)
                   <tbody>
                       <tr>
                           <td>{{ $borrower->studentid }}</td>
                           <td>{{ $borrower->name }}</td>
                           <td>{{ $borrower->course }}</td>
                           <td>{{ $borrower->yearandsection }}</td>
                           <td>{{ $borrower->nameofthebook }}</td>
                           <td>{{ $borrower->authorofthebook }}</td>
                           <td>
                               <img src="{{ asset('storage/'.$borrower->image) }}" alt="Image" style="width: 50px; height: 50px;">
                           </td>
                           <td>{{ $borrower->published }}</td>
                           <td>{{ $borrower->created_at }}</td>
                           <td>
                               <div class="text-center flex justify-center">
                                   <a href="{{ route('borrower.edit',$borrower->id) }}">
                                       <button class="btn btn-secondary me-2"><i class="fas fa-pen"></i></button>
                                       </a>
                                   <form action="{{ route('borrower.delete', $borrower->id) }}" method="post" enctype="multipart/form-data">
                                   @csrf
                                   @method('DELETE')
                                   <button class="btn btn-danger text-black" type="submit"><i class="fas fa-solid fas fa-trash"></i></button>
                                   </form>
                               </div>
                           </td>
                       </tr>
                   </tbody>
                   @endforeach
                </table>
           </div>
            @endif
       </div>
    </div>
</x-app-layout>
