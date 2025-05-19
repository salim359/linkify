<x-layout>
    <x-slot:section >
    <section class="bg-black text-white py-12 px-6 md:px-12 border-b border-white/10">
    <x-page-heading>About Linkify</x-page-heading>
    <div class="flex justify-around md:flex flex-col items-center text-center">
          <div class="mt-10 md:mt-6">
              <video autoplay muted loop playsinline class="w-full max-w-md rounded-lg shadow-lg">
                <source src="{{ Vite::asset('resources/videos/intro.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>
        
            <p class="mt-6 text-gray-400 text-xl leading-relaxed max-w-2xl">
              Linkify is your go-to platform for shortening, managing, and sharing links with ease. Whether you're a digital marketer, content creator, or business owner.Linkify helps you keep your URLs clean, trackable, and ready for sharing across any platform
            </p>
        </div>
    </section>
    
    <section class="bg-black text-white py-12 px-6 md:px-12  border-b border-white/10">
    <!-- <x-page-heading>Our Goals</x-page-heading> -->
    <div class="flex flex-col" >
        <div class="flex flex-col justify-around items-center text-center">
            <div class="mt-10 md:mt-6">
              <video autoplay muted loop playsinline class="w-full max-w-md rounded-lg shadow-lg">
                <source src="{{ Vite::asset('resources/videos/goal.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>
            
            <p class="mt-4 text-gray-400 text-xl leading-relaxed max-w-2xl">
              Our goal is simple: make your links smarter and your sharing simpler. With features like custom short codes, link expiration, and detailed analytics, Linkify gives you full control over every link you share.
            </p>
        </div>
       
    </div>
    </section>
    <section class="bg-black text-white py-12 px-6 md:px-12  border-b border-white/10">
    <!-- <x-page-heading>Our Goals</x-page-heading> -->
    
        <div class="flex flex-col items-center text-center">
            <div class="mt-10 md:mt-6 mb-10">
                 <a href="/register" class="text-white hover:text-black-800 border border-white rounded px-4 py-2 transition duration-200">GET STARTED</a>
            </div>
           <p class="mt-4 text-gray-400 text-xl leading-relaxed max-w-2xl">
              Built with performance and privacy in mind, Linkify ensures your links are not just shorter, but better.Click 'GET STARTED' to Join us in making the web more accessible one link at a time.
            </p>
    
        </div>
       
    
    </section>
</x-slot:section>

</x-layout>