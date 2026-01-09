<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            NoteBooks
        </h2>
    </x-slot>
    {{-- @if(session('success'))
        <div id="success-message" class="bg-green-500 text-white p-4 text-center transition-opacity duration-500">
            {{ session('success') }}
        </div>
        <script>
            const msgKey = 'shown_{{ time() }}';
            if (sessionStorage.getItem(msgKey)) {
                document.getElementById('success-message').remove();
            } else {
                sessionStorage.setItem(msgKey, 'true');
                setTimeout(() => {
                    const msg = document.getElementById('success-message');
                    if (msg) {
                        msg.style.opacity = '0';
                        setTimeout(() => msg.remove(), 500);
                    }
                }, 3000);
            }
        </script>
    @endif --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <x-link-button  href="{{route('notebooks.create')}}">+add NoteBook</x-link-button>
            @forelse ($notebooks as $notebook)
            <div class="bg-white p-6 overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="font-bold test-exl text-indigo-600">
                    <a class="hover:underline" href={{route('notebooks.show' , $notebook)}}>{{$notebook->name}}</a>
                </h1>
                <span class="block mt-4 text-sm opacity-90">{{ $notebook->updated_at->diffForHumans()}}</span>
            </div>
            @empty 
            <p>You have no notebooks yet.</p>
            @endforelse
            {{$notebooks->Links()}}
        </div>
    </div>
</x-app-layout> 
