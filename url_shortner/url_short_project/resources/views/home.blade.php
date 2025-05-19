<x-layout>
    <div class="flex flex-col">
        <div class=" min-h-screen flex flex-col md:flex-row items-center justify-around px-6 py-12 border-b border-white/10 ">
            <!-- Text Content -->
            <div class="flex-1 max-w-xl">
                <h1 class="text-4xl font-extrabold text-white mb-4">Welcome to <span class="text-black-600">Linkify</span></h1>
                <p class="text-lg text-white mb-6">Shorten your URLs quickly and easily. Sign up or log in to get started!</p>

                <!-- Call to Action Buttons -->
                <div class="flex space-x-4">
                    <a href="/register" class="text-white bg-black hover:text-white-800  border border-white rounded px-4 py-2 transition duration-200">GET STARTED</a>
                </div>
            </div>

            <!-- Image -->
            <div class="mt-10 md:mt-0 md:ml-12">
           
                <video autoplay muted loop playsinline class="w-full max-w-md rounded-lg shadow-lg">
                    <source src="{{ Vite::asset('resources/videos/intro.mp4') }}" type="video/mp4">Your browser does not support the video tag
                </video>
            </div>
        </div>
        <x-slot:section>
            <div class="bg-black min-h-screen flex flex-col md:flex-row items-center justify-around px-6 py-12 ">
                <div class="py-10 px-10">
                    <h1 class="text-3xl font-bold text-white mb-6">How it works?</h1>
                    <p class="text-lg text-white">A simple 3-step process to shorten and track your URLs</p>
                    <!-- <img src="{{ Vite::asset('resources/images/logo_w.png') }}" alt="Illustration" class="w-full max-w-md rounded-lg "> -->
                </div>

                <ul class="space-y-4 px-10 py-10">
                    <li class="flex items-start">
                        <div class="flex-shrink-0 bg-indigo-100 rounded-full p-3 mr-4">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white">Step 1: Paste your long URL</h3>
                            <p class="text-white">Copy your lengthy URL and paste it into our simple input field.</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div class="flex-shrink-0 bg-indigo-100 rounded-full p-3 mr-4">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white">Step 2: Click “Short URL”</h3>
                            <p class="text-white">Hit the button to instantly generate a compact, shareable link.</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div class="flex-shrink-0 bg-indigo-100 rounded-full p-3 mr-4">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 1    2.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white">Step 3: Share your new short link</h3>
                            <p class="text-white">Distribute your shortened URL across social media, emails, or anywhere else.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </x-slot:section>

    </div>
</x-layout>