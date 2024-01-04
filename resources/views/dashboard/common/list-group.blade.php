<x-app-layout>
    <!-- Page Title Starts -->
    <x-page-title page="Components" header="List Group" />

    <!-- Page Title Ends -->

    <!-- List Group Starts -->
    <div class="space-y-6">
        <!-- Card: Basic List Group Start -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic List Group</h4>
                <p class="card-subtitle">
                    Use
                    <code>list-group</code>
                    &
                    <code>list-group-item</code>
                    class to create a List Group.
                </p>
                <div class="code-viewer mt-4">
                    <ul class="list-group mx-auto max-w-xs">
                        <li class="list-group-item">Profile</li>
                        <li class="list-group-item">Settings</li>
                        <li class="list-group-item">Messages</li>
                        <li class="list-group-item">Download</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Card: Basic List Group End -->

        <!-- Card: Active Item  Start -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Active Item</h4>
                <p class="card-subtitle">
                    Use
                    <code>active</code>
                    class to make an item active.
                </p>
                <div class="code-viewer mt-4">
                    <ul class="list-group mx-auto max-w-xs">
                        <li class="list-group-item active">Profile</li>
                        <li class="list-group-item">Settings</li>
                        <li class="list-group-item">Messages</li>
                        <li class="list-group-item">Download</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Card: Active Item End -->

        <!-- Card: Dsiabled Item  Start -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Disabled Item</h4>
                <p class="card-subtitle">
                    Use
                    <code>disabled</code>
                    class to make an item disabled.
                </p>
                <div class="code-viewer mt-4">
                    <ul class="list-group mx-auto max-w-xs">
                        <li class="list-group-item">Profile</li>
                        <li class="list-group-item">Settings</li>
                        <li class="list-group-item">Messages</li>
                        <li class="list-group-item disabled">Download</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Card: Disabled Item End -->

        <!-- Card: List Group With Icons Item  Start -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List Group With Icons</h4>
                <p class="card-subtitle">Example of list group with icons.</p>
                <div class="code-viewer mt-4">
                    <ul class="list-group mx-auto max-w-xs">
                        <li class="list-group-item flex items-center gap-2">
                            <i data-feather="user" class="h-4 w-4"></i>
                            Profile
                        </li>
                        <li class="list-group-item flex items-center gap-2">
                            <i data-feather="sliders" class="h-4 w-4"></i>
                            Settings
                        </li>
                        <li class="list-group-item flex items-center gap-2">
                            <i data-feather="message-square" class="h-4 w-4"></i>
                            Messages
                        </li>
                        <li class="list-group-item flex items-center gap-2">
                            <i data-feather="download-cloud" class="h-4 w-4"></i>
                            Download
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Card: List Group With Icons Item End -->

        <!-- Card: List Group Color Item  Start -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List Group With Color</h4>
                <p class="card-subtitle mb-1">
                    Use
                    <code>list-group-item-{color}</code>
                    class to add color. Available colors are -
                    <code>primary</code>
                    ,
                    <code>secondary</code>
                    ,
                    <code>success</code>
                    ,
                    <code>danger</code>
                    ,
                    <code>info</code>
                    ,
                    <code>warning</code>
                    ,
                    <code>dark</code>
                    .
                </p>
                <div class="code-viewer mt-4">
                    <ul class="list-group mx-auto max-w-xs">
                        <li class="list-group-item list-group-item-primary">A simple primary list group item</li>
                        <li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
                        <li class="list-group-item list-group-item-success">A simple success list group item</li>
                        <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
                        <li class="list-group-item list-group-item-info">A simple danger list group item</li>
                        <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
                        <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Card: List Group Color Item End -->

        <!-- Card: List Group With Button Item  Start -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List Group Button</h4>
                <p class="card-subtitle">
                    Use
                    <code>list-group-action</code>
                    class to make a List Group with button.
                </p>
                <div class="code-viewer mt-4">
                    <div class="list-group mx-auto max-w-xs">
                        <button class="list-group-item list-group-item-action active">The current button</button>
                        <button class="list-group-item list-group-item-action">A second item</button>
                        <button class="list-group-item list-group-item-action">A third button item</button>
                        <button class="list-group-item list-group-item-action">A fourth button item</button>
                        <button class="list-group-item list-group-item-action disabled" disabled>
                            A disabled button item
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: List Group With Button Item End -->

        <!-- Card: List Group With Avatar Item  Start -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List Group Avatar</h4>
                <p class="card-subtitle">Example of List Group with avatar.</p>
                <div class="code-viewer mt-4">
                    <ul class="list-group mx-auto max-w-xs">
                        <li class="list-group-item flex items-center gap-2">
                            <div class="avatar avatar-circle">
                                <img class="avatar-img" src="{{asset('images/avatar1.png')}}" alt="Avatar 1" />
                            </div>
                            <div>
                                <h6 class="text-sm font-semibold">Calvin Hawkins</h6>
                                <p class="text-xs text-slate-500">hawkins@example.com</p>
                            </div>
                        </li>
                        <li class="list-group-item flex items-center gap-2">
                            <div class="avatar avatar-circle">
                                <img class="avatar-img" src="{{asset('images/avatar2.png')}}" alt="Avatar 2" />
                            </div>
                            <div>
                                <h6 class="text-sm font-semibold">Calvin Hawkins</h6>
                                <p class="text-xs text-slate-500">hawkins@email.com</p>
                            </div>
                        </li>
                        <li class="list-group-item flex items-center gap-2">
                            <div class="avatar avatar-circle">
                                <img class="avatar-img" src="{{asset('images/avatar3.png')}}" alt="Avatar 3" />
                            </div>
                            <div>
                                <h6 class="text-sm font-semibold">Calvin Hawkins</h6>
                                <p class="text-xs text-slate-500">calvin@example.com</p>
                            </div>
                        </li>
                        <li class="list-group-item flex items-center gap-2">
                            <div class="avatar avatar-circle">
                                <img class="avatar-img" src="{{asset('images/avatar4.png')}}" alt="Avatar 4" />
                            </div>
                            <div>
                                <h6 class="font-sem text-sm">Calvin Hawkins</h6>
                                <p class="text-xs text-slate-500">calvin.hawkins@example.com</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Card: List Group With avatar Item End -->

        <!-- Card: List Group Custom Content Item  Start -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List Group Custom Content</h4>
                <p class="card-subtitle">Example of List Group with custom contend and utility classes</p>
                <div class="code-viewer mt-4">
                    <ul class="list-group mx-auto max-w-sm">
                        <li class="list-group-item active">
                            <div class="mb-2 flex justify-between">
                                <p class="text-sm font-semibold">List group item heading</p>
                                <small class="text-xs font-light">1 day ago</small>
                            </div>
                            <p class="text-xs font-normal text-primary-200">
                                Lorem Ipsum is simply dummy text of the printing and of the printing and...
                            </p>
                        </li>
                        <li class="list-group-item">
                            <div class="mb-2 flex justify-between">
                                <p class="text-sm font-semibold">List group item heading</p>
                                <small class="text-xs font-light">1 day ago</small>
                            </div>
                            <p class="text-xs font-normal text-slate-500">
                                Lorem Ipsum is simply dummy text of the printing and of the printing and...
                            </p>
                        </li>
                        <li class="list-group-item">
                            <div class="mb-2 flex justify-between">
                                <p class="text-sm font-semibold">List group item heading</p>
                                <small class="text-xs font-light">1 day ago</small>
                            </div>
                            <p class="text-xs font-normal text-slate-500">
                                Lorem Ipsum is simply dummy text of the printing and of the printing and...
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Card: List Group Custom Content Item End -->
    </div>
    <!-- List Group Ends -->
</x-app-layout>
