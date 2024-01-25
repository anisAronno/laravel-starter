@can('settings.view')
    <x-app-layout>
        <!-- Page Title Starts -->

        <x-page-title page="Settings" header="Settings" />

        <!-- Page Title Ends -->

        <div class="space-y-4">
            <!-- Settings Table Starts -->
            <div class="table-responsive whitespace-nowrap rounded-primary">
                <table class="table custom-data-table">
                    <thead>
                        <tr>
                            <th class="uppercase">Settings Name</th>
                            <th class="uppercase">Settings Value</th>
                            <th class="!text-right uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allSettings as $key => $settings)
                            <tr>
                                <td>
                                    <span class="font-normal text-md text-gray-700 dark:text-gray-100 capitalize">
                                         {{ str_replace('_', ' ', $key) }}
                                    </span>
                                </td>
                                <td>
                                    <span class="font-normal text-md text-gray-700 dark:text-gray-100 capitalize">
                                        <form action="{{ route('admin.settings.update', $key) }}"
                                            id="settings_form_{{ $key }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input class="input" type="text" name="settings_value" value="{{ $settings }}">
                                        </form>
                                    </span>
                                </td>
                                <td>
                                    <div class="flex justify-end">
                                        <button class="btn btn-primary" role="button"
                                            onclick="document.getElementById('settings_form_{{ $key }}').submit()">
                                            <i class="w-4" data-feather="upload"></i>
                                            Update
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <div class="sm:hidden">
                    @foreach ($allSettings as $key => $settings)
                        <div class="card my-4 overflow-x-auto shadow-sm shadow-gray-300 dark:shadow-gray-700">
                            <div class="card-header flex justify-center">
                                <div class="card-title capitalize ">
                                    <p>{{ $key }}</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-content ">
                                    <div class="px-4 py-4">
                                        <input class="input" type="text" value="{{ $settings }}">
                                    </div>
                                    <p class="card-title flex justify-center mt-5">
                                        <button class="btn btn-primary btn-sm" role="button">
                                            <i class="w-4" data-feather="upload"></i>
                                            Update
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Settings Table Ends -->

        </div>

    </x-app-layout>
@endcan
