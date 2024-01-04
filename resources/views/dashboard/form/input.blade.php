<x-app-layout>
    <!-- Page Title Starts -->
    <x-page-title page="Forms" header="Input" />
    <!-- Page Title End -->

    <!-- Input Starts -->
    <div class="space-y-6">
        <!-- Card: Basic Input Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Input</h4>

                <p class="card-subtitle">Use the <code>input</code> class to create a basic input.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <input type="text" class="input" placeholder="Phone" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Basic Input Ends -->

        <!-- Card: Input With Label Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Input With Label</h4>

                <p class="card-subtitle">Example of an input with label.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <label class="label label-required mb-1" for="phone">Phone</label>
                        <input type="text" class="input" id="phone" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Input With Label Ends -->

        <!-- Card: Input With Helper Text Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Input With Helper Text</h4>

                <p class="card-subtitle">Example of an input with helper text.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <input type="text" class="input" placeholder="Phone" />
                        <p class="help-text mt-1">The Phone must be a valid Phone address</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Input With Helper Text Ends -->

        <!-- Card: Input Size Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Input Sizes</h4>

                <p class="card-subtitle">
                    Use the <code>input-sm</code>, <code>input-md</code> and <code>input-lg</code> classes to create a
                    small, medium and large input respectively.
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <div class="flex flex-col gap-4">
                            <input type="text" class="input input-sm" placeholder="Phone" />
                            <input type="text" class="input input-md" placeholder="Phone" />
                            <input type="text" class="input input-lg" placeholder="Phone" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Input Size Ends -->

        <!-- Card: Input Valid Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Input Valid</h4>

                <p class="card-subtitle">Use the <code>is-valid</code> class to create a valid input.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <input type="text" class="input is-valid" placeholder="Phone" />
                        <p class="success-message mt-1">Looks good</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Input Valid Ends -->

        <!-- Card: Input Invalid Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Input Invalid</h4>

                <p class="card-subtitle">Use the <code>is-invalid</code> class to create an invalid input.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <input type="text" class="input is-invalid" placeholder="Phone" />
                        <p class="error-message mt-1">This field is required</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Input Invalid Ends -->

        <!-- Card: Input Disabled Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Input Disabled</h4>

                <p class="card-subtitle">Use the <code>disabled</code> attribute to create a disabled input.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <input type="text" class="input" placeholder="Phone" disabled />
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Input Disabled Ends -->
    </div>
    <!-- Input Ends -->
</x-app-layout>
