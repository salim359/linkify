<nav class="py-4 px-6 flex flex-col items-center md:flex-row md:justify-between md:items-center gap-4 bg-black text-white">
            <!-- Logo -->
            <div>
                <a href="/">
                    <img class="h-30 w-60" src="{{ Vite::asset('resources/images/LINKIFY.png') }}" alt="Logo">
                </a>
            </div>
        
            <!-- Main Nav Links -->
            <div class="flex justify-around md:flex-row md:items-center gap-4 md:gap-x-6">
                @guest
                    <a href="/" class="font-semibold text-white hover:text-gray-400 transition duration-200">HOME</a>
                    <a href="/about" class="font-semibold text-white hover:text-gray-400 transition duration-200">ABOUT</a>
                @endguest
        
                @auth
                    <a href="/url/create" class="font-semibold text-white hover:text-gray-400 transition duration-200">HOME</a>
                    
                @endauth
        
                <a href="/contact" class="font-semibold text-white hover:text-gray-400 transition duration-200">CONTACT</a>
                <a href="/services" class="font-semibold text-white hover:text-gray-400 transition duration-200">SERVICES</a>
            </div>
        
            <!-- Auth Section -->
            @auth
            <div class="flex justify-around  md:flex-row items-start md:items-center gap-4 md:gap-x-6">
                <a href='/profile' class="text-white hover:text-gray-400 px-4 py-2">
                    Profile
                </a>
                <form method="POST" action="/logout">
                    @csrf
                    @method('DELETE')
                    <button class="text-white hover:text-gray-400 border border-white rounded px-4 py-2">
                        Log Out
                    </button>
                </form>
            </div>
            @endauth
        
            @guest
            <div class="flex flex-col items-center md:flex-row gap-4 md:gap-x-6">
                <a href="/login" class="text-white hover:text-gray-400">LOG IN</a>
                <a href="/register" class="text-white hover:text-gray-400 border border-white rounded px-4 py-2">
                    SIGN UP
                </a>
            </div>
            @endguest
</nav>