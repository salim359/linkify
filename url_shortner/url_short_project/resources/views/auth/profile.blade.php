<x-profile-layout>
    <x-page-heading>Profile</x-page-heading>
    <div class="flex flex-col items-center">
    <form class="bg-black  shadow-2xl rounded-2xl p-12 w-full max-w-4xl mx-10 my-12 transition-all duration-300 hover:shadow-3xl" method="POST" action="/profile" >
        @csrf
        @method('PATCH')
        <x-section-heading>Details</x-section-heading>
        
        <x-form.form-field>
            <x-form.form-label  class="mt-10" for='email'>Email</x-form.form-label>
            <div class="mt-2">
                <x-form.form-input2 type="email" name="email" id="email" value="{{ $profile->email }}" required />
                <x-form.form-error name='email' />
            </div>
        </x-form.form-field>
        
        <x-form.form-field>
            <x-form.form-label class="mt-10" for='name'>Name</x-form.form-label>
            <div class="mt-2">
                <x-form.form-input2 name="name" id="name" value="{{ $profile->name }}"   required />
                <x-form.form-error name='name' />
            </div>
        </x-form.form-field>
        <div class="mt-10">
             <x-form.form-button >Update</x-form.form-button>
        </div>
    </form>
    <form class="bg-black  shadow-2xl rounded-2xl p-12 w-full max-w-4xl mx-10 my-12 transition-all duration-300 hover:shadow-3xl" method="POST" action="/resetpassword" >
        @csrf
        @method('PATCH')
        <x-section-heading>Reset Password</x-section-heading>
        
        <x-form.form-field>
            <x-form.form-label class="mt-10" for='password'>New Password</x-form.form-label>
            <div class="mt-2">
                <x-form.form-input2 type="password" name="password" id="password"  required />
                <x-form.form-error name='password' />
            </div>
        </x-form.form-field>
        
        <x-form.form-field>
            <x-form.form-label class="mt-10"  for='password_confirmation'>New Confirmation Password</x-form.form-label>
            <div class="mt-2">
                <x-form.form-input2 type="password" name="password_confirmation" id="password_confirmation"  required />
                <x-form.form-error name='password_confirmation' />
            </div>
        </x-form.form-field>
        <div class="mt-10">
             <x-form.form-button >Reset</x-form.form-button>
        </div>
    </form>
    <form class="bg-black  shadow-2xl rounded-2xl p-12 w-full max-w-4xl mx-10 my-12 transition-all duration-300 hover:shadow-3xl" method="POST" action="/profile/delete" >
        @csrf
        @method('DELETE')
        <x-section-heading>Deactivate Acoount</x-section-heading>
        <x-form.form-field>
            <x-form.form-label  class="mt-10">Note that after deleting account you will lose all your data, and it is irrevisiable</x-form.form-label>
            <div class="mt-2">
               <x-form.form-button>Delete Account</x-form.form-button>
            </div>
        </x-form.form-field>
    </form>
    </div>
</x-profile-layout>