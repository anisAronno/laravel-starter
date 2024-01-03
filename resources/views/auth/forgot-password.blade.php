<x-guest-layout>
    <!-- Session Status -->

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="card mx-auto w-full max-w-md">
            <div class="card-body px-10 py-12">
                <div class="flex flex-col items-center justify-center">
                    <x-application-logo class=" fill-current text-gray-500" />
                    <h5 class="m-4">Recover Your Password</h5>
                    <x-auth-session-status class="my-4" :status="session('status')" />
                </div>

                <div class="mt-6 flex flex-col gap-5">
                    <!-- Email -->
                    <div>
                        <label class="label mb-1">Email</label>
                        <input class="input" placeholder="Enter Your Email" type="email" name="email"
                            :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <!-- Recover Password -->
                    <div class="mt-2">
                        <button class="btn btn-primary w-full py-2.5"> {{ __('Email Password Reset Link') }}</button>
                    </div>
                    <!-- Go back & login -->
                    <div class="flex justify-center">
                        <p class="text-sm text-slate-600 dark:text-slate-300">
                            Go back to <a href="{{ route('login') }}"
                                class="text-sm text-primary-500 hover:underline">Login</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-guest-layout>
