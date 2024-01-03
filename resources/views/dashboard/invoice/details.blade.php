<x-app-layout>
    <!-- Page Title Starts -->

    <x-page-title header="Invoice" page="Details" />

    <!-- Page Title Ends -->

    <!-- Invoice Details Starts -->
    <div class="grid grid-cols-1 gap-y-3 md:gap-x-5 xl:grid-cols-4">
        <div class="col-span-1 xl:col-span-3">
            <div class="card">
                <div class="card-body space-y-6">
                    <!-- Invoice Header Starts -->
                    <div class="flex flex-col justify-between space-y-4 p-1 md:flex-row">
                        <div class="flex items-center justify-center md:justify-start">
                            <!-- Logo Starts -->
                            <div class="flex h-16 w-full items-center gap-4 pr-4">
                                <span class="inline-block flex-shrink-0">
                                    <x-application-logo class=" fill-current text-gray-500" />
                                </span>

                                <div class="flex flex-col">
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
                            <!-- Logo Ends -->
                        </div>
                        <div class="flex flex-col items-start justify-center md:items-end">
                            <h4>Invoice #1001</h4>
                            <p class="my-0 py-0 text-sm font-medium text-slate-700 dark:text-slate-300">
                                Date Issued:
                                <span class="font-normal text-slate-600 dark:text-slate-300"> Jan 25, 2023 </span>
                            </p>
                            <p class="my-0 py-0 text-sm font-medium text-slate-700 dark:text-slate-300">
                                Due Date:
                                <span class="font-normal text-slate-600 dark:text-slate-300"> Feb 01, 2023 </span>
                            </p>
                        </div>
                    </div>
                    <!-- Invoice Header Ends -->

                    <!-- Invoice Info Starts -->
                    <div class="flex flex-col justify-between space-y-6 p-1 md:flex-row md:space-y-0">
                        <div class="flex w-full flex-col items-start justify-center md:mb-0 md:w-2/3 md:justify-center">
                            <p class="text-xs font-medium uppercase text-slate-400">BILLED FROM</p>
                            <h6 class="my-1">Admin Toolkit</h6>
                            <p class="whitespace-nowrap text-sm font-normal text-slate-600 dark:text-slate-300">
                                206 Yonge St, Toronto - M4S 2A3
                            </p>
                            <p class="whitespace-nowrap text-sm font-normal text-slate-600 dark:text-slate-300">
                                Tel No: (317) 745-1499
                            </p>
                            <p class="whitespace-nowrap text-sm font-normal text-slate-600 dark:text-slate-300">
                                Email: info@admintoolkit.com
                            </p>
                        </div>

                        <div class="flex w-full flex-col items-start justify-center md:w-1/3 md:items-end">
                            <p class="text-xs font-medium uppercase text-slate-400">BILLED TO</p>
                            <h6 class="my-1">John Doe</h6>
                            <p class="whitespace-nowrap text-sm font-normal text-slate-600 dark:text-slate-300">
                                206 Yonge St, Toronto - M4S 2A3
                            </p>
                            <p class="whitespace-nowrap text-sm font-normal text-slate-600 dark:text-slate-300">
                                Tel No: (317) 745-1499
                            </p>
                            <p class="whitespace-nowrap text-sm font-normal text-slate-600 dark:text-slate-300">
                                Email: johndoe@example.com
                            </p>
                        </div>
                    </div>
                    <!-- Invoice Info Ends -->

                    <!-- Product Table Starts -->
                    <div class="w-full overflow-auto p-1">
                        <div class="min-w-[38rem]">
                            <div
                                class="table-responsive whitespace-nowrap rounded-primary border border-slate-200 dark:border-slate-600">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th class="!text-right">Line Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="flex items-center gap-2">
                                                    <img src="{{ asset('images/product1.png') }}"
                                                        class="h-12 w-12 rounded-primary border border-slate-200 p-0.5 dark:border-slate-600"
                                                        alt="product-img" />
                                                    <div class="flex flex-col items-start justify-center">
                                                        <p
                                                            class="text-sm font-medium text-slate-700 dark:text-slate-300">
                                                            Product One</p>
                                                        <p class="text-xs text-slate-400">Delivery Date: 31/01/3023</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm text-slate-400">$24.00</p>
                                            </td>
                                            <td>
                                                <p class="text-sm text-slate-400">1 pcs</p>
                                            </td>
                                            <td>
                                                <p
                                                    class="text-right text-sm font-semibold text-slate-700 dark:text-slate-300">
                                                    $24.00
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flex items-center gap-2">
                                                    <img src="{{ asset('images/product2.png') }}"
                                                        class="h-12 w-12 rounded-primary border border-slate-200 p-0.5 dark:border-slate-600"
                                                        alt="product-img" />
                                                    <div class="flex flex-col items-start justify-center">
                                                        <p
                                                            class="text-sm font-medium text-slate-700 dark:text-slate-300">
                                                            Product Two</p>
                                                        <p class="text-xs text-slate-400 dark:text-slate-400">
                                                            Delivery Date: 31/01/3023
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm text-slate-400">$24.00</p>
                                            </td>
                                            <td>
                                                <p class="text-sm text-slate-400">1 pcs</p>
                                            </td>
                                            <td>
                                                <p
                                                    class="text-right text-sm font-semibold text-slate-700 dark:text-slate-300">
                                                    $24.00
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flex items-center gap-2">
                                                    <img src="{{ asset('images/product3.png') }}"
                                                        class="h-12 w-12 rounded-primary" alt="product-img" />
                                                    <div class="flex flex-col items-start justify-center">
                                                        <p
                                                            class="text-sm font-medium text-slate-700 dark:text-slate-300">
                                                            Product Three
                                                        </p>
                                                        <p class="text-xs text-slate-400 dark:text-slate-400">
                                                            Delivery Date: 31/01/3023
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm text-slate-400">$24.00</p>
                                            </td>
                                            <td>
                                                <p class="text-sm text-slate-400">1 pcs</p>
                                            </td>
                                            <td>
                                                <p
                                                    class="text-right text-sm font-semibold text-slate-700 dark:text-slate-300">
                                                    $24.00
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="mt-4 flex items-stretch justify-between">
                                <div class="w-2/5">
                                    <p class="my-2 py-0 text-sm font-semibold">
                                        Payment Method:
                                        <span class="font-normal"> Bank Transfer </span>
                                    </p>
                                    <p class="m-0 p-0 text-sm font-semibold">Note:</p>
                                    <blockquote class="text-sm font-normal text-slate-600 dark:text-slate-400">
                                        It was a pleasure working with you and your team.
                                        <br />
                                        We hope you will keep us in mind for future freelance
                                        <br />
                                        projects. Thank You!
                                    </blockquote>
                                </div>

                                <div>
                                    <ul class="space-y-3">
                                        <li class="flex items-center gap-x-2">
                                            <span
                                                class="inline-block w-1/2 text-right text-sm font-medium text-slate-400">Subtotal:</span>
                                            <span
                                                class="inline-block w-1/2 pr-6 text-right text-sm font-semibold text-slate-700 dark:text-slate-300">
                                                $72.00
                                            </span>
                                        </li>
                                        <li class="flex items-center gap-x-2">
                                            <span
                                                class="inline-block w-1/2 text-right text-sm font-medium text-slate-400">Discount:</span>
                                            <span
                                                class="inline-block w-1/2 pr-6 text-right text-sm font-semibold text-slate-700 dark:text-slate-300">
                                                $0.00
                                            </span>
                                        </li>
                                        <li class="flex items-center gap-x-2">
                                            <span
                                                class="inline-block w-1/2 text-right text-sm font-medium text-slate-400">Tax:</span>
                                            <span
                                                class="inline-block w-1/2 pr-6 text-right text-sm font-semibold text-slate-700 dark:text-slate-300">
                                                $2.00
                                            </span>
                                        </li>
                                    </ul>
                                    <hr class="mb-1 mt-5 border-slate-200 dark:border-slate-600" />
                                    <div class="flex items-center gap-x-2">
                                        <span
                                            class="inline-block w-1/2 text-right text-sm font-medium text-slate-400">Total:</span>
                                        <span
                                            class="inline-block w-1/2 pr-6 text-right text-sm font-semibold text-slate-700 dark:text-slate-300">
                                            $74.00
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Table Ends -->

                    <p class="py-2 text-center text-sm">Thanks for your Business</p>
                </div>
            </div>
        </div>

        <div class="sticky top-20 col-span-1 h-max">
            <div class="card">
                <div class="card-body flex flex-col gap-4">
                    <button class="btn btn-primary w-full">
                        <i data-feather="send" width="1.125rem" height="1.125rem"></i>
                        Send Invoice
                    </button>

                    <button class="btn btn-primary w-full">
                        <i data-feather="dollar-sign" width="1.125rem" height="1.125rem"></i>
                        Add Payment
                    </button>

                    <div class="flex items-center gap-4 xl:flex-col 2xl:flex-row">
                        <button class="btn btn-outline-primary w-full">
                            <i data-feather="printer" width="1.125rem" height="1.125rem"></i>
                            <span>Print</span>
                        </button>
                        <button class="btn btn-outline-primary w-full">
                            <i data-feather="download" width="1.125rem" height="1.125rem"></i>
                            <span>Download</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Invoice Details Ends -->
</x-app-layout>
