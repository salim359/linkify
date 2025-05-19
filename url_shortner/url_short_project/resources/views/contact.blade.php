<x-form.layout>
    <h2 class="text-4xl font-bold text-center text-white mb-4">Contact Us</h2>
    <p class="text-lg text-gray-600 text-center mb-10">
      Have questions or need support? We're here to help! Fill out the form below and our team will get back to you shortly.
    </p>
     <x-form.form class="space-y-4" method="POST" action="/contact" >
          @guest
            <x-form.form-field>
                <x-form.form-label for='name'>Your Name</x-form.form-label>
                <div class="mt-2">
                    <x-form.form-input name="name" id="name" :value='old("name")' required />
                    <x-form.form-error name='name' />
                </div>
            </x-form.form-field>
            <x-form.form-field>
                <x-form.form-label for='email'>Email</x-form.form-label>
                <div class="mt-2">
                    <x-form.form-input type="email" name="email" id="email" :value='old("email")' required />
                    <x-form.form-error name='email' />
                </div>
            </x-form.form-field>
            @endguest
            <x-form.form-field>
                <x-form.form-label for='Message'>Message</x-form.form-label>
                <div class="mt-2">
                    <textarea id="message" name="message" rows="5" required
                    class="text-white mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-cyan-500 focus:border-cyan-500"></textarea>
                </div>
            </x-form.form-field>
             <div class="flex justify-center">
                 <x-form.form-button >Send</x-form.form-button>
             </div>
     
            
        </x-form.form>
</x-form.layout>