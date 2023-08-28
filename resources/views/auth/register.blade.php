<x-guest-layout>
    <x-authentication-card>
             <x-slot name="logo">
                 <img src="{{ url('admin/assets/images/favicon.png') }}" />
             </x-slot>

        <x-validation-errors class="mb-4"/>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Nama') }}"/>
                <x-input
                    id="name"
                    class="block mt-1 w-full"
                    type="text"
                    name="name"
                    :value="old('name')"
                    required="required"
                    autofocus="autofocus"
                    autocomplete="name"/>
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}"/>
                <x-input
                    id="email"
                    class="block mt-1 w-full"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required="required"
                    autocomplete="username"/>
            </div>

            <div class="mt-4">
                <x-label for="phone" value="{{ __('No Handphone') }}"/>
                <x-input
                    id="phone"
                    class="block mt-1 w-full"
                    type="number"
                    name="phone"
                    :value="old('phone')"
                    required="required"
                    autocomplete="username"/>
            </div>

            <div class="mt-4">
                <x-label for="address" value="{{ __('Alamat') }}"/>
                <x-input
                    id="address"
                    class="block mt-1 w-full"
                    type="text"
                    name="address"
                    :value="old('address')"
                    required="required"
                    autocomplete="username"/>
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}"/>
                <div class="relative">
                    <x-input
                        id="password"
                        class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required="required"
                        autocomplete="new-password"/>
                    <button
                        type="button"
                        id="togglePassword"
                        class="absolute right-0 top-1/2 transform -translate-y-1/2 px-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-5 h-5">
                            <path
                                d="M12 2c3.866 0 7 3.134 7 7s-3.134 7-7 7-7-3.134-7-7 3.134-7 7-7zm0 2c2.761 0 5 2.239 5 5s-2.239 5-5 5-5-2.239-5-5 2.239-5 5-5zm-2 7h4"/>
                        </svg>
                    </button>
                </div>
            </div>

            <script>
                const togglePassword = document.getElementById('togglePassword');
                const passwordInput = document.getElementById('password');

                togglePassword.addEventListener('click', function () {
                    const type = passwordInput.getAttribute('type') === 'password'
                        ? 'text'
                        : 'password';
                    passwordInput.setAttribute('type', type);
                    this
                        .classList
                        .toggle('active');
                });
            </script>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Konfirmasi Password') }}"/>
                <div class="relative">
                    <x-input
                        id="password_confirmation"
                        class="block mt-1 w-full"
                        type="password"
                        name="password_confirmation"
                        required="required"
                        autocomplete="new-password"/>
                    <button
                        type="button"
                        id="togglePasswordConfirmation"
                        class="absolute right-0 top-1/2 transform -translate-y-1/2 px-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-5 h-5">
                            <path
                                d="M12 2c3.866 0 7 3.134 7 7s-3.134 7-7 7-7-3.134-7-7 3.134-7 7-7zm0 2c2.761 0 5 2.239 5 5s-2.239 5-5 5-5-2.239-5-5 2.239-5 5-5zm-2 7h4"/>
                        </svg>
                    </button>
                </div>
            </div>

            <script>
                const togglePasswordConfirmation = document.getElementById('togglePasswordConfirmation');
                const passwordConfirmationInput = document.getElementById(
                    'password_confirmation'
                );

                togglePasswordConfirmation.addEventListener('click', function () {
                    const type = passwordConfirmationInput.getAttribute('type') === 'password'
                        ? 'text'
                        : 'password';
                    passwordConfirmationInput.setAttribute('type', type);
                    this
                        .classList
                        .toggle('active');
                });
            </script>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-label for="terms">
                    <div class="flex items-center">
                        <x-checkbox name="terms" id="terms" required="required"/>

                        <div class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a
                                target="_blank"
                                href="'.route('terms.show').'"
                                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>', 'privacy_policy' => '<a
                                target="_blank"
                                href="'.route('policy.show').'"
                                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>', ]) !!}
                        </div>
                    </div>
                </x-label>
            </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('login') }}">
                    {{ __('Sudah Memiliki Akun?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Daftar') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>