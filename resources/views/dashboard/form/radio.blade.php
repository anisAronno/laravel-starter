<x-app-layout>
    <!-- Page Title Starts --> 
    <x-page-title page="Forms" header="Radios" />
    <!-- Page Title Ends -->

    <!-- Radio Starts -->
    <div class="space-y-6">
        <!-- Card: Basic Radio Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Radio</h4>
                <p class="card-subtitle">
                    Use the <code>radio</code> class to create a radio button. You can also use the
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap gap-4">
                        <div class="flex items-center gap-1.5">
                            <input id="checked" class="radio" type="radio" name="basic-radio" checked />
                            <label for="checked" class="label">Checked</label>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <input id="unchecked" type="radio" class="radio" name="basic-radio" />
                            <label for="unchecked" class="label">Unchecked</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Basic Radio Ends -->

        <!-- Card: Radio Color Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Radio Colors</h4>
                <p class="card-subtitle">
                    Use <code>radio-{color}</code> class to change the color of the radio button.
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap gap-4">
                        <div class="flex items-center gap-1.5">
                            <input id="radio-primary" class="radio radio-primary" type="radio" name="radio-color"
                                checked />
                            <label for="radio-primary" class="label">Primary</label>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <input id="radio-secondary" class="radio radio-secondary" type="radio"
                                name="radio-color" />
                            <label for="radio-secondary" class="label"> Secondary </label>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <input id="radio-success" class="radio radio-success" type="radio" name="radio-color" />
                            <label for="radio-success" class="label">Success</label>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <input id="radio-danager" class="radio radio-danager" type="radio" name="radio-color" />
                            <label for="radio-danager" class="label">Danger</label>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <input id="radio-warning" class="radio radio-warning" type="radio" name="radio-color" />
                            <label for="radio-warning" class="label">Warning</label>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <input id="radio-info" class="radio radio-info" type="radio" name="radio-color" />
                            <label for="radio-info" class="label">Info</label>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <input id="radio-dark" class="radio radio-dark" type="radio" name="radio-color" />
                            <label for="radio-dark" class="label">Dark</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Radio Color Ends -->

        <!-- Card: Radio Size Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Radio Sizes</h4>
                <p class="card-subtitle">
                    Use <code>radio-sm</code>, <code>radio-md</code> and <code>radio-lg</code> class to change the size
                    of the radio button.
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap gap-4">
                        <div class="flex items-center gap-1.5">
                            <input id="radio-sm" class="radio radio-sm" type="radio" name="radio-size" checked />
                            <label for="radio-sm" class="label label-sm"> Small </label>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <input id="radio-md" class="radio radio-md" type="radio" name="radio-size" />
                            <label for="radio-md" class="label">Medium</label>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <input id="radio-lg" class="radio radio-lg" type="radio" name="radio-size" />
                            <label for="radio-lg" class="label label-lg"> Large </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Radio Size Ends -->

        <!-- Card: Disabled Radio Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Disabled Radio</h4>
                <p class="card-subtitle">Use <code>disabled</code> attribute to disable the radio button.</p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap gap-4">
                        <div class="flex items-center gap-1.5">
                            <input id="disabled" type="radio" class="radio" name="disabled-radio" disabled
                                checked />
                            <label for="disabled" class="label label-disabled"> Checked Disabled </label>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <input id="disabled" type="radio" class="radio" name="disabled-radio" disabled />
                            <label for="disabled" class="label label-disabled"> Unchecked Disabled </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Disabled Radio Ends -->

        <!-- Card: Custom Radio Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Custom Radio</h4>
                <p class="card-subtitle">Example of custom radio.</p>

                <div class="code-viewer mt-4">
                    <h6>Select Plane</h6>

                    <div class="mt-4 grid max-w-5xl grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-3">
                        <label for="custom-radio-card-startup" class="relative">
                            <input id="custom-radio-card-startup" class="zero-sr-only peer" type="radio"
                                name="custom-radio-card" checked />
                            <div
                                class="cursor-pointer rounded-primary border border-slate-300 bg-white p-4 shadow peer-checked:border-primary-500 peer-checked:ring-1 peer-checked:ring-primary-500 dark:border-slate-600 dark:bg-slate-800">
                                <div class="flex flex-col">
                                    <h6>Startup</h6>
                                    <span class="mt-1 text-sm text-gray-500 dark:text-gray-400"> 12GB/6 CPUs </span>
                                    <span class="mt-6 text-sm font-medium text-gray-600 dark:text-slate-300">
                                        160 GB SSD disk
                                    </span>
                                </div>
                            </div>
                            <div class="absolute right-4 top-4 hidden h-5 w-5 peer-checked:block">
                                <i class="text-primary-600" data-feather="check-circle" height="100%"
                                    width="100%"></i>
                            </div>
                        </label>
                        <label for="custom-radio-card-business" class="relative">
                            <input id="custom-radio-card-business" class="zero-sr-only peer" type="radio"
                                name="custom-radio-card" />
                            <div
                                class="cursor-pointer rounded-primary border border-slate-300 bg-white p-4 shadow peer-checked:border-primary-500 peer-checked:ring-1 peer-checked:ring-primary-500 dark:border-slate-600 dark:bg-slate-800">
                                <div class="flex flex-col">
                                    <h6>Business</h6>
                                    <span class="mt-1 text-sm text-gray-500 dark:text-gray-400"> 16GB/8 CPUs </span>
                                    <span class="mt-6 text-sm font-medium text-gray-600 dark:text-slate-300">
                                        512 GB SSD disk
                                    </span>
                                </div>
                            </div>
                            <div class="absolute right-4 top-4 hidden h-5 w-5 peer-checked:block">
                                <i class="text-primary-600" data-feather="check-circle" height="100%"
                                    width="100%"></i>
                            </div>
                        </label>
                        <label for="custom-radio-card-enterprise" class="relative">
                            <input id="custom-radio-card-enterprise" class="zero-sr-only peer" type="radio"
                                name="custom-radio-card" />
                            <div
                                class="cursor-pointer rounded-primary border border-slate-300 bg-white p-4 shadow peer-checked:border-primary-500 peer-checked:ring-1 peer-checked:ring-primary-500 dark:border-slate-600 dark:bg-slate-800">
                                <div class="flex flex-col">
                                    <h6>Enterprise</h6>
                                    <span class="mt-1 text-sm text-gray-500 dark:text-gray-400"> 32GB/12 CPUs </span>
                                    <span class="mt-6 text-sm font-medium text-gray-600 dark:text-slate-300">
                                        1024 GB SSD disk
                                    </span>
                                </div>
                            </div>
                            <div class="absolute right-4 top-4 hidden h-5 w-5 peer-checked:block">
                                <i class="text-primary-600" data-feather="check-circle" height="100%"
                                    width="100%"></i>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Custom Radio Ends -->
    </div>
    <!-- Radio Ends -->
</x-app-layout>
