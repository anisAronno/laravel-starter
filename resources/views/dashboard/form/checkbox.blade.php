<x-app-layout>
    <!-- Page Title Starts -->
    
    <x-page-title page="Forms" header="Checkboxes" />

    <!-- Page Title Ends -->

    <!-- Checkbox Starts -->
    <div class="space-y-6">
        <!-- Card: Basic Checkbox Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Checkbox</h4>

                <p class="card-subtitle">Use the <code>checkbox</code> class to create a basic checkbox.</p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap gap-4">
                        <div class="flex items-center gap-1.5">
                            <input id="checked" class="checkbox" type="checkbox" name="basic-checkbox"
                                checked="true" />
                            <label for="checked" class="label">Checked</label>
                        </div>

                        <div class="flex items-center gap-1.5">
                            <input id="unchecked" class="checkbox" type="checkbox" name="basic-checkbox" />
                            <label for="unchecked" class="label">Unchecked</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Basic Checkbox Ends -->

        <!-- Card: Checkbox Color Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Checkbox Colors</h4>

                <p class="card-subtitle">
                    Use the <code>checkbox-{color}</code> class to change the color of the checkbox.
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap gap-4">
                        <div class="flex items-center gap-1.5">
                            <input id="checkbox-primary" class="checkbox checkbox-primary" type="checkbox"
                                name="checkbox-color" checked />
                            <label for="checkbox-primary" class="label">Primary</label>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <input id="checkbox-secondary" class="checkbox checkbox-secondary" type="checkbox"
                                name="checkbox-color" checked />
                            <label for="checkbox-secondary" class="label">Secondary</label>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <input id="checkbox-success" class="checkbox checkbox-success" type="checkbox"
                                name="checkbox-color" checked />
                            <label for="checkbox-success" class="label">Success</label>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <input id="checkbox-danger" class="checkbox checkbox-danger" type="checkbox"
                                name="checkbox-color" checked />
                            <label for="checkbox-danger" class="label">Danger</label>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <input id="checkbox-warning" class="checkbox checkbox-warning" type="checkbox"
                                name="checkbox-color" checked />
                            <label for="checkbox-warning" class="label">Warning</label>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <input id="checkbox-info" class="checkbox checkbox-info" type="checkbox"
                                name="checkbox-color" checked />
                            <label for="checkbox-info" class="label">info</label>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <input id="checkbox-dark" class="checkbox checkbox-dark" type="checkbox"
                                name="checkbox-color" checked />
                            <label for="checkbox-dark" class="label">Dark</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Checkbox Color Ends -->

        <!-- Card: Checkbox Size Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Checkbox Sizes</h4>

                <p class="card-subtitle">
                    Use the <code>checkbox-sm</code>, <code>checkbox-md</code> and <code>checkbox-lg</code> classes to
                    change the size of the checkbox.
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap gap-4">
                        <div class="flex items-center gap-1.5">
                            <input id="checkbox-sm" class="checkbox checkbox-sm" type="checkbox" name="checkbox-size"
                                checked />
                            <label for="checkbox-sm" class="label label-sm">Small</label>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <input id="checkbox-md" class="checkbox checkbox-md" type="checkbox"
                                name="checkbox-size" />
                            <label for="checkbox-md" class="label">Medium</label>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <input id="checkbox-lg" class="checkbox checkbox-lg" type="checkbox"
                                name="checkbox-size" />
                            <label for="checkbox-lg" class="label label-lg">Large</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Checkbox Size Ends -->

        <!-- Card: Disabled Checkbox Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Disabled Checkbox</h4>

                <p class="card-subtitle">Use the <code>disabled</code> attribute to disable the checkbox.</p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap gap-4">
                        <div class="flex items-center gap-1.5">
                            <input id="checked-disabled" class="checkbox" type="checkbox" name="basic-checkbox"
                                checked disabled />
                            <label for="checked-disabled" class="label label-disabled" aria-disabled="true">Checked
                                Disabled</label>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <input id="unchecked-disabled" class="checkbox" type="checkbox" name="basic-checkbox"
                                disabled />
                            <label for="unchecked-disabled" class="label label-disabled"
                                aria-disabled="true">Unchecked Disabled</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Disabled Checkbox Ends -->

        <!-- Card: Custom Checkbox Icon Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Custom Checkbox Icon</h4>

                <p class="card-subtitle">Example of custom checkbox with icon.</p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap gap-4">
                        <label for="checkbox-icon-heart" class="inline-flex text-sm font-medium dark:text-slate-300">
                            <div class="rounded-full p-2 text-primary-500 transition-colors duration-150 focus-within:bg-primary-100 hover:bg-primary-100"
                                role="button">
                                <input id="checkbox-icon-heart" class="zero-sr-only peer" type="checkbox"
                                    name="checkbox-icon" checked />
                                <i class="peer-checked:fill-primary-500" data-feather="heart"></i>
                            </div>
                        </label>
                        <label for="checkbox-icon-bookmark"
                            class="inline-flex text-sm font-medium dark:text-slate-300">
                            <div class="rounded-full p-2 text-primary-500 transition-colors duration-150 focus-within:bg-primary-100 hover:bg-primary-100"
                                role="button">
                                <input id="checkbox-icon-bookmark" class="zero-sr-only peer" type="checkbox"
                                    name="checkbox-icon" />
                                <i class="peer-checked:fill-primary-500" data-feather="bookmark"></i>
                            </div>
                        </label>
                        <label class="inline-flex text-sm font-medium dark:text-slate-300">
                            <div class="rounded-full p-2 text-primary-500 transition-colors duration-150 focus-within:bg-primary-100 hover:bg-primary-100"
                                role="button">
                                <input id="checkbox-icon-sun" class="zero-sr-only peer" type="checkbox"
                                    name="checkbox-icon" />
                                <i class="block peer-checked:hidden" data-feather="sun"></i>
                                <i class="hidden peer-checked:block" data-feather="moon"></i>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Custom Checkbox Icon Ends -->

        <!-- Card: Custom Checkbox Card Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Custom Checkbox With Card</h4>

                <p class="card-subtitle">Example of custom checkbox with card.</p>

                <div class="code-viewer mt-4">
                    <div class="grid max-w-6xl grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-4">
                        <label for="checkbox-card-react">
                            <input id="checkbox-card-react" type="checkbox" class="zero-sr-only peer" checked />
                            <div
                                class="cursor-pointer rounded-primary border border-slate-300 bg-white p-6 shadow peer-checked:border-primary-500 peer-checked:ring-1 peer-checked:ring-primary-500 dark:border-slate-600 dark:bg-slate-800">
                                <div class="mb-2">
                                    <i class="ti ti-brand-react text-4xl text-[#61DAFB]"></i>
                                </div>
                                <h6>React JS</h6>
                                <p class="text-xs text-slate-500 dark:text-slate-300">
                                    A JavaScript library for building user interfaces
                                </p>
                            </div>
                        </label>
                        <label for="checkbox-card-vue">
                            <input id="checkbox-card-vue" type="checkbox" class="zero-sr-only peer" />
                            <div
                                class="cursor-pointer rounded-primary border border-slate-300 bg-white p-6 shadow peer-checked:border-primary-500 peer-checked:ring-1 peer-checked:ring-primary-500 dark:border-slate-600 dark:bg-slate-800">
                                <div class="mb-2">
                                    <i class="ti ti-brand-vue text-4xl text-[#42D392]"></i>
                                </div>
                                <h6>Vue JS</h6>
                                <p class="text-xs text-slate-500 dark:text-slate-300">
                                    A JavaScript library for building user interfaces.
                                </p>
                            </div>
                        </label>
                        <label for="checkbox-card-angular">
                            <input id="checkbox-card-angular" type="checkbox" class="zero-sr-only peer" />
                            <div
                                class="cursor-pointer rounded-primary border border-slate-300 bg-white p-6 shadow peer-checked:border-primary-500 peer-checked:ring-1 peer-checked:ring-primary-500 dark:border-slate-600 dark:bg-slate-800">
                                <div class="mb-2">
                                    <i class="ti ti-brand-angular text-4xl text-[#C3002F]"></i>
                                </div>
                                <h6>Angular JS</h6>
                                <p class="text-xs text-slate-500 dark:text-slate-300">
                                    A JavaScript library for building user interfaces.
                                </p>
                            </div>
                        </label>
                        <label for="checkbox-card-svelte">
                            <input id="checkbox-card-svelte" type="checkbox" class="zero-sr-only peer" />
                            <div
                                class="cursor-pointer rounded-primary border border-slate-300 bg-white p-6 shadow peer-checked:!border-primary-500 peer-checked:ring-1 peer-checked:ring-primary-500 dark:border-slate-600 dark:bg-slate-800">
                                <div class="mb-2">
                                    <i class="ti ti-brand-svelte text-4xl text-[#ff4700]"></i>
                                </div>
                                <h6>Svelte Js</h6>
                                <p class="text-xs text-slate-500 dark:text-slate-300">
                                    A JavaScript library for building user interfaces.
                                </p>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Custom Checkbox Card Ends -->
    </div>
    <!-- Checkbox Ends -->
</x-app-layout>
