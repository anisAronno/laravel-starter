@can('notification.view')
    <x-app-layout>
        <!-- Page Title Starts -->

        <x-page-title page="Notification" header="Notification" />

        <!-- Page Title Ends -->
        <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
            <div class="mx-auto   px-4 lg:px-6">
                <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                    <div
                        class="w-full flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                        <div
                            class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                            <h4 class="font-medium text-md xl:text-lg text-gray-950 dark:text-gray-100 ">
                                Notification Type:
                                <span
                                    class="text-sm font-normal">{{ preg_replace('/(?<!\s)([A-Z])/', ' $1', class_basename($notification->type) ?? '') }}</span>
                            </h2>
                        </div>
                        <div
                            class="w-full flex flex-col md:flex-row items-center justify-end space-y-3 md:space-y-0 md:space-x-4 p-4">
                            <div
                                class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                                @can('notification.view')
                                    <a href="{{ route('admin.notification.index') }}" type="button"
                                        class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800 gap-2 ">
                                        <i data-feather="eye" height="1rem" width="1rem"></i>
                                        View All
                                    </a>
                                @endcan
                            </div>
                        </div>
                    </div>
                    <div class="mt-8  p-5">
                        
                        <div
                            class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <p class="mb-3  text-gray-900 dark:text-white ">
                                {!! $notification->data['message'] !!}
                            </p>

                        </div>
                    </div>

                </div>
        </section>
    </x-app-layout>
@endcan
