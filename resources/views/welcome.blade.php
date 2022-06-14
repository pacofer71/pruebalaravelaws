<x-guest-layout>
    <div class="flex flex-row-reverse my-2 px-2 py-4">
        @auth
        <div>
            <a href="{{route('dashboard')}}">Panel de Control</a>
        </div>
        @else
        <div class='mr-4'>
            <a href="{{ route('login') }}" >Login</a>
        </div>
        <div class="ml-4">

            <a href="{{ route('register') }}">Register</a>
        </div>
        @endauth

    </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    Hola
                </div>
            </div>
        </div>
</x-guest-layout>
