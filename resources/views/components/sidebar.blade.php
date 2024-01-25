<aside class="sidebar">
    <!-- Sidebar Header Starts -->
    <a href="{{ route('admin.dashboard') }}">
        <div class="sidebar-header">
            <div class="sidebar-logo-icon">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </div>

            <div class="sidebar-logo-text">
                <h1 class="flex text-xl">
                    <span class="font-bold text-slate-800 dark:text-slate-200">
                        {{ hasSettings('site_name') ? getSettings('site_name') : config('app.name') }}
                    </span>
                </h1>

                <p class="whitespace-nowrap text-xs text-slate-400">
                    {{ hasSettings('site_title') ? getSettings('site_title') : config('app.name') }}
                </p>
            </div>
        </div>
    </a>
    <!-- Sidebar Header Ends -->

    <!-- Sidebar Menu Starts -->
    <ul class="sidebar-content">
        <!-- Dashboard -->
        @can('dashboard.view')
            <li>
                <a href="javascript:void(0);"
                    class="sidebar-menu  {{ request()->routeIs('admin.dashboard', 'admin.ecommerce.report') ? 'active' : '' }}">
                    <span class="sidebar-menu-icon">
                        <i data-feather="home"></i>
                    </span>
                    <span class="sidebar-menu-text">Dashboard</span>
                    <span class="sidebar-menu-arrow">
                        <i data-feather="chevron-right"></i>
                    </span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('admin.dashboard') }}"
                            class="sidebar-submenu-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Analytics</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.ecommerce.report') }}"
                            class="sidebar-submenu-item {{ request()->routeIs('admin.ecommerce.report') ? 'active' : '' }}">Ecommerce</a>
                    </li>
                </ul>
            </li>
        @endcan

        <div class="sidebar-menu-header">Applications</div>

        <!-- Email -->
        @can('email.view')
            <li>
                <a href="{{ route('admin.email') }}"
                    class="sidebar-menu {{ request()->routeIs('admin.email') ? 'active' : '' }}">
                    <span class="sidebar-menu-icon">
                        <i data-feather="mail"></i>
                    </span>
                    <span class="sidebar-menu-text">Email</span>
                </a>
            </li>
        @endcan

        <!-- Chat -->
        @can('chat.view')
            <li>
                <a href="{{ route('admin.chat') }}"
                    class="sidebar-menu {{ request()->routeIs('admin.chat') ? 'active' : '' }}">
                    <span class="sidebar-menu-icon">
                        <i data-feather="message-square"></i>
                    </span>
                    <span class="sidebar-menu-text">Chat</span>
                </a>
            </li>
        @endcan

        <!-- Notification -->
        @can('notification.view')
            <li>
                <a href="{{ route('admin.notification.index') }}"
                    class="sidebar-menu {{ request()->routeIs('admin.notification.index') ? 'active' : '' }}">
                    <span class="sidebar-menu-icon">
                        <i data-feather="bell"></i>
                    </span>
                    <span class="sidebar-menu-text flex gap-2 items-center">
                        Notification

                        @if (auth()->user()->unreadNotifications->count() > 0)
                            <span
                                class="flex h-5 w-5 items-center justify-center rounded-full bg-danger-500 text-[11px] text-slate-200">
                                {{ auth()->user()->unreadNotifications->count() }}
                            </span>
                        @endif
                    </span>

                </a>
            </li>
        @endcan

        <!-- Calendar -->
        @can('calendar.view')
            <li>
                <a href="{{ route('admin.calendar') }}"
                    class="sidebar-menu {{ request()->routeIs('admin.calendar') ? 'active' : '' }}">
                    <span class="sidebar-menu-icon">
                        <i data-feather="calendar"></i>
                    </span>
                    <span class="sidebar-menu-text">Calendar</span>
                </a>
            </li>
        @endcan
        <!-- Media -->
        @can('media.view')
            <li>
                <a href="{{ route('admin.media.index') }}"
                    class="sidebar-menu {{ request()->routeIs('admin.media.index') ? 'active' : '' }}">
                    <span class="sidebar-menu-icon">
                        <i data-feather="image"></i>
                    </span>
                    <span class="sidebar-menu-text">Media</span>
                </a>
            </li>
        @endcan
        <!-- Invoice -->
        @can('invoice.view')
            <li>
                @can('invoice.create')
                    <a href="javascript:void(0);"
                        class="sidebar-menu {{ request()->routeIs('admin.invoice.create', 'admin.invoice.details') ? 'active' : '' }}">
                        <span class="sidebar-menu-icon">
                            <i data-feather="file-text"></i>
                        </span>
                        <span class="sidebar-menu-text ">Invoice</span>
                        <span class="sidebar-menu-arrow">
                            <i data-feather="chevron-right"></i>
                        </span>
                    </a>
                @endcan
                @can('invoice.view')
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{ route('admin.invoice.create') }}"
                                class="sidebar-submenu-item {{ request()->routeIs('admin.invoice.create') ? 'active' : '' }}">
                                Create
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('admin.invoice.details') }}"
                                class="sidebar-submenu-item {{ request()->routeIs('admin.invoice.details') ? 'active' : '' }}">
                                Details
                            </a>
                        </li>
                    </ul>
                @endcan
            </li>
        @endcan
        <!-- ecommnerce -->
        @can('ecommerce.view')
            <li>
                <a href="javascript:void(0);"
                    class="sidebar-menu {{ request()->routeIs([
                        'admin.product.index',
                        'admin.product.edit',
                        'admin.order.index',
                        'admin.order.show',
                        'admin.customer.index',
                    ])
                        ? 'active'
                        : '' }}">
                    <span class="sidebar-menu-icon">
                        <i data-feather="shopping-bag"></i>
                    </span>
                    <span class="sidebar-menu-text">Ecommerce</span>
                    <span class="sidebar-menu-arrow">
                        <i data-feather="chevron-right"></i>
                    </span>
                </a>
                <ul class="sidebar-submenu">
                    @can('product.view')
                        <li>
                            <a href="{{ route('admin.product.index') }}"
                                class="sidebar-submenu-item {{ request()->routeIs('admin.product.index') ? 'active' : '' }}">
                                Product List </a>
                        </li>
                    @endcan
                    @can('product.edit')
                        <li>
                            <a href="{{ route('admin.product.edit') }}"
                                class="sidebar-submenu-item {{ request()->routeIs('admin.product.edit') ? 'active' : '' }}">
                                Product Edit </a>
                        </li>
                    @endcan
                    @can('order.view')
                        <li>
                            <a href="{{ route('admin.order.index') }}"
                                class="sidebar-submenu-item {{ request()->routeIs('admin.order.index') ? 'active' : '' }}">
                                Order List </a>
                        </li>
                    @endcan
                    @can('order.view')
                        <li>
                            <a href="{{ route('admin.order.show') }}"
                                class="sidebar-submenu-item {{ request()->routeIs('admin.order.show') ? 'active' : '' }}">
                                Order Details </a>
                        </li>
                    @endcan
                    @can('customer.view')
                        <li>
                            <a href="{{ route('admin.customer.index') }}"
                                class="sidebar-submenu-item {{ request()->routeIs('admin.customer.index') ? 'active' : '' }}">
                                Customer List </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        <!-- Users -->
        @can('user.view')
            <li>
                <a href="javascript:void(0);"
                    class="sidebar-menu {{ request()->routeIs(['admin.user.index', 'admin.user.create', 'admin.user.show', 'admin.user.edit', 'admin.roles.index', 'admin.roles.create', 'admin.roles.show', 'admin.roles.edit']) ? 'active' : '' }}">

                    <span class="sidebar-menu-icon">
                        <i data-feather="users"></i>
                    </span>
                    <span class="sidebar-menu-text">Users</span>
                    <span class="sidebar-menu-arrow">
                        <i data-feather="chevron-right"></i>
                    </span>
                </a>
                <ul class="sidebar-submenu ">
                    @can('user.view')
                        <li>
                            <a href="{{ route('admin.user.index') }}"
                                class="sidebar-submenu-item {{ request()->routeIs('admin.user.index') ? 'active' : '' }}">
                                Users</a>
                        </li>
                    @endcan
                    @can('role.view')
                        <li>
                            <a href="{{ route('admin.roles.index') }}"
                                class="sidebar-submenu-item {{ request()->routeIs('admin.roles.index') ? 'active' : '' }}">
                                Role & Permission </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        <!--  Commponents  -->
        <div class="sidebar-menu-header">Components</div>
        <!-- Common  -->
        @php
            $commonRoutes = [
                'admin.common.accordion' => 'Accordion',
                'admin.common.alert' => 'Alert',
                'admin.common.avatar' => 'Avatar',
                'admin.common.badge' => 'Badge',
                'admin.common.button' => 'Button',
                'admin.common.card' => 'Card',
                'admin.common.carousel' => 'Carousel',
                'admin.common.drawer' => 'Drawer',
                'admin.common.dropdown' => 'Dropdown',
                'admin.common.list.group' => 'List Group',
                'admin.common.modal' => 'Modal',
                'admin.common.pagination' => 'Pagination',
                'admin.common.progress.bar' => 'Progress',
                'admin.common.spinner' => 'Spinner',
                'admin.common.tabs' => 'Tab',
                'admin.common.toast' => 'Toast',
                'admin.common.tooltip' => 'Tooltip',
                'admin.common.skeleton' => 'Skeleton',
            ];

        @endphp

        <li>
            <a href="javascript:void(0);"
                class="sidebar-menu {{ collect($commonRoutes)->keys()->contains(request()->route()->getName())? 'active': '' }}">
                <span class="sidebar-menu-icon">
                    <i data-feather="box"></i>
                </span>
                <span class="sidebar-menu-text">Common</span>
                <span class="sidebar-menu-arrow">
                    <i data-feather="chevron-right"></i>
                </span>
            </a>
            <ul class="sidebar-submenu">
                @foreach ($commonRoutes as $route => $name)
                    <li>
                        <a href="{{ route($route) }}"
                            class="sidebar-submenu-item {{ request()->routeIs($route) ? 'active' : '' }}">
                            {{ $name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>

        <!-- Forms  -->
        @php
            $formRoutes = [
                'admin.form.input' => 'Input',
                'admin.form.input.group' => 'Input Group',
                'admin.form.textarea' => 'Textarea',
                'admin.form.checkbox' => 'Checkbox',
                'admin.form.radio' => 'Radio',
                'admin.form.toggle' => 'Toggle',
                'admin.form.select' => 'Select',
                'admin.form.datepicker' => 'Datepicker',
                'admin.form.editor' => 'Editor',
                'admin.form.uploader' => 'Uploader',
                'admin.form.layout' => 'Layout',
                'admin.form.validation' => 'Validation',
            ];
        @endphp
        <li>
            <a href="javascript:void(0);"
                class="sidebar-menu {{ collect($formRoutes)->keys()->contains(request()->route()->getName())? 'active': '' }}">
                <span class="sidebar-menu-icon">
                    <i data-feather="edit"></i>
                </span>
                <span class="sidebar-menu-text">Forms</span>
                <span class="sidebar-menu-arrow">
                    <i data-feather="chevron-right"></i>
                </span>
            </a>
            <ul class="sidebar-submenu">
                @foreach ($formRoutes as $route => $name)
                    <li>
                        <a href="{{ route($route) }}"
                            class="sidebar-submenu-item {{ request()->routeIs($route) ? 'active' : '' }}">
                            {{ $name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>

        <!-- Tables  -->
        <li>
            <a href="javascript:void(0);"
                class="sidebar-menu {{ request()->routeIs('admin.table.data', 'admin.table.basic') ? 'active' : '' }}">
                <span class="sidebar-menu-icon">
                    <i data-feather="list"></i>
                </span>
                <span class="sidebar-menu-text">Tables</span>
                <span class="sidebar-menu-arrow">
                    <i data-feather="chevron-right"></i>
                </span>
            </a>
            <ul class="sidebar-submenu">
                <li>
                    <a href="{{ route('admin.table.basic') }}"
                        class="sidebar-submenu-item {{ request()->routeIs('admin.table.basic') ? 'active' : '' }}">
                        Basic Table </a>
                </li>
                <li>
                    <a href="{{ route('admin.table.data') }}"
                        class="sidebar-submenu-item {{ request()->routeIs('admin.table.data') ? 'active' : '' }}">
                        Data Table </a>
                </li>
            </ul>
        </li>
        <!-- Charts  -->
        <li>
            <a href="{{ route('admin.chart.index') }}"
                class="sidebar-menu {{ request()->routeIs('admin.chart.index') ? 'active' : '' }}">
                <span class="sidebar-menu-icon">
                    <i data-feather="pie-chart"></i>
                </span>
                <span class="sidebar-menu-text">Charts</span>
            </a>
        </li>
        <!-- Icons-->
        <li>
            <a href="{{ route('admin.icons.index') }}"
                class="sidebar-menu {{ request()->routeIs('admin.icons.index') ? 'active' : '' }}">
                <span class="sidebar-menu-icon">
                    <i data-feather="italic"></i>
                </span>
                <span class="sidebar-menu-text">Icons</span>
            </a>
        </li>
        <!-- Typography-->
        <li>
            <a href="{{ route('admin.typography.index') }}"
                class="sidebar-menu {{ request()->routeIs('admin.typography.index') ? 'active' : '' }}">
                <span class="sidebar-menu-icon">
                    <i data-feather="type"></i>
                </span>
                <span class="sidebar-menu-text">Typography</span>
            </a>
        </li>
        <!--  Pages  -->
        <div class="sidebar-menu-header">Pages</div>
        <!-- Authentication  -->
        <li>
            <a href="javascript:void(0);"
                class="sidebar-menu {{ request()->routeIs([
                    'admin.authentication.login',
                    'admin.authentication.register',
                    'admin.authentication.recover.password',
                    'admin.authentication.reset.password',
                ])
                    ? 'active'
                    : '' }}">

                <span class="sidebar-menu-icon">
                    <i data-feather="lock"></i>
                </span>
                <span class="sidebar-menu-text">Authentication</span>
                <span class="sidebar-menu-arrow">
                    <i data-feather="chevron-right"></i>
                </span>
            </a>
            <ul class="sidebar-submenu">
                <li>
                    <a href="{{ route('admin.authentication.login') }}"
                        class="sidebar-submenu-item {{ request()->routeIs('admin.authentication.login') ? 'active' : '' }}">Login</a>
                </li>
                <li>
                    <a href="{{ route('admin.authentication.register') }}"
                        class="sidebar-submenu-item {{ request()->routeIs('admin.authentication.register') ? 'active' : '' }}">
                        Register </a>
                </li>
                <li>
                    <a href="{{ route('admin.authentication.recover.password') }}"
                        class="sidebar-submenu-item {{ request()->routeIs('admin.authentication.recover.password') ? 'active' : '' }}">
                        Forgot Password </a>
                </li>
                <li>
                    <a href="{{ route('admin.authentication.reset.password') }}"
                        class="sidebar-submenu-item {{ request()->routeIs('admin.authentication.reset.password') ? 'active' : '' }}">
                        Reset Password </a>
                </li>
            </ul>
        </li>
        <!-- Miscellaneous  -->
        <li>
            <a href="javascript:void(0);"
                class="sidebar-menu {{ request()->routeIs('admin.miscellaneous.starter', 'admin.miscellaneous.comming.soon', 'admin.miscellaneous.maintenance', 'admin.miscellaneous.404', 'admin.miscellaneous.500', 'admin.miscellaneous.403') ? 'active' : '' }}">
                <span class="sidebar-menu-icon">
                    <i data-feather="grid"></i>
                </span>
                <span class="sidebar-menu-text">Miscellaneous</span>
                <span class="sidebar-menu-arrow">
                    <i data-feather="chevron-right"></i>
                </span>
            </a>
            <ul class="sidebar-submenu">
                <li>
                    <a href="{{ route('admin.miscellaneous.starter') }}"
                        class="sidebar-submenu-item {{ request()->routeIs('admin.miscellaneous.starter') ? 'active' : '' }}">
                        Starter Page </a>
                </li>
                <li>
                    <a href="{{ route('admin.miscellaneous.comming.soon') }}"
                        class="sidebar-submenu-item {{ request()->routeIs('admin.miscellaneous.comming.soon') ? 'active' : '' }}">
                        Coming Soon </a>
                </li>
                <li>
                    <a href="{{ route('admin.miscellaneous.maintenance') }}"
                        class="sidebar-submenu-item {{ request()->routeIs('admin.miscellaneous.maintenance') ? 'active' : '' }}">
                        Maintenance </a>
                </li>
                <li>
                    <a href="{{ route('admin.miscellaneous.404') }}"
                        class="sidebar-submenu-item {{ request()->routeIs('admin.miscellaneous.404') ? 'active' : '' }}">
                        Error 404 </a>
                </li>
                <li>
                    <a href="{{ route('admin.miscellaneous.500') }}"
                        class="sidebar-submenu-item {{ request()->routeIs('admin.miscellaneous.500') ? 'active' : '' }}">
                        Error 500 </a>
                </li>
                <li>
                    <a href="{{ route('admin.miscellaneous.403') }}"
                        class="sidebar-submenu-item {{ request()->routeIs('admin.miscellaneous.403') ? 'active' : '' }}">
                        Not Authorized </a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Ends -->
</aside>
