<div class="dropdown -mt-0.5" data-strategy="absolute">
    <div class="dropdown-toggle px-3">
        <button
            class="relative mt-1 flex items-center justify-center rounded-full text-slate-500 transition-colors duration-150 hover:text-slate-700 focus:text-primary-500 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:text-primary-500">
            <i width="24" height="24" data-feather="bell"></i>
            @if (auth()->user()->unreadNotifications->count() > 0)
                <span
                    class="absolute -right-1 -top-1.5 flex h-4 w-4 items-center justify-center rounded-full bg-danger-500 text-[11px] text-slate-200">
                    {{ auth()->user()->unreadNotifications->count() }}
                </span>
            @endif

        </button>
    </div>

    <div class="dropdown-content mt-3 w-[17.5rem] divide-y dark:divide-slate-700 sm:w-80">
        <div class="flex items-center justify-between px-4 py-4">
            <h6 class="text-slate-800 dark:text-slate-300">Notifications</h6>
            <a href="{{ route('admin.notification') }}"
                class="text-xs font-medium text-slate-600 hover:text-primary-500 dark:text-slate-300">
                Clear All
            </a>
        </div>

        <div class="h-80 w-full" data-simplebar>

            <ul>
                @foreach (auth()->user()->unreadNotifications as $notification)
                    <li>
                        <a href="{{ route('admin.notification', ['id' => $notification->id]) }}"
                            class="flex cursor-pointer gap-4 px-4 py-3 transition-colors duration-150 hover:bg-slate-100/70 dark:hover:bg-slate-700 {{ $notification->read_at == null ? 'bg-slate-100/50 dark:bg-gray-900' : '' }}">
                            <div
                                class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-blue-100 text-blue-500">
                                <i data-feather="alert-circle" width="20" height="20"></i>
                            </div>
                            <div>
                                <p class="text-xs text-slate-400">{{ $notification->data['message'] }}</p>
                                <p class="mt-1 flex items-center gap-1 text-xs text-slate-400">
                                    <i data-feather="clock" width="1em" height="1em"></i>
                                    <span>{{ $notification->created_at->diffForHumans() }}</span>
                                </p>
                            </div>
                        </a>
                    </li>
                @endforeach

            </ul>
        </div>

        <div class="px-4 py-2">
            <a href="{{route('admin.notification.index')}}" class="btn btn-primary-plain btn-sm w-full" type="button">
                <span>View All</span>
                <i data-feather="arrow-right" width="1rem" height="1rem"></i>
            </a>
        </div>
    </div>
</div>
