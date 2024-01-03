<x-app-layout>
    <!-- Page Title Start -->
    <x-page-title page="Forms" header="Textarea" />
    <!-- Page Title End -->

    <!-- Textarea Starts -->
    <div class="space-y-6">
        <!-- Card: Basic Textarea Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Textarea</h4>

                <p class="card-subtitle">Use the <code>.textarea</code> class to create a textarea.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <textarea class="textarea" placeholder="Write message"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Basic Textarea Ends -->

        <!-- Card: Textarea With Label Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Textarea With Label</h4>

                <p class="card-subtitle">Example of a textarea with label.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <label class="label label-required mb-1">Message</label>
                        <textarea class="textarea" placeholder="Write message"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Textarea With Label Ends -->

        <!-- Card: Textarea With Helper Text Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Textarea With Helper Text</h4>

                <p class="card-subtitle">Example of a textarea with helper text.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <textarea class="textarea" placeholder="Write message"></textarea>
                        <p class="help-text mt-1">Here you can provide some helper text to fill the field</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Textarea With Helper Text Ends -->

        <!-- Card: Textarea Size Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Textarea Sizes</h4>

                <p class="card-subtitle">
                    Use the <code>textarea-sm</code>, <code>textarea-md</code> and <code>textarea-lg</code> classes to
                    create a textarea of different sizes.
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <div class="flex flex-col gap-y-4">
                            <textarea class="textarea textarea-sm" placeholder="Write message"></textarea>
                            <textarea class="textarea textarea-md" placeholder="Write message"></textarea>
                            <textarea class="textarea textarea-lg" placeholder="Write message"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Textarea Size Ends -->

        <!-- Card: Valid Textarea Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Valid Textarea</h4>

                <p class="card-subtitle">Use the <code>is-valid</code> class to create a valid textarea.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <textarea class="textarea is-valid" placeholder="Write message"></textarea>
                        <p class="success-message mt-1">Looks good</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Valid Textarea Ends -->

        <!-- Card: Invalid Textarea Stars -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Invalid Textarea</h4>

                <p class="card-subtitle">Use the <code>is-invalid</code> class to create an invalid textarea.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <textarea class="textarea is-invalid" placeholder="Write message"></textarea>
                        <p class="error-message mt-1">This field is required</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Invalid Textarea Ends -->

        <!-- Card: Disabled Textarea Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Disabled Textarea</h4>

                <p class="card-subtitle">Use the <code>disabled</code> attribute to create a disabled textarea.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <textarea class="textarea" placeholder="Write message" disabled></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Disabled Textarea Ends -->
    </div>
    <!-- Textarea Ends -->
</x-app-layout>
