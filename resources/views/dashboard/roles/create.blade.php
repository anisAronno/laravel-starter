@use('App\Models\User')
@can('role.edit')
    <x-app-layout>
        <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
            <div class="mx-auto   px-4 lg:px-6">
                <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                    <div
                        class="w-full flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                        <div
                            class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                            <h2 class="font-medium text-md xl:text-lg ">Create New Role </h2>
                        </div>
                        <div
                            class="w-full flex flex-col md:flex-row items-center justify-end space-y-3 md:space-y-0 md:space-x-4 p-4">

                            <div
                                class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                                @can('role.view')
                                    <a href="{{ route('admin.roles.index') }}" type="button"
                                        class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 mr-2" fill="currentColor"
                                            viewBox="0 0 576 512">
                                            <path
                                                d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                                        </svg>
                                        View All
                                    </a>
                                @endcan
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 p-5 md:p-10">
                        <form action="{{ route('admin.roles.store') }}" method="POST" enctype="multipart/form-data"
                            files="true">
                            @csrf

                            <div class="form-group">

                                <label class="text-md my-2 inline-block" for="name">Role Name</label>
                                <input required id="name" placeholder="Name" type="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                                @error('name')
                                    <span class="text-sm md:text-md text-red-600 my-2 inline-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div>
                                    <h4
                                        class="my-4 md:my-6 text-2xl font-bold tracking-tight text-gray-900 dark:text-white capitalize underline underline-offset-8">
                                        All Permissions</h4>
                                </div>
                                <div class="card-body">
                                    <div class="flex flex-col">
                                        <div class="flex items-center">
                                            <input type="checkbox" class="form-check-input" id="checkPermissionAll"
                                                value="1">
                                            <label for="checkPermissionAll" class="ml-2">All</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="mt-8 grid gap-5 grid-cols-1  lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4">
                                @php $i = 1; @endphp
                                @foreach ($permission_groups as $group)
                                    <div class="flex-shrink-0 grow">

                                        <div
                                            class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700   min-w-32 min-h-60 truncate">
                                            <div
                                                class="my-3 md:my-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white capitalize underline underline-offset-8">
                                                <input type="checkbox" class="form-check-input"
                                                    id="{{ $i }}Management" value="{{ $group->name }}"
                                                    onclick="checkPermissionByGroup('role-{{ $i }}-management-checkbox', this)">
                                                <label class="form-check-label"
                                                    for="checkPermission">{{ Str::ucfirst($group->name) }}</label>
                                            </div>
                                            <hr>

                                            <div class=" role-{{ $i }}-management-checkbox">
                                                @php
                                                    $permissions = User::getpermissionsByGroupName($group->name);
                                                    $j = 1;
                                                @endphp
                                                @foreach ($permissions as $permission)
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="permissions[]"
                                                            id="checkPermission{{ $permission->id }}"
                                                            value="{{ $permission->name }}"
                                                            onclick="checkSinglePermission('role-{{ $i }}-management-checkbox', '{{ $i }}Management', {{ count($permissions) }})" />
                                                        <label class="form-check-label"
                                                            for="checkPermission{{ $permission->id }}">{{ $permission->name }}
                                                        </label>
                                                    </div>
                                                    @php  $j++; @endphp
                                                @endforeach
                                                <br>
                                            </div>

                                        </div>
                                        @php  $i++; @endphp
                                    </div>
                                @endforeach

                            </div>

                    </div>

                    <div class="flex justify-end  gap-3 mr-5 mb-5 md:mb-8">
                        <button type="reset"
                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Cancel</button>

                        <button
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="submit">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </section>
    </x-app-layout>

    @include('components.scripts.role')
@endcan
