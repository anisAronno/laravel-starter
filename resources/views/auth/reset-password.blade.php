<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="card mx-auto w-full max-w-md">
            <div class="card-body px-10 py-12">
                <div class="flex flex-col items-center justify-center">
                    <x-application-logo class=" fill-current text-gray-500" />
                    <h5 class="mt-4">Reset Your Password</h5>
                </div>

                <div class="mt-6 flex flex-col gap-5">
                    <!-- Email -->
                    <div>
                        <label for="email" class="label mb-1">Email</label>
                        <input id="email" class="input" placeholder="Email" type="email" name="email"
                            value="{{ old('email', $request->email) }}" required autofocus autocomplete="email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- New Password -->
                    <div>
                        <label for="password" class="label mb-1">New Password</label>
                        <input id="password" type="password" class="input" placeholder="New Password" name="password"
                            required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <!--Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="label mb-1">Confirm Password</label>
                        <input id="password_confirmation" type="password" class="input" placeholder="Confirm Password"
                            name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                    <!-- Reset Password -->
                    <div class="mt-2">
                        <button class="btn btn-primary w-full py-2.5"> {{ __('Reset Password') }}
                        </button>
                    </div>
                    <!-- Go back & login -->
                    <div class="flex justify-center">
                        <p class="text-sm text-slate-600 dark:text-slate-300">
                            Go back to
                            <a href="{{ route('login') }}" class="text-sm text-primary-500 hover:underline">Login</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-guest-layout>
