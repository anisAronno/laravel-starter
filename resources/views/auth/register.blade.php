<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="card mx-auto w-full max-w-md">
            <div class="card-body px-10 py-12">
                <div class="flex flex-col items-center justify-center">
                    <x-application-logo class="fill-current text-gray-500" />
                    <h5 class="mt-4">Create Account</h5>
                    <x-auth-session-status class="my-4" :status="session('status')" />
                </div>

                <div class="mt-6 flex flex-col gap-5">
                    <!-- Fullname -->
                    <div>
                        <label class="label mb-1">Full Name</label>
                        <input type="text" class="input" placeholder="Enter Your Full Name" name="name"
                            :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <!-- Email -->
                    <div>
                        <label class="label mb-1">Email</label>
                        <input type="text" class="input" placeholder="Enter Your Email" name="email"
                            :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <!-- Password -->
                    <div>
                        <label class="label mb-1">Password</label>
                        <input type="password" class="input" placeholder="Password" type="password" name="password"
                            required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <!-- Confirm Password-->
                    <div>
                        <label class="label mb-1">Confirm Password</label>
                        <input type="password" class="input" placeholder="Confirm Password" type="password"
                            name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>
                <!-- Remember & Forgot-->
                <div class="mt-2 flex">
                    <div class="flex items-center gap-1.5">
                        <input type="checkbox"
                            class="h-4 w-4 rounded border-slate-300 bg-transparent text-primary-500 shadow-sm transition-all duration-150 checked:hover:shadow-none focus:ring-0 focus:ring-offset-0 enabled:hover:shadow disabled:cursor-not-allowed disabled:opacity-50 dark:border-slate-600"
                            id="remember-me" />
                        <label for="remember-me" class="label text-slate-400">I accept</label>
                    </div>
                    <a href="#" class="ml-2 text-sm text-primary-500 hover:underline">Terms & Condition</a>
                </div>
                <!-- Login Button -->
                <div class="mt-8">
                    <button class="btn btn-primary w-full py-2.5"> {{ __('Register') }} </button>
                    <div class="relative mt-4 flex h-6 items-center justify-center py-4">
                        <div class="h-[1px] w-full bg-slate-200 dark:bg-slate-600"></div>
                        <div class="t absolute w-10 bg-white text-center text-xs text-slate-400 dark:bg-slate-800">Or
                        </div>
                    </div>
                    <button class="btn btn-outline-primary mt-4 w-full gap-3 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="24px" height="24px">
                            <path fill="#FFC107"
                                d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z" />
                            <path fill="#FF3D00"
                                d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z" />
                            <path fill="#4CAF50"
                                d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z" />
                            <path fill="#1976D2"
                                d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z" />
                        </svg>
                        <span>Continue With Google</span>
                    </button>
                </div>
                <!-- Don't Have An Account -->
                <div class="mt-4 flex justify-center">
                    <p class="text-sm text-slate-600 dark:text-slate-300">
                        Already have an Account?
                        <a href="{{ route('login') }}" class="text-sm text-primary-500 hover:underline">Login</a>
                    </p>
                </div>
            </div>
        </div>
    </form>
</x-guest-layout>
