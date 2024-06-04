<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="text-center">
             <h1 style="font-size:20px;margin-top:10px;margin-bottom:5px;"><strong>Add User</strong></h1>
        </div>
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-4">
        <x-input-label for="department" :value="__('Department')" />
            <select class="form-select" id="department" name="department" style="width:100%;" aria-label="Default select example">
            <option disabled selected>Open this select menu</option>
            <option value="0">Digital Transformation</option>
            <option value="1">Academics</option>
            <option value="2">Human Resources</option>
            <option value="3">Admissions</option>
            <option value="4">Operations</option>
            <option value="5">Marketing</option>
            <option value="6">Finance</option>
            <option value="7">Registrar</option>
            <option value="8">Library</option>
            <option value="9">Admin</option>
            </select>
        </div>

        <div class="mt-4">
        <x-input-label for="user_type" :value="__('User Type')" />
            <select class="form-select" name="user_type" style="width:100%;" aria-label="Default select example">
            <option disabled selected>Open this select menu</option>
            <option value="0">Regular</option>
            <option value="1">Admin</option>
            </select>
        </div>


        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Add User') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
