<x-app-layout>
    <!-- Page Title Starts -->
   
    <x-page-title page="Forms" header="Input Group" />

    <!-- Page Title End -->

    <!-- Input Starts -->
    <div class="space-y-6">
        <!-- Card: Basic Input Group Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Input Groups</h4>

                <p class="card-subtitle">Example of basic input groups.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <div class="flex flex-col gap-4">
                            <div class="input-group">
                                <span class="input-group-text">@</span>
                                <input class="input" type="text" placeholder="Username" />
                            </div>
                            <div class="input-group">
                                <span class="input-group-text"> https://example.com/users/ </span>
                                <input class="input" type="text" placeholder="Username" />
                            </div>
                            <div class="input-group">
                                <input class="input" type="text" placeholder="Username" />
                                <span class="input-group-text">@example.com</span>
                            </div>
                            <div class="input-group">
                                <input class="input" type="password" placeholder="Password" />
                                <span class="input-group-text">
                                    <i width="1rem" height="1rem" data-feather="lock"></i>
                                </span>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i width="1rem" heigt="1rem" data-feather="message-circle"></i>
                                    <span>Message</span>
                                </span>
                                <textarea class="textarea"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Basic Input Group Ends -->

        <!-- Card: Input Group Size Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Input Group Sizes</h4>

                <p class="card-subtitle">Example of different sizes input group.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <div class="flex flex-col gap-4">
                            <div class="input-group">
                                <span class="input-group-text">@</span>
                                <input class="input input-sm" type="text" placeholder="Username" />
                            </div>
                            <div class="input-group input-group-md">
                                <span class="input-group-text">@</span>
                                <input class="input input-md" type="text" placeholder="Username" />
                            </div>
                            <div class="input-group input-group-lg">
                                <span class="input-group-text">@</span>
                                <input class="input input-lg" type="text" placeholder="Username" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Input Group Size Ends -->

        <!-- Card: Input Group With Mutitple Input Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Multiple Inputs</h4>

                <p class="card-subtitle">Example of multiple inputs in input group.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <div class="input-group">
                            <span class="input-group-text">Full name</span>
                            <input class="input" type="text" placeholder="First name" />
                            <input class="input" type="text" placeholder="Last name" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Input Group With Mutitple Input Ends -->

        <!-- Card: Input Group With Mutitple Addon Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Multiple Addons</h4>

                <p class="card-subtitle">Example of addons in input group.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <div class="flex flex-col gap-4">
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <span class="input-group-text">0.00</span>
                                <input class="input" type="text" placeholder="Price" />
                            </div>
                            <div class="input-group">
                                <input class="input" type="text" placeholder="Price" />
                                <span class="input-group-text">$</span>
                                <span class="input-group-text">0.00</span>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input class="input" type="text" placeholder="Price" />
                                <span class="input-group-text">0.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Input Group With Mutitple Addon Ends -->

        <!-- Card: Input Group Valid Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Input Group Valid</h4>

                <p class="card-subtitle">Example of valid input in input group.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <div class="input-group">
                            <span class="input-group-text">@</span>
                            <input class="input is-valid" type="text" placeholder="Username" />
                        </div>
                        <p class="success-message mt-1">Looks good</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Input Group Valid Ends -->

        <!-- Card: Input Group Invalid Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Input Group Invalid</h4>

                <p class="card-subtitle">Example of invalid input group.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <div class="input-group">
                            <span class="input-group-text">@</span>
                            <input class="input is-invalid" type="text" placeholder="Username" />
                        </div>
                        <p class="error-message mt-1">This field is required</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Input Group Invalid Ends -->

        <!-- Card: Input Group Disabled Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Input Group Disabled</h4>

                <p class="card-subtitle">Example of disabled input group.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <div class="input-group input-group-disabled">
                            <span class="input-group-text">@</span>
                            <input class="input" type="text" placeholder="Username" disabled />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Input Group Disabled Ends -->
    </div>
    <!-- Input Ends -->
</x-app-layout>
