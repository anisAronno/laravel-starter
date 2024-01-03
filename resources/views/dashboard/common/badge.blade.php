<x-app-layout>
    <!-- Page Title Start -->
    <x-page-title page="Components" header="Badges" />
    <!-- Page Title End -->

    <!-- Badge Starts -->
    <div class="space-y-6">
        <!-- Card: Badge Color Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Color Badges</h4>

                <p class="card-subtitle">
                    Use class
                    <code>badge</code>
                    with
                    <code>badge-{color}</code>
                    to create a color badge.
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap items-center gap-2">
                        <div class="badge badge-primary">Primary</div>
                        <div class="badge badge-secondary">Secondary</div>
                        <div class="badge badge-success">Success</div>
                        <div class="badge badge-danger">Danger</div>
                        <div class="badge badge-warning">Warning</div>
                        <div class="badge badge-info">Info</div>
                        <div class="badge badge-dark">Dark</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Badge Color Ends -->

        <!-- Card: Badge Outlined Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Outline Badges</h4>

                <p class="card-subtitle">
                    Use class <code>badge</code> with <code>badge-outline-{color}</code> to create an outline badge.
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap items-center gap-2">
                        <div class="badge badge-outline-primary">Primary</div>
                        <div class="badge badge-outline-secondary">Secondary</div>
                        <div class="badge badge-outline-success">Success</div>
                        <div class="badge badge-outline-danger">Danger</div>
                        <div class="badge badge-outline-warning">Warning</div>
                        <div class="badge badge-outline-info">Info</div>
                        <div class="badge badge-outline-dark">Dark</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Badge Outlined Ends -->

        <!-- Card: Badge Soft Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Soft Badges</h4>

                <p class="card-subtitle">
                    Use class <code>badge</code> with <code>badge-soft-{color}</code> to create a soft badge.
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap items-center gap-2">
                        <div class="badge badge-soft-primary">Primary</div>
                        <div class="badge badge-soft-secondary">Secondary</div>
                        <div class="badge badge-soft-success">Success</div>
                        <div class="badge badge-soft-danger">Danger</div>
                        <div class="badge badge-soft-warning">Warning</div>
                        <div class="badge badge-soft-info">Info</div>
                        <div class="badge badge-soft-dark">Dark</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Badge Soft Ends -->

        <!-- Card: Badge Rounded Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Rounded Badges</h4>

                <p class="card-subtitle">
                    Use class <code>badge</code> with <code>badge-rounded</code> to create a rounded badge.
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap items-center gap-2">
                        <div class="badge badge-primary badge-rounded">Primary</div>
                        <div class="badge badge-secondary badge-rounded">Secondary</div>
                        <div class="badge badge-success badge-rounded">Success</div>
                        <div class="badge badge-danger badge-rounded">Danger</div>
                        <div class="badge badge-warning badge-rounded">Warning</div>
                        <div class="badge badge-info badge-rounded">Info</div>
                        <div class="badge badge-dark badge-rounded">Dark</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Badge Rounded Ends -->

        <!-- Card: Badge Icon Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Badge With Icon</h4>

                <p class="card-subtitle">Example of badge with icon.</p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap items-center gap-2">
                        <div
                            class="inline-flex items-center gap-1 rounded-primary bg-success-100 px-2 py-0.5 text-xs text-success-500">
                            <i data-feather="check-circle" height="1em" width="1em"></i>
                            <span>Completed</span>
                        </div>
                        <div
                            class="inline-flex items-center gap-1 rounded-primary bg-info-100 px-2 py-0.5 text-xs text-info-500">
                            <i data-feather="clock" height="1em" width="1em"></i>
                            <span>2 minutes ago</span>
                        </div>
                        <div
                            class="inline-flex items-center gap-1 rounded-primary bg-danger-100 px-2 py-0.5 text-xs text-danger-500">
                            <i data-feather="alert-circle" height="1em" width="1em"></i>
                            <span>Failed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Badge Icon Ends -->
    </div>
    <!-- Badge Ends -->
</x-app-layout>
