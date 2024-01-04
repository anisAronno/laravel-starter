@can('user.view')
    <x-app-layout>
        <section class="bg-gray-50 dark:bg-gray-900 p-2 sm:p-5">
            <div class="mx-auto px-1 sm:px-4 lg:px-6">
                <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                    <div
                        class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                        <div class="w-full md:w-1/2">
                            @if ($users->count() > 0)
                                <form class="flex items-center" method="GET" action="{{ route('admin.user.index') }}">
                                    <label for="simple-search" class="sr-only">Search</label>
                                    <div class="relative w-full">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                                fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <input type="text" id="simple-search" name="search"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Search" required value="{{ request()->input('search') }}">
                                    </div>
                                </form>
                            @endif
                            @if (request()->has('search'))
                                <div class="flex items-center mt-2 md:mt-4 text-gray-600 dark:text-gray-300">
                                    <p class="mr-2">Search results for: <strong
                                            class="text-blue-600">{{ request()->input('search') }}</strong></p>
                                    <a href="{{ url()->current() }}"
                                        class="text-red-500 hover:text-red-700 dark:hover:text-red-400">
                                        <x-icons.trash />
                                    </a>
                                </div>
                            @endif

                        </div>
                        <div
                            class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                            @can('user.create')
                                <a href="{{ route('admin.user.create') }}" type="button"
                                    class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                    </svg>
                                    Add User
                                </a>
                            @endcan
                        </div>
                    </div>
                    @if ($users->count() > 0)
                        <div class="overflow-x-auto p-5 md:p-0">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 custom-data-table">
                                <thead
                                    class="text-md text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-4 py-3">Name</th>
                                        <th scope="col" class="px-4 py-3 hidden lg:table-cell">email</th>
                                        <th scope="col" class="px-4 py-3 hidden md:table-cell">phone</th>
                                        <th scope="col" class="px-4 py-3 ">Role</th>
                                        <th scope="col" class="px-4 py-3">status</th>
                                        <th scope="col" class="px-4 py-3">Created At</th>
                                        <th scope="col" class="px-4  py-3">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr class="border-b dark:border-gray-700 ">
                                            <td scope="row"
                                                class="px-4 py-3 font-medium text-sm xl:text-md text-gray-900   dark:text-white  w-full sm:w-min max-w-0 sm:max-w-none ">
                                                <span class="capitalize">
                                                    {{ $user->name }}
                                                </span>
                                                <dl class="lg:hidden font-normal">
                                                    <dt class="sr-only ">Email</dt>
                                                    <dd
                                                        class="mt-1 text-gray-800 dark:text-gray-200 md:text-gray-900 md:dark:text-gray-100 lg:hidden truncate">
                                                        {{ $user->email }}
                                                    </dd>
                                                    <dt class="sr-only lg:hidden">Phone:</dt>
                                                    <dd class="mt-1 md:hidden text-gray-700 dark:text-gray-300 truncate">
                                                        {{ $user->phone }}
                                                    </dd>
                                                </dl>

                                            </td>
                                            <td scope="row"
                                                class="px-4 py-3 font-medium text-md  text-gray-900 whitespace-nowrap dark:text-white hidden lg:table-cell max-w-0 lg:max-w-none truncate">
                                                {{ $user->email }}</td>
                                            <td scope="row"
                                                class="px-4 py-3 font-medium text-md  text-gray-900 whitespace-nowrap dark:text-white hidden md:table-cell max-w-0 md:max-w-none truncate">
                                                {{ $user->phone }}</td>
                                            <td class="px-4 py-3 text-md  text-gray-500  ">
                                                @foreach ($user->roles as $role)
                                                    <span class="flex gap-1 items-center">
                                                        <x-icons.sheild class="text-blue-400" />
                                                        <span class="text-gray-700 dark:text-gray-100 ">
                                                            {{ $role->name }}
                                                        </span>
                                                    </span>
                                                @endforeach
                                            </td>
                                            <td scope="row"
                                                class="px-4 py-3 font-medium text-sm xl:text-md text-gray-900 whitespace-nowrap dark:text-white capitalize">
                                                {{ $user->status }}
                                            </td>
                                            <td class="px-4 py-3 text-sm xl:text-md  truncate">
                                                {{ $user->created_at->diffForHumans() }}
                                            </td>
                                            <td class="px-4 py-3 dropdown">
                                                <button
                                                    class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100 float-end dropdown-toggle"
                                                    type="button">
                                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                        viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                    </svg>
                                                </button>
                                                <div
                                                    class="z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 dropdown-content">
                                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                                        @can('user.view')
                                                            <li>
                                                                <a href="{{ route('admin.user.show', $user->id) }}"
                                                                    class=" py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex items-center">
                                                                    <x-icons.eye />
                                                                    Show
                                                                </a>
                                                            </li>
                                                        @endcan

                                                        @can('user.edit')
                                                            @if ($user->id != 1)
                                                                <li>
                                                                    <a href="{{ route('admin.user.edit', $user->id) }}"
                                                                        class="flex items-center py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                                        <x-icons.edit />
                                                                        Edit
                                                                    </a>
                                                                </li>
                                                            @endif
                                                        @endcan
                                                    </ul>
                                                    @can('user.delete')
                                                        @if ($user->isDeletable)
                                                            <div class="py-1">
                                                                <a href="#"
                                                                    onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this user?')) { document.getElementById('delete-user-{{ $user->id }}').submit(); }"
                                                                    class="flex items-center py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                                                    <x-icons.trash />
                                                                    Delete
                                                                </a>

                                                                <form id="delete-user-{{ $user->id }}"
                                                                    action="{{ route('admin.user.destroy', $user->id) }}"
                                                                    method="POST" style="display: none;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                </form>

                                                            </div>
                                                        @endif
                                                    @endcan
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="sm:hidden">
                                @foreach ($users as $user)
                                    <div class="card my-3 overflow-x-auto shadow-md shadow-gray-300 dark:shadow-gray-700">
                                        <div class="card-header flex justify-between items-center">
                                            <h4 class="card-title">{{ $user->name }}</h4>
                                            <div class="px-4 py-3 dropdown">
                                                <button
                                                    class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100 float-end dropdown-toggle"
                                                    type="button">
                                                    <i class="ti ti-dots-vertical text-xl"></i>

                                                </button>
                                                <div
                                                    class="z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 dropdown-content">
                                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                                        @can('user.view')
                                                            <li>
                                                                <a href="{{ route('admin.user.show', $user->id) }}"
                                                                    class=" py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex items-center">
                                                                    <x-icons.eye />
                                                                    Show
                                                                </a>
                                                            </li>
                                                        @endcan

                                                        @can('user.edit')
                                                            @if ($user->id != 1)
                                                                <li>
                                                                    <a href="{{ route('admin.user.edit', $user->id) }}"
                                                                        class="flex items-center py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                                        <x-icons.edit />
                                                                        Edit
                                                                    </a>
                                                                </li>
                                                            @endif
                                                        @endcan
                                                    </ul>
                                                    @can('user.delete')
                                                        @if ($user->isDeletable)
                                                            <div class="py-1">
                                                                <a href="#"
                                                                    onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this user?')) { document.getElementById('delete-user-{{ $user->id }}').submit(); }"
                                                                    class="flex items-center py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                                                    <x-icons.trash />
                                                                    Delete
                                                                </a>

                                                                <form id="delete-user-{{ $user->id }}"
                                                                    action="{{ route('admin.user.destroy', $user->id) }}"
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
                                            <p class="card-title flex gap-2 ">
                                                <span>Email: </span> {{ $user->email }}
                                            </p>
                                            <div class="card-content">
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
                                                <p class="card-title flex gap-2 ">
                                                    <span>Status: </span> {{ $user->status }}
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

                        <div class="grid grid-cols-1 justify-between items-start md:items-center space-y-3 md:space-y-0 p-4 w-full text-gray-700 dark:text-gray-100"
                            aria-label="Table navigation">
                            @if ($users->hasPages())
                                {{ $users->links() }}
                            @endif
                        </div>
                    @else
                        <div class="text-center my-5">
                            <p class="text-lg text-red-600">No records found.</p>
                        </div>
                    @endif

                </div>
            </div>
        </section>
    </x-app-layout>
@endcan
