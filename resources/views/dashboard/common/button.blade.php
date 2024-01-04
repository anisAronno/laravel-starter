<x-app-layout>
    <!-- Page Title Starts -->
    <x-page-title page="Components" header="Buttons" />

    <!-- Page Title Ends -->

    <!-- Button Starts -->
    <div class="space-y-6">
        <!-- Card: Basic Buttons Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Buttons</h4>
                <p class="card-subtitle">
                    Use <code>btn</code> class to create a basic button. You can use <code> btn-{color} </code> class to
                    change the button color.
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap items-center gap-4">
                        <button class="btn btn-primary">Primary</button>
                        <button class="btn btn-secondary">Secondary</button>
                        <button class="btn btn-success">Success</button>
                        <button class="btn btn-danger">Danger</button>
                        <button class="btn btn-warning">Warning</button>
                        <button class="btn btn-info">Info</button>
                        <button class="btn btn-dark">Dark</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Basic Buttons Ends -->

        <!-- Card: Button Size Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Button Sizes</h4>

                <p class="card-subtitle">
                    Use <code>btn-{size}</code> class to change the button size. You can use <code>btn-xs</code>,
                    <code>btn-sm</code>, <code>btn-md</code>, <code>btn-lg</code> and <code>btn-xl</code> classes to
                    change the button size. Default button size is <code>btn-md</code>.
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap items-center gap-4">
                        <button class="btn btn-primary btn-xs">Extra Small</button>
                        <button class="btn btn-primary btn-sm">Small</button>
                        <button class="btn btn-primary btn-md">Medium</button>
                        <button class="btn btn-primary btn-lg">Large</button>
                        <button class="btn btn-primary btn-xl">Extra Large</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Button Size Ends -->

        <!-- Card: Button Outline Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Outline Buttons</h4>

                <p class="card-subtitle">
                    Use <code>btn</code> with the
                    <code>btn-outline-{color}</code>
                    to create an outlined button.
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap items-center gap-4">
                        <button class="btn btn-outline-primary">Primary</button>
                        <button class="btn btn-outline-secondary">Secondary</button>
                        <button class="btn btn-outline-success">Success</button>
                        <button class="btn btn-outline-danger">Danger</button>
                        <button class="btn btn-outline-warning">Warning</button>
                        <button class="btn btn-outline-info">Info</button>
                        <button class="btn btn-outline-dark">Dark</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Button Outline Ends -->

        <!-- Card: Button Soft Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Soft Buttons</h4>

                <p class="card-subtitle">
                    Use <code>btn</code> with the <code>btn-soft-{color}</code> class to create a soft button.
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap items-center gap-4">
                        <button class="btn btn-soft-primary">Primary</button>
                        <button class="btn btn-soft-secondary">Secondary</button>
                        <button class="btn btn-soft-success">Success</button>
                        <button class="btn btn-soft-danger">Danger</button>
                        <button class="btn btn-soft-warning">Warning</button>
                        <button class="btn btn-soft-info">Info</button>
                        <button class="btn btn-soft-dark">Dark</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Button Soft Ends -->

        <!-- Card: Button Plain Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Plain Buttons</h4>

                <p class="card-subtitle">
                    Use <code>btn</code> with the <code>btn-plain-{color}</code> class to create a plain button.
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap items-center gap-4">
                        <button class="btn btn-plain-primary">Primary</button>
                        <button class="btn btn-plain-secondary">Secondary</button>
                        <button class="btn btn-plain-success">Success</button>
                        <button class="btn btn-plain-danger">Danger</button>
                        <button class="btn btn-plain-warning">Warning</button>
                        <button class="btn btn-plain-info">Info</button>
                        <button class="btn btn-plain-dark">Dark</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Button Plain Ends -->

        <!-- Card: Button Rounded Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Rounded Buttons</h4>

                <p class="card-subtitle">
                    Use
                    <code>rounded-full</code>
                    class to create a rounded button.
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap items-center gap-4">
                        <button class="btn btn-primary rounded-full">Primary</button>
                        <button class="btn btn-secondary rounded-full">Secondary</button>
                        <button class="btn btn-success rounded-full">Success</button>
                        <button class="btn btn-danger rounded-full">Danger</button>
                        <button class="btn btn-warning rounded-full">Warning</button>
                        <button class="btn btn-info rounded-full">Info</button>
                        <button class="btn btn-dark rounded-full">Dark</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Button Rounded Ends -->

        <!-- Card: Button Icon Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Icon Buttons</h4>

                <p class="card-subtitle">Example of icon buttons.</p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap items-center gap-4">
                        <button class="btn btn-primary">
                            <i data-feather="home" height="1rem" width="1rem"></i>
                            <span>Home</span>
                        </button>
                        <button class="btn btn-warning">
                            <i data-feather="user-plus" height="1rem" width="1rem"></i>
                            <span>Users</span>
                        </button>
                        <button class="btn btn-danger">
                            <i data-feather="trash" height="1rem" width="1rem"></i>
                            <span>Delete</span>
                        </button>
                        <button class="btn btn-info">
                            <i data-feather="edit" height="1rem" width="1rem"></i>
                            <span>Edit</span>
                        </button>
                        <button class="btn btn-success">
                            <i data-feather="check-circle" height="1rem" width="1rem"></i>
                            <span>Done</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Button Icon Ends -->

        <!-- Card: Button Loading Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Loading Buttons</h4>

                <p class="card-subtitle">Example of loading buttons.</p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap items-center gap-4">
                        <button class="btn btn-primary" disabled>
                            <i class="animate-spin" data-feather="loader" height="1rem" width="1rem"></i>
                            <span>Loading</span>
                        </button>
                        <button class="btn btn-success" disabled>
                            <i class="animate-spin" data-feather="loader" height="1rem" width="1rem"></i>
                            <span>Loading</span>
                        </button>
                        <button class="btn btn-info" disabled>
                            <i class="animate-spin" data-feather="loader" height="1rem" width="1rem"></i>
                            <span>Loading</span>
                        </button>
                        <button class="btn btn-danger" disabled>
                            <i class="animate-spin" data-feather="loader" height="1rem" width="1rem"></i>
                            <span>Loading</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Button Loading Ends -->

        <!-- Card: Button Disabled Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Disabled Buttons</h4>

                <p class="card-subtitle">
                    To disable a button, use
                    <code>disable="true"</code>
                    attribute on it.
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap items-center gap-4">
                        <button class="btn btn-primary" disabled>Primary</button>
                        <button class="btn btn-outline-success" disabled>Success</button>
                        <button class="btn btn-soft-danger" disabled>Danger</button>
                        <button class="btn btn-plain-warning" disabled>Warning</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Button Disabled Ends -->

        <!-- Card: Button Block Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Block Buttons</h4>

                <p class="card-subtitle">
                    Use
                    <code>w-full</code>
                    class to create a block button.
                </p>

                <div class="code-viewer mt-4">
                    <div class="space-y-4">
                        <button class="btn btn-primary w-full">Block Button</button>
                        <button class="btn btn-secondary w-full">Block Button</button>
                        <button class="btn btn-success w-full">Block Button</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Button Block Ends -->

        <!-- Card: Button Group Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Group Buttons</h4>

                <p class="card-subtitle">
                    To create button groups, wrap all the buttons with a
                    <code>btn-group</code>
                    class.
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap items-center gap-4">
                        <div class="btn-group">
                            <button class="btn btn-primary">HTML</button>
                            <button class="btn btn-primary">CSS</button>
                            <button class="btn btn-primary">Javascript</button>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-outline-primary gap-2">
                                <i data-feather="thumbs-up" height="1rem" width="1rem"></i>
                                <span>120k</span>
                            </button>
                            <button class="btn btn-outline-primary gap-2">
                                <i data-feather="heart" height="1rem" width="1rem"></i>
                                <span>200k</span>
                            </button>
                        </div>
                        <div class="btn-group rounded">
                            <button class="btn btn-soft-primary">Years</button>
                            <button class="btn btn-soft-primary">Months</button>
                            <button class="btn btn-soft-primary">Days</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Button Group Ends -->
    </div>
    <!-- Button Ends -->
</x-app-layout>
