<x-app-layout>
    <!-- Page Title Starts -->

    <x-page-title page="User" header="User List" />

    <!-- Page Title Ends -->
    <!-- User Profile Start  -->
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-4">
        <!-- Left Section Start  -->
        <section class="col-span-1 flex h-min w-full flex-col gap-6 lg:sticky lg:top-20">
            <!-- User Avatar & Status  -->
            <div class="card">
                <div class="card-body flex flex-col items-center   w-full">
                    <div class="relative my-2 h-24 w-24 rounded-full">
                        <img src="{{ $user?->avatar }}" alt="="{{ $user?->name }}" id="user-image"
                            class="h-full w-full rounded-full" />
                        <span data-toggle="modal" data-target="#modal-centered-media"
                            class="absolute bottom-0 right-0 flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-slate-50 p-2 dark:bg-slate-900">
                            <span class="text-slate-600 dark:text-slate-300">
                                <i class="w-full" data-feather="camera"></i>
                            </span>
                            <input type="file" accept="image/jpeg, image/png, image/jpg" class="hidden"
                                id="upload-avatar" />
                        </span>
                    </div>
                    <h2 class="text-[16px] font-medium text-slate-700 dark:text-slate-200">{{ $user->name }}</h2>
                    <p class="text-sm font-normal tracking-tight text-slate-400 space-y-1 mt-2">
                        @foreach ($user->roles as $role)
                            <span class="flex gap-1 items-center">
                                <x-icons.sheild class="text-blue-400" />
                                <span class="text-gray-700 dark:text-gray-100 ">
                                    {{ $role->name }}
                                </span>
                            </span>
                        @endforeach
                    </p>
                    <div class="badge {{ $user->status->color() }} my-3 md:my-5 inline-block px-4 text-md md:text-lg">
                        {{ $user->status }}</div>
                </div>
            </div>

            <!-- Social Link  -->
            <div class="card">
                <div class="card-body">
                    <div class="mb-2 flex items-center justify-between">
                        <h3 class="text-[16px] font-semibold text-slate-700 dark:text-slate-200">Social Media</h3>
                        <button data-toggle="modal" data-target="#social-link"
                            class="cursor-pointer text-sm text-slate-600 duration-150 ease-in hover:text-primary-500 dark:text-slate-300 dark:hover:text-primary-500">
                            <i class="h-5" data-feather="edit"></i>
                        </button>
                    </div>
                    <!-- Facebook  -->
                    <div class="my-3 flex items-center gap-4">
                        <i class="h-8 text-slate-600 dark:text-slate-300" data-feather="facebook"></i>
                        <div>
                            <h5 class="text-sm font-medium text-slate-700 dark:text-slate-300">Facebook</h5>
                            <a href="#" class="cursor-not-allowed">
                                <p class="text-sm font-normal text-slate-400">Not connected</p>
                            </a>
                        </div>
                    </div>
                    <!-- Instagram  -->
                    <div class="my-3 flex items-center gap-4">
                        <i class="h-8 text-slate-600 dark:text-slate-300" data-feather="instagram"></i>
                        <div>
                            <h5 class="text-sm font-medium text-slate-700 dark:text-slate-300">Instagram</h5>
                            <a href="#">
                                <p class="text-sm font-normal text-primary-500">@ahmedshakil</p>
                            </a>
                        </div>
                    </div>
                    <!-- Twitter  -->
                    <div class="my-3 flex items-center gap-4">
                        <i class="h-8 text-slate-600 dark:text-slate-300" data-feather="twitter"></i>
                        <div>
                            <h5 class="text-sm font-medium text-slate-700 dark:text-slate-300">Twitter</h5>
                            <a href="#">
                                <p class="text-sm font-normal text-primary-500">@ahmedshakil</p>
                            </a>
                        </div>
                    </div>
                    <!-- LinkedIn  -->
                    <div class="my-3 flex items-center gap-4">
                        <i class="h-8 text-slate-600 dark:text-slate-300" data-feather="linkedin"></i>
                        <div>
                            <h5 class="text-sm font-medium text-slate-700 dark:text-slate-300">LinkedIn</h5>
                            <a href="#">
                                <p class="text-sm font-normal text-primary-500">ahmedshakil</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Left Section End  -->
        <!-- Right Section Start  -->
        <section class="col-span-1 flex w-full flex-1 flex-col gap-6 lg:col-span-3 lg:w-auto">
            <!-- Personal Details  -->
            <div class="card">
                <div class="card-body">
                    @include('profile.partials.update-profile-information-form')

                </div>
            </div>
            <!-- Change Password  -->
            <div class="card">
                <div class="card-body">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
            <!-- Preferences  -->
            <div class="card">
                <div class="card-body">
                    <h2 class="text-[16px] font-semibold text-slate-700 dark:text-slate-300">Preferences</h2>
                    <p class="mb-4 text-sm font-normal text-slate-400">
                        Make the most of your experience by customizing your preferences
                    </p>
                    <form method="get" class="flex flex-col gap-5">
                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                            <label class="label" for="new-password">
                                <span class="my-1 block">Time Zone</span>
                                <select class="tom-select">
                                    <option value="1" selected>GMT - 07:00 Pacific Time</option>
                                    <option value="2">UTC + 06:00 Dhaka Time</option>
                                    <option value="3">UTC + 07:00 Samoa Time</option>
                                    <option value="4">UTC + 07:00 Bangkok Time</option>
                                    <option value="5">UTC + 06:00 Omsk Time</option>
                                    <option value="6">UTC + 06:00 Yangon Time</option>
                                    <option value="7">UTC + 05:45 Kathmandu Time</option>
                                    <option value="8">UTC + 05:30 Chennai Time</option>
                                    <option value="9">UTC + 08:00 Baja California Time</option>
                                    <option value="10">UTC + 09:00 Alaska Time</option>
                                    <option value="11">UTC + 06:00 Central America Time</option>
                                </select>
                            </label>
                            <label class="label" for="confirm-password">
                                <span class="my-1 block">Currency</span>
                                <select class="tom-select">
                                    <option value="1">KWD</option>
                                    <option value="2">JOD</option>
                                    <option value="3">GBP</option>
                                    <option value="4">CHF</option>
                                    <option value="5" selected>USD</option>
                                    <option value="6">EUR</option>
                                    <option value="7">KYD</option>
                                </select>
                            </label>
                        </div>
                        <!-- Button  -->
                        <div class="flex items-center justify-end gap-4">
                            <button type="cancel"
                                class="btn border border-slate-300 text-slate-500 dark:border-slate-700 dark:text-slate-300">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Notification -->
            <div class="card">
                <div class="card-body">
                    <h2 class="text-[16px] font-semibold text-slate-700 dark:text-slate-300">Notification</h2>
                    <p class="mb-4 text-sm font-normal text-slate-400">Manage when you receive updates and alerts</p>
                    <label for="show-desktop-notification" class="toggle my-2 flex items-center justify-between">
                        <div class="label">
                            <h3 class="text-sm font-medium text-slate-700 dark:text-slate-300">
                                Show desktop notification
                            </h3>
                            <p class="mb-4 text-sm font-normal text-slate-400">
                                Stay informed and in control with desktop notifications
                            </p>
                        </div>
                        <div class="relative">
                            <input class="toggle-input peer sr-only" id="show-desktop-notification"
                                type="checkbox" />
                            <div class="toggle-body"></div>
                        </div>
                    </label>
                    <label for="send-email-notification" class="toggle my-2 flex items-center justify-between">
                        <div class="label">
                            <h3 class="text-sm font-medium text-slate-700 dark:text-slate-300">Send email notification
                            </h3>
                            <p class="mb-4 text-sm font-normal text-slate-400">
                                Stay up-to-date even when you're away from the platform
                            </p>
                        </div>
                        <div class="relative">
                            <input class="toggle-input peer sr-only" id="send-email-notification" type="checkbox"
                                checked="" />
                            <div class="toggle-body"></div>
                        </div>
                    </label>
                    <label for="show-chat-notification" class="toggle my-2 flex items-center justify-between">
                        <div class="label">
                            <h3 class="text-sm font-medium text-slate-700 dark:text-slate-300">Show chat notification
                            </h3>
                            <p class="mb-4 text-sm font-normal text-slate-400">
                                Stay up-to-date even when you're away from the platform
                            </p>
                        </div>
                        <div class="relative">
                            <input class="toggle-input peer sr-only" id="show-chat-notification" type="checkbox"
                                checked="" />
                            <div class="toggle-body"></div>
                        </div>
                    </label>
                </div>
            </div>
            <!-- Delete Account -->
            @if ($user->isDeletable)
                <div class="card">
                    <div class="card-body">
                        <div class="max-w-xl">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>
            @endif
        </section>
        <!-- Right Section End -->
    </div>
    <!-- Social Link Modal Box -->
    <div class="modal" id="social-link">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="flex items-center justify-between">
                        <h6>Social Media</h6>
                        <button type="button"
                            class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
                            data-dismiss="modal">
                            <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <form method="post" class="-mt-1.5 flex w-full flex-col space-y-3">
                        <div>
                            <label class="label" for="facebook"> Facebook </label>
                            <input type="text" class="input" value="" id="facebook" name="facebook" />
                        </div>

                        <div>
                            <label class="label" for="instagram"> Instragram </label>
                            <input type="text" class="input" value="https://www.instagram.com/ahmedshakil"
                                name="instagram" id="instagram" />
                        </div>

                        <div>
                            <label class="label" for="twitter"> Twitter </label>
                            <input type="text" class="input" value="https://twitter.com/ahmedshakil"
                                id="twitter" name="twitter" />
                        </div>

                        <div>
                            <label class="label" for="linkedin"> LinkedIn </label>
                            <input type="text" class="input" value="https://linkedin.com/ahmedshakil"
                                id="linkedin" name="linkedin" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="flex items-center justify-end gap-4">
                        <button type="cancel" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- User Profile End  -->
</x-app-layout>
