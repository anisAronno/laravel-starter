@can('user.view')
    <x-app-layout>
        <!-- Page Title Starts -->

        <x-page-title page="Notification" header="All Notifications" />

        <!-- Page Title Ends -->

        <!-- User List Starts -->
        <div class="space-y-4">
            <!-- User Header Starts -->
            <div class="flex flex-col items-center justify-between gap-y-4 md:flex-row md:gap-y-0">
                <!-- User Search Starts -->
                <form
                    class="group flex h-10 w-full items-center rounded-primary border border-transparent bg-white shadow-sm focus-within:border-primary-500 focus-within:ring-1 focus-within:ring-inset focus-within:ring-primary-500 dark:border-transparent dark:bg-slate-800 dark:focus-within:border-primary-500 md:w-72"
                    method="GET" action="{{ route('admin.notification.index') }}">
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

                    @can('notification.create')
                        @if (auth()->user()->unreadNotifications->count() > 0)
                            <a class="btn btn-primary" href="{{ route('admin.notification') }}" role="button">
                                <i data-feather="eye" height="1rem" width="1rem"></i>
                                <span>Mark All as Read</span>
                            </a>
                        @endif
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
            @if ($notifications->count() > 0)
                <div class="table-responsive whitespace-nowrap rounded-primary">
                    <table class="table custom-data-table">
                        <thead>
                            <tr>
                                <th class="w-[50%] uppercase">Data</th>
                                <th class="w-[20%] uppercase">Type</th>
                                <th class="w-[10%] uppercase">Created Date</th>
                                <th class="w-[10%] uppercase">Status</th>
                                <th class="w-[10%] !text-right uppercase">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notifications as $notification)
                                <tr>
                                    <td>
                                        {!! $notification->data['message'] !!}
                                    </td>
                                    <td>
                                        <span
                                            class="text-sm">{{ preg_replace('/(?<!\s)([A-Z])/', ' $1', class_basename($notification->type) ?? '') }}</span>
                                    </td>
                                    <td>{{ $notification?->created_at->diffForHumans() }}</td>

                                    <td>
                                        @if ($notification->read_at == null)
                                            <a href="{{ route('admin.notification', ['id' => $notification->id]) }}"
                                                class="flex cursor-pointer gap-2 px-2 py-2 transition-colors duration-150 hover:bg-gray-400 dark:hover:bg-gray-700 max-w-min {{ $notification->read_at == null ? 'bg-gray-300 dark:bg-gray-900' : '' }}">
                                                <i data-feather="check-circle" height="1rem" width="1rem"></i>
                                                <span class="text-blue-600">Mark as Read</span>
                                            </a>
                                        @else
                                            <span class="">Read at
                                                {{ $notification->read_at?->diffForHumans() }}</span>
                                        @endif

                                    </td>
                                    <td>
                                        <a href="{{ route('admin.notification.show', $notification->id) }}"
                                            class="!text-right flex justify-end gap-2 items-center text-blue-500">
                                            <i data-feather="eye" height="1rem" width="1rem"></i>
                                            View
                                        </a>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="sm:hidden">
                        @foreach ($notifications as $notification)
                            <div
                                class="card my-3 overflow-x-auto shadow-md shadow-gray-300 dark:shadow-gray-700 cursor-pointer gap-2 px-2 py-2 transition-colors duration-150 hover:bg-gray-400 dark:hover:bg-gray-700  {{ $notification->read_at == null ? 'bg-gray-300 dark:bg-gray-600' : '' }}">
                                <div class="card-header flex justify-between items-center ">
                                    <span
                                        class="text-sm">{{ preg_replace('/(?<!\s)([A-Z])/', ' $1', class_basename($notification->type) ?? '') }}</span>
                                </div>
                                <div class="card-body space-y-1 flex justify-between">
                                    <div>
                                        <p class="card-title  text-wrap text-sm ">
                                            {!! $notification->data['message'] !!}
                                        </p>
                                        <div class="card-content space-y-1 text-xs">
                                            <span>Created: </span> {{ $notification->created_at->diffForHumans() }}
                                        </div>
                                    </div>
                                    <div class="  flex justify-between items-center text-xs">
                                        <a href="{{ route('admin.notification.show', $notification->id) }}"
                                            class="!text-right flex justify-end gap-2 items-center ">
                                            <i data-feather="eye" height="1rem" width="1rem"></i>
                                        </a>
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
                @if ($notifications->hasPages())
                    {{ $notifications->links() }}
                @endif
            </div>
            <!-- User Pagination Ends -->
        </div>
        <!-- User List Ends -->
    </x-app-layout>
@endcan
