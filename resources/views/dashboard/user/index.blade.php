@can('user.view')
    <x-app-layout>
        <!-- Page Title Starts -->

        <x-page-title page="User" header="User List" />

        <!-- Page Title Ends -->

        <!-- User List Starts -->
        <div class="space-y-4">
            <!-- User Header Starts -->
            <div class="flex flex-col items-center justify-between gap-y-4 md:flex-row md:gap-y-0">
                <!-- User Search Starts -->
                <form
                    class="group flex h-10 w-full items-center rounded-primary border border-transparent bg-white shadow-sm focus-within:border-primary-500 focus-within:ring-1 focus-within:ring-inset focus-within:ring-primary-500 dark:border-transparent dark:bg-slate-800 dark:focus-within:border-primary-500 md:w-72"
                    method="GET" action="{{ route('admin.user.index') }}">
                    <div class="flex h-full items-center px-2">
                        <i class="h-4 text-slate-400 group-focus-within:text-primary-500" data-feather="search"></i>
                    </div>
                    <input
                        class="h-full w-full border-transparent bg-transparent px-0 text-sm placeholder-slate-400 placeholder:text-sm focus:border-transparent focus:outline-none focus:ring-0"
                        type="text" placeholder="Search" value="{{ request()->input('search') }}" name="search" />
                </form>



                <!-- User Search Ends -->

                <!-- User Action Starts -->
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
                                        <h2 class="my-1 text-sm font-medium">Occupation</h2>
                                        <select class="tom-select w-full" autocomplete="off">
                                            <option value="">Select a Occupation</option>
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
                    @can('user.create')
                        <a class="btn btn-primary" href="{{ route('admin.user.create') }}" role="button">
                            <i data-feather="plus" height="1rem" width="1rem"></i>
                            <span class="hidden sm:inline-block">Add User</span>
                        </a>
                    @endcan
                </div>
                <!-- User Action Ends -->
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
            <!-- User Header Ends -->

            <!-- User Table Starts -->
            @if ($users->count() > 0)
                <div class="table-responsive whitespace-nowrap rounded-primary">
                    <table class="table custom-data-table">
                        <thead>
                            <tr>
                                <th class="w-[5%]">
                                    <input class="checkbox" type="checkbox" data-check-all
                                        data-check-all-target=".user-checkbox" />
                                </th>
                                <th class="w-[30%] uppercase">User</th>
                                <th class="w-[15%] uppercase">Email</th>
                                <th class="w-[15%] uppercase">Phone</th>
                                <th class="w-[15%] uppercase">Joined Date</th>
                                <th class="w-[15%] uppercase">Status</th>
                                <th class="w-[5%] !text-right uppercase">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <input class="checkbox user-checkbox" type="checkbox" />
                                    </td>
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <div class="avatar avatar-circle">
                                                <img class="avatar-img" src="{{ $user?->avatar }}" alt="Avatar 1" />
                                            </div>
                                            <div>
                                                <h6
                                                    class="whitespace-nowrap text-sm font-medium text-slate-700 dark:text-slate-100">
                                                    {{ $user?->name }}
                                                </h6>
                                                <div
                                                    class="truncate text-xs text-slate-500 dark:text-slate-400 flex gap-1  flex-wrap">
                                                    @foreach ($user->roles as $role)
                                                        <span class="flex gap-1 items-center mt-1">
                                                            <x-icons.sheild class="text-blue-400 " />
                                                            <span class="text-gray-700 dark:text-gray-100 ">
                                                                {{ $role->name }}
                                                            </span>
                                                        </span>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td> {{ $user?->email }}
                                    </td>
                                    <td>{{ $user?->phone }}</td>
                                    <td>{{ $user?->created_at->diffForHumans() }}</td>
                                    <td>
                                        <div class="badge {{ $user->status->color() }}">{{ $user->status }}</div>
                                    </td>
                                    <td>
                                        <div class="flex justify-end">
                                            <div class="dropdown" data-placement="bottom-start">
                                                <div class="dropdown-toggle">
                                                    <i class="w-6 text-slate-400" data-feather="more-horizontal"></i>
                                                </div>
                                                <div class="dropdown-content">
                                                    <ul class="dropdown-list">
                                                        @can('user.view')
                                                            <li class="dropdown-list-item">
                                                                <a href="{{ route('admin.user.show', $user->id) }}"
                                                                    class="dropdown-link">
                                                                    <i class="h-5 text-slate-400" data-feather="eye"></i>
                                                                    <span>Details</span>
                                                                </a>
                                                            </li>
                                                        @endcan
                                                        @can('user.edit')
                                                            <li class="dropdown-list-item">
                                                                <a href="{{ route('admin.user.edit', $user->id) }}"
                                                                    class="dropdown-link">
                                                                    <i class="h-5 text-slate-400" data-feather="edit"></i>
                                                                    <span>Edit</span>
                                                                </a>
                                                            </li>
                                                        @endcan
                                                        @can('user.delete')
                                                            @if ($user->isDeletable)
                                                                <li class="dropdown-list-item">
                                                                    <a href="#"
                                                                        onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this user?')) { document.getElementById('delete-user-{{ $user->id }}').submit();}"
                                                                        class="dropdown-link">
                                                                        <i class="h-5  text-red-500 hover:text-red-700 dark:hover:text-red-400"
                                                                            data-feather="trash"></i>
                                                                        <span>Delete</span>
                                                                    </a>

                                                                    <form id="delete-user-{{ $user->id }}"
                                                                        action="{{ route('admin.user.destroy', $user->id) }}"
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
                        @foreach ($users as $user)
                            <div class="card my-3 overflow-x-auto shadow-md shadow-gray-300 dark:shadow-gray-700">
                                <div class="card-header flex justify-between items-center ">
                                    <div class="avatar avatar-circle">
                                        <img class="avatar-img" src="{{ $user?->avatar }}" alt="Avatar 1" />
                                    </div>
                                    <h4 class="card-title">{{ $user->name }}</h4>
                                    <div class="px-4 py-3 dropdown">
                                        <button
                                            class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100 float-end dropdown-toggle"
                                            type="button">
                                            <i class="ti ti-dots-vertical text-xl"></i>

                                        </button>
                                        <div
                                            class="z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 dropdown-content">

                                            <ul class="dropdown-list">
                                                @can('user.view')
                                                    <li class="dropdown-list-item">
                                                        <a href="{{ route('admin.user.show', $user->id) }}"
                                                            class="dropdown-link">
                                                            <i class="h-5 text-slate-400" data-feather="eye"></i>
                                                            <span>Details</span>
                                                        </a>
                                                    </li>
                                                @endcan
                                                @can('user.edit')
                                                    <li class="dropdown-list-item">
                                                        <a href="{{ route('admin.user.edit', $user->id) }}"
                                                            class="dropdown-link">
                                                            <i class="h-5 text-slate-400" data-feather="edit"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                    </li>
                                                @endcan
                                                @can('user.delete')
                                                    @if ($user->isDeletable)
                                                        <li class="dropdown-list-item">
                                                            <a href="#"
                                                                onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this user?')) { document.getElementById('delete-user-{{ $user->id }}').submit();}"
                                                                class="dropdown-link">
                                                                <i class="h-5  text-red-500 hover:text-red-700 dark:hover:text-red-400"
                                                                    data-feather="trash"></i>
                                                                <span>Delete</span>
                                                            </a>

                                                            <form id="delete-user-{{ $user->id }}"
                                                                action="{{ route('admin.user.destroy', $user->id) }}"
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
                                <div class="card-body space-y-1">
                                    <p class="card-title flex gap-2 ">
                                        <span>Email: </span> {{ $user->email }}
                                    </p>
                                    <div class="card-content space-y-1">
                                        <p class="card-title flex gap-2 ">
                                            <span>Phone: </span> {{ $user->phone }}
                                        </p>
                                        <p class="card-title flex gap-2 ">
                                            <span>Role: </span>
                                            @foreach ($user->roles as $role)
                                                <span class="flex gap-1 items-center">
                                                    <x-icons.sheild class="text-blue-400" />
                                                    <span class="text-gray-700 dark:text-gray-100 ">
                                                        {{ $role->name }}
                                                    </span>
                                                </span>
                                            @endforeach
                                        </p>
                                        <p class="card-title flex gap-2">
                                            <span>Status: </span>
                                            <span class="badge {{ $user->status->color() }}">{{ $user->status }}</span>
                                        </p>
                                        <p class="card-title flex gap-2 ">
                                            <span>Created: </span> {{ $user->created_at->diffForHumans() }}
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
            <!-- User Table Ends -->

            <!-- User Pagination Starts -->
            <div class="grid grid-cols-1 justify-between items-start md:items-center space-y-3 md:space-y-0 p-4 w-full text-gray-700 dark:text-gray-100"
                aria-label="Table navigation">
                @if ($users->hasPages())
                    {{ $users->links() }}
                @endif
            </div>
            <!-- User Pagination Ends -->
        </div>
        <!-- User List Ends -->
    </x-app-layout>
@endcan
