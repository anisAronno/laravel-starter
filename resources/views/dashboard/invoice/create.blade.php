<x-app-layout>

    <x-page-title header="Invoice" page="Create" />

    <!-- Page Title Ends -->

    <!-- Invoice Create Starts -->
    <div class="grid grid-cols-1 gap-6 xl:grid-cols-4">
        <!--Left Side Div Starts -->
        <div class="col-span-1 xl:col-span-3">
            <div class="card">
                <div class="card-body space-y-6">
                    <!-- Invoice Header Starts -->
                    <div class="flex flex-col justify-between p-1 md:flex-row">
                        <!-- Logo Starts -->
                        <div class="flex items-center justify-center md:justify-start">
                            <div class="flex h-16 w-full items-center gap-4 pr-4">
                                <span class="inline-block flex-shrink-0">
                                    <x-application-logo class=" fill-current text-gray-500" />
                                </span>

                                <div>
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
                        </div>
                        <!-- Logo Ends -->

                        <!-- Title and Date Start -->
                        <div class="flex flex-col items-start gap-3 md:items-end">
                            <h4>Invoice #1001</h4>
                            <div class="flex w-full flex-col items-start gap-2 sm:items-center md:flex-row">
                                <label for="invoice-date"
                                    class="label w-full font-medium md:w-1/4 md:text-right">Date:</label>
                                <input id="invoice-date" class="input input-date bg-white dark:bg-slate-800"
                                    type="text" placeholder="YYYY-MM-DD" />
                            </div>
                            <div class="flex w-full flex-col items-start gap-2 sm:items-center md:flex-row">
                                <label for="invoice-due-date"
                                    class="label w-full font-medium md:w-1/4 md:text-right">Due Date:</label>
                                <input id="invoice-due-date" class="input input-date bg-white dark:bg-slate-800"
                                    type="text" placeholder="YYYY-MM-DD" />
                            </div>
                        </div>
                        <!-- Title and Date End -->
                    </div>
                    <!-- Invoice Header Ends -->

                    <!-- Invoice Info Starts  -->
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
                    <!-- Invoice Info Ends  -->

                    <!-- Product Table Starts -->
                    <div class="w-full overflow-auto p-1">
                        <div class="min-w-[42rem]">
                            <div
                                class="table-responsive whitespace-nowrap rounded-primary border border-slate-200 dark:border-slate-600">
                                <table id="table-products" class="table">
                                    <thead>
                                        <tr>
                                            <th width="45%">Product Name</th>
                                            <th width="20%">Price</th>
                                            <th width="15%">Quantity</th>
                                            <th class="!text-right">Line Total</th>
                                            <th class="w-8 !px-0 !py-0 !pr-2"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select class="select" autocomplete="off">
                                                    <option value="">Select Product</option>
                                                    <option value="1">Antiuqe Camera</option>
                                                    <option value="2">Stylish Sunglass</option>
                                                    <option value="3">Apple Watch 2023</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" placeholder="0.00" class="input" />
                                            </td>
                                            <td>
                                                <input type="text" placeholder="1" class="input" />
                                            </td>
                                            <td>
                                                <span
                                                    class="inline-block w-full text-right font-semibold text-slate-700 dark:text-slate-200">
                                                    $00.00
                                                </span>
                                            </td>
                                            <td class="!px-0 !py-0 !pr-2">
                                                <div class="flex items-center justify-center">
                                                    <button
                                                        class="btn-remove-item cursor-pointer rounded-full p-1 font-medium focus:bg-slate-300 focus:bg-opacity-50 focus:text-slate-600">
                                                        <i class="h-4 w-4" data-feather="x"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <select class="select" autocomplete="off">
                                                    <option value="">Select Product</option>
                                                    <option value="1">Antiuqe Camera</option>
                                                    <option value="2">Stylish Sunglass</option>
                                                    <option value="3">Apple Watch 2023</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" placeholder="0.00" class="input" />
                                            </td>

                                            <td>
                                                <input type="text" placeholder="1" class="input" />
                                            </td>
                                            <td>
                                                <span
                                                    class="inline-block w-full text-right font-semibold text-slate-700 dark:text-slate-200">
                                                    $00.00
                                                </span>
                                            </td>
                                            <td class="!px-0 !py-0 !pr-2">
                                                <div class="flex items-center justify-center">
                                                    <button
                                                        class="btn-remove-item cursor-pointer rounded-full p-1 font-medium focus:bg-slate-300 focus:bg-opacity-50 focus:text-slate-600">
                                                        <i class="h-4 w-4" data-feather="x"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="mt-4 flex justify-between">
                                <div class="flex w-2/5 flex-col items-start gap-y-4">
                                    <div class="w-full">
                                        <button id="btn-add-item"
                                            class="inline-flex items-center gap-x-2 text-sm text-primary-500 hover:text-primary-700 focus:text-primary-700 dark:hover:text-primary-600 dark:focus:text-primary-600">
                                            <i class="h-4" data-feather="plus"></i>
                                            New Item
                                        </button>
                                    </div>
                                    <div class="w-full">
                                        <textarea class="textarea" rows="3" placeholder="Write some note"></textarea>
                                    </div>
                                </div>

                                <div>
                                    <ul class="mr-8 space-y-3">
                                        <li class="flex items-center gap-x-2">
                                            <span
                                                class="inline-block w-1/2 text-right text-sm font-medium text-slate-400">Subtotal:</span>
                                            <span
                                                class="inline-block w-1/2 pr-6 text-right text-sm font-semibold text-slate-700 dark:text-slate-200">
                                                $00.00
                                            </span>
                                        </li>
                                        <li class="flex items-center gap-x-2">
                                            <span
                                                class="inline-block w-1/2 text-right text-sm font-medium text-slate-400">Discount:</span>
                                            <span
                                                class="inline-block w-1/2 pr-6 text-right text-sm font-semibold text-slate-700 dark:text-slate-200">
                                                $00.00
                                            </span>
                                        </li>
                                        <li class="flex items-center gap-x-2">
                                            <span
                                                class="inline-block w-1/2 text-right text-sm font-medium text-slate-400">Tax:</span>
                                            <span
                                                class="inline-block w-1/2 pr-6 text-right text-sm font-semibold text-slate-700 dark:text-slate-200">
                                                $00.00
                                            </span>
                                        </li>
                                    </ul>
                                    <hr class="mb-1 mt-5 border-slate-200 dark:border-slate-600" />
                                    <div class="mr-8 flex items-center gap-x-2">
                                        <span
                                            class="inline-block w-1/2 text-right text-sm font-medium text-slate-400">Total:</span>
                                        <span
                                            class="inline-block w-1/2 pr-6 text-right text-sm font-semibold text-slate-700 dark:text-slate-200">
                                            $00.00
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
        <!--Left Side Div Ends -->

        <!-- Right Side Div Starts-->
        <div class="sticky top-20 col-span-1 h-max">
            <div class="card">
                <div class="card-body flex flex-col gap-4">
                    <!-- Payment Method  -->
                    <div class="w-full">
                        <select class="select">
                            <option value="">Payment Method</option>
                            <option value="1">Bank Account</option>
                            <option value="2">Paypal</option>
                            <option value="2">Credit/Debit Card</option>
                            <option value="2">UPI Transfer</option>
                        </select>
                    </div>
                    <!-- Send Email  -->
                    <div class="flex w-full justify-between">
                        <span class="label text-sm font-medium text-slate-400">Send Email</span>
                        <label for="send-email" class="toggle">
                            <input class="toggle-input peer sr-only" id="send-email" type="checkbox" checked="true"
                                name="send-email" />
                            <div class="toggle-body"></div>
                        </label>
                    </div>

                    <!-- Charge Fee  -->
                    <div class="flex w-full justify-between">
                        <span class="label text-sm font-medium text-slate-400">Charge Late Fee</span>
                        <label for="charge-late-fee" class="toggle">
                            <input class="toggle-input peer sr-only" id="charge-late-fee" type="checkbox"
                                name="charge-late-fee" />
                            <div class="toggle-body"></div>
                        </label>
                    </div>

                    <!-- Save And Print Invoice  -->
                    <div class="flex flex-col gap-4 2xl:flex-row">
                        <button class="btn btn-primary w-full font-medium">
                            <i class="h-4" data-feather="save"></i>
                            <span>Save</span>
                        </button>

                        <button class="btn btn-success w-full font-medium">
                            <i class="h-4" data-feather="printer"></i>
                            <span>Print</span>
                        </button>
                    </div>

                    <!-- Preview Invoice  -->
                    <div class="w-full">
                        <button class="btn btn-outline-primary w-full font-medium">
                            <i class="h-4" data-feather="eye"></i>
                            <span>Preview</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!--Right Side Div Ends -->
    </div>
    <!-- Invoice Create Ends -->
</x-app-layout>
