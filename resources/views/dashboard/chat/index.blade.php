<x-app-layout>
    <div
        class="relative h-full w-full overflow-hidden xl:grid xl:grid-cols-6 xl:gap-x-6 xl:overflow-visible 2xl:grid-cols-4">
        <!-- Chat Sidebar Starts -->
        <div id="chat-sidebar"
            class="invisible absolute bottom-0 top-0 z-20 h-auto w-3/4 -translate-x-full bg-white transition-transform duration-300 ease-in-out dark:bg-slate-800 sm:w-72 xl:visible xl:relative xl:col-span-2 xl:w-auto xl:translate-x-0 xl:rounded-primary xl:shadow 2xl:col-span-1">
            <!-- Chat Sidebar Header Starts -->
            <div class="relative border-b border-b-slate-200 p-4 dark:border-b-slate-600">
                <form
                    class="group flex h-10 w-full items-center overflow-hidden rounded-primary border border-transparent bg-slate-100 shadow-sm focus-within:border-primary-500 focus-within:ring-1 focus-within:ring-primary-500 dark:border-transparent dark:bg-slate-700 dark:focus-within:border-primary-500"
                    action="">
                    <div class="flex h-full items-center px-3">
                        <i class="text-slate-400 group-focus-within:text-primary-500" width="1em" height="1em"
                            data-feather="search"></i>
                    </div>
                    <input
                        class="h-full w-full border-transparent bg-transparent px-0 text-sm placeholder-slate-400 placeholder:text-sm focus:border-transparent focus:outline-none focus:ring-0"
                        type="text" placeholder="Search" />
                </form>

                <!-- Chat Sidebar Close Button Starts -->
                <button id="chat-btn-hide-sidebar" type="button"
                    class="-translate-x-1/5 absolute left-full top-1/2 z-20 ml-2 inline-flex h-8 w-8 -translate-y-1/2 items-center justify-center rounded-full text-white dark:text-slate-300 xl:hidden">
                    <i width="20" height="20" data-feather="x"></i>
                </button>
                <!-- Chat Sidebar Close Button Ends -->
            </div>
            <!-- Chat Sidebar Header Ends -->

            <!-- Chat Sidebar Body Starts -->
            <div class="max-h-[calc(100vh-18rem)] overflow-auto md:max-h-[calc(100vh-17rem)]" data-simplebar>
                <ul id="chat-list">
                    <li class="active group">
                        <a href="javascript:void(0);"
                            class="inline-flex w-full items-start justify-between bg-transparent px-4 py-4 transition-colors duration-150 hover:bg-slate-100 group-[.active]:bg-slate-100 dark:hover:bg-slate-700 group-[.active]:dark:bg-slate-700">
                            <div class="avatar avatar-circle avatar-indicator avatar-indicator-online shrink-0">
                                <img class="avatar-img" src="{{ asset('images/avatar2.png') }}" alt="profile-img" />
                            </div>
                            <div class="ml-4 mr-2 flex-grow overflow-x-hidden">
                                <h6 class="whitespace-nowrap text-sm font-medium text-slate-700 dark:text-slate-100">
                                    James Cook
                                </h6>
                                <p class="truncate text-sm font-normal text-slate-500 dark:text-slate-400">
                                    You: I’m happy to help you. If you have any questions, please feel free to contact
                                    me.
                                </p>
                            </div>
                            <span class="whitespace-nowrap text-xs font-normal text-slate-400">30 min ago</span>
                        </a>
                    </li>
                    <li class="group">
                        <a href="javascript:void(0);"
                            class="inline-flex w-full items-start justify-between bg-transparent px-4 py-4 transition-colors duration-150 hover:bg-slate-100 group-[.active]:bg-slate-100 dark:hover:bg-slate-700 group-[.active]:dark:bg-slate-700">
                            <div class="avatar avatar-circle shrink-0">
                                <img class="avatar-img" src="{{ asset('images/avatar3.png') }}" alt="profile-img" />
                            </div>
                            <div class="ml-4 mr-2 flex-grow overflow-x-hidden">
                                <h6 class="whitespace-nowrap text-sm font-medium text-slate-700 dark:text-slate-100">
                                    Maxwell Alston
                                </h6>
                                <p class="truncate text-sm font-normal text-slate-500 dark:text-slate-400">
                                    Learn something interesting.
                                </p>
                            </div>
                            <span class="whitespace-nowrap text-xs font-normal text-slate-400">1 day ago</span>
                        </a>
                    </li>
                    <li class="group">
                        <a href="javascript:void(0);"
                            class="inline-flex w-full items-start justify-between bg-transparent px-4 py-4 transition-colors duration-150 hover:bg-slate-100 group-[.active]:bg-slate-100 dark:hover:bg-slate-700 group-[.active]:dark:bg-slate-700">
                            <div class="avatar avatar-circle shrink-0">
                                <img class="avatar-img" src="{{ asset('images/avatar4.png') }}" alt="profile-img" />
                            </div>
                            <div class="ml-4 mr-2 flex-grow overflow-x-hidden">
                                <h6 class="whitespace-nowrap text-sm font-medium text-slate-700 dark:text-slate-100">
                                    Jhon Doe
                                </h6>
                                <p class="truncate text-sm font-normal text-slate-500 dark:text-slate-400">
                                    Tour plan is ready, Let's explore the journey.
                                </p>
                            </div>
                            <span class="whitespace-nowrap text-xs font-normal text-slate-400">Feb 7</span>
                        </a>
                    </li>
                    <li class="group">
                        <a href="javascript:void(0);"
                            class="inline-flex w-full items-start justify-between bg-transparent px-4 py-4 transition-colors duration-150 hover:bg-slate-100 group-[.active]:bg-slate-100 dark:hover:bg-slate-700 group-[.active]:dark:bg-slate-700">
                            <div class="avatar avatar-circle shrink-0">
                                <img class="avatar-img" src="{{ asset('images/avatar5.png') }}" alt="profile-img" />
                            </div>
                            <div class="ml-4 mr-2 flex-grow overflow-x-hidden">
                                <h6 class="whitespace-nowrap text-sm font-medium text-slate-700 dark:text-slate-100">
                                    Albert Wilson
                                </h6>
                                <p class="truncate text-sm font-normal text-slate-500 dark:text-slate-400">
                                    Your order is delivered.
                                </p>
                            </div>
                            <span class="whitespace-nowrap text-xs font-normal text-slate-400">May 25</span>
                        </a>
                    </li>
                    <li class="group">
                        <a href="javascript:void(0);"
                            class="inline-flex w-full items-start justify-between bg-transparent px-4 py-4 transition-colors duration-150 hover:bg-slate-100 group-[.active]:bg-slate-100 dark:hover:bg-slate-700 group-[.active]:dark:bg-slate-700">
                            <div
                                class="avatar avatar-circle avatar-warning avatar-indicator avatar-indicator-busy shrink-0">
                                <span class="avatar-text">
                                    <span>FN</span>
                                </span>
                            </div>
                            <div class="ml-4 mr-2 flex-grow overflow-x-hidden">
                                <h6 class="whitespace-nowrap text-sm font-medium text-slate-700 dark:text-slate-100">
                                    Francis Nicola
                                </h6>
                                <p class="truncate text-sm font-normal text-slate-500 dark:text-slate-400">
                                    It will take some time.
                                </p>
                            </div>
                            <span class="whitespace-nowrap text-xs font-normal text-slate-400">Jun 30</span>
                        </a>
                    </li>
                    <li class="group">
                        <a href="javascript:void(0);"
                            class="inline-flex w-full items-start justify-between bg-transparent px-4 py-4 transition-colors duration-150 hover:bg-slate-100 group-[.active]:bg-slate-100 dark:hover:bg-slate-700 group-[.active]:dark:bg-slate-700">
                            <div class="avatar avatar-circle shrink-0">
                                <img class="avatar-img" src="{{ asset('images/avatar7.png') }}" alt="profile-img" />
                            </div>
                            <div class="ml-4 mr-2 flex-grow overflow-x-hidden">
                                <h6 class="whitespace-nowrap text-sm font-medium text-slate-700 dark:text-slate-100">
                                    Calvin Moore
                                </h6>
                                <p class="truncate text-sm font-normal text-slate-500 dark:text-slate-400">Are you
                                    there?</p>
                            </div>
                            <span class="whitespace-nowrap text-xs font-normal text-slate-400">Jun 30</span>
                        </a>
                    </li>
                    <li class="group">
                        <a href="javascript:void(0);"
                            class="inline-flex w-full items-start justify-between bg-transparent px-4 py-4 transition-colors duration-150 hover:bg-slate-100 group-[.active]:bg-slate-100 dark:hover:bg-slate-700 group-[.active]:dark:bg-slate-700">
                            <div
                                class="avatar avatar-circle avatar-danger avatar-indicator avatar-indicator-away shrink-0">
                                <span class="avatar-text">
                                    <span>NA</span>
                                </span>
                            </div>
                            <div class="ml-4 mr-2 flex-grow overflow-x-hidden">
                                <h6 class="whitespace-nowrap text-sm font-medium text-slate-700 dark:text-slate-100">
                                    Neil Amstrong
                                </h6>
                                <p class="truncate text-sm font-normal text-slate-500 dark:text-slate-400">
                                    Hello, How is going there?
                                </p>
                            </div>
                            <span class="whitespace-nowrap text-xs font-normal text-slate-400">Dec 25</span>
                        </a>
                    </li>
                    <li class="group">
                        <a href="javascript:void(0);"
                            class="inline-flex w-full items-start justify-between bg-transparent px-4 py-4 transition-colors duration-150 hover:bg-slate-100 group-[.active]:bg-slate-100 dark:hover:bg-slate-700 group-[.active]:dark:bg-slate-700">
                            <div class="avatar avatar-circle shrink-0">
                                <img class="avatar-img" src="{{ asset('images/avatar3.png') }}" alt="profile-img" />
                            </div>
                            <div class="ml-4 mr-2 flex-grow overflow-x-hidden">
                                <h6 class="whitespace-nowrap text-sm font-medium text-slate-700 dark:text-slate-100">
                                    Maxwell Alston
                                </h6>
                                <p class="truncate text-sm font-normal text-slate-500 dark:text-slate-400">
                                    Learn something interesting.
                                </p>
                            </div>
                            <span class="whitespace-nowrap text-xs font-normal text-slate-400">1 day ago</span>
                        </a>
                    </li>
                    <li class="group">
                        <a href="javascript:void(0);"
                            class="inline-flex w-full items-start justify-between bg-transparent px-4 py-4 transition-colors duration-150 hover:bg-slate-100 group-[.active]:bg-slate-100 dark:hover:bg-slate-700 group-[.active]:dark:bg-slate-700">
                            <div class="avatar avatar-circle shrink-0">
                                <img class="avatar-img" src="{{ asset('images/avatar4.png') }}" alt="profile-img" />
                            </div>
                            <div class="ml-4 mr-2 flex-grow overflow-x-hidden">
                                <h6 class="whitespace-nowrap text-sm font-medium text-slate-700 dark:text-slate-100">
                                    Jhon Doe
                                </h6>
                                <p class="truncate text-sm font-normal text-slate-500 dark:text-slate-400">
                                    Tour plan is ready, Let's explore the journey.
                                </p>
                            </div>
                            <span class="whitespace-nowrap text-xs font-normal text-slate-400">Feb 7</span>
                        </a>
                    </li>
                    <li class="group">
                        <a href="javascript:void(0);"
                            class="inline-flex w-full items-start justify-between bg-transparent px-4 py-4 transition-colors duration-150 hover:bg-slate-100 group-[.active]:bg-slate-100 dark:hover:bg-slate-700 group-[.active]:dark:bg-slate-700">
                            <div class="avatar avatar-circle shrink-0">
                                <img class="avatar-img" src="{{ asset('images/avatar5.png') }}" alt="profile-img" />
                            </div>
                            <div class="ml-4 mr-2 flex-grow overflow-x-hidden">
                                <h6 class="whitespace-nowrap text-sm font-medium text-slate-700 dark:text-slate-100">
                                    Albert Wilson
                                </h6>
                                <p class="truncate text-sm font-normal text-slate-500 dark:text-slate-400">
                                    Your order is delivered.
                                </p>
                            </div>
                            <span class="whitespace-nowrap text-xs font-normal text-slate-400">May 25</span>
                        </a>
                    </li>
                    <li class="group">
                        <a href="javascript:void(0);"
                            class="inline-flex w-full items-start justify-between bg-transparent px-4 py-4 transition-colors duration-150 hover:bg-slate-100 group-[.active]:bg-slate-100 dark:hover:bg-slate-700 group-[.active]:dark:bg-slate-700">
                            <div class="avatar avatar-circle shrink-0">
                                <img class="avatar-img" src="{{ asset('images/avatar5.png') }}" alt="profile-img" />
                            </div>
                            <div class="ml-4 mr-2 flex-grow overflow-x-hidden">
                                <h6 class="whitespace-nowrap text-sm font-medium text-slate-700 dark:text-slate-100">
                                    Albert Wilson
                                </h6>
                                <p class="truncate text-sm font-normal text-slate-500 dark:text-slate-400">
                                    Your order is delivered.
                                </p>
                            </div>
                            <span class="whitespace-nowrap text-xs font-normal text-slate-400">May 25</span>
                        </a>
                    </li>
                    <li class="group">
                        <a href="javascript:void(0);"
                            class="inline-flex w-full items-start justify-between bg-transparent px-4 py-4 transition-colors duration-150 hover:bg-slate-100 group-[.active]:bg-slate-100 dark:hover:bg-slate-700 group-[.active]:dark:bg-slate-700">
                            <div
                                class="avatar avatar-circle avatar-warning avatar-indicator avatar-indicator-busy shrink-0">
                                <span class="avatar-text">
                                    <span>FN</span>
                                </span>
                            </div>
                            <div class="ml-4 mr-2 flex-grow overflow-x-hidden">
                                <h6 class="whitespace-nowrap text-sm font-medium text-slate-700 dark:text-slate-100">
                                    Francis Nicola
                                </h6>
                                <p class="truncate text-sm font-normal text-slate-500 dark:text-slate-400">
                                    It will take some time.
                                </p>
                            </div>
                            <span class="whitespace-nowrap text-xs font-normal text-slate-400">Jun 30</span>
                        </a>
                    </li>
                    <li class="group">
                        <a href="javascript:void(0);"
                            class="inline-flex w-full items-start justify-between bg-transparent px-4 py-4 transition-colors duration-150 hover:bg-slate-100 group-[.active]:bg-slate-100 dark:hover:bg-slate-700 group-[.active]:dark:bg-slate-700">
                            <div class="avatar avatar-circle shrink-0">
                                <img class="avatar-img" src="{{ asset('images/avatar7.png') }}" alt="profile-img" />
                            </div>
                            <div class="ml-4 mr-2 flex-grow overflow-x-hidden">
                                <h6 class="whitespace-nowrap text-sm font-medium text-slate-700 dark:text-slate-100">
                                    Calvin Moore
                                </h6>
                                <p class="truncate text-sm font-normal text-slate-500 dark:text-slate-400">Are you
                                    there?</p>
                            </div>
                            <span class="whitespace-nowrap text-xs font-normal text-slate-400">Jun 30</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Chat Sidebar Body Ends -->
        </div>
        <!-- Chat Sidebar Ends -->

        <!-- Chat Wrapper Starts -->
        <div class="relative rounded-primary bg-white shadow dark:bg-slate-800 xl:col-span-4 2xl:col-span-3">
            <!-- Chat Wrapper Header Starts -->
            <div
                class="flex items-center justify-between rounded-t-primary border-b border-b-slate-200 p-4 dark:border-b-slate-600">
                <!-- Avatar and Menu Button Start -->
                <div class="flex items-center justify-start gap-x-3">
                    <button id="chat-btn-show-sidebar"
                        class="text-slate-500 hover:text-slate-700 focus:text-slate-700 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:text-slate-300 xl:hidden">
                        <i width="20" height="20" data-feather="menu"></i>
                    </button>
                    <div class="avatar avatar-circle avatar-indicator avatar-indicator-online">
                        <img class="avatar-img" src="{{ asset('images/avatar2.png') }}" alt="profile-img" />
                    </div>

                    <div>
                        <h6 class="whitespace-nowrap text-sm font-medium text-slate-700 dark:text-slate-100">
                            James Cook
                        </h6>
                        <p class="truncate text-sm font-normal text-slate-500 dark:text-slate-400">Sales Executive</p>
                    </div>
                </div>
                <!-- Avatar and Menu Button End -->

                <!-- Actions and More Dropdown Start -->
                <div class="flex items-center gap-x-6">
                    <button
                        class="hidden text-slate-500 hover:text-primary-500 focus:text-primary-500 dark:text-slate-400 dark:hover:text-primary-500 dark:focus:text-primary-500 sm:block">
                        <i width="18" height="18" data-feather="phone-call"></i>
                    </button>
                    <button
                        class="hidden text-slate-500 hover:text-primary-500 focus:text-primary-500 dark:text-slate-400 dark:hover:text-primary-500 dark:focus:text-primary-500 sm:block">
                        <i width="18" height="18" data-feather="video"></i>
                    </button>
                    <button
                        class="hidden text-slate-500 hover:text-primary-500 focus:text-primary-500 dark:text-slate-400 dark:hover:text-primary-500 dark:focus:text-primary-500 sm:block">
                        <i width="18" height="18" data-feather="search"></i>
                    </button>

                    <div class="dropdown">
                        <div class="dropdown-toggle">
                            <i width="20" height="20"
                                class="text-slate-500 hover:text-slate-700 focus:text-slate-700 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:text-slate-300"
                                data-feather="more-vertical"></i>
                        </div>
                        <div class="dropdown-content w-52">
                            <ul class="dropdown-list">
                                <li class="dropdown-list-item block md:hidden">
                                    <a href="javascript:void(0)" class="dropdown-link gap-3">
                                        <i width="18" height="18" class="text-slate-600 dark:text-slate-400"
                                            data-feather="phone-call"></i>
                                        <span class="text-sm">Audio Call</span>
                                    </a>
                                </li>
                                <li class="dropdown-list-item block md:hidden">
                                    <a href="javascript:void(0)" class="dropdown-link gap-3">
                                        <i width="18" height="18" class="text-slate-600 dark:text-slate-400"
                                            data-feather="video"></i>
                                        <span class="text-sm">Video Call</span>
                                    </a>
                                </li>
                                <li class="dropdown-list-item block md:hidden">
                                    <a href="javascript:void(0)" class="dropdown-link gap-3">
                                        <i width="18" height="18" class="text-slate-600 dark:text-slate-400"
                                            data-feather="search"></i>
                                        <span class="text-sm">Search</span>
                                    </a>
                                </li>
                                <li class="dropdown-list-item">
                                    <a href="javascript:void(0)" class="dropdown-link gap-3">
                                        <i width="18" height="18" class="text-slate-600 dark:text-slate-400"
                                            data-feather="users"></i>
                                        <span class="text-sm">View Contact</span>
                                    </a>
                                </li>
                                <li class="dropdown-list-item">
                                    <a href="javascript:void(0)" class="dropdown-link gap-3">
                                        <i width="18" height="18" class="text-slate-600 dark:text-slate-400"
                                            data-feather="bell-off"></i>
                                        <span class="text-sm">Mute Notification</span>
                                    </a>
                                </li>
                                <li class="dropdown-list-item">
                                    <a href="javascript:void(0)" class="dropdown-link gap-3">
                                        <i width="18" height="18" class="text-slate-600 dark:text-slate-400"
                                            data-feather="slash"></i>
                                        <span class="text-sm">Block Contact</span>
                                    </a>
                                </li>
                                <li class="dropdown-list-item">
                                    <a href="javascript:void(0)" class="dropdown-link gap-3">
                                        <i width="18" height="18" class="text-slate-600 dark:text-slate-400"
                                            data-feather="trash"></i>
                                        <span class="text-sm">Clear Chat</span>
                                    </a>
                                </li>
                                <li class="dropdown-list-item">
                                    <a href="javascript:void(0)" class="dropdown-link gap-3">
                                        <i width="18" height="18" class="text-slate-600 dark:text-slate-400"
                                            data-feather="flag"></i>
                                        <span class="text-sm">Report Contact</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Actions and More Dropdown End -->
            </div>
            <!-- Chat Wrapper Header Ends -->

            <!-- Chat Wrapper Body Starts -->
            <div class="relative max-h-[calc(100vh-18rem)] overflow-auto px-4 pb-28 md:max-h-[calc(100vh-17rem)]"
                data-simplebar>
                <ul class="space-y-3">
                    <!-- Friend Chat -->
                    <li class="group">
                        <div class="flex gap-x-3 group-[.pr]:flex-row-reverse">
                            <div class="avatar avatar-circle avatar-sm shrink-0">
                                <img src="{{ asset('images/avatar2.png') }}" class="avatar-img" alt="profile-img" />
                            </div>
                            <div class="flex max-w-sm flex-col items-start gap-y-2 group-[.pr]:items-end">
                                <p
                                    class="rounded-primary rounded-tl-none bg-slate-100 p-2 text-sm text-slate-600 group-[.pr]:rounded-tl-primary group-[.pr]:rounded-tr-none group-[.pr]:bg-primary-500 group-[.pr]:text-slate-100 dark:bg-slate-700 dark:text-slate-300">
                                    Hello!, Max
                                </p>
                                <span class="text-xs font-normal text-slate-400">10:00AM</span>
                            </div>
                        </div>
                    </li>
                    <!-- User Chat (Position Right) -->
                    <li class="pr group">
                        <div class="flex gap-x-3 group-[.pr]:flex-row-reverse">
                            <div class="avatar avatar-circle avatar-sm shrink-0">
                                <img src="{{ asset('images/avatar1.png') }}" class="avatar-img" alt="profile-img" />
                            </div>
                            <div class="flex max-w-sm flex-col items-start gap-y-2 group-[.pr]:items-end">
                                <p
                                    class="rounded-primary rounded-tl-none bg-slate-100 p-2 text-sm text-slate-600 group-[.pr]:rounded-tl-primary group-[.pr]:rounded-tr-none group-[.pr]:bg-primary-500 group-[.pr]:text-slate-100 dark:bg-slate-700 dark:text-slate-300">
                                    Hi, How can I help you?
                                </p>
                                <span class="text-xs font-normal text-slate-400">10:01AM</span>
                            </div>
                        </div>
                    </li>
                    <!-- Friend Chat -->
                    <li class="group">
                        <div class="flex gap-x-3 group-[.pr]:flex-row-reverse">
                            <div class="avatar avatar-circle avatar-sm shrink-0">
                                <img src="{{ asset('images/avatar2.png') }}" class="avatar-img" alt="profile-img" />
                            </div>
                            <div class="flex max-w-sm flex-col items-start gap-y-2 group-[.pr]:items-end">
                                <p
                                    class="rounded-primary rounded-tl-none bg-slate-100 p-2 text-sm text-slate-600 group-[.pr]:rounded-tl-primary group-[.pr]:rounded-tr-none group-[.pr]:bg-primary-500 group-[.pr]:text-slate-100 dark:bg-slate-700 dark:text-slate-300">
                                    Hi Max, I’m interested to purchase a template. Do you have any available?
                                </p>
                                <p
                                    class="rounded-primary rounded-tl-none bg-slate-100 p-2 text-sm text-slate-600 group-[.pr]:rounded-tl-primary group-[.pr]:rounded-tr-none group-[.pr]:bg-primary-500 group-[.pr]:text-slate-100 dark:bg-slate-700 dark:text-slate-300">
                                    It should be based on TailwindCSS.
                                </p>
                                <span class="text-xs font-normal text-slate-400">10:02AM</span>
                            </div>
                        </div>
                    </li>
                    <!-- User Chat (Position Right) -->
                    <li class="pr group">
                        <div class="flex gap-x-3 group-[.pr]:flex-row-reverse">
                            <div class="avatar avatar-circle avatar-sm shrink-0">
                                <img src="{{ asset('images/avatar1.png') }}" class="avatar-img" alt="profile-img" />
                            </div>
                            <div class="flex max-w-sm flex-col items-start gap-y-2 group-[.pr]:items-end">
                                <p
                                    class="rounded-primary rounded-tl-none bg-slate-100 p-2 text-sm text-slate-600 group-[.pr]:rounded-tl-primary group-[.pr]:rounded-tr-none group-[.pr]:bg-primary-500 group-[.pr]:text-slate-100 dark:bg-slate-700 dark:text-slate-300">
                                    Yes, we have a few templates that matches your description. Admin Toolkit is one the
                                    best of
                                    them.
                                </p>
                                <span class="text-xs font-normal text-slate-400">10:04AM</span>
                            </div>
                        </div>
                    </li>
                    <!-- Friend Chat -->
                    <li class="group">
                        <div class="flex gap-x-3 group-[.pr]:flex-row-reverse">
                            <div class="avatar avatar-circle avatar-sm shrink-0">
                                <img src="{{ asset('images/avatar2.png') }}" class="avatar-img" alt="profile-img" />
                            </div>
                            <div class="flex max-w-sm flex-col items-start gap-y-2 group-[.pr]:items-end">
                                <p
                                    class="rounded-primary rounded-tl-none bg-slate-100 p-2 text-sm text-slate-600 group-[.pr]:rounded-tl-primary group-[.pr]:rounded-tr-none group-[.pr]:bg-primary-500 group-[.pr]:text-slate-100 dark:bg-slate-700 dark:text-slate-300">
                                    Sounds great, Could you please tell me a little bit more about this template?
                                </p>
                                <span class="text-xs font-normal text-slate-400">10:06AM</span>
                            </div>
                        </div>
                    </li>
                    <!-- User Chat (Position Right) -->
                    <li class="pr group">
                        <div class="flex gap-x-3 group-[.pr]:flex-row-reverse">
                            <div class="avatar avatar-circle avatar-sm shrink-0">
                                <img src="{{ asset('images/avatar1.png') }}" class="avatar-img" alt="profile-img" />
                            </div>
                            <div class="flex max-w-sm flex-col items-start gap-y-2 group-[.pr]:items-end">
                                <p
                                    class="rounded-primary rounded-tl-none bg-slate-100 p-2 text-sm text-slate-600 group-[.pr]:rounded-tl-primary group-[.pr]:rounded-tr-none group-[.pr]:bg-primary-500 group-[.pr]:text-slate-100 dark:bg-slate-700 dark:text-slate-300">
                                    Of course, In this template you can fully customize fonts, colours, component,
                                    layouts and
                                    everything else that you need.
                                </p>
                                <span class="text-xs font-normal text-slate-400">10:07AM</span>
                            </div>
                        </div>
                    </li>
                    <!-- Friend Chat -->
                    <li class="group">
                        <div class="flex gap-x-3 group-[.pr]:flex-row-reverse">
                            <div class="avatar avatar-circle avatar-sm shrink-0">
                                <img src="{{ asset('images/avatar2.png') }}" class="avatar-img" alt="profile-img" />
                            </div>
                            <div class="flex max-w-sm flex-col items-start gap-y-2 group-[.pr]:items-end">
                                <p
                                    class="rounded-primary rounded-tl-none bg-slate-100 p-2 text-sm text-slate-600 group-[.pr]:rounded-tl-primary group-[.pr]:rounded-tr-none group-[.pr]:bg-primary-500 group-[.pr]:text-slate-100 dark:bg-slate-700 dark:text-slate-300">
                                    That's good, I will purchase it for sure.
                                </p>
                                <p
                                    class="rounded-primary rounded-tl-none bg-slate-100 p-2 text-sm text-slate-600 group-[.pr]:rounded-tl-primary group-[.pr]:rounded-tr-none group-[.pr]:bg-primary-500 group-[.pr]:text-slate-100 dark:bg-slate-700 dark:text-slate-300">
                                    Thanks for your information
                                </p>
                                <span class="text-xs font-normal text-slate-400">10:08AM</span>
                            </div>
                        </div>
                    </li>
                    <!-- User Chat (Position Right) -->
                    <li class="pr group">
                        <div class="flex gap-x-3 group-[.pr]:flex-row-reverse">
                            <div class="avatar avatar-circle avatar-sm shrink-0">
                                <img src="{{ asset('images/avatar1.png') }}" class="avatar-img" alt="profile-img" />
                            </div>
                            <div class="flex max-w-sm flex-col items-start gap-y-2 group-[.pr]:items-end">
                                <p
                                    class="rounded-primary rounded-tl-none bg-slate-100 p-2 text-sm text-slate-600 group-[.pr]:rounded-tl-primary group-[.pr]:rounded-tr-none group-[.pr]:bg-primary-500 group-[.pr]:text-slate-100 dark:bg-slate-700 dark:text-slate-300">
                                    I’m happy to help you. If you have any questions, please feel free to contact me.
                                </p>
                                <span class="text-xs font-normal text-slate-400">10:10AM</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- For Div: Scroll To Bottom  -->
                <div id="chat-scroll-view"></div>
            </div>
            <!-- Chat Wrapper Body Ends -->

            <!-- Chat Wrapper Footer Starts -->
            <div
                class="absolute bottom-[-0.5px] left-0 right-0 z-10 rounded-b-primary bg-white py-4 dark:bg-slate-800">
                <form
                    class="mx-4 flex h-[4.5rem] items-center rounded-primary border border-slate-200 shadow dark:border-slate-600">
                    <input
                        class="h-full w-full border-transparent bg-transparent px-4 text-sm text-slate-700 placeholder:text-slate-500 focus:border-transparent focus:ring-0 dark:text-slate-300 dark:placeholder:text-slate-400"
                        type="text" placeholder="Type your message here" />
                    <div class="flex items-center gap-x-4 px-4">
                        <button type="button"
                            class="text-slate-500 hover:text-primary-500 focus:text-primary-500 dark:text-slate-400 dark:hover:text-primary-500 dark:focus:text-primary-500">
                            <i width="20" height="20" data-feather="mic"></i>
                        </button>
                        <div class="flex">
                            <button id="btn-upload-media" type="button"
                                class="text-slate-500 hover:text-primary-500 focus:text-primary-500 dark:text-slate-400 dark:hover:text-primary-500 dark:focus:text-primary-500">
                                <i width="20" height="20" data-feather="image"></i>
                            </button>
                            <input class="sr-only" type="file" id="input-upload-media" />
                        </div>
                        <button type="button" class="btn btn-sm btn-primary">
                            <i width="18" height="18" data-feather="send"></i>
                            <span class="hidden md:inline-block">Send</span>
                        </button>
                    </div>
                </form>
            </div>
            <!-- Chat Wrapper Footer Ends -->
        </div>
        <!-- Chat Wrapper Ends -->

        <!-- Chat Overlay Starts -->
        <div id="chat-overlay"
            class="absolute inset-0 z-10 hidden h-full w-full bg-black bg-opacity-0 transition-colors duration-300 ease-in-out xl:hidden">
        </div>
        <!-- Email Overlay Ends -->
    </div>
</x-app-layout>
