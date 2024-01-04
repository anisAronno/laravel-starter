<x-app-layout>
    <!-- Page Title Starts -->
    <x-page-title page="Components" header="Dropdown" />

    <!-- Page Title Ends -->

    <div class="space-y-6">
        <!-- Card: Basic Dropdown Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Dropdown</h4>

                <p class="card-subtitle">
                    Use the
                    <code>dropdown</code>
                    ,
                    <code>dropdown-toggle</code>
                    and
                    <code>dropdown-content</code>
                    classes to create a basic dropdown.
                </p>

                <div class="code-viewer mt-4">
                    <div class="dropdown">
                        <div class="dropdown-toggle">
                            <span class="flex items-center gap-1 text-sm font-medium">
                                Dropdown
                                <i class="w-4" data-feather="chevron-down"></i>
                            </span>
                        </div>
                        <div class="dropdown-content">
                            <ul class="dropdown-list">
                                <li class="dropdown-list-item">
                                    <a href="javascript:void(0)" class="dropdown-link"> Action </a>
                                </li>
                                <li class="dropdown-list-item">
                                    <a href="javascript:void(0)" class="dropdown-link"> Another action </a>
                                </li>
                                <li class="dropdown-list-item">
                                    <a href="javascript:void(0)" class="dropdown-link"> Something else here </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Basic Dropdown Ends -->

        <!-- Card: Dropdown Button Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Dropdown Button</h4>

                <p class="card-subtitle">
                    Use
                    <code>btn btn-{color}</code>
                    with the
                    <code>dropdown-toggle</code>
                    class to create a dropdown button.
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap items-center gap-4">
                        <div class="dropdown">
                            <button class="dropdown-toggle btn btn-primary flex gap-2">
                                Primary
                                <i class="w-4" data-feather="chevron-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Another action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Something else here </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropdown-toggle btn btn-secondary flex gap-2">
                                Secondary
                                <i class="w-4" data-feather="chevron-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Another action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Something else here </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropdown-toggle btn btn-success flex gap-2">
                                Success
                                <i class="w-4" data-feather="chevron-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Another action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Something else here </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropdown-toggle btn btn-danger flex gap-2">
                                Danger
                                <i class="w-4" data-feather="chevron-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Another action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Something else here </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropdown-toggle btn btn-warning flex gap-2">
                                Warning
                                <i class="w-4" data-feather="chevron-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Another action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Something else here </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropdown-toggle btn btn-info flex gap-2">
                                Info
                                <i class="w-4" data-feather="chevron-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Another action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Something else here </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropdown-toggle btn btn-dark flex gap-2">
                                Dark
                                <i class="w-4" data-feather="chevron-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Another action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Something else here </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Dropdown Button Ends -->

        <!-- Card: Outlined Dropdown Button Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Outlined Dropdown Button</h4>

                <p class="card-subtitle">
                    Use
                    <code>btn btn-outline-{color}</code>
                    with the
                    <code>dropdown-toggle</code>
                    class to create a dropdown button.
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap items-center gap-4">
                        <div class="dropdown">
                            <button class="dropdown-toggle btn btn-outline-primary flex gap-2">
                                Primary
                                <i class="w-4" data-feather="chevron-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Another action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Something else here </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropdown-toggle btn btn-outline-secondary flex gap-2">
                                Secondary
                                <i class="w-4" data-feather="chevron-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Another action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Something else here </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropdown-toggle btn btn-outline-success flex gap-2">
                                Success
                                <i class="w-4" data-feather="chevron-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Another action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Something else here </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropdown-toggle btn btn-outline-danger flex gap-2">
                                Danger
                                <i class="w-4" data-feather="chevron-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Another action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Something else here </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropdown-toggle btn btn-outline-warning flex gap-2">
                                Warning
                                <i class="w-4" data-feather="chevron-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Another action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Something else here </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropdown-toggle btn btn-outline-info flex gap-2">
                                Info
                                <i class="w-4" data-feather="chevron-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Another action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Something else here </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropdown-toggle btn btn-outline-dark flex gap-2">
                                Dark
                                <i class="w-4" data-feather="chevron-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Another action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Something else here </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Outlined Dropdown Button Ends -->

        <!-- Card: Split Dropdown Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Split Dropdown</h4>

                <p class="card-subtitle">
                    You can create a split dropdown button with the
                    <code>btn-group</code>
                    class.
                </p>

                <div class="code-viewer mt-4">
                    <div class="dropdown">
                        <div class="btn-group divide-x divide-primary-600">
                            <button class="btn btn-primary">Dropdown</button>
                            <button class="btn btn-primary dropdown-toggle px-2">
                                <i class="w-4" data-feather="chevron-down"></i>
                            </button>
                        </div>
                        <div class="dropdown-content">
                            <ul class="dropdown-list">
                                <li class="dropdown-list-item">
                                    <a href="javascript:void(0)" class="dropdown-link"> Action </a>
                                </li>
                                <li class="dropdown-list-item">
                                    <a href="javascript:void(0)" class="dropdown-link"> Another action </a>
                                </li>
                                <li class="dropdown-list-item">
                                    <a href="javascript:void(0)" class="dropdown-link"> Something else here </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Split Dropdown Ends -->

        <!-- Card: Dropdown Size Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Dropdown Size</h4>

                <p class="card-subtitle">
                    You can create a small, medium, large or extra large dropdown button. Just add the
                    <code>btn-xs</code>
                    ,
                    <code>btn-sm</code>
                    ,
                    <code>btn-md</code>
                    ,
                    <code>btn-lg</code>
                    or
                    <code>btn-xl</code>
                    along with the
                    <code>btn</code>
                    class.
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap items-center gap-4">
                        <div class="dropdown">
                            <button class="dropdown-toggle btn btn-primary btn-xs items-center gap-2">
                                Extra Small
                                <i class="w-3" data-feather="chevron-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Another action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Something else here </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropdown-toggle btn btn-primary btn-sm items-center gap-2">
                                Small
                                <i class="w-4" data-feather="chevron-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Another action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Something else here </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropdown-toggle btn btn-primary btn-md items-center gap-2">
                                Medium
                                <i class="w-4" data-feather="chevron-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Another action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Something else here </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropdown-toggle btn btn-primary btn-lg items-center gap-2">
                                Large
                                <i class="w-4" data-feather="chevron-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Another action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Something else here </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropdown-toggle btn btn-primary btn-xl items-center gap-2">
                                Extra Large
                                <i class="w-4" data-feather="chevron-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Another action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Something else here </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Dropdown Size Ends -->

        <!-- Card: Dropdown Position Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Dropdown Position</h4>

                <p class="card-subtitle">
                    You can create a dropdown button with different position. Just add the
                    <code>data-placement</code>
                    attribute with the
                    <code>dropdown</code>
                    class. The available placements are
                    <code>top</code>
                    ,
                    <code>top-start</code>
                    ,
                    <code>top-end</code>
                    ,
                    <code>bottom</code>
                    ,
                    <code>bottom-start</code>
                    ,
                    <code>bottom-end</code>
                    ,
                    <code>left</code>
                    ,
                    <code>left-start</code>
                    ,
                    <code>left-end</code>
                    ,
                    <code>right</code>
                    ,
                    <code>right-start</code>
                    and
                    <code>right-end</code>
                    .
                </p>

                <div class="code-viewer mt-4">
                    <div class="space-y-4">
                        <div class="flex flex-wrap items-center gap-4">
                            <div class="dropdown" data-placement="top-start">
                                <button class="dropdown-toggle btn btn-primary items-center gap-2">
                                    Top Left
                                    <i class="w-4" data-feather="chevron-down"></i>
                                </button>
                                <div class="dropdown-content">
                                    <ul class="dropdown-list">
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="dropdown-link"> Action </a>
                                        </li>
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="dropdown-link"> Another action </a>
                                        </li>
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="dropdown-link"> Something else here
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown" data-placement="top">
                                <button class="dropdown-toggle btn btn-primary items-center gap-2">
                                    Top Center
                                    <i class="w-4" data-feather="chevron-down"></i>
                                </button>
                                <div class="dropdown-content">
                                    <ul class="dropdown-list">
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="dropdown-link"> Action </a>
                                        </li>
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="dropdown-link"> Another action </a>
                                        </li>
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="dropdown-link"> Something else here
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown" data-placement="top-end">
                                <button class="dropdown-toggle btn btn-primary items-center gap-2">
                                    Top Left
                                    <i class="w-4" data-feather="chevron-down"></i>
                                </button>
                                <div class="dropdown-content">
                                    <ul class="dropdown-list">
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="dropdown-link"> Action </a>
                                        </li>
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="dropdown-link"> Another action </a>
                                        </li>
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="dropdown-link"> Something else here
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center gap-4">
                            <div class="dropdown" data-placement="bottom-start">
                                <button class="dropdown-toggle btn btn-primary items-center gap-2">
                                    Bottom Left
                                    <i class="w-4" data-feather="chevron-down"></i>
                                </button>
                                <div class="dropdown-content">
                                    <ul class="dropdown-list">
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="dropdown-link"> Action </a>
                                        </li>
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="dropdown-link"> Another action </a>
                                        </li>
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="dropdown-link"> Something else here
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown" data-placement="bottom">
                                <button class="dropdown-toggle btn btn-primary items-center gap-2">
                                    Bottom Center
                                    <i class="w-4" data-feather="chevron-down"></i>
                                </button>
                                <div class="dropdown-content">
                                    <ul class="dropdown-list">
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="dropdown-link"> Action </a>
                                        </li>
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="dropdown-link"> Another action </a>
                                        </li>
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="dropdown-link"> Something else here
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown" data-placement="bottom-end">
                                <button class="dropdown-toggle btn btn-primary items-center gap-2">
                                    Bottom Left
                                    <i class="w-4" data-feather="chevron-down"></i>
                                </button>
                                <div class="dropdown-content">
                                    <ul class="dropdown-list">
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="dropdown-link"> Action </a>
                                        </li>
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="dropdown-link"> Another action </a>
                                        </li>
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="dropdown-link"> Something else here
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Dropdown Position Ends -->

        <!-- Card: Custom Dropdown Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Custom Dropdown</h4>

                <p class="card-subtitle">Example of custom dropdown with avatar and icons.</p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap items-center gap-6">
                        <div class="dropdown">
                            <div class="dropdown-toggle">
                                <div class="avatar avatar-circle">
                                    <img class="avatar-img" src="{{asset('images/avatar1.png')}}" alt="Avatar 1" />
                                </div>
                            </div>
                            <div class="dropdown-content w-[200px]">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link gap-4">
                                            <i class="h-5 text-slate-500" data-feather="user"></i>
                                            Profile
                                        </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link gap-4">
                                            <i class="h-5 text-slate-500" data-feather="settings"></i>
                                            Settings
                                        </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link gap-4">
                                            <i class="h-5 text-slate-500" data-feather="log-out"></i>
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown">
                            <div class="dropdown-toggle">
                                <i class="ti ti-dots-vertical text-3xl text-slate-500"></i>
                            </div>
                            <div class="dropdown-content w-[200px]">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link gap-4">
                                            <i class="h-5 text-slate-500" data-feather="edit"></i>
                                            Edit
                                        </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link gap-4">
                                            <i class="h-5 text-slate-500" data-feather="copy"></i>
                                            Duplicate
                                        </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link gap-4">
                                            <i class="h-5 text-slate-500" data-feather="trash-2"></i>
                                            Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card: Custom Dropdown Ends -->
    </div>
</x-app-layout>
