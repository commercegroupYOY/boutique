<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)"
                required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)"
                required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            <div>
                <x-input-label for="adress" :value="__('Adress')" />
                <x-text-input id="adress" class="block mt-1 w-full" type="adress" name="adress" :value="old('adress')"
                    required autocomplete="username" />
                <x-input-error :messages="$errors->get('adress')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="postalCode" :value="__('PostalCode')" />
                <x-text-input id="postalCode" class="block mt-1 w-full" type="postalCode" name="postalCode"
                    :value="old('postalCode')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('postalCode')" class="mt-2" />
            </div>

            <div >
                <x-input-label for="city" :value="__('City')" />
                <x-text-input id="city" class="block mt-1 w-full" type="city" name="city" :value="old('city')"
                    required autocomplete="username" />
                <x-input-error :messages="$errors->get('city')" class="mt-2" />
            </div>

            <div >
                <x-input-label for="country" :value="__('country')" />
                <x-text-input id="country" class="block mt-1 w-full" type="country" name="country" :value="old('country')"
                    required autocomplete="username" />
                <x-input-error :messages="$errors->get('country')" class="mt-2" />
            </div>

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
