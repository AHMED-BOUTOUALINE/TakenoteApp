<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Notes
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white p-6 overflow-hidden shadow-sm sm:rounded-lg mx-2xl">
                <form action="{{route('notes.update', $note)}}" method="post" >
                    @method('PUT')
                    @csrf
                    <x-text-input name="title" class="w-full" placeholder="Note Title" value="{{ old('title', $note->title) }}"></x-text-input>
                    @error('title')
                        <div class="text-sm mt-1 text-red-500">{{$message}}</div>
                    @enderror
                    
                    <x-textarea name="text" placeholder="Type your note" rows="8" class="w-full mt-6" value="{{ old('text', $note->text) }}"></x-textarea>
                    @error('text')
                        <div class="text-sm mt-1 text-red-500">{{$message}}</div>
                    @enderror
                    <x-primary-button class="mt-6">Save edit</x-primary-button>
                </form>
            </div>
        
        </div>
    </div>
</x-app-layout> 
