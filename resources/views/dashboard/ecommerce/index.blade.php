<x-app-layout>
    <!-- Page Title Starts -->
     
    <x-page-title header="Ecommerce Report" />

    <!-- Page Title Ends -->

    <div class="space-y-6">
        <!-- Overview Section Start -->
        <section class="grid grid-cols-1 gap-6 sm:grid-cols-2 xl:grid-cols-4">
            <!-- Product Views  -->
            <div class="card">
                <div class="card-body flex items-center gap-4">
                    <div
                        class="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-primary-500 bg-opacity-20 text-primary-500">
                        <i class="bx bx-dollar-circle text-3xl"></i>
                    </div>
                    <div class="flex flex-1 flex-col gap-1">
                        <p class="text-sm tracking-wide text-slate-500">Total Sales</p>
                        <div class="flex flex-wrap items-baseline justify-between gap-2">
                            <h4>$25,275</h4>
                            <span class="flex items-center text-xs font-medium text-success-500"><i class="h-3 w-3"
                                    stroke-width="3px" data-feather="arrow-up-right"></i>2.2%</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Sold  -->
            <div class="card">
                <div class="card-body flex items-center gap-4">
                    <div
                        class="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-success-500 bg-opacity-20 text-success-500">
                        <i class="ti ti-shopping-cart text-3xl"></i>
                    </div>
                    <div class="flex flex-1 flex-col gap-1">
                        <p class="text-sm tracking-wide text-slate-500">Total Orders</p>
                        <div class="flex flex-wrap items-baseline justify-between gap-2">
                            <h4>5,630</h4>
                            <span class="flex items-center text-xs font-medium text-danger-500">
                                <i class="h-3 w-3" stroke-width="3px" data-feather="arrow-down-left"></i> 0.5%</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Likes  -->
            <div class="card">
                <div class="card-body flex items-center gap-4">
                    <div
                        class="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-warning-500 bg-opacity-20 text-warning-500">
                        <i class="ti ti-users text-3xl"></i>
                    </div>
                    <div class="flex flex-1 flex-col gap-1">
                        <p class="text-sm tracking-wide text-slate-500">Total Customers</p>
                        <div class="flex flex-wrap items-baseline justify-between gap-2">
                            <h4>46,256</h4>
                            <span class="flex items-center text-xs font-medium text-success-500">
                                <i class="h-3 w-3" stroke-width="3px" data-feather="arrow-up-right"></i> 1.2%</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Conversation Rate  -->
            <div class="card">
                <div class="card-body flex items-center gap-4">
                    <div
                        class="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-info-500 bg-opacity-20 text-info-500">
                        <i class="ti ti-receipt-refund text-3xl"></i>
                    </div>
                    <div class="flex flex-1 flex-col gap-1">
                        <p class="text-sm tracking-wide text-slate-500">Total Refunds</p>
                        <div class="flex flex-wrap items-baseline justify-between gap-2">
                            <h4>$20,56</h4>
                            <span class="flex items-center text-xs font-medium text-success-500">
                                <i class="h-3 w-3" stroke-width="3px" data-feather="arrow-up-right"></i> 3.2%</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Overview Section End -->

        <!-- Sales Report, Order Status, Profit, Revenue, Shipping Status Section Start  -->
        <section class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3">
            <!-- Sales Report -->
            <div class="card col-span-1 md:col-span-2">
                <div class="card-body">
                    <!-- Chart wrap -->
                    <div id="chart-wrap" class="flex flex-col justify-between">
                        <div class="flex flex-wrap items-center justify-between gap-3 md:gap-0">
                            <!-- Chart Title  -->
                            <h6>Sales Report</h6>
                            <!-- Legends  -->
                            <div id="sales-report-chart-legend" class="flex items-center gap-4">
                                <label for="sales">
                                    <input type="checkbox" id="sales" class="hidden" checked value="Sales" />
                                    <div class="flex items-center gap-1">
                                        <div class="h-[10px] w-[10px] rounded-full bg-primary-500"></div>
                                        <p class="text-sm font-medium text-slate-600 dark:text-slate-300">Sales</p>
                                    </div>
                                </label>

                                <label for="profit">
                                    <input type="checkbox" id="profit" class="hidden" checked value="Profit" />
                                    <div class="flex items-center gap-1">
                                        <div class="h-[10px] w-[10px] rounded-full bg-sky-500"></div>
                                        <span
                                            class="text-sm font-medium text-slate-600 dark:text-slate-300">Profit</span>
                                    </div>
                                </label>
                            </div>
                            <!-- Select By Chart -->
                            <select class="select select-sm w-full md:w-32">
                                <option value="1">Yearly</option>
                                <option value="2">Monthly</option>
                                <option value="2">Date & Time</option>
                            </select>
                        </div>
                        <!-- Chart  -->
                        <div id="sales-report-chart" class="-ml-4 -mr-2 sm:-mx-4"></div>
                    </div>
                </div>
            </div>
            <!-- Order Status -->
            <div class="card xl:col-span-1">
                <div class="card-body flex flex-col items-center justify-between">
                    <!-- Header  -->
                    <div class="flex w-full justify-between">
                        <h6>Order Status</h6>
                        <div class="dropdown" data-placement="bottom-end">
                            <div class="dropdown-toggle">
                                <i class="ti ti-dots-vertical text-lg text-slate-500"></i>
                            </div>
                            <div class="dropdown-content w-[160px]">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link gap-2"> Action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link gap-2"> Another Action </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Chart  -->
                    <div id="order-status-chart" class="w-full"></div>
                </div>
            </div>
            <!-- Profit -->
            <div class="card col-span-1">
                <div class="card-body">
                    <!-- Header  -->
                    <div class="flex w-full justify-between">
                        <h6>Profit Growth</h6>
                        <div class="dropdown" data-placement="bottom-end">
                            <div class="dropdown-toggle">
                                <i class="ti ti-dots-vertical text-lg text-slate-500"></i>
                            </div>
                            <div class="dropdown-content w-[160px]">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link gap-2"> Action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link gap-2"> Another Action </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Chart  -->
                    <div id="profit-chart" class="-ml-4 -mr-2 sm:-mx-4"></div>
                </div>
            </div>
            <!-- Revenue -->
            <div class="card col-span-1">
                <div class="card-body">
                    <!-- Header  -->
                    <div class="flex w-full justify-between">
                        <h6>Revenue</h6>
                        <div class="dropdown" data-placement="bottom-end">
                            <div class="dropdown-toggle">
                                <i class="ti ti-dots-vertical text-lg text-slate-500"></i>
                            </div>
                            <div class="dropdown-content w-[160px]">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link gap-2"> Action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link gap-2"> Another Action </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Chart  -->
                    <div id="revenue-chart" class="-ml-4 -mr-2 sm:-mx-4"></div>
                </div>
            </div>
            <!-- Shipping Status -->
            <div class="card col-span-1">
                <div class="card-body flex flex-col items-center justify-between">
                    <!-- Header  -->
                    <div class="flex w-full justify-between">
                        <h6>Shipping Status</h6>
                        <div class="dropdown" data-placement="bottom-end">
                            <div class="dropdown-toggle">
                                <i class="ti ti-dots-vertical text-lg text-slate-500"></i>
                            </div>
                            <div class="dropdown-content w-[160px]">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link gap-2"> Action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link gap-2"> Another Action </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Chart  -->
                    <div id="shipping-status-chart" class="w-full"></div>
                    <!-- Legends -->
                    <div class="flex items-center gap-2">
                        <div class="flex cursor-default items-center gap-1.5">
                            <span class="inline-block h-[10px] w-[10px] rounded-full bg-primary-500"></span>
                            <div>
                                <p class="text-sm font-medium">70.0%</p>
                                <p class="text-xs text-slate-400">Shipped</p>
                            </div>
                        </div>
                        <div class="flex cursor-default items-center gap-1.5">
                            <span
                                class="inline-block h-[10px] w-[10px] rounded-full bg-slate-200 dark:bg-slate-600"></span>
                            <div>
                                <p class="text-sm font-medium">30.0%</p>
                                <p class="text-xs text-slate-400">Pending</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sales Report, Order Status, Profit, Revenue, Shipping Status Section End  -->

        <!-- Recent Orders Section Start -->
        <section class="grid grid-cols-1">
            <div class="card">
                <div class="card-body space-y-2">
                    <div class="flex w-full justify-between">
                        <h6>Recent Orders</h6>
                        <div class="dropdown" data-placement="bottom-end">
                            <div class="dropdown-toggle">
                                <i class="ti ti-dots-vertical text-lg text-slate-500"></i>
                            </div>
                            <div class="dropdown-content w-[160px]">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link gap-2"> Action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link gap-2"> Another Action </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table min-w-[43rem]">
                            <thead>
                                <tr>
                                    <th>Customer</th>
                                    <th>Ordered At</th>
                                    <th>Total</th>
                                    <th>Revenue</th>
                                    <th>Status</th>
                                    <th>
                                        <p class="text-right">Actions</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="flex gap-2">
                                            <div class="avatar avatar-circle">
                                                <img src="{{ asset('images/avatar1.png') }}" alt="avatar-img"
                                                    class="avatar-img" />
                                            </div>
                                            <div>
                                                <p class="text-sm font-medium">Ahmed Shakil</p>
                                                <p class="text-xs font-normal text-slate-400">ahmed@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap">19 Apr 2023, 10:39 pm</td>
                                    <td>$446.50</td>
                                    <td>$50.00</td>
                                    <td>
                                        <span class="badge badge-soft-primary">Processing</span>
                                    </td>
                                    <td>
                                        <div class="flex justify-end">
                                            <div class="dropdown" data-placement="bottom-start">
                                                <div class="dropdown-toggle">
                                                    <i class="w-6 text-slate-500" data-feather="more-horizontal"></i>
                                                </div>
                                                <div class="dropdown-content min-w-[150px]">
                                                    <ul class="dropdown-list">
                                                        <li class="dropdown-list-item">
                                                            <a href="javascript:void(0)" class="dropdown-link">
                                                                <i class="h-5 text-slate-500"
                                                                    data-feather="external-link"></i>
                                                                <span>Details</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-list-item">
                                                            <a href="javascript:void(0)" class="dropdown-link">
                                                                <i class="h-5 text-slate-500"
                                                                    data-feather="file-text"></i>
                                                                <span>Invoice</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-list-item">
                                                            <a href="javascript:void(0)" class="dropdown-link">
                                                                <i class="h-5 text-slate-500"
                                                                    data-feather="trash-2"></i>
                                                                <span>Delete</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex gap-2">
                                            <div class="avatar avatar-circle">
                                                <img src="{{ asset('images/avatar2.png') }}" alt="avatar-img"
                                                    class="avatar-img" />
                                            </div>
                                            <div>
                                                <p class="text-sm font-medium">Pavel Khan</p>
                                                <p class="text-xs font-normal text-slate-400">pavel@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap">19 Apr 2023, 10:20 pm</td>
                                    <td>$1200.00</td>
                                    <td>$200.00</td>
                                    <td>
                                        <span class="badge badge-soft-warning">Shipped</span>
                                    </td>
                                    <td>
                                        <div class="flex justify-end">
                                            <div class="dropdown" data-placement="bottom-start">
                                                <div class="dropdown-toggle">
                                                    <i class="w-6 text-slate-500" data-feather="more-horizontal"></i>
                                                </div>
                                                <div class="dropdown-content min-w-[150px]">
                                                    <ul class="dropdown-list">
                                                        <li class="dropdown-list-item">
                                                            <a href="javascript:void(0)" class="dropdown-link">
                                                                <i class="h-5 text-slate-500"
                                                                    data-feather="external-link"></i>
                                                                <span>Details</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-list-item">
                                                            <a href="javascript:void(0)" class="dropdown-link">
                                                                <i class="h-5 text-slate-500"
                                                                    data-feather="file-text"></i>
                                                                <span>Invoice</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-list-item">
                                                            <a href="javascript:void(0)" class="dropdown-link">
                                                                <i class="h-5 text-slate-500"
                                                                    data-feather="trash-2"></i>
                                                                <span>Delete</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex gap-2">
                                            <div class="avatar avatar-circle">
                                                <img src="{{ asset('images/avatar3.png') }}" alt="avatar-img"
                                                    class="avatar-img" />
                                            </div>
                                            <div>
                                                <p class="text-sm font-medium">Shahadat Hossain</p>
                                                <p class="text-xs font-normal text-slate-400">shahadat@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap">19 Apr 2023, 9:30 pm</td>
                                    <td>$1050.00</td>
                                    <td>$175.00</td>
                                    <td>
                                        <span class="badge badge-soft-primary">Processing</span>
                                    </td>
                                    <td>
                                        <div class="flex justify-end">
                                            <div class="dropdown" data-placement="bottom-start">
                                                <div class="dropdown-toggle">
                                                    <i class="w-6 text-slate-500" data-feather="more-horizontal"></i>
                                                </div>
                                                <div class="dropdown-content min-w-[150px]">
                                                    <ul class="dropdown-list">
                                                        <li class="dropdown-list-item">
                                                            <a href="javascript:void(0)" class="dropdown-link">
                                                                <i class="h-5 text-slate-500"
                                                                    data-feather="external-link"></i>
                                                                <span>Details</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-list-item">
                                                            <a href="javascript:void(0)" class="dropdown-link">
                                                                <i class="h-5 text-slate-500"
                                                                    data-feather="file-text"></i>
                                                                <span>Invoice</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-list-item">
                                                            <a href="javascript:void(0)" class="dropdown-link">
                                                                <i class="h-5 text-slate-500"
                                                                    data-feather="trash-2"></i>
                                                                <span>Delete</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex gap-2">
                                            <div class="avatar avatar-circle">
                                                <img src="{{ asset('images/avatar4.png') }}" alt="avatar-img"
                                                    class="avatar-img" />
                                            </div>
                                            <div>
                                                <p class="text-sm font-medium">Rizwan Mirza</p>
                                                <p class="text-xs font-normal text-slate-400">rizwan@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap">19 Apr 2023, 8:20 pm</td>
                                    <td>$2050.00</td>
                                    <td>$425.00</td>
                                    <td>
                                        <span class="badge badge-soft-success">Delivered</span>
                                    </td>
                                    <td>
                                        <div class="flex justify-end">
                                            <div class="dropdown" data-placement="bottom-start">
                                                <div class="dropdown-toggle">
                                                    <i class="w-6 text-slate-500" data-feather="more-horizontal"></i>
                                                </div>
                                                <div class="dropdown-content min-w-[150px]">
                                                    <ul class="dropdown-list">
                                                        <li class="dropdown-list-item">
                                                            <a href="javascript:void(0)" class="dropdown-link">
                                                                <i class="h-5 text-slate-500"
                                                                    data-feather="external-link"></i>
                                                                <span>Details</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-list-item">
                                                            <a href="javascript:void(0)" class="dropdown-link">
                                                                <i class="h-5 text-slate-500"
                                                                    data-feather="file-text"></i>
                                                                <span>Invoice</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-list-item">
                                                            <a href="javascript:void(0)" class="dropdown-link">
                                                                <i class="h-5 text-slate-500"
                                                                    data-feather="trash-2"></i>
                                                                <span>Delete</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex gap-2">
                                            <div class="avatar avatar-circle">
                                                <img src="{{ asset('images/avatar3.png') }}" alt="avatar-img"
                                                    class="avatar-img" />
                                            </div>
                                            <div>
                                                <p class="text-sm font-medium">Adnan Shaikat</p>
                                                <p class="text-xs font-normal text-slate-400">adnam@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap">19 Apr 2023, 8:15 pm</td>
                                    <td>$950.00</td>
                                    <td>$100.00</td>
                                    <td>
                                        <span class="badge badge-soft-warning">Shipped</span>
                                    </td>
                                    <td>
                                        <div class="flex justify-end">
                                            <div class="dropdown" data-placement="bottom-start">
                                                <div class="dropdown-toggle">
                                                    <i class="w-6 text-slate-500" data-feather="more-horizontal"></i>
                                                </div>
                                                <div class="dropdown-content min-w-[150px]">
                                                    <ul class="dropdown-list">
                                                        <li class="dropdown-list-item">
                                                            <a href="javascript:void(0)" class="dropdown-link">
                                                                <i class="h-5 text-slate-500"
                                                                    data-feather="external-link"></i>
                                                                <span>Details</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-list-item">
                                                            <a href="javascript:void(0)" class="dropdown-link">
                                                                <i class="h-5 text-slate-500"
                                                                    data-feather="file-text"></i>
                                                                <span>Invoice</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-list-item">
                                                            <a href="javascript:void(0)" class="dropdown-link">
                                                                <i class="h-5 text-slate-500"
                                                                    data-feather="trash-2"></i>
                                                                <span>Delete</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- Recent Orders Section End -->

        <!-- Popular Product & Categories Section Start -->
        <section class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <!-- Popular Products  -->
            <div class="card">
                <div class="card-body flex h-full flex-col justify-between gap-2">
                    <!-- Header  -->
                    <div class="flex w-full justify-between">
                        <h6>Popular Products</h6>
                        <div class="dropdown" data-placement="bottom-end">
                            <div class="dropdown-toggle">
                                <i class="ti ti-dots-vertical text-lg text-slate-500"></i>
                            </div>
                            <div class="dropdown-content w-[160px]">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link gap-2"> Action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link gap-2"> Another Action </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Popular Products Table  -->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>SKU</th>
                                    <th>Price</th>
                                    <th>Sold</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <img src="{{ asset('images/product16.png') }}"
                                                class="h-10 w-10 rounded-primary border border-slate-300 dark:border-slate-400"
                                                alt="product" />
                                            <div>
                                                <p class="whitespace-nowrap text-sm font-medium">Apple Watch 2023</p>
                                                <p class="whitespace-nowrap text-xs text-slate-400">Electronics >
                                                    Accessories</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>APLW001</td>
                                    <td>$200.00</td>
                                    <td>
                                        <p class="whitespace-nowrap">1500 pcs</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <img src="{{ asset('images/product9.png') }}"
                                                class="h-10 w-10 rounded-primary border border-slate-300 dark:border-slate-400"
                                                alt="product" />
                                            <div>
                                                <p class="whitespace-nowrap text-sm font-medium">Nike Sports Shoe</p>
                                                <p class="whitespace-nowrap text-xs text-slate-400">Fashion > Shoes</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>NSS068</td>
                                    <td>$70.00</td>
                                    <td>
                                        <p class="whitespace-nowrap">1200 pcs</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <img src="{{ asset('images/product4.png') }}"
                                                class="h-10 w-10 rounded-primary border border-slate-300 dark:border-slate-400"
                                                alt="product" />
                                            <div>
                                                <p class="whitespace-nowrap text-sm font-medium">Headphone</p>
                                                <p class="whitespace-nowrap text-xs text-slate-400">Electronics >
                                                    Gadget</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>WLHP008</td>
                                    <td>$50.00</td>
                                    <td>
                                        <p class="whitespace-nowrap">1050 pcs</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <img src="{{ asset('images/product12.png') }}"
                                                class="h-10 w-10 rounded-primary border border-slate-300 dark:border-slate-400"
                                                alt="product" />
                                            <div>
                                                <p class="whitespace-nowrap text-sm font-medium">Macbook Pro</p>
                                                <p class="whitespace-nowrap text-xs text-slate-400">Electronics >
                                                    Laptop</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>MBP098</td>
                                    <td>$1600.00</td>
                                    <td>
                                        <p class="whitespace-nowrap">700 pcs</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <img src="{{ asset('images/product14.png') }}"
                                                class="h-10 w-10 rounded-primary border border-slate-300 dark:border-slate-400"
                                                alt="product" />
                                            <div>
                                                <p class="whitespace-nowrap text-sm font-medium">Iphone 13 Pro</p>
                                                <p class="whitespace-nowrap text-xs text-slate-400">Electronics >
                                                    Mobile</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>IP13P</td>
                                    <td>$1000.00</td>
                                    <td>
                                        <p class="whitespace-nowrap">500 pcs</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Popular Categories  -->
            <div class="card">
                <div class="card-body flex h-full flex-col justify-between gap-2">
                    <!-- Header  -->
                    <div class="flex w-full justify-between">
                        <h6>Popular Categories</h6>
                        <div class="dropdown" data-placement="bottom-end">
                            <div class="dropdown-toggle">
                                <i class="ti ti-dots-vertical text-lg text-slate-500"></i>
                            </div>
                            <div class="dropdown-content w-[160px]">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link gap-2"> Action </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link gap-2"> Another Action </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Popular Categories Table  -->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Sold</th>
                                    <th>Revenue</th>
                                    <th>Growth</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <img src="{{ asset('images/category1.png') }}"
                                                class="h-10 w-10 rounded-primary border border-slate-300 p-0.5 dark:border-slate-400"
                                                alt="category" />
                                            <div>
                                                <p class="whitespace-nowrap text-sm font-medium">Electronics</p>
                                                <p class="whitespace-nowrap text-xs text-slate-400">120 items</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$20,150.00</td>
                                    <td>$5,025.00</td>
                                    <td>
                                        <span class="flex items-center text-xs font-medium text-success-500"><i
                                                class="h-3 w-3" stroke-width="3px"
                                                data-feather="arrow-up-right"></i>2.2%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <img src="{{ asset('images/category2.png') }}"
                                                class="h-10 w-10 rounded-primary border border-slate-300 p-0.5 dark:border-slate-400"
                                                alt="category" />
                                            <div>
                                                <p class="whitespace-nowrap text-sm font-medium">Fashion</p>
                                                <p class="whitespace-nowrap text-xs text-slate-400">450 items</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$18500.00</td>
                                    <td>$6250.00</td>
                                    <td>
                                        <span class="flex items-center text-xs font-medium text-success-500"><i
                                                class="h-3 w-3" stroke-width="3px"
                                                data-feather="arrow-up-right"></i>3.5%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <img src="{{ asset('images/category3.png') }}"
                                                class="h-10 w-10 rounded-primary border border-slate-300 p-0.5 dark:border-slate-400"
                                                alt="category" />
                                            <div>
                                                <p class="whitespace-nowrap text-sm font-medium">Furniture</p>
                                                <p class="whitespace-nowrap text-xs text-slate-400">50 items</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$15750.00</td>
                                    <td>$6050.00</td>
                                    <td>
                                        <span class="flex items-center text-xs font-medium text-danger-500"><i
                                                class="h-3 w-3" stroke-width="3px"
                                                data-feather="arrow-down-left"></i>0.5%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <img src="{{ asset('images/category4.png') }}"
                                                class="h-10 w-10 rounded-primary border border-slate-300 p-0.5 dark:border-slate-400"
                                                alt="category" />
                                            <div>
                                                <p class="whitespace-nowrap text-sm font-medium">Grocery</p>
                                                <p class="whitespace-nowrap text-xs text-slate-400">600 items</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$15500.00</td>
                                    <td>$3500.00</td>
                                    <td>
                                        <span class="flex items-center text-xs font-medium text-success-500"><i
                                                class="h-3 w-3" stroke-width="3px"
                                                data-feather="arrow-up-right"></i>1.5%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <img src="{{ asset('images/category5.png') }}"
                                                class="h-10 w-10 rounded-primary border border-slate-300 p-0.5 dark:border-slate-400"
                                                alt="category" />
                                            <div>
                                                <p class="whitespace-nowrap text-sm font-medium">Sports</p>
                                                <p class="whitespace-nowrap text-xs text-slate-400">350 items</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$14500.00</td>
                                    <td>$4500.00</td>
                                    <td>
                                        <span class="flex items-center text-xs font-medium text-danger-500"><i
                                                class="h-3 w-3" stroke-width="3px"
                                                data-feather="arrow-down-left"></i>2.0%</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- Popular Product & Categories Section End -->
    </div>
</x-app-layout>
