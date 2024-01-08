@can('role.view')
    <x-app-layout>
        <!-- Page Title Starts -->

        <x-page-title page="Role" header="Role List" />

        <!-- Page Title Ends -->

        <!-- Role List Starts -->
        <div class="space-y-4">
            <!-- Role Header Starts -->
            <div class="flex flex-col items-center justify-between gap-y-4 md:flex-row md:gap-y-0">
                <!-- Role Search Starts -->
                <form
                    class="group flex h-10 w-full items-center rounded-primary border border-transparent bg-white shadow-sm focus-within:border-primary-500 focus-within:ring-1 focus-within:ring-inset focus-within:ring-primary-500 dark:border-transparent dark:bg-slate-800 dark:focus-within:border-primary-500 md:w-72"
                    method="GET" action="{{ route('admin.roles.index') }}">
                    <div class="flex h-full items-center px-2">
                        <i class="h-4 text-slate-400 group-focus-within:text-primary-500" data-feather="search"></i>
                    </div>
                    <input
                        class="h-full w-full border-transparent bg-transparent px-0 text-sm placeholder-slate-400 placeholder:text-sm focus:border-transparent focus:outline-none focus:ring-0"
                        type="text" placeholder="Search" value="{{ request()->input('search') }}" name="search" />
                </form>



                <!-- Role Search Ends -->

                <!-- Role Action Starts -->
                <div class="flex w-full items-center justify-between gap-x-4 md:w-auto">
                    <div class="flex items-center gap-x-4">
                        <div class="dropdown" data-placement="bottom-end">
                            <div class="dropdown-toggle">
                                <button type="button" class="btn bg-white font-medium shadow-sm dark:bg-slate-800">
                                    <i class="w-4" data-feather="filter"></i>
                                    <span class="hidden sm:inline-block">Filter</span>
                                    <i class="w-4" data-feather="chevron-down"></i>
                                </button>
                            </div>
                            <div class="dropdown-content w-72 !overflow-visible">
                                <ul class="dropdown-list space-y-4 p-4">
                                    <li class="dropdown-list-item">
                                        <h2 class="my-1 text-sm font-medium">Role</h2>
                                        <select class="tom-select w-full" autocomplete="off">
                                            <option value="">Select a Role</option>
                                            <option value="1">Frontend Developer</option>
                                            <option value="2">Full Stack Developer</option>
                                            <option value="3">Web Developer</option>
                                        </select>
                                    </li>

                                    <li class="dropdown-list-item">
                                        <h2 class="my-1 text-sm font-medium">Status</h2>
                                        <select class="select">
                                            <option value="">Select to Status</option>
                                            <option value="1">Active</option>
                                            <option value="2">Inactive</option>
                                            <option value="2">Prospect</option>
                                            <option value="2">Suspended</option>
                                        </select>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn bg-white font-medium shadow-sm dark:bg-slate-800">
                            <i class="h-4" data-feather="upload"></i>
                            <span class="hidden sm:inline-block">Export</span>
                        </button>
                    </div>
                    @can('role.create')
                        <a class="btn btn-primary" href="{{ route('admin.roles.create') }}" role="button">
                            <i data-feather="plus" height="1rem" width="1rem"></i>
                            <span class="hidden sm:inline-block">Add Role</span>
                        </a>
                    @endcan
                </div>
                <!-- Role Action Ends -->
            </div>
            @if (request()->has('search'))
                <div class="flex items-center my-2 md:my-4 text-gray-600 dark:text-gray-300">
                    <p class="mr-2">Search results for: <strong
                            class="text-blue-600">{{ request()->input('search') }}</strong></p>
                    <a href="{{ url()->current() }}">
                        <i class="h-5 text-red-500 hover:text-red-700 dark:hover:text-red-400" data-feather="trash"></i>
                    </a>
                </div>
            @endif
            <!-- Role Header Ends -->

            <!-- Role Table Starts -->
            @if ($roles->count() > 0)
                <div class="table-responsive whitespace-nowrap rounded-primary">
                    <table class="table custom-data-table">
                        <thead>
                            <tr>
                                <th class="w-[5%]">
                                    <input class="checkbox" type="checkbox" data-check-all
                                        data-check-all-target=".role-checkbox" />
                                </th>
                                <th class="w-[15%] uppercase">Role Name</th>
                                <th class="w-[60%] uppercase">Permissions</th>
                                <th class="w-[15%] uppercase">Created Time</th>
                                <th class="w-[5%] !text-right uppercase">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>
                                        <input class="checkbox role-checkbox" type="checkbox" />
                                    </td>

                                    <td>
                                        <span class="font-normal text-md text-gray-700 dark:text-gray-100 capitalize">
                                            {{ $role?->name }}
                                        </span>
                                    </td>

                                    <td
                                        class=" text-md xl:text-lg text-gray-500 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 ">
                                        @foreach ($role->permissions as $perm)
                                            <span class="flex gap-1 items-center">
                                                <x-icons.sheild class="text-blue-400" />
                                                <span
                                                    class="text-gray-700 dark:text-gray-100 truncate">{{ $perm->name }}</span>
                                            </span>
                                        @endforeach
                                    </td>
                                    <td>{{ $role?->created_at?->diffForHumans() }}</td>
                                    <td>
                                        <div class="flex justify-end">
                                            <div class="dropdown" data-placement="bottom-start">
                                                <div class="dropdown-toggle">
                                                    <i class="w-6 text-slate-400" data-feather="more-horizontal"></i>
                                                </div>
                                                <div class="dropdown-content">
                                                    <ul class="dropdown-list">
                                                        @can('role.view')
                                                            <li class="dropdown-list-item">
                                                                <a href="{{ route('admin.roles.show', $role->id) }}"
                                                                    class="dropdown-link">
                                                                    <i class="h-5 text-slate-400" data-feather="eye"></i>
                                                                    <span>Details</span>
                                                                </a>
                                                            </li>
                                                        @endcan
                                                        @can('role.edit')
                                                            @if ($role->id != 1)
                                                                <li class="dropdown-list-item">
                                                                    <a href="{{ route('admin.roles.edit', $role->id) }}"
                                                                        class="dropdown-link">
                                                                        <i class="h-5 text-slate-400" data-feather="edit"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                            @endif
                                                        @endcan
                                                        @can('role.delete')
                                                            @if (!in_array($role->id, [1, 2]))
                                                                <li class="dropdown-list-item">
                                                                    <a href="#"
                                                                        onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this role?')) { document.getElementById('delete-role-{{ $role->id }}').submit();}"
                                                                        class="dropdown-link">
                                                                        <i class="h-5  text-red-500 hover:text-red-700 dark:hover:text-red-400"
                                                                            data-feather="trash"></i>
                                                                        <span>Delete</span>
                                                                    </a>

                                                                    <form id="delete-role-{{ $role->id }}"
                                                                        action="{{ route('admin.roles.destroy', $role->id) }}"
                                                                        method="POST" style="display: none;">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                    </form>
                                                                </li>
                                                            @endif
                                                        @endcan
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="sm:hidden">
                        @foreach ($roles as $role)
                            <div class="card my-4 overflow-x-auto shadow-sm shadow-gray-300 dark:shadow-gray-700">
                                <div class="card-header flex justify-between items-center">
                                    <div class="card-title capitalize">
                                        <p>{{ $role->name }}</p>
                                        <p class=" text-xs font-light"> <span>Created: </span>
                                            {{ $role->created_at->diffForHumans() }} </p>

                                    </div>
                                    <div class="px-4 py-3 dropdown">
                                        <button
                                            class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100 float-end dropdown-toggle"
                                            type="button">
                                            <i class="ti ti-dots-vertical text-xl"></i>

                                        </button>
                                        <div
                                            class="z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 dropdown-content">
                                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                                @can('role.view')
                                                    <li>
                                                        <a href="{{ route('admin.roles.show', $role->id) }}"
                                                            class=" py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex items-center">
                                                            <x-icons.eye />
                                                            Show
                                                        </a>
                                                    </li>
                                                @endcan

                                                @can('role.edit')
                                                    @if ($role->id != 1)
                                                        <li>
                                                            <a href="{{ route('admin.roles.edit', $role->id) }}"
                                                                class="flex items-center py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                                <x-icons.edit />
                                                                Edit
                                                            </a>
                                                        </li>
                                                    @endif
                                                @endcan
                                            </ul>
                                            @can('role.delete')
                                                @if (!in_array($role->id, [1, 2]))
                                                    <div class="py-1">
                                                        <a href="#"
                                                            onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this role?')) { document.getElementById('delete-role-{{ $role->id }}').submit(); }"
                                                            class="flex items-center py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                                            <x-icons.trash />
                                                            Delete
                                                        </a>

                                                        <form id="delete-role-{{ $role->id }}"
                                                            action="{{ route('admin.roles.destroy', $role->id) }}"
                                                            method="POST" style="display: none;">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>

                                                    </div>
                                                @endif
                                            @endcan
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <p class="card-title flex gap-2 ">
                                            @foreach ($role->permissions as $permission)
                                                <div class="flex flex-wrap grow my-1">
                                                    <span class="flex gap-2 items-center">
                                                        <x-icons.sheild class="text-blue-400" />
                                                        <span class="text-gray-700 dark:text-gray-100 ">
                                                            {{ $permission->name }}
                                                        </span>
                                                    </span>
                                                </div>
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="text-center my-5">
                    <p class="text-lg text-red-600">No records found.</p>
                </div>
            @endif
            <!-- Role Table Ends -->

            <!-- Role Pagination Starts -->
            <div class="grid grid-cols-1 justify-between items-start md:items-center space-y-3 md:space-y-0 p-4 w-full text-gray-700 dark:text-gray-100"
                aria-label="Table navigation">
                @if ($roles->hasPages())
                    {{ $roles->links() }}
                @endif
            </div>
            <!-- Role Pagination Ends -->
        </div>
        <!-- Role List Ends -->
    </x-app-layout>
@endcan
