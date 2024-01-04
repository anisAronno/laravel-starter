<x-app-layout>
    <!-- Page Title Starts -->
    
    <x-page-title page="Forms" header="Select" />

    <!-- Page Title Ends -->

    <!-- Select Starts -->
    <div class="space-y-6">
        <!-- Card: Basic Select Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Select</h4>

                <p class="card-subtitle">
                    Use
                    <code>select</code>
                    class to create a basic select input.
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <select class="select">
                            <option value="">Select a color</option>
                            <option value="1">Green</option>
                            <option value="2">Blue</option>
                            <option value="3">Yellow</option>
                            <option value="4">Orange</option>
                            <option value="5">Red</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Basic Select Ends -->

        <!-- Card: Select Size Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Select Sizes</h4>

                <p class="card-subtitle">
                    Use <code>select-sm</code>, <code>select-md</code> or <code>select-lg</code> class to create a
                    select input with different sizes.
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <div class="flex flex-col gap-4">
                            <select class="select select-sm">
                                <option value="" selected>Select a color</option>
                                <option value="1">Green</option>
                                <option value="2">Blue</option>
                                <option value="3">Yellow</option>
                                <option value="4">Orange</option>
                                <option value="5">Red</option>
                            </select>

                            <select class="select select-md">
                                <option value="" selected>Select a color</option>
                                <option value="1">Green</option>
                                <option value="2">Blue</option>
                                <option value="3">Yellow</option>
                                <option value="4">Orange</option>
                                <option value="5">Red</option>
                            </select>

                            <select class="select select-lg">
                                <option value="" selected>Select a color</option>
                                <option value="1">Green</option>
                                <option value="2">Blue</option>
                                <option value="3">Yellow</option>
                                <option value="4">Orange</option>
                                <option value="5">Red</option>
                            </select>
                        </div>
                    </div>
                    <div class="code-viewer-source">
                        <select class="select select-sm">
                            <!-- <option value="value">label</option> -->
                        </select>
                        <select class="select select-md">
                            <!-- <option value="value">label</option> -->
                        </select>

                        <select class="select select-lg">
                            <!-- <option value="value">label</option> -->
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Select Size Ends -->

        <!-- Card: Valid Select Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Valid Select</h4>

                <p class="card-subtitle">
                    Use
                    <code>is-valid</code>
                    class to indicate a valid select input.
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <select class="select is-valid">
                            <option value="">Select a color</option>
                            <option value="1">Green</option>
                            <option value="2">Blue</option>
                            <option value="3">Yellow</option>
                            <option value="4">Orange</option>
                            <option value="5">Red</option>
                        </select>
                        <div class="success-message mt-1">Looks great</div>
                    </div>
                    <div class="code-viewer-source">
                        <select class="select select-valid">
                            <!-- <option value="value">label</option> -->
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Valid Select Ends -->

        <!-- Card: Invalid Select Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Invalid Select</h4>

                <p class="card-subtitle">
                    Use
                    <code>is-invalid</code>
                    class to indicate an invalid select input.
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <select class="select is-invalid">
                            <option value="">Select a color</option>
                            <option value="1">Green</option>
                            <option value="2">Blue</option>
                            <option value="3">Yellow</option>
                            <option value="4">Orange</option>
                            <option value="5">Red</option>
                        </select>
                        <div class="error-message mt-1">This field is required</div>
                    </div>
                    <div class="code-viewer-source">
                        <select class="select-invalid">
                            <!-- <option value="value">label</option> -->
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Invalid Select Ends -->

        <!-- Card: Disabled Select Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Disabled Select</h4>

                <p class="card-subtitle">
                    Use
                    <code>disabled</code>
                    attribute to disable a select input.
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <select class="select" disabled>
                            <option value="">Select a color</option>
                            <option value="1">Green</option>
                            <option value="2">Blue</option>
                            <option value="3">Yellow</option>
                            <option value="4">Orange</option>
                            <option value="5">Red</option>
                        </select>
                    </div>
                    <div class="code-viewer-source">
                        <select class="select" disabled>
                            <!-- <option value="value">label</option> -->
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Disabled Select Ends -->

        <!-- Card: Disabled Select Option Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Disabled Select Option</h4>

                <p class="card-subtitle">Use <code>disabled</code> attribute on an option to disable it.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <select class="select">
                            <option value="">Select a color</option>
                            <option value="1">Green</option>
                            <option value="2">Blue</option>
                            <option value="3" disabled>Yellow</option>
                            <option value="4">Orange</option>
                            <option value="5">Red</option>
                        </select>
                    </div>
                    <div class="code-viewer-source">
                        <select class="select">
                            <option value="3" disabled>Yellow</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Disabled Select Option Ends -->

        <!-- Card: Searchable Select Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Searchable Select</h4>

                <p class="card-subtitle">
                    Use
                    <code>tom-select</code>
                    class to create searchable select inputs with autocomplete and native-feeling keyboard navigation.
                    <!-- To learn more, check out
          <a
            class="text-primary-500 transition-colors duration-150 hover:text-primary-600 hover:underline"
            href="https://tom-select.js.org/"
            target="_blank"
          >
            Tom Select's
          </a>
          official documenation. -->
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content overflow-visible bg-white">
                        <select class="tom-select" autocomplete="off">
                            <option value="">Select a color</option>
                            <option value="1">Green</option>
                            <option value="2">Blue</option>
                            <option value="3">Yellow</option>
                            <option value="4">Orange</option>
                            <option value="5">Red</option>
                        </select>
                    </div>
                    <div class="code-viewer-source">
                        <select class="tom-select" autocomplete="off">
                            <!-- <option value="">Placeholder</option> -->
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Searchable Select Ends -->

        <!-- Card: Mutiple Select Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Multiple Select</h4>

                <p class="card-subtitle">
                    Use <code>multiple</code> attribute along with <code> tom-select </code> class to create a multiple
                    select input.
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content overflow-visible bg-white">
                        <select class="tom-select" multiple autocomplete="off">
                            <option value="">Select a color</option>
                            <option value="1">Green</option>
                            <option value="2">Blue</option>
                            <option value="3">Yellow</option>
                            <option value="4">Orange</option>
                            <option value="5">Red</option>
                            <option value="6">Purple</option>
                            <option value="7">Black</option>
                            <option value="8">White</option>
                            <option value="9">Gray</option>
                            <option value="10">Brown</option>
                        </select>
                    </div>
                    <div class="code-viewer-source">
                        <select class="tom-select" multiple autocomplete="off">
                            <!-- <option value="">Placeholder</option> -->
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Mutiple Select Ends -->

        <!-- Card: Group Select Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Group Select</h4>

                <p class="card-subtitle">
                    Use
                    <code>optgroup</code>
                    to group multiple option togather.
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content overflow-visible bg-white">
                        <select class="tom-select" autocomplete="off">
                            <option value="">Select a color</option>
                            <optgroup label="Colors">
                                <option value="1">Green</option>
                                <option value="2">Blue</option>
                                <option value="3">Yellow</option>
                                <option value="4">Orange</option>
                                <option value="5">Red</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="code-viewer-source">
                        <select class="tom-select" autocomplete="off">
                            <!-- <option value="">Placeholder</option> -->
                            <optgroup label="Colors">
                                <!-- <option value="value">label</option> -->
                            </optgroup>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Group Select Ends -->
    </div>
    <!-- Select Ends -->
</x-app-layout>
