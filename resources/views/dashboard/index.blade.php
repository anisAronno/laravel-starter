<x-app-layout>
    <!-- Page Title Starts -->

    <x-page-title header="Analytics" />

    <!-- Page Title Ends -->

    <div class="space-y-6">
        <!-- Overview Section Start -->
        <section class="grid grid-cols-1 gap-6 sm:grid-cols-2 xl:grid-cols-4">
            <!-- Product Views  -->
            <div class="card">
                <div class="card-body flex items-center gap-4">
                    <div
                        class="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-primary-500 bg-opacity-20 text-primary-500">
                        <i data-feather="box" class="text-3xl"></i>
                    </div>
                    <div class="flex flex-1 flex-col gap-1">
                        <p class="text-sm tracking-wide text-slate-500">Product Views</p>
                        <div class="flex flex-wrap items-baseline justify-between gap-2">
                            <h4>$24,92</h4>
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
                        <i class="bx bx-dollar-circle text-3xl"></i>
                    </div>
                    <div class="flex flex-1 flex-col gap-1">
                        <p class="text-sm tracking-wide text-slate-500">Product Sold</p>
                        <div class="flex flex-wrap items-baseline justify-between gap-2">
                            <h4>8,430</h4>
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
                        <i class="ti ti-thumb-up text-3xl"></i>
                    </div>
                    <div class="flex flex-1 flex-col gap-1">
                        <p class="text-sm tracking-wide text-slate-500">Total Likes</p>
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
                        <i class="ti ti-message-2-cog text-3xl"></i>
                    </div>
                    <div class="flex flex-1 flex-col gap-1">
                        <p class="text-sm tracking-wide text-slate-500">Conversation</p>
                        <div class="flex flex-wrap items-baseline justify-between gap-2">
                            <h4>$200,56</h4>
                            <span class="flex items-center text-xs font-medium text-success-500">
                                <i class="h-3 w-3" stroke-width="3px" data-feather="arrow-up-right"></i> 3.2%</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Overview Section End -->

        <!-- Store Analytics, Active Users, Sales By Location, Top & Most Viewed Product Section Start  -->
        <section class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3">
            <!-- Store Analytics -->
            <div class="card order-1 md:col-span-2">
                <div class="card-body">
                    <!-- Chart wrap -->
                    <div id="chart-wrap" class="flex flex-col justify-between">
                        <div class="flex flex-wrap items-center justify-between gap-3 md:gap-0">
                            <!-- Chart Title  -->
                            <h6>Store Analytics</h6>
                            <!-- Legends  -->
                            <div id="store-analytics-chart-legend" class="flex items-center gap-4">
                                <label for="visitors">
                                    <input type="checkbox" id="visitors" class="hidden" checked value="Visitors" />
                                    <div class="flex items-center gap-1">
                                        <div class="h-[10px] w-[10px] rounded-full bg-primary-500"></div>
                                        <p class="text-sm font-medium text-slate-600 dark:text-slate-300">Visitors</p>
                                    </div>
                                </label>

                                <label for="orders">
                                    <input type="checkbox" id="orders" class="hidden" checked value="Orders" />
                                    <div class="flex items-center gap-1">
                                        <div class="h-[10px] w-[10px] rounded-full bg-sky-500"></div>
                                        <span
                                            class="text-sm font-medium text-slate-600 dark:text-slate-300">Orders</span>
                                    </div>
                                </label>
                            </div>
                            <!-- Select By Chart -->
                            <select class="select select-sm w-full md:w-32">
                                <option value="1">Yearly</option>
                                <option value="2">Monthly</option>
                            </select>
                        </div>
                        <!-- Chart  -->
                        <div id="store-analytics-chart" class="-mx-4"></div>
                    </div>
                </div>
            </div>
            <!-- Active Users -->
            <div class="card order-3 col-span-1 xl:order-2">
                <div class="card-body flex flex-col items-center justify-between">
                    <!-- Header  -->
                    <div class="flex w-full justify-between">
                        <h6>Active Users</h6>
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
                    <div id="active-users-chart" class="w-full"></div>
                </div>
            </div>
            <!-- Sales By Location  -->
            <div class="card order-2 col-span-1 md:col-span-2 xl:order-3">
                <div class="card-body flex h-full flex-col justify-between gap-4">
                    <div class="flex flex-wrap justify-between gap-2">
                        <h6>Sales By Location</h6>
                        <select class="select select-sm w-full md:w-40">
                            <option value="1">Top Countries</option>
                            <option value="2">New Countries</option>
                        </select>
                    </div>
                    <div class="grid min-h-min flex-grow grid-cols-1 gap-6 md:grid-cols-5">
                        <!-- Sales Location Chart  -->
                        <div id="salesLocationChart" class="col-span-1 min-h-[320px] md:col-span-3"></div>
                        <div class="col-span-1 space-y-8 self-center md:col-span-2">
                            <!-- United States  -->
                            <div class="flex items-center gap-2">
                                <span class="fi fi-us h-5 w-8"></span>
                                <div class="flex flex-1 flex-col gap-1">
                                    <div class="flex items-center justify-between">
                                        <h6 class="text-sm text-slate-700 dark:text-slate-300">United States</h6>
                                        <p class="text-sm text-slate-400">50%</p>
                                    </div>
                                    <div class="progress progress-sm" role="progressbar" aria-valuenow="10"
                                        aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-line">
                                            <div class="progress-line-track">
                                                <div class="progress-line-thumb" style="width: 50%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Australia  -->
                            <div class="flex items-center gap-2">
                                <span class="fi fi-au h-5 w-8"></span>
                                <div class="flex flex-1 flex-col gap-1">
                                    <div class="flex items-center justify-between">
                                        <h6 class="text-sm text-slate-700 dark:text-slate-300">Australia</h6>
                                        <p class="text-sm text-slate-400">35%</p>
                                    </div>
                                    <div class="progress progress-success progress-sm" role="progressbar"
                                        aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-line">
                                            <div class="progress-line-track">
                                                <div class="progress-line-thumb" style="width: 35%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Brazil  -->
                            <div class="flex items-center gap-2">
                                <span class="fi fi-br h-5 w-8"></span>
                                <div class="flex flex-1 flex-col gap-1">
                                    <div class="flex items-center justify-between">
                                        <h6 class="text-sm text-slate-700 dark:text-slate-300">Brazil</h6>
                                        <p class="text-sm text-slate-400">22%</p>
                                    </div>
                                    <div class="progress progress-info progress-sm" role="progressbar"
                                        aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-line">
                                            <div class="progress-line-track">
                                                <div class="progress-line-thumb" style="width: 22%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Germany  -->
                            <div class="flex items-center gap-2">
                                <span class="fi fi-de h-5 w-8"></span>
                                <div class="flex flex-1 flex-col gap-1">
                                    <div class="flex items-center justify-between">
                                        <h6 class="text-sm text-slate-700 dark:text-slate-300">Germany</h6>
                                        <p class="text-sm text-slate-400">52%</p>
                                    </div>
                                    <div class="progress progress-warning progress-sm" role="progressbar"
                                        aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-line">
                                            <div class="progress-line-track">
                                                <div class="progress-line-thumb" style="width: 52%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Selling & Most Viewed Product  -->
            <div class="order-4 col-span-1 space-y-6">
                <!-- Top Selling Product  -->
                <div class="card">
                    <div class="card-body">
                        <div class="flex flex-wrap items-center justify-between">
                            <h6>Top Selling Product</h6>
                            <div class="flex items-center gap-2">
                                <label for="top-selling-product-today" class="cursor-pointer">
                                    <input type="radio" name="top-selling-product" id="top-selling-product-today"
                                        class="peer sr-only" checked />
                                    <span
                                        class="text-xs text-slate-600 peer-checked:font-medium peer-checked:text-primary-500 dark:text-slate-400">Today</span>
                                </label>
                                <span class="text-sm text-slate-200 dark:text-slate-600">|</span>
                                <label for="top-selling-product-month" class="cursor-pointer">
                                    <input type="radio" name="top-selling-product" id="top-selling-product-month"
                                        class="peer sr-only" />
                                    <span
                                        class="text-xs text-slate-600 peer-checked:font-medium peer-checked:text-primary-500 dark:text-slate-400">Month</span>
                                </label>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center gap-4 rounded-primary bg-slate-50 p-4 dark:bg-slate-900">
                            <img src="{{ asset('images/product8.png') }}" alt="product-img"
                                class="w-20 rounded-primary bg-white p-2 dark:bg-slate-800" />
                            <div class="flex flex-1 flex-col gap-1">
                                <h3 class="text-sm font-semibold">Stylish Sunglass</h3>
                                <p class="text-sm text-slate-500 dark:text-slate-400">New offer only $26.00</p>
                                <div class="flex gap-1 text-xl text-warning-400">
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Most Viewed Product -->
                <div class="card">
                    <div class="card-body flex flex-col gap-2">
                        <div class="flex flex-wrap items-center justify-between">
                            <h6>Most Viewed Product</h6>
                            <div class="flex items-center gap-2">
                                <label for="most-viewed-product-today" class="cursor-pointer">
                                    <input type="radio" name="most-viewed-product" id="most-viewed-product-today"
                                        class="peer sr-only" checked />
                                    <span
                                        class="text-xs text-slate-600 peer-checked:font-medium peer-checked:text-primary-500 dark:text-slate-400">Today</span>
                                </label>
                                <span class="text-sm text-slate-200 dark:text-slate-600">|</span>
                                <label for="most-viewed-product-month" class="cursor-pointer">
                                    <input type="radio" name="most-viewed-product" id="most-viewed-product-month"
                                        class="peer sr-only" />
                                    <span
                                        class="text-xs text-slate-600 peer-checked:font-medium peer-checked:text-primary-500 dark:text-slate-400">Month</span>
                                </label>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 rounded-primary bg-slate-50 p-4 dark:bg-slate-900">
                            <img src="{{ asset('images/product7.png') }}" alt="product-img"
                                class="w-20 rounded-primary bg-white p-2 dark:bg-slate-800" />
                            <div class="flex flex-1 flex-col gap-1">
                                <h3 class="text-sm font-semibold">Trending Oz Pro Shoes</h3>
                                <p class="text-sm text-slate-500 dark:text-slate-400">New offer only $105.00</p>
                                <div class="flex gap-1 text-xl text-warning-500">
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bx-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Store Analytics, Active Users, Sales By Location, Top & Most Viewed Product Section End  -->

        <!-- Campaign & Source Visited Section Start  -->
        <section class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <!-- Monthly Campaign State  -->
            <div class="card">
                <div class="card-body flex h-full flex-col">
                    <!-- Header  -->
                    <div class="flex w-full justify-between">
                        <h6>Monthly Campaign State</h6>
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
                    <p class="my-1 text-sm text-slate-400">34.25k email sent</p>
                    <div class="mt-auto divide-y dark:divide-slate-600">
                        <!-- Emails  -->
                        <div class="flex items-center gap-4 py-2">
                            <div
                                class="min-w-12 flex h-12 w-12 items-center justify-center rounded-primary bg-primary-500 bg-opacity-20 text-primary-500">
                                <i class="ti ti-refresh text-3xl"></i>
                            </div>
                            <div>
                                <h6 class="text-sm font-medium text-slate-600 dark:text-slate-300">Retargeted</h6>
                                <p class="text-sm text-slate-400">14,679</p>
                            </div>
                            <span class="ml-auto flex items-center text-sm font-medium text-success-500"><i
                                    class="h-3 w-3" stroke-width="3px" data-feather="arrow-up-right"></i>20%</span>
                        </div>
                        <!-- Opened  -->
                        <div class="flex items-center gap-4 py-2">
                            <div
                                class="min-w-14 flex h-12 w-12 items-center justify-center rounded-primary bg-success-500 bg-opacity-20 text-success-500">
                                <i class="ti ti-external-link text-3xl"></i>
                            </div>
                            <div>
                                <h6 class="text-sm font-medium text-slate-600 dark:text-slate-300">Opened</h6>
                                <p class="text-sm text-slate-400">12,675</p>
                            </div>
                            <span class="ml-auto flex items-center text-sm font-medium text-success-500"><i
                                    class="h-3 w-3" stroke-width="3px" data-feather="arrow-up-right"></i>35%</span>
                        </div>

                        <!-- Clicked  -->
                        <div class="flex items-center gap-4 py-2">
                            <div
                                class="min-w-12 flex h-12 w-12 items-center justify-center rounded-primary bg-info-500 bg-opacity-20 text-info-500">
                                <i class="ti ti-hand-click text-3xl"></i>
                            </div>
                            <div>
                                <h6 class="text-sm font-medium text-slate-600 dark:text-slate-300">Clicked</h6>
                                <p class="text-sm text-slate-400">6,320</p>
                            </div>
                            <span class="ml-auto flex items-center text-sm font-medium text-danger-500"><i
                                    class="h-3 w-3" stroke-width="3px" data-feather="arrow-down-left"></i>10%</span>
                        </div>

                        <!-- Complaints  -->
                        <div class="flex items-center gap-4 py-2">
                            <div
                                class="min-w-12 flex h-12 w-12 items-center justify-center rounded-primary bg-warning-500 bg-opacity-10 text-warning-500">
                                <i class="ti ti-message-exclamation text-3xl"></i>
                            </div>
                            <div>
                                <h6 class="text-sm font-medium text-slate-600 dark:text-slate-300">Complaints</h6>
                                <p class="text-sm text-slate-400">575</p>
                            </div>
                            <span class="ml-auto flex items-center text-sm font-medium text-danger-500"><i
                                    class="h-3 w-3" stroke-width="3px" data-feather="arrow-down-left"></i>02%</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Source Visits -->
            <div class="card">
                <div class="card-body flex h-full flex-col">
                    <!-- Header  -->
                    <div class="flex w-full justify-between">
                        <h6>Source Visitors</h6>
                        <div class="dropdown" data-placement="bottom-end">
                            <div class="dropdown-toggle">
                                <i class="ti ti-dots-vertical text-lg text-slate-500"></i>
                            </div>
                            <div class="dropdown-content w-[160px]">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link gap-2"> Actions </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="javascript:void(0)" class="dropdown-link"> Another Action </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p class="text-sm text-slate-400">70.8k Visiters</p>
                    <div class="mt-auto divide-y dark:divide-slate-600">
                        <!-- Social Network -->
                        <div class="flex items-center gap-4 py-2">
                            <div
                                class="min-w-12 flex h-12 w-12 items-center justify-center rounded-primary bg-success-500 bg-opacity-20 text-success-500">
                                <i class="ti ti-social text-3xl"></i>
                            </div>
                            <div>
                                <p class="whitespace-nowrap text-sm font-medium text-slate-600 dark:text-slate-300">
                                    Social Network
                                </p>
                                <p class="text-sm text-slate-400">31.4k</p>
                            </div>
                            <span class="ml-auto flex items-center text-sm font-medium text-danger-500"><i
                                    class="h-3 w-3" stroke-width="3px" data-feather="arrow-down-left"></i>20%</span>
                        </div>
                        <!-- Direct Source  -->
                        <div class="flex items-center gap-4 py-2">
                            <div
                                class="min-w-12 flex h-12 w-12 items-center justify-center rounded-primary bg-primary-500 bg-opacity-20 text-primary-500">
                                <i class="ti ti-world-search text-3xl"></i>
                            </div>
                            <div>
                                <p class="whitespace-nowrap text-sm font-medium text-slate-600 dark:text-slate-300">
                                    Direct Source
                                </p>
                                <p class="text-sm text-slate-400">1.4k</p>
                            </div>
                            <span class="ml-auto flex items-center text-sm font-medium text-success-500"><i
                                    class="h-3 w-3" stroke-width="3px" data-feather="arrow-up-right"></i>15%</span>
                        </div>

                        <!-- ADVT  -->
                        <div class="flex items-center gap-4 py-2">
                            <div
                                class="min-w-12 flex h-12 w-12 items-center justify-center rounded-primary bg-warning-500 bg-opacity-20 text-warning-500">
                                <i class="ti ti-social text-3xl"></i>
                            </div>
                            <div class="flex flex-col">
                                <h6 class="text-sm font-medium text-slate-600 dark:text-slate-300">ADVT</h6>
                                <p class="text-sm text-slate-400">31.2k</p>
                            </div>
                            <span class="ml-auto flex items-center text-sm font-medium text-success-500"><i
                                    class="h-3 w-3" stroke-width="3px" data-feather="arrow-up-right"></i>16%</span>
                        </div>

                        <!-- Referrals  -->
                        <div class="flex items-center gap-4 py-2">
                            <div
                                class="flex h-12 w-14 items-center justify-center rounded-primary bg-info-500 bg-opacity-20 text-info-500">
                                <i class="ti ti-users-group text-3xl"></i>
                            </div>
                            <div class="flex flex-col">
                                <h6 class="text-sm font-medium text-slate-600 dark:text-slate-300">Referrals</h6>
                                <p class="text-sm text-slate-400">345</p>
                            </div>
                            <span class="ml-auto flex items-center text-sm font-medium text-danger-500"><i
                                    class="h-3 w-3" stroke-width="3px" data-feather="arrow-down-left"></i>08%</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Campaign & Source Visited Section End  -->

        <!-- Top Sellers Section start  -->
        <section class="grid grid-cols-1">
            <div class="card">
                <div class="card-body space-y-2">
                    <!-- Header  -->
                    <div class="flex w-full justify-between">
                        <h6>Top Sellers</h6>
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
                    <!-- Seller Table  -->
                    <div class="table-responsive">
                        <table class="table min-w-[43rem]">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Product</th>
                                    <th>Country</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Revenue</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            <div class="avatar avatar-circle">
                                                <img src="{{ asset('images/avatar1.png') }}" class="avatar-img"
                                                    alt="avatar-img" />
                                            </div>
                                            <div>
                                                <p class="whitespace-nowrap font-medium">Wade Warren</p>
                                                <p class="text-xs text-slate-400">Apple Store Online</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap">07 August</td>
                                    <td class="whitespace-nowrap">T-shirt</td>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            <span class="fi fi-ae h-5 w-8"></span>
                                            <p class="whitespace-nowrap uppercase">UAE</p>
                                        </div>
                                    </td>
                                    <td>2865</td>
                                    <td>$5.08,876</td>
                                    <td>$27,187</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            <div class="avatar avatar-circle">
                                                <img src="{{ asset('images/avatar2.png') }}" class="avatar-img"
                                                    alt="avatar-img" />
                                            </div>
                                            <div>
                                                <p class="whitespace-nowrap font-medium">Afrad Bhuyian</p>
                                                <p class="text-xs text-slate-400">Acme Corporation</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap">25 Mar</td>
                                    <td class="whitespace-nowrap">Earings</td>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            <span class="fi fi-us h-5 w-8"></span>
                                            <p class="whitespace-nowrap uppercase">USA</p>
                                        </div>
                                    </td>
                                    <td>36654</td>
                                    <td>$3.06,867</td>
                                    <td>$23,89</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            <div class="avatar avatar-circle">
                                                <img src="{{ asset('images/avatar3.png') }}" class="avatar-img"
                                                    alt="avatar-img" />
                                            </div>
                                            <div>
                                                <p class="whitespace-nowrap font-medium">Robert Fox</p>
                                                <p class="text-xs text-slate-400">Omega Solutions</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap">14 February</td>
                                    <td>1 phone</td>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            <span class="fi fi-gb h-5 w-8"></span>
                                            <p class="whitespace-nowrap uppercase">UK</p>
                                        </div>
                                    </td>
                                    <td>4253</td>
                                    <td>$1.06,657</td>
                                    <td>$56,99</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            <div class="avatar avatar-circle">
                                                <img src="{{ asset('images/avatar4.png') }}" class="avatar-img"
                                                    alt="avatar-img" />
                                            </div>
                                            <div>
                                                <p class="whitespace-nowrap font-medium">John William</p>
                                                <p class="text-xs text-slate-400">Phoenix Electronics</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap">17 January</td>
                                    <td>Watches</td>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            <span class="fi fi-de h-5 w-8"></span>
                                            <p class="whitespace-nowrap uppercase">GER</p>
                                        </div>
                                    </td>
                                    <td>3532</td>
                                    <td>$3.54,450</td>
                                    <td>$7,67,657</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            <div class="avatar avatar-circle">
                                                <img src="{{ asset('images/avatar5.png') }}" class="avatar-img"
                                                    alt="avatar-img" />
                                            </div>
                                            <div>
                                                <p class="whitespace-nowrap font-medium">Ahmed Imtiaz</p>
                                                <p class="text-xs text-slate-400">Thunderbolt Inc</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap">11 November</td>
                                    <td class="whitespace-nowrap">Shoes</td>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            <span class="fi fi-br h-5 w-8"></span>
                                            <p class="whitespace-nowrap uppercase">BRA</p>
                                        </div>
                                    </td>
                                    <td>9076</td>
                                    <td>$9.54,450</td>
                                    <td>$78,01</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- Top Sellers Section End  -->

        <!-- Customer Satisfaction & Top Customers Section Start -->
        <section class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <!-- Customer Satisfaction  -->
            <div class="card">
                <div class="card-body">
                    <!-- Header  -->
                    <div class="flex w-full justify-between">
                        <h6>Customer Satisfaction</h6>
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
                    <p class="my-1 text-sm text-slate-400">9.4k reviews</p>

                    <!-- Performance Score Progress -->
                    <div class="mt-4 flex w-full gap-[6px]">
                        <div class="h-2 w-[40%] rounded-primary bg-primary-500"></div>
                        <div class="h-2 w-[20%] rounded-primary bg-success-500"></div>
                        <div class="h-2 w-[18%] rounded-primary bg-info-500"></div>
                        <div class="h-2 w-[12%] rounded-primary bg-warning-500"></div>
                        <div class="h-2 w-[10%] rounded-primary bg-danger-500"></div>
                    </div>
                    <br />
                    <div class="space-y-8 overflow-x-auto">
                        <!-- Excellent -->
                        <div class="grid w-full grid-cols-3">
                            <div class="flex items-center gap-2">
                                <div class="h-[14px] w-[14px] rounded-full border-2 border-primary-500"></div>
                                <p class="whitespace-nowrap text-sm font-medium">Excellent</p>
                            </div>
                            <div class="flex items-center justify-center">
                                <p class="whitespace-nowrap text-sm font-medium text-slate-600 dark:text-slate-400">
                                    3760</p>
                            </div>
                            <div class="flex items-center justify-end">
                                <p class="whitespace-nowrap text-sm font-medium text-slate-600 dark:text-slate-400">40%
                                </p>
                            </div>
                        </div>
                        <!-- Very Good  -->
                        <div class="grid w-full grid-cols-3">
                            <div class="flex items-center gap-2">
                                <div class="h-[14px] w-[14px] rounded-full border-2 border-success-500"></div>
                                <p class="whitespace-nowrap text-sm font-medium">Very Good</p>
                            </div>
                            <div class="flex items-center justify-center">
                                <p class="whitespace-nowrap text-sm font-medium text-slate-600 dark:text-slate-400">
                                    1880</p>
                            </div>
                            <div class="flex items-center justify-end">
                                <p class="whitespace-nowrap text-sm font-medium text-slate-600 dark:text-slate-400">20%
                                </p>
                            </div>
                        </div>
                        <!-- Good  -->
                        <div class="grid w-full grid-cols-3">
                            <div class="flex items-center gap-2">
                                <div class="h-[14px] w-[14px] rounded-full border-2 border-info-500"></div>
                                <p class="whitespace-nowrap text-sm font-medium">Good</p>
                            </div>
                            <div class="flex items-center justify-center">
                                <p class="whitespace-nowrap text-sm font-medium text-slate-600 dark:text-slate-400">
                                    1692</p>
                            </div>
                            <div class="flex items-center justify-end">
                                <p class="whitespace-nowrap text-sm font-medium text-slate-600 dark:text-slate-400">18%
                                </p>
                            </div>
                        </div>
                        <!-- Poor  -->
                        <div class="grid w-full grid-cols-3">
                            <div class="flex items-center gap-2">
                                <div class="h-[14px] w-[14px] rounded-full border-2 border-warning-500"></div>
                                <p class="whitespace-nowrap text-sm font-medium">Poor</p>
                            </div>
                            <div class="flex items-center justify-center">
                                <p class="whitespace-nowrap text-sm font-medium text-slate-600 dark:text-slate-400">
                                    1128</p>
                            </div>
                            <div class="flex items-center justify-end">
                                <p class="whitespace-nowrap text-sm font-medium text-slate-600 dark:text-slate-400">12%
                                </p>
                            </div>
                        </div>
                        <!-- Very Poor  -->
                        <div class="grid w-full grid-cols-3">
                            <div class="flex items-center gap-2">
                                <div class="h-[14px] w-[14px] rounded-full border-2 border-danger-500"></div>
                                <p class="whitespace-nowrap text-sm font-medium">Very Poor</p>
                            </div>
                            <div class="flex items-center justify-center">
                                <p class="whitespace-nowrap text-sm font-medium text-slate-600 dark:text-slate-400">940
                                </p>
                            </div>
                            <div class="flex items-center justify-end">
                                <p class="whitespace-nowrap text-sm font-medium text-slate-600 dark:text-slate-400">10%
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Customers  -->
            <div class="card">
                <div class="card-body flex h-full flex-col justify-between gap-2">
                    <!-- Header  -->
                    <div class="flex w-full justify-between">
                        <h6>Top Customers</h6>
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
                    <!-- Customers Table  -->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>
                                        <p class="whitespace-nowrap">Join Date</p>
                                    </th>
                                    <th>
                                        <p class="whitespace-nowrap">Total Order</p>
                                    </th>
                                    <th>Revenue</th>
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
                                    <td class="whitespace-nowrap">19 Aug 2022</td>
                                    <td>$20,500</td>
                                    <td>$5,000</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex gap-2">
                                            <div class="avatar avatar-circle">
                                                <img src="{{ asset('images/avatar2.png') }}" alt="avatar-img"
                                                    class="avatar-img" />
                                            </div>
                                            <div>
                                                <p class="text-sm font-medium">Mehedi Hasan</p>
                                                <p class="text-xs font-normal text-slate-400">mehedi@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap">01 Jan 2022</td>
                                    <td>$18,250</td>
                                    <td>$4,250</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex gap-2">
                                            <div class="avatar avatar-circle">
                                                <img src="{{ asset('images/avatar3.png') }}" alt="avatar-img"
                                                    class="avatar-img" />
                                            </div>
                                            <div>
                                                <p class="font-medium">Mirazul Islam</p>
                                                <p class="text-xs font-normal text-slate-400">mirazul@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap">07 Feb 2022</td>
                                    <td>$15,250</td>
                                    <td>$4,000</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex gap-2">
                                            <div class="avatar avatar-circle">
                                                <img src="{{ asset('images/avatar4.png') }}" alt="avatar-img"
                                                    class="avatar-img" />
                                            </div>
                                            <div>
                                                <p class="font-medium">Tanvir Ahmed</p>
                                                <p class="text-xs font-normal text-slate-400">tanvir@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap">03 May 2022</td>
                                    <td>$12,650</td>
                                    <td>$3,500</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- Customer Satisfaction & Top Customers Section End -->
    </div>
</x-app-layout>
