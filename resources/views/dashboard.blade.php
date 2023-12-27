<x-app-layout> 
    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    @can('SuperAdmin')
                        <h2>I am Super Admin</h2>
                    @endcan

                    @can('Admin')
                        <h2>I am Admin</h2>
                    @endcan

                    @can('Customer')
                        <h2>I am Customer</h2>
                    @endcan

                    @can('Editor')
                        <h2>I am Editor</h2>
                    @endcan

                    @can('User')
                        <h2>I am User</h2>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
