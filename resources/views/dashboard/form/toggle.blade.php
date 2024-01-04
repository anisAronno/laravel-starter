<x-app-layout>
    <!-- Page Title Starts -->
    <x-page-title page="Forms" header="Toggles" />

    <!-- Page Title Ends -->

    <!-- Toggle Starts -->
    <div class="space-y-6">
        <!-- Card: Basic Toggle Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Toggle</h4>

                <p class="card-subtitle">Example of basic toggle.</p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap items-center gap-4">
                        <label for="toggle-unchecked-input" class="toggle">
                            <input class="toggle-input peer sr-only" id="toggle-unchecked-input" type="checkbox"
                                checked />
                            <div class="toggle-body"></div>
                            <span class="label">Toggle Me</span>
                        </label>
                        <label for="toggle-checked-input" class="toggle">
                            <input class="toggle-input peer sr-only" id="toggle-checked-input" type="checkbox" />
                            <div class="toggle-body"></div>
                            <span class="label">Toggle Me</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Basic Toggle Ends -->

        <!-- Card: Toggle Color Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Toggle Color</h4>

                <p class="card-subtitle">Example of toggle with different colors.</p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap items-center gap-4">
                        <label for="toggle-primary" class="toggle toggle-primary group">
                            <input class="toggle-input peer sr-only" id="toggle-primary" type="checkbox" checked />
                            <div class="toggle-body"></div>
                            <span class="label">Primary</span>
                        </label>
                        <label for="toggle-secondary" class="toggle toggle-secondary group">
                            <input class="toggle-input peer sr-only" id="toggle-secondary" type="checkbox" checked />
                            <div class="toggle-body"></div>
                            <span class="label">Secondary</span>
                        </label>
                        <label for="toggle-success" class="toggle toggle-success group">
                            <input class="toggle-input peer sr-only" id="toggle-success" type="checkbox" checked />
                            <div class="toggle-body"></div>
                            <span class="label">Success</span>
                        </label>
                        <label for="toggle-danger" class="toggle toggle-danger group">
                            <input class="toggle-input peer sr-only" id="toggle-danger" type="checkbox" checked />
                            <div class="toggle-body"></div>
                            <span class="label">Danger</span>
                        </label>
                        <label for="toggle-warning" class="toggle toggle-warning group">
                            <input class="toggle-input peer sr-only" id="toggle-warning" type="checkbox" checked />
                            <div class="toggle-body"></div>
                            <span class="label">Warning</span>
                        </label>
                        <label for="toggle-info" class="toggle toggle-info group">
                            <input class="toggle-input peer sr-only" id="toggle-info" type="checkbox" checked />
                            <div class="toggle-body"></div>
                            <span class="label">Info</span>
                        </label>
                        <label for="toggle-dark" class="toggle toggle-dark group">
                            <input class="toggle-input peer sr-only" id="toggle-dark" type="checkbox" checked />
                            <div class="toggle-body"></div>
                            <span class="label">Dark</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Toggle Color Ends -->

        <!-- Card: Toggle Size Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Toggle Size</h4>

                <p class="card-subtitle">Example of toggle with different sizes.</p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap items-center gap-4">
                        <label for="toggle-sm" class="toggle toggle-sm">
                            <input class="toggle-input peer sr-only" id="toggle-sm" type="checkbox" checked />
                            <div class="toggle-body"></div>
                            <span class="label label-sm">Small</span>
                        </label>
                        <label for="toggle-md" class="toggle toggle-md">
                            <input class="toggle-input peer sr-only" id="toggle-md" type="checkbox" />
                            <div class="toggle-body"></div>
                            <span class="label">Medium</span>
                        </label>
                        <label for="toggle-lg" class="toggle toggle-lg">
                            <input class="toggle-input peer sr-only" id="toggle-lg" type="checkbox" />
                            <div class="toggle-body"></div>
                            <span class="label label-lg">Large</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Toggle Size Ends -->

        <!-- Card:  Disabled Toggle Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Disabled Toggle</h4>

                <p class="card-subtitle">Example of disabled toggle.</p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap items-center gap-4">
                        <label for="disabled-checked-toggle" class="toggle">
                            <input class="toggle-input peer sr-only" id="disabled-checked-toggle" type="checkbox"
                                checked disabled />
                            <div class="toggle-body"></div>
                            <span class="label label-disabled"> Disabled Toggle </span>
                        </label>
                        <label for="disabled-unchecked-toggle" class="toggle">
                            <input class="toggle-input peer sr-only" id="disabled-unchecked-toggle" type="checkbox"
                                disabled />
                            <div class="toggle-body"></div>
                            <span class="label label-disabled"> Disabled Toggle </span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card:  Disabled Toggle Ends -->
    </div>
    <!-- Toggle Ends -->
</x-app-layout>
