<x-guest-layout>
    <div class="flex flex-row-reverse my-2 px-2 py-4">
        @auth
            <div>
                <a href="{{ route('dashboard') }}">Panel de Control</a>
            </div>
        @else
            <div class='mr-4'>
                <a href="{{ route('login') }}">Login</a>
            </div>
            <div class="ml-4">

                <a href="{{ route('register') }}">Register</a>
            </div>
        @endauth

    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 px-2 py-4 rounded shadow-xl gap-3">
                    @foreach ($posts as $item)
                        <article
                            class="w-full h-80 bg-cover bg-center @if ($loop->first) md:col-span-2 @endif"
                            style="background-image:url({{ Storage::url($item->imagen) }})">
                            <div class="flex flex-col justify-center h-full w-full">
                                <div class>
                                    <h1 class="px-2 py-4 bg-slate-700 opacity-50 rounded text-xl text-white font-bold">{{ $item->titulo }}</h1>
                                </div>
                                <div class="px-2 py-4 bg-slate-600 mt-2 font-bold text-gray-200 items-center">
                                    ({{ $item->user->email }})
                                </div>

                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
