<aside
    class="fixed top-10 md:top-0 left-0 z-40  w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidenav" id="drawer-navigation">
    <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
        <ul class="space-y-2">
            <li>
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group {{ request()->routeIs('admin.dashboard') ? 'text-gray-900 dark:text-white bg-gray-200 dark:bg-gray-900' : 'text-gray-900  dark:text-white ' }} active ">
                    <x-icons.pie />
                    <span class="ml-3">{{ __('Overview') }}</span>
                </a>
            </li>

            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <x-icons.cart />
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">E-commerce</span>
                    <x-icons.down-arrow />

                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                    <li>
                        <a href="#"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium 
                                rounded-lg transition duration-75 group hover:bg-gray-100 dark:hover:bg-gray-700
                                {{ request()->routeIs('admin.roles.index') ? 'text-gray-900 dark:text-white bg-gray-200 dark:bg-gray-800' : 'text-gray-900  dark:text-white ' }} active ">
                            <x-icons.product />
                            <span class="flex-1 ms-3 whitespace-nowrap">{{ __('Products') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            <x-icons.category />
                            <span class="flex-1 ms-3 whitespace-nowrap">{{ __('Category') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            <x-icons.tags />
                            <span class="flex-1 ms-3 whitespace-nowrap">{{ __('Tags') }}</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <button type="button"
                    class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-sales" data-collapse-toggle="dropdown-sales">
                    <x-icons.bag />
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Sales</span>
                    <x-icons.down-arrow />
                </button>
                <ul id="dropdown-sales" class=" hidden py-2 space-y-2">
                    <li>
                        <a href="#"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            <x-icons.order />
                            <span class="flex-1 ms-2 whitespace-nowrap">{{ __('Order') }}</span>
                        </a>

                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            <x-icons.report />
                            <span class="flex-1 ms-2 whitespace-nowrap">{{ __('Report') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            <x-icons.user />
                            <span class="flex-1 ms-2 whitespace-nowrap">{{ __('Customer') }}</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <x-icons.message />
                    <span class="flex-1 ml-3 whitespace-nowrap">Messages</span>
                    <span
                        class="inline-flex justify-center items-center w-5 h-5 text-xs font-semibold rounded-full text-primary-800 bg-primary-100 dark:bg-primary-200 dark:text-primary-800">
                        4
                    </span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.media.index') }}"
                    class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group
                    {{ request()->routeIs('admin.media.index') ? 'bg-gray-200 dark:bg-gray-700' : '' }} active ">
                    <x-icons.media />
                    <span class="ml-3">Media </span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                    <x-icons.support />
                    <span class="ml-3">Support</span>
                </a>
            </li>
        </ul>
        <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700">

            <li>
                <button type="button"
                    class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-authentication" data-collapse-toggle="dropdown-authentication">
                    <x-icons.lock />
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Authentication</span>
                    <x-icons.down-arrow />

                </button>
                <ul id="dropdown-authentication"
                    class="{{ request()->routeIs('admin.roles.index') || request()->routeIs('admin.user.index') ? '' : 'hidden' }}
                            py-2 space-y-2">
                    @can('role.view')
                        <li>
                            <a href="{{ route('admin.roles.index') }}"
                                class="flex items-center p-2 pl-11 w-full text-base font-medium 
                                    rounded-lg transition duration-75 group hover:bg-gray-100 dark:hover:bg-gray-700
                                    {{ request()->routeIs('admin.roles.index') ? 'text-gray-900 dark:text-white bg-gray-200 dark:bg-gray-900' : 'text-gray-900  dark:text-white ' }} active ">

                                <x-icons.sheild />
                                <span class="flex-1 ms-3 whitespace-nowrap">{{ __('Role') }}</span>
                            </a>

                        </li>
                    @endcan
                    @can('user.view')
                        <li>
                            <a href="{{ route('admin.user.index') }}"
                                class="flex items-center p-2 pl-11 w-full text-base font-medium 
                                    rounded-lg transition duration-75 group hover:bg-gray-100 dark:hover:bg-gray-700
                                    {{ request()->routeIs('admin.user.index') ? 'text-gray-900 dark:text-white bg-gray-200 dark:bg-gray-900' : 'text-gray-900  dark:text-white ' }} active  ">
                                <x-icons.user />
                                <span class="flex-1 ms-3 whitespace-nowrap">{{ __('Users') }}</span>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>

            <li>
                <button type="button"
                    class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                    <x-icons.file-docs />

                    <span class="flex-1 ml-3 text-left whitespace-nowrap">{{ __('Pages') }}</span>
                    <x-icons.down-arrow />

                </button>
                <ul id="dropdown-pages" class="hidden py-2 space-y-2">
                    <li>

                        <a href="#"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            <x-icons.pages />
                            <span class="flex-1 ms-2 whitespace-nowrap">{{ __('All pages') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            <x-icons.category />
                            <span class="flex-1 ms-2 whitespace-nowrap">{{ __('Menu') }}</span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
    <x-sidebar-footer />
</aside>
