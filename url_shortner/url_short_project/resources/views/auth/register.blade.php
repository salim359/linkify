<x-form.layout>
    <x-form.form class="space-y-4" method="POST" action="/register" >
         <x-page-heading>Create an account</x-page-heading>
         
        <x-form.form-field>
            <x-form.form-label for='name'>Name</x-form.form-label>
            <div class="mt-2">
                <x-form.form-input name="name" id="name" :value='old("name")'  placeholder="Noufa" required />
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
        
        <x-form.form-field>
            <x-form.form-label for='password'>Password</x-form.form-label>
            <div class="mt-2">
                <x-form.form-input type="password" name="password" id="password"  required />
                <x-form.form-error name='password' />
            </div>
        </x-form.form-field>
        
        <x-form.form-field>
            <x-form.form-label for='password_confirmation'>Confirmation Password</x-form.form-label>
            <div class="mt-2">
                <x-form.form-input type="password" name="password_confirmation" id="password_confirmation"  required />
                <x-form.form-error name='password_confirmation' />
            </div>
        </x-form.form-field>
        
     
         <div class="flex justify-center">
             <x-form.form-button >CREATE ACCOUNT</x-form.form-button>
         </div>
 
         <p class="mt-6 text-center text-sm text-gray-600">
            Already have an account? <a href="/login" class="text-blue-800 hover:underline">Sign In</a>
        </p>
    </x-form.form>
</x-form.layout>