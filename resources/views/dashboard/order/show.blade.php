<x-app-layout>
    <!-- Order Details Header Start -->
    <div class="flex items-center justify-between">
        <div class="flex flex-col gap-1">
            <div>
                <a class="flex items-center gap-0 text-slate-400 transition duration-150 ease-in-out hover:text-primary-500"
                    href="#">
                    <i class="m-0 h-4 w-4 p-0" data-feather="chevron-left"></i>
                    <p class="text-xs">Orders</p>
                </a>

                <div class="flex items-center gap-1">
                    <h2 class="text-xl font-semibold">Order#1001</h2>
                    <div class="badge badge-soft-primary">Processing</div>
                </div>
            </div>

            <!-- Date -->
            <div class="flex items-center gap-1">
                <i class="h-4 w-6 text-slate-400" data-feather="calendar"></i>
                <span class="text-xs text-slate-400">Fri 04 Mar 2023, 06:15 PM</span>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropdown-toggle btn btn-primary flex gap-2">
                Actions <i class="w-4" data-feather="chevron-down"></i>
            </button>
            <div class="dropdown-content w-[200px]">
                <ul class="dropdown-list">
                    <li class="dropdown-list-item">
                        <a href="javascript:void(0)" class="dropdown-link gap-4">
                            <i class="h-5 text-slate-500" data-feather="printer"></i>
                            Print Invoice
                        </a>
                    </li>
                    <li class="dropdown-list-item">
                        <a href="javascript:void(0)" class="dropdown-link gap-4">
                            <i class="h-5 text-slate-500" data-feather="credit-card"></i>
                            Add Payment
                        </a>
                    </li>
                    <li class="dropdown-list-item">
                        <a href="javascript:void(0)" class="dropdown-link gap-4">
                            <i class="h-5 text-slate-500" data-feather="corner-up-left"></i>
                            Add Refound
                        </a>
                    </li>
                    <li class="dropdown-list-item">
                        <a href="javascript:void(0)" class="dropdown-link gap-4">
                            <i class="h-5 text-slate-500" data-feather="truck"></i>
                            Add Shipment
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Order Details Header End -->

    <!-- Order Details Start  -->
    <div class="my-4 grid grid-cols-1 place-content-start gap-6 lg:grid-cols-3">
        <div class="col-span-1 flex flex-col gap-4 lg:col-span-2">
            <div class="card my-2">
                <div class="table-responsive">
                    <div class="min-w-[35rem]">
                        <table class="table shadow-none">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>
                                        <p class="text-right uppercase">Price</p>
                                    </th>
                                    <th>
                                        <p class="text-right uppercase">Qty</p>
                                    </th>
                                    <th>
                                        <p class="text-right uppercase">Line Total</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            <img src="{{asset('images/product1.png')}}" class="h-12 w-12 rounded-primary"
                                                alt="product-img" />
                                            <div class="flex flex-col items-start justify-center">
                                                <h4 class="m-0 p-0 text-sm font-medium text-slate-700">Product One</h4>
                                                <p class="text-xs font-normal text-slate-400 dark:text-slate-400">
                                                    Delivery Date: 31/01/3023
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-right text-sm font-normal text-slate-400 dark:text-slate-400">
                                            $24.00</p>
                                    </td>
                                    <td>
                                        <p class="text-right text-sm font-normal text-slate-400 dark:text-slate-400">1
                                            pcs</p>
                                    </td>
                                    <td>
                                        <p class="text-right text-sm font-semibold text-slate-700 dark:text-slate-200">
                                            $24.00</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            <img src="{{asset('images/product2.png')}}" class="h-12 w-12 rounded-primary"
                                                alt="product-img" />
                                            <div class="flex flex-col items-start justify-center">
                                                <h4 class="m-0 p-0 text-sm font-medium text-slate-700">Product Two</h4>
                                                <p class="text-xs font-normal text-slate-400 dark:text-slate-400">
                                                    Delivery Date: 31/01/3023
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-right text-sm font-normal text-slate-400 dark:text-slate-400">
                                            $24.00</p>
                                    </td>
                                    <td>
                                        <p class="text-right text-sm font-normal text-slate-400 dark:text-slate-400">1
                                            pcs</p>
                                    </td>
                                    <td>
                                        <p class="text-right text-sm font-semibold text-slate-700 dark:text-slate-200">
                                            $24.00</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            <img src="{{asset('images/product3.png')}}" class="h-12 w-12 rounded-primary"
                                                alt="product-img" />
                                            <div class="flex flex-col items-start justify-center">
                                                <h4 class="m-0 p-0 text-sm font-medium text-slate-700">Product Three
                                                </h4>
                                                <p class="text-xs font-normal text-slate-400 dark:text-slate-400">
                                                    Delivery Date: 31/01/3023
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-right text-sm font-normal text-slate-400 dark:text-slate-400">
                                            $24.00</p>
                                    </td>
                                    <td>
                                        <p class="text-right text-sm font-normal text-slate-400 dark:text-slate-400">1
                                            pcs</p>
                                    </td>
                                    <td>
                                        <p class="text-right text-sm font-semibold text-slate-700 dark:text-slate-200">
                                            $24.00</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="border-b border-slate-200 dark:border-slate-600"></div>
                        <div class="my-2 flex items-center justify-between">
                            <div class="w-2/3 px-6 pb-2">
                                <div class="flex flex-col gap-1 py-4">
                                    <p class="text-sm font-semibold text-slate-700 dark:text-slate-300">Payment Method:
                                    </p>
                                    <div class="flex items-center gap-1">
                                        <img src="{{asset('images/icon-visa')}}.png" class="h-6 w-6" alt="visa-img" />
                                        <p class="text-sm font-medium text-slate-700 dark:text-slate-300">**** **** ****
                                            4567</p>
                                    </div>
                                </div>
                                <p class="m-0 p-0 text-sm font-semibold text-slate-700 dark:text-slate-300">Note:</p>
                                <blockquote class="text-sm font-normal text-slate-600 dark:text-slate-300">
                                    It was a pleasure working with you and your team.
                                    <br />
                                    We hope you will keep us in mind for future projects.
                                </blockquote>
                            </div>
                            <div class="my-1 flex w-1/3 flex-col items-end">
                                <div
                                    class="flex w-full flex-col items-end gap-2 border-b border-slate-200 py-2 pr-6 dark:border-slate-600">
                                    <h4 class="text-sm font-medium text-slate-400 dark:text-slate-400">
                                        Subtotal:
                                        <span class="font-semibold text-slate-700 dark:text-slate-200">$72.00</span>
                                    </h4>
                                    <h4 class="text-sm font-medium text-slate-400 dark:text-slate-400">
                                        Discount:
                                        <span class="font-semibold text-slate-700 dark:text-slate-200">$00.00</span>
                                    </h4>
                                    <h4 class="text-sm font-medium text-slate-400 dark:text-slate-400">
                                        Tax:
                                        <span class="font-semibold text-slate-700 dark:text-slate-200">$02.00</span>
                                    </h4>
                                </div>
                                <h4 class="my-2 pr-6 text-sm font-medium text-slate-400 dark:text-slate-500">
                                    Total:
                                    <span class="font-semibold text-slate-700 dark:text-slate-200">$74.00</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shipments Start   -->
            <div class="flex flex-col gap-4">
                <h2 class="text-sm font-semibold">Shipments</h2>
                <div class="table-responsive shadow">
                    <table class="table min-w-[37rem]">
                        <thead>
                            <tr>
                                <th>Carrier</th>
                                <th>
                                    <p class="text-right uppercase">Qty</p>
                                </th>
                                <th>
                                    <p class="text-right uppercase">Total</p>
                                </th>
                                <th>
                                    <p class="text-right uppercase">Status</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="flex items-center gap-2">
                                        <img src="{{asset('images/Fedex.png')}}" class="w-20" alt="carrier-img" />
                                        <div class="flex flex-col items-start justify-center">
                                            <h4 class="m-0 p-0 text-sm font-medium text-slate-700">FedEx Express</h4>
                                            <p class="text-sm font-normal text-slate-400 dark:text-slate-400">
                                                Delivers in 1 ~ 3 days
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-right text-sm font-normal text-slate-400 dark:text-slate-400">2 pcs
                                    </p>
                                </td>
                                <td>
                                    <p class="text-right text-sm font-semibold text-slate-700 dark:text-slate-200">
                                        $48.00</p>
                                </td>
                                <td>
                                    <div class="flex justify-end">
                                        <div class="badge badge-soft-primary">Processing</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="flex items-center gap-2">
                                        <img src="{{asset('images/Dhl.png')}}" class="w-20" alt="carrier-img" />
                                        <div class="flex flex-col items-start justify-center">
                                            <h4 class="m-0 p-0 text-sm font-medium text-slate-700">DHL Express</h4>
                                            <p class="text-sm font-normal text-slate-400 dark:text-slate-400">
                                                Delivers in 1 ~ 3 days
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-right text-sm font-normal text-slate-400 dark:text-slate-400">1 pcs
                                    </p>
                                </td>
                                <td>
                                    <p class="text-right text-sm font-semibold text-slate-700 dark:text-slate-200">
                                        $24.00</p>
                                </td>
                                <td>
                                    <div class="flex justify-end">
                                        <div class="badge badge-soft-success">Shipped</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Shipment End  -->
            <!-- Order Activity Start  -->
            <div class="flex flex-col gap-4">
                <h2 class="text-sm font-semibold">Order Activity</h2>
                <div class="card w-full overflow-auto p-6">
                    <div class="flex w-full">
                        <!-- Line  -->
                        <div class="mb-6 mt-6 w-1 border-r border-slate-300 dark:border-slate-600 md:mb-3 md:mt-3">
                        </div>
                        <!-- Order Items Start -->
                        <div class="flex w-full flex-col items-center gap-8 md:gap-11">
                            <div class="relative w-full">
                                <div
                                    class="absolute -left-3 top-[50%] translate-y-[-50%] rounded-full bg-white p-1 dark:bg-slate-800">
                                    <i class="h-4 w-4 rounded-full bg-success-500 p-[2px] text-slate-100"
                                        stroke-width="3px" data-feather="check"></i>
                                </div>
                                <div
                                    class="flex w-full flex-col items-start gap-1 md:flex-row md:items-center md:justify-between md:gap-0">
                                    <div class="flex flex-col gap-1 px-4 md:gap-0 md:px-5">
                                        <h4 class="text-sm font-medium text-slate-700 dark:text-slate-200">Order Placed
                                        </h4>
                                        <p class="text-xs font-normal text-slate-400">Mar 14, 2023 09:45 am</p>
                                    </div>
                                    <p class="px-4 text-sm font-medium text-slate-700 dark:text-slate-200 md:px-0">
                                        Order#1001
                                    </p>
                                </div>
                            </div>
                            <div class="relative w-full">
                                <div
                                    class="absolute -left-3 top-[50%] translate-y-[-50%] rounded-full bg-white p-1 dark:bg-slate-800">
                                    <i class="h-4 w-4 rounded-full bg-success-500 p-[2px] text-slate-100"
                                        stroke-width="3px" data-feather="check"></i>
                                </div>
                                <div
                                    class="flex w-full flex-col items-start gap-1 md:flex-row md:items-center md:justify-between md:gap-0">
                                    <div class="flex flex-col gap-1 px-4 md:px-5">
                                        <div class="flex flex-col gap-1 md:flex-row">
                                            <h4 class="text-sm font-medium text-slate-700 dark:text-slate-200">
                                                Payment Successful
                                            </h4>
                                            <p class="text-sm font-normal text-slate-400">(2 x $24.00)</p>
                                        </div>
                                        <p class="text-xs font-normal text-slate-400">Mar 14, 2023 09:45 am</p>
                                    </div>
                                    <div class="flex items-center gap-1 px-4 md:px-0">
                                        <img src="{{asset('images/icon-visa')}}.png" class="h-6 w-6" alt="visa-img" />
                                        <p class="text-sm font-medium text-slate-700 dark:text-slate-300">**** ****
                                            **** 4567</p>
                                    </div>
                                </div>
                            </div>
                            <div class="relative w-full">
                                <div
                                    class="absolute -left-3 top-[50%] translate-y-[-50%] rounded-full bg-white p-1 dark:bg-slate-800">
                                    <i class="h-4 w-4 rounded-full bg-success-500 p-[2px] text-slate-100"
                                        stroke-width="3px" data-feather="check"></i>
                                </div>
                                <div
                                    class="flex w-full flex-col items-start gap-1 md:flex-row md:items-center md:justify-between md:gap-0">
                                    <div class="flex flex-col gap-1 px-4 md:px-5">
                                        <div class="flex flex-col gap-1 md:flex-row">
                                            <h4 class="text-sm font-medium text-slate-700 dark:text-slate-200">
                                                New Shipment Created
                                            </h4>
                                            <p class="text-sm font-normal text-slate-400">(2 x $24.00)</p>
                                        </div>
                                        <p class="text-xs font-normal text-slate-400">Mar 15, 2023 08:40 am</p>
                                    </div>
                                    <div class="flex items-center px-4 md:px-0">
                                        <img src="{{asset('images/Dhl.png')}}" class="w-20" alt="dhl-img" />
                                    </div>
                                </div>
                            </div>
                            <div class="relative w-full">
                                <div
                                    class="absolute -left-3 top-[50%] translate-y-[-50%] rounded-full bg-white p-1 dark:bg-slate-800">
                                    <i class="h-4 w-4 rounded-full bg-success-500 p-[2px] text-slate-100"
                                        stroke-width="3px" data-feather="check"></i>
                                </div>
                                <div
                                    class="flex w-full flex-col items-start gap-1 md:flex-row md:items-center md:justify-between md:gap-0">
                                    <div class="flex flex-col gap-1 px-4 md:px-5">
                                        <div class="flex flex-col gap-1 md:flex-row">
                                            <h4 class="text-sm font-medium text-slate-700 dark:text-slate-200">
                                                Shipped Successfully
                                            </h4>
                                            <p class="text-sm font-normal text-slate-400">(2 x $24.00)</p>
                                        </div>
                                        <p class="text-xs font-normal text-slate-400">Mar 16, 2023 04:30 pm</p>
                                    </div>
                                    <div class="flex items-center px-4 md:px-0">
                                        <img src="{{asset('images/Dhl.png')}}" class="w-20" alt="dhl-img" />
                                    </div>
                                </div>
                            </div>
                            <div class="relative w-full">
                                <div
                                    class="absolute -left-3 top-[50%] translate-y-[-50%] rounded-full bg-white p-1 dark:bg-slate-800">
                                    <i class="h-4 w-4 rounded-full bg-slate-400 p-[2px] text-slate-100"
                                        stroke-width="3px" data-feather="check"></i>
                                </div>
                                <div
                                    class="flex w-full flex-col items-start gap-1 md:flex-row md:items-center md:justify-between md:gap-0">
                                    <div class="flex flex-col gap-1 px-4 md:px-5">
                                        <div class="flex flex-col gap-1 md:flex-row">
                                            <h4 class="text-sm font-medium text-slate-700 dark:text-slate-200">
                                                Order Delivered Successfully
                                            </h4>
                                        </div>
                                        <p class="text-xs font-normal text-slate-400">Mar 16, 2023 04:30 pm</p>
                                    </div>
                                    <div class="flex items-center px-4 md:px-0"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Order Items End -->
                    </div>
                </div>
            </div>
            <!-- Order Activity End  -->
        </div>
        <div class="h-full py-2 lg:col-span-1">
            <div class="sticky top-20 min-h-max rounded-primary bg-white shadow dark:bg-slate-800">
                <!-- User  -->
                <div class="flex items-center gap-2 border-b border-slate-200 px-6 py-4 dark:border-slate-700">
                    <img src="{{asset('images/avatar1.png')}}" class="h-10 w-10 rounded-full" alt="avatar-img" />
                    <div class="flex flex-col gap-0">
                        <h4 class="text-sm font-medium">John William</h4>
                        <p class="text-xs text-slate-400">Dhaka, Bnagladesh</p>
                    </div>
                </div>
                <!-- Contact Address  -->
                <div class="flex flex-col gap-2 border-b border-slate-200 px-6 py-4 dark:border-slate-700">
                    <div class="flex items-center gap-2 text-slate-700 dark:text-slate-300">
                        <i class="h-4 w-4" data-feather="mail"></i>
                        <p class="text-sm font-normal">john@example.com</p>
                    </div>
                    <div class="flex items-center gap-2 text-slate-700 dark:text-slate-300">
                        <i class="h-4 w-4" data-feather="phone-call"></i>
                        <p class="text-sm font-normal">+(386)-259-8589</p>
                    </div>
                </div>
                <!-- shipping Address  -->
                <div class="flex flex-col gap-2 border-b border-slate-200 px-6 py-4 dark:border-slate-700">
                    <h6 class="text-sm font-semibold uppercase text-slate-700 dark:text-slate-300">SHIPPING ADDRESS
                    </h6>
                    <p class="text-sm font-normal leading-5">
                        4517 Washington Ave. <br />
                        Manchester, <br />
                        Kentucky 39495,<br />
                        United States of America
                    </p>
                </div>
                <!-- shipping Adress  -->
                <div class="flex flex-col gap-2 px-6 py-4">
                    <h6 class="text-sm font-semibold uppercase text-slate-700 dark:text-slate-300">BILLING ADDRESS</h6>
                    <p class="text-sm font-normal leading-5">
                        2972 Westheimer Rd. <br />
                        Santa Ana, <br />
                        Illinois 85486,<br />
                        United States of America
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Order Details End  -->
</x-app-layout>
