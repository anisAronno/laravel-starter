<x-app-layout>
    <!-- Page Title Starts -->
   
    <x-page-title page="Components" header="Alerts" />

    <!-- Page Title Ends -->

    <!-- Alert Starts -->
    <div class="space-y-6">
        <!-- Card: Basic Alert Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Alert</h4>

                <p class="card-subtitle">
                    For styling an alert, use
                    <code>alert</code>
                    and
                    <code>alert-*</code>
                    clasess.
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-col gap-4">
                        <div class="alert alert-primary" role="alert">
                            <p>This is a primary alert with addtional information and content.</p>
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            <p>This is a secondary alert with addtional information and content.</p>
                        </div>
                        <div class="alert alert-success" role="alert">
                            <p>This is a success alert with addtional information and content.</p>
                        </div>
                        <div class="alert alert-danger" role="alert">
                            <p>This is a danger alert with addtional information and content.</p>
                        </div>
                        <div class="alert alert-warning" role="alert">
                            <p>This is a warning alert with addtional information and content.</p>
                        </div>
                        <div class="alert alert-info" role="alert">
                            <p>This is a info alert with addtional information and content.</p>
                        </div>
                        <div class="alert alert-dark" role="alert">
                            <p>This is a dark alert with addtional information and content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Basic Alert Ends -->

        <!-- Card: Icon Alert Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Alert with icon</h4>

                <p class="card-subtitle">
                    Use
                    <a class="text-primary-500 transition-colors duration-150 hover:text-primary-600 hover:underline"
                        href="https://feathericons.com" target="_blank">
                        Feather Icons
                    </a>
                    to create alerts with icons.
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-col gap-4">
                        <div class="alert alert-primary" role="alert">
                            <i width="1rem" height="1rem" data-feather="alert-circle"></i>
                            <p>This is a primary alert with addtional information and content.</p>
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            <i width="1rem" height="1rem" data-feather="alert-circle"></i>
                            <p>This is a secondary alert with addtional information and content.</p>
                        </div>
                        <div class="alert alert-success" role="alert">
                            <i width="1rem" height="1rem" data-feather="check-circle"></i>
                            <p>This is a success alert with addtional information and content.</p>
                        </div>
                        <div class="alert alert-danger" role="alert">
                            <i width="1rem" height="1rem" data-feather="alert-triangle"></i>
                            <p>This is a danger alert with addtional information and content.</p>
                        </div>
                        <div class="alert alert-warning" role="alert">
                            <i width="1rem" height="1rem" data-feather="alert-triangle"></i>
                            <p>This is a warning alert with addtional information and content.</p>
                        </div>
                        <div class="alert alert-info" role="alert">
                            <i width="1rem" height="1rem" data-feather="alert-circle"></i>
                            <p>This is a info alert with addtional information and content.</p>
                        </div>
                        <div class="alert alert-dark" role="alert">
                            <i width="1rem" height="1rem" data-feather="alert-circle"></i>
                            <p>This is a dark alert with addtional information and content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Icon Alert Ends -->

        <!-- Card: Outlined Alert Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Outlined Alert</h4>

                <p class="card-subtitle">
                    Use
                    <code>alert-outlined</code>
                    class with our contextual classes to create an oulined alert
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-col gap-4">
                        <div class="alert alert-outline-primary" role="alert">
                            <i width="1rem" height="1rem" data-feather="alert-circle"></i>
                            <p>This is a primary alert with addtional information and content.</p>
                        </div>
                        <div class="alert alert-outline-secondary" role="alert">
                            <i width="1rem" height="1rem" data-feather="alert-circle"></i>
                            <p>This is a secondary alert with addtional information and content.</p>
                        </div>
                        <div class="alert alert-outline-success" role="alert">
                            <i width="1rem" height="1rem" data-feather="check-circle"></i>
                            <p>This is a success alert with addtional information and content.</p>
                        </div>
                        <div class="alert alert-outline-danger" role="alert">
                            <i width="1rem" height="1rem" data-feather="alert-triangle"></i>
                            <p>This is a danger alert with addtional information and content.</p>
                        </div>
                        <div class="alert alert-outline-warning" role="alert">
                            <i width="1rem" height="1rem" data-feather="alert-triangle"></i>
                            <p>This is a warning alert with addtional information and content.</p>
                        </div>
                        <div class="alert alert-outline-info" role="alert">
                            <i width="1rem" height="1rem" data-feather="alert-circle"></i>
                            <p>This is a info alert with addtional information and content.</p>
                        </div>
                        <div class="alert alert-outline-danger" role="alert">
                            <i width="1rem" height="1rem" data-feather="alert-circle"></i>
                            <p>This is a dark alert with addtional information and content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Outlined Alert Ends -->

        <!-- Card: Dismissable Alert Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Dismissable Alert</h4>

                <p class="card-subtitle">
                    Use
                    <code>dismissable</code>
                    class with our contextual classes to create an outline alert
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-col gap-4">
                        <div class="alert alert-primary alert-dismissible" role="alert">
                            <p>This is a primary alert with addtional information and content.</p>
                            <button class="alert-dismiss" type="button">
                                <i width="1rem" height="1rem" data-feather="x"></i>
                            </button>
                        </div>
                        <div class="alert alert-secondary alert-dismissible" role="alert">
                            <p>This is a secondary alert with addtional information and content.</p>
                            <button class="alert-dismiss" type="button">
                                <i width="1rem" height="1rem" data-feather="x"></i>
                            </button>
                        </div>
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <p>This is a success alert with addtional information and content.</p>
                            <button class="alert-dismiss" type="button">
                                <i width="1rem" height="1rem" data-feather="x"></i>
                            </button>
                        </div>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <p>This is a danger alert with addtional information and content.</p>
                            <button class="alert-dismiss" type="button">
                                <i width="1rem" height="1rem" data-feather="x"></i>
                            </button>
                        </div>
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <p>This is a warning alert with addtional information and content.</p>
                            <button class="alert-dismiss" type="button">
                                <i width="1rem" height="1rem" data-feather="x"></i>
                            </button>
                        </div>
                        <div class="alert alert-info alert-dismissible" role="alert">
                            <p>This is a info alert with addtional information and content.</p>
                            <button class="alert-dismiss" type="button">
                                <i width="1rem" height="1rem" data-feather="x"></i>
                            </button>
                        </div>
                        <div class="alert alert-dark alert-dismissible" role="alert">
                            <p>This is a dark alert with addtional information and content.</p>
                            <button class="alert-dismiss" type="button">
                                <i width="1rem" height="1rem" data-feather="x"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Dismissable Alert Ends -->

        <!-- Card: Controlled Alert Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Controlled Alert</h4>

                <p class="card-subtitle">
                    If you want to manually hide the alert, you need to use
                    <code>createDismissableAlert</code>
                    function. This function is available globally. Then you can call the
                    <code>dismiss()</code>
                    method to hide the alert.
                </p>

                <div id="controlled-alert-code-viewer" class="code-viewer mt-4" data-render-source="false">
                    <div class="flex flex-col gap-4">
                        <div class="alert alert-success" role="alert" id="controlled-alert">
                            <i width="1em" height="1em" data-feather="check-circle"></i>
                            <p>This is a success alert with addtional information and content.</p>
                        </div>
                        <div>
                            <button class="btn btn-primary" type="button" id="btn-hide-alert">
                                Hide dismissable alert
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Controlled Alert Ends -->

        <!-- Card: Additional Content Alert Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Additional Content</h4>

                <p class="card-subtitle">Example of alert with additional content.</p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-col gap-4">
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <div>
                                <div class="flex items-center gap-2 text-base font-medium">
                                    <i width="1em" height="1em" data-feather="check-circle"></i>
                                    <span>Order completed</span>
                                </div>
                                <div class="mt-3 font-normal">
                                    <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, libero sed
                                        delectus nulla
                                        necessitatibus magni voluptas inventore esse ducimus, nam, blanditiis ut dolor
                                        vero nobis
                                        molestiae tenetur perferendis quae! Porro accusantium temporibus quas
                                        necessitatibus.
                                        Facere dolor repudiandae impedit iure, velit accusamus nisi reprehenderit
                                        laudantium
                                        consequatur odio est minima placeat architecto?
                                    </p>
                                </div>
                            </div>
                            <button class="alert-dismiss" type="button">
                                <i width="16" height="16" data-feather="x"></i>
                            </button>
                        </div>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <div>
                                <div class="flex items-center gap-2 text-base font-medium">
                                    <i width="1em" height="1em" data-feather="alert-triangle"></i>
                                    <span> There were some errors with your submission </span>
                                </div>
                                <div class="mt-3 ps-10 font-normal">
                                    <ul class="list-disc space-y-1 px-4" role="list">
                                        <li>Your password must be at least 8 characters</li>
                                        <li>Your password must include at least one pro wrestling finishing move</li>
                                    </ul>
                                </div>
                            </div>
                            <button class="alert-dismiss" type="button">
                                <i width="16" height="16" data-feather="x"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Additional Content Alert Ends -->
    </div>
    <!-- Alert Starts -->
</x-app-layout>
