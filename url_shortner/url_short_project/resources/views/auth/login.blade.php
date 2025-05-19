<x-form.layout>

    <x-form.form class="space-y-4" method="POST" action="/login" >
        <x-page-heading>Sign in</x-page-heading>
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
            <div class="flex  items-center justify-between">
                <div class="flex">
                    <x-form.form-checkbox />
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </div>
            
                <div>
                    <a href="#" class="text-sm text-black-600 hover:underline">Forgot password?</a>
                </div>
               
             </div>
        </x-form.form-field>
         <div class="flex justify-center">
             <x-form.form-button >LOG IN</x-form.form-button>
         </div>
 
         <p class="mt-6 text-center text-sm text-gray-600">
            Don't have an account? <a href="/register" class="text-blue-800 hover:underline">Sign up</a>
        </p>
    </x-form.form>
</x-form.layout>