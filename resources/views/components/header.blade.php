<header class="bg-primary text-white">
    <div class="container mx-auto flex justify-between items-center p-4">
        {{-- Logo --}}
        <a href="{{ url('/') }}" class="text-lg font-bold">MyApp</a>

        {{-- Navigation Links (Hidden on Mobile) --}}
        <nav class="hidden md:flex space-x-6">
            <a href="{{ url('/') }}" class="hover:underline">Home</a>
            <a href="{{ url('/about') }}" class="hover:underline">About</a>
            <a href="{{ url('/contact') }}" class="hover:underline">Contact</a>
        </nav>

        {{-- Mobile Menu Button --}}
        <button id="menu-toggle" class="md:hidden focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

    {{-- Mobile Menu (Hidden by Default) --}}
    <nav id="mobile-menu" class="hidden md:hidden bg-blue-700 p-4">
        <a href="{{ url('/') }}" class="block py-2">Home</a>
        <a href="{{ url('/about') }}" class="block py-2">About</a>
        <a href="{{ url('/contact') }}" class="block py-2">Contact</a>
    </nav>
</header>

{{-- JavaScript for Mobile Menu Toggle --}}
<script>
    document.getElementById('menu-toggle').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
