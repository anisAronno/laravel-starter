<x-app-layout>
    <div class="relative h-full w-full overflow-hidden xl:grid xl:grid-cols-4 xl:gap-x-6 xl:overflow-visible">
        <!-- Email Sidebar Starts -->
        <div id="email-sidebar"
            class="invisible absolute bottom-0 top-0 z-20 h-auto w-3/4 -translate-x-full space-y-3 bg-white transition-transform duration-300 ease-in-out dark:bg-slate-800 sm:w-64 xl:visible xl:sticky xl:top-20 xl:col-span-1 xl:h-max xl:w-auto xl:translate-x-0 xl:rounded-primary xl:shadow">
            <!-- Email Sidebar Header Starts -->
            <div class="relative mt-4 px-6">
                <button type="button" class="btn btn-lg btn-primary w-full" data-toggle="modal"
                    data-target="#modal-email-compose">
                    <span class="inline-flex h-4 w-4 items-center justify-center">
                        <i class="ti ti-pencil text-xl"></i>
                    </span>
                    <span class="text-sm">Compose</span>
                </button>

                <!-- Email Sidebar Close Button Starts -->
                <button id="email-btn-hide-sidebar" type="button"
                    class="-translate-x-1/5 absolute left-full top-1/2 z-20 ml-2 inline-flex h-8 w-8 -translate-y-1/2 items-center justify-center rounded-full text-white dark:text-slate-300 xl:hidden">
                    <i class="ti ti-x text-xl"></i>
                </button>
                <!-- Email Sidebar Close Button Ends -->
            </div>
            <!-- Email Sidebar Header Ends -->

            <!-- Email Sidebar Body Starts -->
            <div class="px-6">
                <ul id="email-filter" class="space-y-1">
                    <li class="active group">
                        <div
                            class="flex cursor-pointer items-center justify-between rounded-primary px-4 py-3 text-sm text-slate-700 transition-colors duration-150 ease-in-out hover:bg-slate-100 group-[.active]:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-700 group-[.active]:dark:bg-slate-700">
                            <a href="javascript:void(0);" class="inline-flex items-center gap-2">
                                <span
                                    class="inline-flex h-5 w-5 items-center justify-center text-slate-500 dark:text-slate-400">
                                    <i class="ti ti-mail text-xl"></i>
                                </span>
                                <span>Inbox</span>
                            </a>
                            <div class="badge badge-circle badge-primary">2</div>
                        </div>
                    </li>
                    <li class="group">
                        <div
                            class="flex cursor-pointer items-center justify-between rounded-primary px-4 py-3 text-sm text-slate-700 transition-colors duration-150 ease-in-out hover:bg-slate-100 group-[.active]:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-700 group-[.active]:dark:bg-slate-700">
                            <a href="javascript:void(0);" class="inline-flex items-center gap-2">
                                <span
                                    class="inline-flex h-5 w-5 items-center justify-center text-slate-500 dark:text-slate-400">
                                    <i class="ti ti-send text-xl"></i>
                                </span>
                                <span>Sent</span>
                            </a>
                        </div>
                    </li>
                    <li class="group">
                        <div
                            class="flex cursor-pointer items-center justify-between rounded-primary px-4 py-3 text-sm text-slate-700 transition-colors duration-150 ease-in-out hover:bg-slate-100 group-[.active]:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-700 group-[.active]:dark:bg-slate-700">
                            <a href="javascript:void(0);" class="inline-flex items-center gap-2">
                                <span
                                    class="inline-flex h-5 w-5 items-center justify-center text-slate-500 dark:text-slate-400">
                                    <i class="ti ti-file text-xl"></i>
                                </span>
                                <span>Draft</span>
                            </a>
                        </div>
                    </li>
                    <li class="group">
                        <div
                            class="flex cursor-pointer items-center justify-between rounded-primary px-4 py-3 text-sm text-slate-700 transition-colors duration-150 ease-in-out hover:bg-slate-100 group-[.active]:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-700 group-[.active]:dark:bg-slate-700">
                            <a href="javascript:void(0);" class="inline-flex items-center gap-2">
                                <span
                                    class="inline-flex h-5 w-5 items-center justify-center text-slate-500 dark:text-slate-400">
                                    <i class="ti ti-star text-xl"></i>
                                </span>
                                <span>Starred</span>
                            </a>
                            <div class="badge badge-circle badge-warning">7</div>
                        </div>
                    </li>
                    <li class="group">
                        <div
                            class="flex cursor-pointer items-center justify-between rounded-primary px-4 py-3 text-sm text-slate-700 transition-colors duration-150 ease-in-out hover:bg-slate-100 group-[.active]:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-700 group-[.active]:dark:bg-slate-700">
                            <a href="javascript:void(0);" class="inline-flex items-center gap-2">
                                <span
                                    class="inline-flex h-5 w-5 items-center justify-center text-slate-500 dark:text-slate-400">
                                    <i class="ti ti-exclamation-circle text-xl"></i>
                                </span>
                                <span>Spam</span>
                            </a>
                        </div>
                    </li>
                    <li class="group">
                        <div
                            class="flex cursor-pointer items-center justify-between rounded-primary px-4 py-3 text-sm text-slate-700 transition-colors duration-150 ease-in-out hover:bg-slate-100 group-[.active]:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-700 group-[.active]:dark:bg-slate-700">
                            <a href="javascript:void(0);" class="inline-flex items-center gap-2">
                                <span
                                    class="inline-flex h-5 w-5 items-center justify-center text-slate-500 dark:text-slate-400">
                                    <i class="ti ti-trash text-xl"></i>
                                </span>
                                <span>Trash</span>
                            </a>
                            <div class="badge badge-circle badge-danger">2</div>
                        </div>
                    </li>
                    <li class="px-5 py-2 text-xs uppercase tracking-widest text-slate-400">Labels</li>
                    <li class="group">
                        <div
                            class="flex cursor-pointer items-center justify-between rounded-primary px-4 py-3 text-sm text-slate-700 transition-colors duration-150 ease-in-out hover:bg-primary-100 hover:text-primary-500 group-[.active]:bg-primary-100 group-[.active]:text-primary-500 dark:text-slate-300 dark:hover:bg-primary-500/20 dark:hover:text-primary-500 group-[.active]:dark:bg-primary-500/20">
                            <a href="javascript:void(0);" class="inline-flex items-center gap-2">
                                <span class="badge badge-dot badge-primary"></span>
                                <span>Company</span>
                            </a>
                        </div>
                    </li>
                    <li class="group">
                        <div
                            class="flex cursor-pointer items-center justify-between rounded-primary px-4 py-3 text-sm text-slate-700 transition-colors duration-150 ease-in-out hover:bg-success-100 hover:text-success-500 group-[.active]:bg-success-100 group-[.active]:text-success-500 dark:text-slate-300 dark:hover:bg-success-500/20 dark:hover:text-success-500 group-[.active]:dark:bg-success-500/20">
                            <a href="javascript:void(0);" class="inline-flex items-center gap-2">
                                <span class="badge badge-dot badge-success"></span>
                                <span>Personal</span>
                            </a>
                            <div class="badge badge-circle badge-success">2</div>
                        </div>
                    </li>
                    <li class="group">
                        <div
                            class="flex cursor-pointer items-center justify-between rounded-primary px-4 py-3 text-sm text-slate-700 transition-colors duration-150 ease-in-out hover:bg-danger-100 hover:text-danger-500 group-[.active]:bg-danger-100 group-[.active]:text-danger-500 dark:text-slate-300 dark:hover:bg-danger-500/20 dark:hover:text-danger-500 group-[.active]:dark:bg-danger-500/20">
                            <a href="javascript:void(0);" class="inline-flex items-center gap-2">
                                <span class="badge badge-dot badge-danger"></span>
                                <span>Important</span>
                            </a>
                        </div>
                    </li>
                    <li class="group">
                        <div
                            class="flex cursor-pointer items-center justify-between rounded-primary px-4 py-3 text-sm text-slate-700 transition-colors duration-150 ease-in-out hover:bg-warning-100 hover:text-warning-500 group-[.active]:bg-warning-100 group-[.active]:text-warning-500 dark:text-slate-300 dark:hover:bg-warning-500/20 dark:hover:text-warning-500 group-[.active]:dark:bg-warning-500/20">
                            <a href="javascript:void(0);" class="inline-flex items-center gap-2">
                                <span class="badge badge-dot badge-warning"></span>
                                <span>Promotions</span>
                            </a>
                            <div class="badge badge-circle badge-warning">2</div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Email Sidebar Body Ends -->

            <!-- Email Sidebar Footer Starts -->
            <div class="mt-auto border-t border-t-slate-200 px-6 py-2 dark:border-t-slate-600">
                <button type="button"
                    class="btn btn-plain-secondary w-full justify-start px-4 py-3 text-slate-700 hover:bg-slate-100 hover:text-primary-500 focus:bg-slate-100 focus:text-primary-500 dark:text-slate-300 dark:hover:bg-slate-700 dark:hover:text-primary-500 dark:focus:bg-slate-700 dark:focus:text-primary-500">
                    <span class="inline-flex h-5 w-5 items-center justify-center">
                        <i class="ti ti-plus text-xl"></i>
                    </span>
                    <span>Add Label</span>
                </button>
            </div>
            <!-- Email Sidebar Footer Ends -->
        </div>
        <!-- Email Sidebar Ends -->

        <!-- Email Wrapper Starts -->
        <div
            class="relative h-max w-full overflow-hidden rounded-primary bg-white shadow dark:bg-slate-800 xl:col-span-3">
            <!-- Email Wrapper Header Starts -->
            <div
                class="divide-y divide-slate-200 border-b border-b-slate-200 dark:divide-slate-600 dark:border-b-slate-600">
                <!-- Email Search Starts -->
                <div class="flex items-center gap-x-3 px-4 py-3 sm:gap-x-6">
                    <button id="email-btn-show-sidebar" type="button"
                        class="text-slate-500 focus:text-slate-700 dark:text-slate-400 dark:focus:text-slate-300 xl:hidden"
                        data-toggle="sidebar" data-target="#email-ui-sidebar-primary">
                        <i class="ti ti-menu-2 text-xl"></i>
                    </button>

                    <form
                        class="group flex h-10 w-full max-w-full items-center overflow-hidden rounded-primary border border-transparent bg-slate-100 shadow-sm focus-within:border-primary-500 focus-within:ring-1 focus-within:ring-primary-500 dark:border-transparent dark:bg-slate-700 dark:focus-within:border-primary-500 sm:max-w-[18rem]"
                        action="">
                        <div class="flex h-full items-center px-2">
                            <i data-feather="search"
                                class="h-4 w-4 text-slate-400 group-focus-within:text-primary-500"></i>
                        </div>
                        <input
                            class="h-full w-full border-transparent bg-transparent px-0 text-sm placeholder-slate-400 placeholder:text-sm focus:border-transparent focus:outline-none focus:ring-0"
                            type="text" placeholder="Search" />
                    </form>

                    <div class="dropdown ml-auto">
                        <div class="dropdown-toggle">
                            <button type="button"
                                class="text-slate-500 focus:text-slate-700 dark:text-slate-400 dark:focus:text-slate-300">
                                <i class="ti ti-dots-vertical text-xl"></i>
                            </button>
                        </div>
                        <div class="dropdown-content">
                            <ul class="dropdown-list">
                                <li class="dropdown-list-item">
                                    <a href="javascript:void(0);" class="dropdown-link">Mark as read</a>
                                </li>
                                <li class="dropdown-list-item">
                                    <a href="javascript:void(0);" class="dropdown-link">Mark as unread</a>
                                </li>
                                <li class="dropdown-list-item">
                                    <a href="javascript:void(0);" class="dropdown-link">Archive</a>
                                </li>
                                <li class="dropdown-list-item">
                                    <a href="javascript:void(0);" class="dropdown-link">Delete</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Email Search Ends -->

                <!-- Email Toolbar Starts -->
                <div class="flex items-center justify-between px-4 py-3">
                    <div class="flex items-center gap-x-3 sm:gap-x-6">
                        <input type="checkbox" class="checkbox" data-check-all
                            data-check-all-target=".email-checkbox" />
                        <button id="email-reload-all" type="button"
                            class="text-slate-500 focus:text-slate-700 dark:text-slate-400 dark:focus:text-slate-300">
                            <i class="ti ti-reload text-xl"></i>
                        </button>
                        <button id="email-mark-all" type="button"
                            class="text-slate-500 focus:text-slate-700 dark:text-slate-400 dark:focus:text-slate-300">
                            <i class="ti ti-mail-opened text-xl"></i>
                        </button>
                        <button id="email-delete-all" type="button"
                            class="text-slate-500 focus:text-slate-700 dark:text-slate-400 dark:focus:text-slate-300">
                            <i class="ti ti-trash text-xl"></i>
                        </button>
                    </div>

                    <div class="hidden items-center gap-x-4 sm:flex">
                        <span class="text-sm text-slate-500 dark:text-slate-300">1-10 of 653</span>
                        <div class="flex items-center gap-x-2">
                            <button type="button" disabled
                                class="text-slate-500 focus:text-slate-700 disabled:opacity-50 dark:text-slate-400 dark:focus:text-slate-300">
                                <i class="ti ti-chevron-left text-xl"></i>
                            </button>
                            <button type="button"
                                class="text-slate-500 focus:text-slate-700 dark:text-slate-400 dark:focus:text-slate-300">
                                <i class="ti ti-chevron-right text-xl"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Email Toolbar Ends -->
            </div>
            <!-- Email Wrapper Header Ends -->

            <!-- Email Wrapper Body Starts -->
            <div class="h-auto w-full">
                <ul id="email-list" class="divide-y divide-slate-200 dark:divide-slate-600">
                    <li class="mark-as-starred group relative cursor-pointer bg-white px-4 py-3 dark:bg-slate-800 md:hover:z-10 md:hover:shadow-[0px_2px_4px_0px_var(--tw-shadow-color)] md:hover:shadow-black/10 md:dark:hover:shadow-slate-100/30"
                        data-filter-by-sent="true" data-filter-by-personal="true">
                        <div class="flex items-center gap-x-3 sm:gap-x-6">
                            <input type="checkbox" class="checkbox email-checkbox" />
                            <button type="button"
                                class="hidden text-slate-500 focus:text-slate-700 group-[.mark-as-starred]:text-warning-500 dark:text-slate-400 dark:focus:text-slate-300 sm:block"
                                data-btn="bookmark">
                                <i class="ti ti-star text-lg"></i>
                            </button>

                            <div class="flex w-full items-center gap-3">
                                <div class="avatar avatar-circle avatar-sm shrink-0">
                                    <img class="avatar-img" src="{{asset('images/avatar1.png')}}" alt="Avatar 1" />
                                </div>

                                <div class="flex w-full flex-col items-center gap-1 2xl:flex-row">
                                    <div class="w-full shrink-0 2xl:w-1/6">
                                        <span
                                            class="text-sm font-medium text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300">
                                            Chandler Bing
                                        </span>
                                    </div>

                                    <div class="w-full">
                                        <span
                                            class="text-[13px] font-medium text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300 sm:text-sm">
                                            Focused impactful open issues from the project of GitHub
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <span class="badge badge-dot badge-success hidden md:inline-flex"></span>
                                <span
                                    class="whitespace-nowrap text-xs font-medium text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300">
                                    9:33PM
                                </span>
                            </div>
                        </div>

                        <div
                            class="absolute bottom-0 right-0 top-0 hidden h-full w-28 bg-white dark:bg-slate-800 md:group-hover:block">
                            <div class="flex h-full w-full items-center justify-end gap-x-4 px-4">
                                <button type="button"
                                    class="text-slate-500 focus:text-slate-700 dark:text-slate-400 dark:focus:text-slate-300"
                                    data-btn="mark">
                                    <i class="ti ti-mail hidden text-xl group-[.mark-as-read]:inline-block"></i>
                                    <i class="ti ti-mail-opened inline-block text-xl group-[.mark-as-read]:hidden"></i>
                                </button>
                                <button type="button"
                                    class="text-slate-500 focus:text-slate-700 dark:text-slate-400 dark:focus:text-slate-300"
                                    data-btn="delete">
                                    <i class="ti ti-trash l text-xl"></i>
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="mark-as-starred group relative cursor-pointer bg-white px-4 py-3 dark:bg-slate-800 md:hover:z-10 md:hover:shadow-[0px_2px_4px_0px_var(--tw-shadow-color)] md:hover:shadow-black/10 md:dark:hover:shadow-slate-100/30"
                        data-filter-by-sent="true" data-filter-by-company="true">
                        <div class="flex items-center gap-x-3 sm:gap-x-6">
                            <input type="checkbox" class="checkbox email-checkbox" />
                            <button type="button"
                                class="hidden text-slate-500 focus:text-slate-700 group-[.mark-as-starred]:text-warning-500 dark:text-slate-400 dark:focus:text-slate-300 sm:block"
                                data-btn="bookmark">
                                <i class="ti ti-star text-lg"></i>
                            </button>

                            <div class="flex w-full items-center gap-3">
                                <div class="avatar avatar-circle avatar-sm shrink-0">
                                    <img class="avatar-img" src="{{asset('images/avatar2.png')}}" alt="Avatar 2" />
                                </div>

                                <div class="flex w-full flex-col items-center gap-1 2xl:flex-row">
                                    <div class="w-full shrink-0 2xl:w-1/6">
                                        <span
                                            class="text-sm font-medium text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300">
                                            Ross Geller
                                        </span>
                                    </div>

                                    <div class="w-full">
                                        <span
                                            class="text-[13px] font-medium text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300 sm:text-sm">
                                            Hey Katy, Dessert soufflé tootsie roll soufflé carrot cake halvah jelly
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <span class="badge badge-dot badge-primary hidden md:inline-flex"></span>
                                <span
                                    class="whitespace-nowrap text-xs font-medium text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300">
                                    8:40AM
                                </span>
                            </div>
                        </div>

                        <div
                            class="absolute bottom-0 right-0 top-0 hidden h-full w-28 bg-white dark:bg-slate-800 md:group-hover:block">
                            <div class="flex h-full w-full items-center justify-end gap-x-4 px-4">
                                <button type="button"
                                    class="text-slate-500 focus:text-slate-700 dark:text-slate-400 dark:focus:text-slate-300"
                                    data-btn="mark">
                                    <i class="ti ti-mail hidden text-xl group-[.mark-as-read]:inline-block"></i>
                                    <i class="ti ti-mail-opened inline-block text-xl group-[.mark-as-read]:hidden"></i>
                                </button>
                                <button type="button"
                                    class="text-slate-500 focus:text-slate-700 dark:text-slate-400 dark:focus:text-slate-300"
                                    data-btn="delete">
                                    <i class="ti ti-trash l text-xl"></i>
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="mark-as-starred group relative cursor-pointer bg-white px-4 py-3 dark:bg-slate-800 md:hover:z-10 md:hover:shadow-[0px_2px_4px_0px_var(--tw-shadow-color)] md:hover:shadow-black/10 md:dark:hover:shadow-slate-100/30"
                        data-filter-by-draft="true" data-filter-by-important="true">
                        <div class="flex items-center gap-x-3 sm:gap-x-6">
                            <input type="checkbox" class="checkbox email-checkbox" />
                            <button type="button"
                                class="hidden text-slate-500 focus:text-slate-700 group-[.mark-as-starred]:text-warning-500 dark:text-slate-400 dark:focus:text-slate-300 sm:block"
                                data-btn="bookmark">
                                <i class="ti ti-star text-lg"></i>
                            </button>

                            <div class="flex w-full items-center gap-3">
                                <div class="avatar avatar-circle avatar-sm shrink-0">
                                    <img class="avatar-img" src="{{asset('images/avatar3.png')}}" alt="Avatar 3" />
                                </div>

                                <div class="flex w-full flex-col items-center gap-1 2xl:flex-row">
                                    <div class="w-full shrink-0 2xl:w-1/6">
                                        <span
                                            class="text-sm font-medium text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300">
                                            Barney Stinson
                                        </span>
                                    </div>

                                    <div class="w-full">
                                        <span
                                            class="text-[13px] font-medium text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300 sm:text-sm">
                                            Hey Katy, Soufflé apple pie caramels soufflé tiramisu bear claw
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <span class="badge badge-dot badge-danger hidden md:inline-flex"></span>
                                <span class="text-slate-500 dark:text-slate-400">
                                    <i class="ti ti-paperclip"></i>
                                </span>
                                <span
                                    class="whitespace-nowrap text-xs font-medium text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300">
                                    10:12AM
                                </span>
                            </div>
                        </div>

                        <div
                            class="absolute bottom-0 right-0 top-0 hidden h-full w-28 bg-white dark:bg-slate-800 md:group-hover:block">
                            <div class="flex h-full w-full items-center justify-end gap-x-4 px-4">
                                <button type="button"
                                    class="text-slate-500 focus:text-slate-700 dark:text-slate-400 dark:focus:text-slate-300"
                                    data-btn="mark">
                                    <i class="ti ti-mail hidden text-xl group-[.mark-as-read]:inline-block"></i>
                                    <i class="ti ti-mail-opened inline-block text-xl group-[.mark-as-read]:hidden"></i>
                                </button>
                                <button type="button"
                                    class="text-slate-500 focus:text-slate-700 dark:text-slate-400 dark:focus:text-slate-300"
                                    data-btn="delete">
                                    <i class="ti ti-trash l text-xl"></i>
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="mark-as-read group relative cursor-pointer bg-white px-4 py-3 dark:bg-slate-800 md:hover:z-10 md:hover:shadow-[0px_2px_4px_0px_var(--tw-shadow-color)] md:hover:shadow-black/10 md:dark:hover:shadow-slate-100/30"
                        data-filter-by-draft="true" data-filter-by-promotions="true">
                        <div class="flex items-center gap-x-3 sm:gap-x-6">
                            <input type="checkbox" class="checkbox email-checkbox" />
                            <button type="button"
                                class="hidden text-slate-500 focus:text-slate-700 group-[.mark-as-starred]:text-warning-500 dark:text-slate-400 dark:focus:text-slate-300 sm:block"
                                data-btn="bookmark">
                                <i class="ti ti-star text-lg"></i>
                            </button>

                            <div class="flex w-full items-center gap-3">
                                <div class="avatar avatar-circle avatar-sm avatar-success shrink-0">
                                    <span class="avatar-text">
                                        <span>PB</span>
                                    </span>
                                </div>

                                <div class="flex w-full flex-col items-center gap-1 2xl:flex-row">
                                    <div class="w-full shrink-0 2xl:w-1/6">
                                        <span
                                            class="text-sm font-semibold text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300">
                                            Pheobe Buffay
                                        </span>
                                    </div>

                                    <div class="w-full">
                                        <span
                                            class="text-[13px] font-semibold text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300 sm:text-sm">
                                            Hey Katy, Tart croissant jujubes gummies macaroon Icing sweet
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <span class="badge badge-dot badge-warning hidden md:inline-flex"></span>
                                <span
                                    class="whitespace-nowrap text-xs font-semibold text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300">
                                    12:44AM
                                </span>
                            </div>
                        </div>

                        <div
                            class="absolute bottom-0 right-0 top-0 hidden h-full w-28 bg-white dark:bg-slate-800 md:group-hover:block">
                            <div class="flex h-full w-full items-center justify-end gap-x-4 px-4">
                                <button type="button"
                                    class="text-slate-500 focus:text-slate-700 dark:text-slate-400 dark:focus:text-slate-300"
                                    data-btn="mark">
                                    <i class="ti ti-mail hidden text-xl group-[.mark-as-read]:inline-block"></i>
                                    <i class="ti ti-mail-opened inline-block text-xl group-[.mark-as-read]:hidden"></i>
                                </button>
                                <button type="button"
                                    class="text-slate-500 focus:text-slate-700 dark:text-slate-400 dark:focus:text-slate-300"
                                    data-btn="delete">
                                    <i class="ti ti-trash l text-xl"></i>
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="mark-as-read group relative cursor-pointer bg-white px-4 py-3 dark:bg-slate-800 md:hover:z-10 md:hover:shadow-[0px_2px_4px_0px_var(--tw-shadow-color)] md:hover:shadow-black/10 md:dark:hover:shadow-slate-100/30"
                        data-filter-by-starred="true" data-filter-by-personal="true">
                        <div class="flex items-center gap-x-3 sm:gap-x-6">
                            <input type="checkbox" class="checkbox email-checkbox" />
                            <button type="button"
                                class="hidden text-slate-500 focus:text-slate-700 group-[.mark-as-starred]:text-warning-500 dark:text-slate-400 dark:focus:text-slate-300 sm:block"
                                data-btn="bookmark">
                                <i class="ti ti-star text-lg"></i>
                            </button>

                            <div class="flex w-full items-center gap-3">
                                <div class="avatar avatar-circle avatar-sm shrink-0">
                                    <img class="avatar-img" src="{{asset('images/avatar5.png')}}" alt="Avatar 5" />
                                </div>

                                <div class="flex w-full flex-col items-center gap-1 2xl:flex-row">
                                    <div class="w-full shrink-0 2xl:w-1/6">
                                        <span
                                            class="text-sm font-semibold text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300">
                                            Ted Mosby
                                        </span>
                                    </div>

                                    <div class="w-full">
                                        <span
                                            class="text-[13px] font-semibold text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300 sm:text-sm">
                                            Hey Katy, I love Pudding cookie chocolate sweet tiramisu jujubes I love
                                            danish
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <span class="badge badge-dot badge-success hidden md:inline-flex"></span>
                                <span
                                    class="whitespace-nowrap text-xs font-semibold text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300">
                                    Apr 03
                                </span>
                            </div>
                        </div>

                        <div
                            class="absolute bottom-0 right-0 top-0 hidden h-full w-28 bg-white dark:bg-slate-800 md:group-hover:block">
                            <div class="flex h-full w-full items-center justify-end gap-x-4 px-4">
                                <button type="button"
                                    class="text-slate-500 focus:text-slate-700 dark:text-slate-400 dark:focus:text-slate-300"
                                    data-btn="mark">
                                    <i class="ti ti-mail hidden text-xl group-[.mark-as-read]:inline-block"></i>
                                    <i class="ti ti-mail-opened inline-block text-xl group-[.mark-as-read]:hidden"></i>
                                </button>
                                <button type="button"
                                    class="text-slate-500 focus:text-slate-700 dark:text-slate-400 dark:focus:text-slate-300"
                                    data-btn="delete">
                                    <i class="ti ti-trash l text-xl"></i>
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="mark-as-read group relative cursor-pointer bg-white px-4 py-3 dark:bg-slate-800 md:hover:z-10 md:hover:shadow-[0px_2px_4px_0px_var(--tw-shadow-color)] md:hover:shadow-black/10 md:dark:hover:shadow-slate-100/30"
                        data-filter-by-starred="true" data-filter-by-company="true">
                        <div class="flex items-center gap-x-3 sm:gap-x-6">
                            <input type="checkbox" class="checkbox email-checkbox" />
                            <button type="button"
                                class="hidden text-slate-500 focus:text-slate-700 group-[.mark-as-starred]:text-warning-500 dark:text-slate-400 dark:focus:text-slate-300 sm:block"
                                data-btn="bookmark">
                                <i class="ti ti-star text-lg"></i>
                            </button>

                            <div class="flex w-full items-center gap-3">
                                <div class="avatar avatar-circle avatar-sm shrink-0">
                                    <img class="avatar-img" src="{{asset('images/avatar6.png')}}" alt="Avatar 6" />
                                </div>

                                <div class="flex w-full flex-col items-center gap-1 2xl:flex-row">
                                    <div class="w-full shrink-0 2xl:w-1/6">
                                        <span
                                            class="text-sm font-semibold text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300">
                                            Stacy Cooper
                                        </span>
                                    </div>

                                    <div class="w-full">
                                        <span
                                            class="text-[13px] font-semibold text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300 sm:text-sm">
                                            Hey Katy, I love danish. Cupcake I love carrot cake sugar plum I love
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <span class="badge badge-dot badge-primary hidden md:inline-flex"></span>
                                <span
                                    class="whitespace-nowrap text-xs font-semibold text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300">
                                    Apr 01
                                </span>
                            </div>
                        </div>

                        <div
                            class="absolute bottom-0 right-0 top-0 hidden h-full w-28 bg-white dark:bg-slate-800 md:group-hover:block">
                            <div class="flex h-full w-full items-center justify-end gap-x-4 px-4">
                                <button type="button"
                                    class="text-slate-500 focus:text-slate-700 dark:text-slate-400 dark:focus:text-slate-300"
                                    data-btn="mark">
                                    <i class="ti ti-mail hidden text-xl group-[.mark-as-read]:inline-block"></i>
                                    <i class="ti ti-mail-opened inline-block text-xl group-[.mark-as-read]:hidden"></i>
                                </button>
                                <button type="button"
                                    class="text-slate-500 focus:text-slate-700 dark:text-slate-400 dark:focus:text-slate-300"
                                    data-btn="delete">
                                    <i class="ti ti-trash l text-xl"></i>
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="mark-as-read group relative cursor-pointer bg-white px-4 py-3 dark:bg-slate-800 md:hover:z-10 md:hover:shadow-[0px_2px_4px_0px_var(--tw-shadow-color)] md:hover:shadow-black/10 md:dark:hover:shadow-slate-100/30"
                        data-filter-by-spam="true" data-filter-by-important="true">
                        <div class="flex items-center gap-x-3 sm:gap-x-6">
                            <input type="checkbox" class="checkbox email-checkbox" />
                            <button type="button"
                                class="hidden text-slate-500 focus:text-slate-700 group-[.mark-as-starred]:text-warning-500 dark:text-slate-400 dark:focus:text-slate-300 sm:block"
                                data-btn="bookmark">
                                <i class="ti ti-star text-lg"></i>
                            </button>

                            <div class="flex w-full items-center gap-3">
                                <div class="avatar avatar-circle avatar-sm shrink-0">
                                    <img class="avatar-img" src="{{asset('images/avatar7.png')}}" alt="Avatar 7" />
                                </div>

                                <div class="flex w-full flex-col items-center gap-1 2xl:flex-row">
                                    <div class="w-full shrink-0 2xl:w-1/6">
                                        <span
                                            class="text-sm font-semibold text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300">
                                            Rachel Green
                                        </span>
                                    </div>

                                    <div class="w-full">
                                        <span
                                            class="text-[13px] font-semibold text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300 sm:text-sm">
                                            Hey Katy, Chocolate cake pudding chocolate bar ice cream bonbon lollipop
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <span class="badge badge-dot badge-danger hidden md:inline-flex"></span>
                                <span
                                    class="whitespace-nowrap text-xs font-semibold text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300">
                                    Mar 17
                                </span>
                            </div>
                        </div>

                        <div
                            class="absolute bottom-0 right-0 top-0 hidden h-full w-28 bg-white dark:bg-slate-800 md:group-hover:block">
                            <div class="flex h-full w-full items-center justify-end gap-x-4 px-4">
                                <button type="button"
                                    class="text-slate-500 focus:text-slate-700 dark:text-slate-400 dark:focus:text-slate-300"
                                    data-btn="mark">
                                    <i class="ti ti-mail hidden text-xl group-[.mark-as-read]:inline-block"></i>
                                    <i class="ti ti-mail-opened inline-block text-xl group-[.mark-as-read]:hidden"></i>
                                </button>
                                <button type="button"
                                    class="text-slate-500 focus:text-slate-700 dark:text-slate-400 dark:focus:text-slate-300"
                                    data-btn="delete">
                                    <i class="ti ti-trash l text-xl"></i>
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="mark-as-read group relative cursor-pointer bg-white px-4 py-3 dark:bg-slate-800 md:hover:z-10 md:hover:shadow-[0px_2px_4px_0px_var(--tw-shadow-color)] md:hover:shadow-black/10 md:dark:hover:shadow-slate-100/30"
                        data-filter-by-spam="true" data-filter-by-promotions="true">
                        <div class="flex items-center gap-x-3 sm:gap-x-6">
                            <input type="checkbox" class="checkbox email-checkbox" />
                            <button type="button"
                                class="hidden text-slate-500 focus:text-slate-700 group-[.mark-as-starred]:text-warning-500 dark:text-slate-400 dark:focus:text-slate-300 sm:block"
                                data-btn="bookmark">
                                <i class="ti ti-star text-lg"></i>
                            </button>

                            <div class="flex w-full items-center gap-3">
                                <div class="avatar avatar-circle avatar-sm avatar-primary shrink-0">
                                    <span class="avatar-text">
                                        <span>GS</span>
                                    </span>
                                </div>

                                <div class="flex w-full flex-col items-center gap-1 2xl:flex-row">
                                    <div class="w-full shrink-0 2xl:w-1/6">
                                        <span
                                            class="text-sm font-semibold text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300">
                                            Grace Shelby
                                        </span>
                                    </div>

                                    <div class="w-full">
                                        <span
                                            class="text-[13px] font-semibold text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300 sm:text-sm">
                                            Hey Katy, Icing gummi bears ice cream croissant dessert wafer
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <span class="badge badge-dot badge-warning hidden md:inline-flex"></span>
                                <span
                                    class="whitespace-nowrap text-xs font-semibold text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300">
                                    Mar 04
                                </span>
                            </div>
                        </div>

                        <div
                            class="absolute bottom-0 right-0 top-0 hidden h-full w-28 bg-white dark:bg-slate-800 md:group-hover:block">
                            <div class="flex h-full w-full items-center justify-end gap-x-4 px-4">
                                <button type="button"
                                    class="text-slate-500 focus:text-slate-700 dark:text-slate-400 dark:focus:text-slate-300"
                                    data-btn="mark">
                                    <i class="ti ti-mail hidden text-xl group-[.mark-as-read]:inline-block"></i>
                                    <i class="ti ti-mail-opened inline-block text-xl group-[.mark-as-read]:hidden"></i>
                                </button>
                                <button type="button"
                                    class="text-slate-500 focus:text-slate-700 dark:text-slate-400 dark:focus:text-slate-300"
                                    data-btn="delete">
                                    <i class="ti ti-trash l text-xl"></i>
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="mark-as-read group relative cursor-pointer bg-white px-4 py-3 dark:bg-slate-800 md:hover:z-10 md:hover:shadow-[0px_2px_4px_0px_var(--tw-shadow-color)] md:hover:shadow-black/10 md:dark:hover:shadow-slate-100/30"
                        data-filter-by-trash="true" data-filter-by-personal="true">
                        <div class="flex items-center gap-x-3 sm:gap-x-6">
                            <input type="checkbox" class="checkbox email-checkbox" />
                            <button type="button"
                                class="hidden text-slate-500 focus:text-slate-700 group-[.mark-as-starred]:text-warning-500 dark:text-slate-400 dark:focus:text-slate-300 sm:block"
                                data-btn="bookmark">
                                <i class="ti ti-star text-lg"></i>
                            </button>

                            <div class="flex w-full items-center gap-3">
                                <div class="avatar avatar-circle avatar-sm shrink-0">
                                    <img class="avatar-img" src="{{asset('images/avatar9.png')}}" alt="Avatar 9" />
                                </div>

                                <div class="flex w-full flex-col items-center gap-1 2xl:flex-row">
                                    <div class="w-full shrink-0 2xl:w-1/6">
                                        <span
                                            class="text-sm font-semibold text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300">
                                            Jacob Frye
                                        </span>
                                    </div>

                                    <div class="w-full">
                                        <span
                                            class="text-[13px] font-semibold text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300 sm:text-sm">
                                            Hey Katy, Chocolate cake pudding chocolate bar ice cream Sweet
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <span class="badge badge-dot badge-success hidden md:inline-flex"></span>
                                <span class="text-slate-500 dark:text-slate-400">
                                    <i class="ti ti-paperclip"></i>
                                </span>
                                <span
                                    class="whitespace-nowrap text-xs font-semibold text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300">
                                    Mar 06
                                </span>
                            </div>
                        </div>

                        <div
                            class="absolute bottom-0 right-0 top-0 hidden h-full w-28 bg-white dark:bg-slate-800 md:group-hover:block">
                            <div class="flex h-full w-full items-center justify-end gap-x-4 px-4">
                                <button type="button"
                                    class="text-slate-500 focus:text-slate-700 dark:text-slate-400 dark:focus:text-slate-300"
                                    data-btn="mark">
                                    <i class="ti ti-mail hidden text-xl group-[.mark-as-read]:inline-block"></i>
                                    <i class="ti ti-mail-opened inline-block text-xl group-[.mark-as-read]:hidden"></i>
                                </button>
                                <button type="button"
                                    class="text-slate-500 focus:text-slate-700 dark:text-slate-400 dark:focus:text-slate-300"
                                    data-btn="delete">
                                    <i class="ti ti-trash l text-xl"></i>
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="mark-as-read group relative cursor-pointer bg-white px-4 py-3 dark:bg-slate-800 md:hover:z-10 md:hover:shadow-[0px_2px_4px_0px_var(--tw-shadow-color)] md:hover:shadow-black/10 md:dark:hover:shadow-slate-100/30"
                        data-filter-by-trash="true" data-filter-by-company="true">
                        <div class="flex items-center gap-x-3 sm:gap-x-6">
                            <input type="checkbox" class="checkbox email-checkbox" />
                            <button type="button"
                                class="hidden text-slate-500 focus:text-slate-700 group-[.mark-as-starred]:text-warning-500 dark:text-slate-400 dark:focus:text-slate-300 sm:block"
                                data-btn="bookmark">
                                <i class="ti ti-star text-lg"></i>
                            </button>

                            <div class="flex w-full items-center gap-3">
                                <div class="avatar avatar-circle avatar-sm shrink-0">
                                    <img class="avatar-img" src="{{asset('images/avatar10.png')}}" alt="Avatar 10" />
                                </div>

                                <div class="flex w-full flex-col items-center gap-1 2xl:flex-row">
                                    <div class="w-full shrink-0 2xl:w-1/6">
                                        <span
                                            class="text-sm font-semibold text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300">
                                            Alistair Crowley
                                        </span>
                                    </div>

                                    <div class="w-full">
                                        <span
                                            class="text-[13px] font-semibold text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300 sm:text-sm">
                                            Hey Katy, I love danish. Cupcake I love carrot cake sugar plum I love
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <span class="badge badge-dot badge-primary hidden md:inline-flex"></span>
                                <span
                                    class="whitespace-nowrap text-xs font-semibold text-slate-700 group-[.mark-as-read]:font-normal group-[.mark-as-read]:text-slate-600 dark:text-slate-100 group-[.mark-as-read]:dark:text-slate-300">
                                    29/12/22
                                </span>
                            </div>
                        </div>

                        <div
                            class="absolute bottom-0 right-0 top-0 hidden h-full w-28 bg-white dark:bg-slate-800 md:group-hover:block">
                            <div class="flex h-full w-full items-center justify-end gap-x-4 px-4">
                                <button type="button"
                                    class="text-slate-500 focus:text-slate-700 dark:text-slate-400 dark:focus:text-slate-300"
                                    data-btn="mark">
                                    <i class="ti ti-mail hidden text-xl group-[.mark-as-read]:inline-block"></i>
                                    <i class="ti ti-mail-opened inline-block text-xl group-[.mark-as-read]:hidden"></i>
                                </button>
                                <button type="button"
                                    class="text-slate-500 focus:text-slate-700 dark:text-slate-400 dark:focus:text-slate-300"
                                    data-btn="delete">
                                    <i class="ti ti-trash l text-xl"></i>
                                </button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Email Wrapper Body Ends -->
        </div>
        <!-- Email Wrapper Ends -->

        <!-- Email Overlay Starts -->
        <div id="email-overlay"
            class="absolute inset-0 z-10 hidden h-full w-full bg-black bg-opacity-0 transition-colors duration-300 ease-in-out xl:hidden">
        </div>
        <!-- Email Overlay Ends -->
    </div>
    <!-- Email Ends -->

    <!-- Modal Email Compose Starts -->
    <div id="modal-email-compose" class="modal" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="flex items-center justify-between">
                        <h6>Compose Mail</h6>

                        <button type="button"
                            class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
                            data-dismiss="modal">
                            <span class="inline-flex h-4 w-4 items-center justify-center">
                                <i class="ti ti-x text-xl"></i>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <form id="email-compose-form" action="">
                        <!-- Form Body Starts -->
                        <div class="w-full space-y-4">
                            <!-- Form Row: To Starts -->
                            <div class="w-full">
                                <div class="mb-1 flex items-center justify-between">
                                    <label for="email-compose-input-to" class="label font-medium"> To: </label>
                                    <div class="flex items-center gap-x-2">
                                        <button id="email-compose-btn-cc" type="button"
                                            class="text-sm text-slate-500 hover:text-slate-700 dark:text-slate-400 dark:hover:text-slate-300">
                                            Cc
                                        </button>
                                        <span class="text-slate-500 dark:text-slate-400">|</span>
                                        <button id="email-compose-btn-bcc" type="button"
                                            class="text-sm text-slate-500 hover:text-slate-700 dark:text-slate-400 dark:hover:text-slate-300">
                                            Bcc
                                        </button>
                                    </div>
                                </div>
                                <input id="email-compose-input-to" type="text"
                                    class="w-full border-0 border-b border-b-slate-300 focus:border-b-slate-300 focus:ring-0 dark:border-b-slate-600" />
                            </div>
                            <!-- Form Row: To Ends -->

                            <!-- Form Row: CC Starts -->
                            <div class="hidden w-full">
                                <label for="email-compose-input-cc" class="label mb-1 font-medium"> Cc: </label>
                                <input id="email-compose-input-cc" type="text"
                                    class="w-full border-0 border-b border-b-slate-300 focus:border-b-slate-300 focus:ring-0 dark:border-b-slate-600" />
                            </div>
                            <!-- Form Row: CC Ends -->

                            <!-- Form Row: BCC Starts -->
                            <div class="hidden w-full">
                                <label for="email-compose-input-bcc" class="label mb-1 font-medium"> Bcc: </label>
                                <input id="email-compose-input-bcc" type="text"
                                    class="w-full border-0 border-b border-b-slate-300 focus:border-b-slate-300 focus:ring-0 dark:border-b-slate-600" />
                            </div>
                            <!-- Form Row: BCC Ends -->

                            <!-- Form Row: Subject Starts -->
                            <div class="w-full">
                                <label for="email-compose-input-subject" class="label mb-1 font-medium"> Subject:
                                </label>
                                <input id="email-compose-input-subject" type="text"
                                    class="w-full border-0 border-b border-b-slate-300 bg-transparent px-0 text-sm text-slate-700 focus:border-b-slate-300 focus:ring-0 dark:border-b-slate-600 dark:text-slate-300" />
                            </div>
                            <!-- Form Row: Subject Ends -->

                            <!-- Form Row: Message Editor Starts -->
                            <div class="w-full">
                                <div id="email-compose-editor" class="!min-h-[15rem]"></div>
                            </div>
                            <!-- Form Row: Message Editor Ends -->
                        </div>
                        <!-- Form Body Ends -->

                        <!-- Form Footer Starts -->
                        <div
                            class="mt-6 flex w-full items-center justify-between border-t border-t-slate-300 py-3 dark:border-t-slate-600">
                            <div class="flex items-center gap-x-2">
                                <div class="dropdown" data-placement="top-end">
                                    <div class="btn-group divide-x divide-primary-600">
                                        <button class="btn btn-primary" type="button">
                                            <span class="inline-flex h-4 w-4 items-center justify-center">
                                                <i class="ti ti-send text-lg"></i>
                                            </span>
                                            <span>Send</span>
                                        </button>
                                        <button class="btn btn-primary dropdown-toggle px-2" type="button">
                                            <span class="inline-flex h-4 w-4 items-center justify-center">
                                                <i class="ti ti-chevron-down text-lg"></i>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="dropdown-content">
                                        <ul class="dropdown-list">
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">Schedule send</a>
                                            </li>
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link"> Save &amp; archive
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <label for="input-attach-files"
                                    class="cursor-pointer text-slate-500 hover:text-primary-500 dark:text-slate-400 hover:dark:text-primary-500">
                                    <i class="ti ti-paperclip text-lg"></i>
                                    <input type="file" class="zero-sr-only" id="input-attach-files" />
                                </label>
                            </div>

                            <div class="flex items-center gap-x-2">
                                <div class="dropdown" data-placement="top-end">
                                    <div class="btn-group divide-x divide-primary-600">
                                        <button type="button"
                                            class="dropdown-toggle text-slate-600 transition duration-150 ease-in-out hover:text-primary-500 dark:text-slate-300 hover:dark:text-primary-500">
                                            <i class="ti ti-dots-vertical text-lg"></i>
                                        </button>
                                    </div>
                                    <div class="dropdown-content">
                                        <ul class="dropdown-list">
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">Add label</a>
                                            </li>
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">Pail text mode</a>
                                            </li>
                                            <li class="dropdown-list-item">
                                                <a data-dismiss="modal" href="javascript:void(0)"
                                                    class="dropdown-link">Print</a>
                                            </li>
                                            <li class="dropdown-list-item">
                                                <a data-dismiss="modal" href="javascript:void(0)"
                                                    class="dropdown-link">Check spelling</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <button type="button"
                                    class="text-slate-600 transition duration-150 ease-in-out hover:text-primary-500 dark:text-slate-300 hover:dark:text-primary-500"
                                    data-dismiss="modal">
                                    <i class="ti ti-trash text-xl"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Form Footer Ends -->
                    </form>
                </div>
            </div>
        </div>
        <div class="modal-backdrop show"></div>
    </div>
</x-app-layout>
