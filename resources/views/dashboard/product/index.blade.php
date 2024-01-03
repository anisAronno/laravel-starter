<x-app-layout>
    <!-- Page Title Starts -->
    
    <x-page-title header="Product List" page="Ecommerce" />

    <!-- Page Title Ends -->

    <!-- Product List Starts -->
    <div class="space-y-4">
        <!-- Product Header Starts -->
        <div class="flex flex-col items-center justify-between gap-y-4 md:flex-row md:gap-y-0">
            <!-- Customer Search Starts -->
            <form
                class="group flex h-10 w-full items-center rounded-primary border border-transparent bg-white shadow-sm focus-within:border-primary-500 focus-within:ring-1 focus-within:ring-inset focus-within:ring-primary-500 dark:border-transparent dark:bg-slate-800 dark:focus-within:border-primary-500 md:w-72">
                <div class="flex h-full items-center px-2">
                    <i class="h-4 text-slate-400 group-focus-within:text-primary-500" data-feather="search"></i>
                </div>
                <input
                    class="h-full w-full border-transparent bg-transparent px-0 text-sm placeholder-slate-400 placeholder:text-sm focus:border-transparent focus:outline-none focus:ring-0"
                    type="text" placeholder="Search" />
            </form>
            <!-- Customer Search Ends -->

            <!-- Customer Action Starts -->
            <div class="flex w-full items-center justify-between gap-x-4 md:w-auto">
                <div class="flex items-center gap-x-4">
                    <div class="dropdown" data-placement="bottom-end">
                        <div class="dropdown-toggle">
                            <button type="button" class="btn bg-white font-medium shadow-sm dark:bg-slate-800">
                                <i class="w-4" data-feather="filter"></i>
                                <span class="hidden sm:inline-block">Filter</span>
                                <i class="w-4" data-feather="chevron-down"></i>
                            </button>
                        </div>
                        <div class="dropdown-content w-72 !overflow-visible">
                            <ul class="dropdown-list space-y-4 p-4">
                                <li class="dropdown-list-item">
                                    <h2 class="my-1 text-sm font-medium">Category</h2>
                                    <select class="tom-select w-full" autocomplete="off">
                                        <option value="">Select a Category</option>
                                        <option value="1">Electronics</option>
                                        <option value="2">Fashion</option>
                                        <option value="3">Accessories</option>
                                    </select>
                                </li>

                                <li class="dropdown-list-item">
                                    <h2 class="my-1 text-sm font-medium">Status</h2>
                                    <select class="select">
                                        <option value="">Select to Status</option>
                                        <option value="1">Available</option>
                                        <option value="2">Disabled</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <button class="btn bg-white font-medium shadow-sm dark:bg-slate-800">
                        <i class="h-4" data-feather="upload"></i>
                        <span class="hidden sm:inline-block">Export</span>
                    </button>
                </div>

                <a class="btn btn-primary" href="#" role="button">
                    <i data-feather="plus" height="1rem" width="1rem"></i>
                    <span class="hidden sm:inline-block">Add Product</span>
                </a>
            </div>
            <!-- Customer Action Ends -->
        </div>
        <!-- Product Header Ends -->

        <!-- Product Table Starts -->
        <div class="table-responsive whitespace-nowrap rounded-primary">
            <table class="table">
                <thead>
                    <tr>
                        <th class="w-[5%]">
                            <input class="checkbox" type="checkbox" data-check-all
                                data-check-all-target=".product-checkbox" />
                        </th>
                        <th class="w-[40%] uppercase">Product</th>
                        <th class="w-[10%] uppercase">SKU</th>
                        <th class="w-[10%] uppercase">Price</th>
                        <th class="w-[10%] uppercase">Quantity</th>
                        <th class="w-[10%] uppercase">Last Ordered</th>
                        <th class="w-[10%] uppercase">Status</th>
                        <th class="w-[5%] !text-right uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input class="checkbox product-checkbox" type="checkbox" />
                        </td>
                        <td>
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('images/product16.png') }}"
                                    class="h-10 w-10 rounded-primary border border-slate-300 dark:border-slate-400"
                                    alt="product" />
                                <div>
                                    <h6
                                        class="whitespace-nowrap text-sm font-medium text-slate-700 dark:text-slate-100">
                                        Apple Watch 2023
                                    </h6>
                                    <p class="truncate text-xs text-slate-500 dark:text-slate-400">Electronics >
                                        Accessories</p>
                                </div>
                            </div>
                        </td>
                        <td>APLW001</td>
                        <td>$200.00</td>
                        <td>150 pcs</td>
                        <td>19 Aug 2022</td>
                        <td>
                            <div class="badge badge-soft-success">Available</div>
                        </td>
                        <td>
                            <div class="flex justify-end">
                                <div class="dropdown" data-placement="bottom-start">
                                    <div class="dropdown-toggle">
                                        <i class="w-6 text-slate-400" data-feather="more-horizontal"></i>
                                    </div>
                                    <div class="dropdown-content w-40">
                                        <ul class="dropdown-list">
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">
                                                    <i class="h-5 text-slate-400" data-feather="external-link"></i>
                                                    <span>Details</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">
                                                    <i class="h-5 text-slate-400" data-feather="edit"></i>
                                                    <span>Edit</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">
                                                    <i class="h-5 text-slate-400" data-feather="trash"></i>
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
                            <input class="checkbox product-checkbox" type="checkbox" />
                        </td>
                        <td>
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('images/product4.png') }}"
                                    class="h-10 w-10 rounded-primary border border-slate-300 dark:border-slate-400"
                                    alt="product" />
                                <div>
                                    <h6
                                        class="whitespace-nowrap text-sm font-medium text-slate-700 dark:text-slate-100">
                                        Headphone
                                    </h6>
                                    <p class="truncate text-xs text-slate-500 dark:text-slate-400">Electronics > Gadget
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td>WLHP008</td>
                        <td>$50.00</td>
                        <td>100 pcs</td>
                        <td>15 Jul 2022</td>
                        <td>
                            <div class="badge badge-soft-success">Available</div>
                        </td>
                        <td>
                            <div class="flex justify-end">
                                <div class="dropdown" data-placement="bottom-start">
                                    <div class="dropdown-toggle">
                                        <i class="w-6 text-slate-400" data-feather="more-horizontal"></i>
                                    </div>
                                    <div class="dropdown-content w-40">
                                        <ul class="dropdown-list">
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">
                                                    <i class="h-5 text-slate-400" data-feather="external-link"></i>
                                                    <span>Details</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">
                                                    <i class="h-5 text-slate-400" data-feather="edit"></i>
                                                    <span>Edit</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">
                                                    <i class="h-5 text-slate-400" data-feather="trash"></i>
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
                            <input class="checkbox product-checkbox" type="checkbox" />
                        </td>
                        <td>
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('images/product8.png') }}"
                                    class="h-10 w-10 rounded-primary border border-slate-300 dark:border-slate-400"
                                    alt="product" />
                                <div>
                                    <h6
                                        class="whitespace-nowrap text-sm font-medium text-slate-700 dark:text-slate-100">
                                        Styllish Sunglass
                                    </h6>
                                    <p class="truncate text-xs text-slate-500 dark:text-slate-400">Electronics >
                                        Accessories</p>
                                </div>
                            </div>
                        </td>
                        <td>SSG038</td>
                        <td>$20.00</td>
                        <td>200 pcs</td>
                        <td>23 Apr 2022</td>
                        <td>
                            <div class="badge badge-soft-danger">Disabled</div>
                        </td>
                        <td>
                            <div class="flex justify-end">
                                <div class="dropdown" data-placement="bottom-start">
                                    <div class="dropdown-toggle">
                                        <i class="w-6 text-slate-400" data-feather="more-horizontal"></i>
                                    </div>
                                    <div class="dropdown-content w-40">
                                        <ul class="dropdown-list">
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">
                                                    <i class="h-5 text-slate-400" data-feather="external-link"></i>
                                                    <span>Details</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">
                                                    <i class="h-5 text-slate-400" data-feather="edit"></i>
                                                    <span>Edit</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">
                                                    <i class="h-5 text-slate-400" data-feather="trash"></i>
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
                            <input class="checkbox product-checkbox" type="checkbox" />
                        </td>
                        <td>
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('images/product9.png') }}"
                                    class="h-10 w-10 rounded-primary border border-slate-300 dark:border-slate-400"
                                    alt="product" />

                                <div>
                                    <h6
                                        class="whitespace-nowrap text-sm font-medium text-slate-700 dark:text-slate-100">
                                        Nike Sports Shoe
                                    </h6>
                                    <p class="truncate text-xs text-slate-500 dark:text-slate-400">Fashion > Shoes</p>
                                </div>
                            </div>
                        </td>
                        <td>NSS068</td>
                        <td>$70.00</td>
                        <td>130 pcs</td>
                        <td>02 Feb 2022</td>
                        <td>
                            <div class="badge badge-soft-success">Available</div>
                        </td>
                        <td>
                            <div class="flex justify-end">
                                <div class="dropdown" data-placement="bottom-start">
                                    <div class="dropdown-toggle">
                                        <i class="w-6 text-slate-400" data-feather="more-horizontal"></i>
                                    </div>
                                    <div class="dropdown-content w-40">
                                        <ul class="dropdown-list">
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">
                                                    <i class="h-5 text-slate-400" data-feather="external-link"></i>
                                                    <span>Details</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">
                                                    <i class="h-5 text-slate-400" data-feather="edit"></i>
                                                    <span>Edit</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">
                                                    <i class="h-5 text-slate-400" data-feather="trash"></i>
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
                            <input class="checkbox product-checkbox" type="checkbox" />
                        </td>
                        <td>
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('images/product10.png') }}"
                                    class="h-10 w-10 rounded-primary border border-slate-300 dark:border-slate-400"
                                    alt="product" />
                                <div>
                                    <h6
                                        class="whitespace-nowrap text-sm font-medium text-slate-700 dark:text-slate-100">
                                        Branded Coconut Oil
                                    </h6>
                                    <p class="truncate text-xs text-slate-500 dark:text-slate-400">Health Care > Body
                                        Oil</p>
                                </div>
                            </div>
                        </td>
                        <td>BCCO078</td>
                        <td>$80.00</td>
                        <td>300 pcs</td>
                        <td>10 Mar 2022</td>
                        <td>
                            <div class="badge badge-soft-success">Available</div>
                        </td>
                        <td>
                            <div class="flex justify-end">
                                <div class="dropdown" data-placement="bottom-start">
                                    <div class="dropdown-toggle">
                                        <i class="w-6 text-slate-400" data-feather="more-horizontal"></i>
                                    </div>
                                    <div class="dropdown-content w-40">
                                        <ul class="dropdown-list">
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">
                                                    <i class="h-5 text-slate-400" data-feather="external-link"></i>
                                                    <span>Details</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">
                                                    <i class="h-5 text-slate-400" data-feather="edit"></i>
                                                    <span>Edit</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">
                                                    <i class="h-5 text-slate-400" data-feather="trash"></i>
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
                            <input class="checkbox product-checkbox" type="checkbox" />
                        </td>
                        <td>
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('images/product11.png') }}"
                                    class="h-10 w-10 rounded-primary border border-slate-300 dark:border-slate-400"
                                    alt="product" />

                                <div>
                                    <h6
                                        class="whitespace-nowrap text-sm font-medium text-slate-700 dark:text-slate-100">
                                        JBL Wireless Earbud
                                    </h6>
                                    <p class="truncate text-xs text-slate-500 dark:text-slate-400">Electronics > Gadget
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td>JWEO098</td>
                        <td>$250.00</td>
                        <td>220 pcs</td>
                        <td>10 Mar 2022</td>
                        <td>
                            <div class="badge badge-soft-danger">Disabled</div>
                        </td>
                        <td>
                            <div class="flex justify-end">
                                <div class="dropdown" data-placement="bottom-start">
                                    <div class="dropdown-toggle">
                                        <i class="w-6 text-slate-400" data-feather="more-horizontal"></i>
                                    </div>
                                    <div class="dropdown-content w-40">
                                        <ul class="dropdown-list">
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">
                                                    <i class="h-5 text-slate-400" data-feather="external-link"></i>
                                                    <span>Details</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">
                                                    <i class="h-5 text-slate-400" data-feather="edit"></i>
                                                    <span>Edit</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">
                                                    <i class="h-5 text-slate-400" data-feather="trash"></i>
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
                            <input class="checkbox product-checkbox" type="checkbox" />
                        </td>
                        <td>
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('images/product12.png') }}"
                                    class="h-10 w-10 rounded-primary border border-slate-300 dark:border-slate-400"
                                    alt="product" />

                                <div>
                                    <h6
                                        class="whitespace-nowrap text-sm font-medium text-slate-700 dark:text-slate-100">
                                        McBook Pro 2023
                                    </h6>
                                    <p class="truncate text-xs text-slate-500 dark:text-slate-400">Electronics > Laptop
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td>MBP098</td>
                        <td>$2000.00</td>
                        <td>20 pcs</td>
                        <td>15 Feb 2022</td>
                        <td>
                            <div class="badge badge-soft-success">Available</div>
                        </td>
                        <td>
                            <div class="flex justify-end">
                                <div class="dropdown" data-placement="bottom-start">
                                    <div class="dropdown-toggle">
                                        <i class="w-6 text-slate-400" data-feather="more-horizontal"></i>
                                    </div>
                                    <div class="dropdown-content w-40">
                                        <ul class="dropdown-list">
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">
                                                    <i class="h-5 text-slate-400" data-feather="external-link"></i>
                                                    <span>Details</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">
                                                    <i class="h-5 text-slate-400" data-feather="edit"></i>
                                                    <span>Edit</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">
                                                    <i class="h-5 text-slate-400" data-feather="trash"></i>
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
                            <input class="checkbox product-checkbox" type="checkbox" />
                        </td>
                        <td>
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('images/product13.png') }}"
                                    class="h-10 w-10 rounded-primary border border-slate-300 dark:border-slate-400"
                                    alt="product" />

                                <div>
                                    <h6
                                        class="whitespace-nowrap text-sm font-medium text-slate-700 dark:text-slate-100">
                                        Ladies Handbag
                                    </h6>
                                    <p class="truncate text-xs text-slate-500 dark:text-slate-400">Fashion > Women's
                                        Fashion</p>
                                </div>
                            </div>
                        </td>
                        <td>LHB098</td>
                        <td>$40.00</td>
                        <td>160 pcs</td>
                        <td>31 Dec 2022</td>
                        <td>
                            <div class="badge badge-soft-danger">Disabled</div>
                        </td>
                        <td>
                            <div class="flex justify-end">
                                <div class="dropdown" data-placement="bottom-start">
                                    <div class="dropdown-toggle">
                                        <i class="w-6 text-slate-400" data-feather="more-horizontal"></i>
                                    </div>
                                    <div class="dropdown-content w-40">
                                        <ul class="dropdown-list">
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">
                                                    <i class="h-5 text-slate-400" data-feather="external-link"></i>
                                                    <span>Details</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">
                                                    <i class="h-5 text-slate-400" data-feather="edit"></i>
                                                    <span>Edit</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">
                                                    <i class="h-5 text-slate-400" data-feather="trash"></i>
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
                            <input class="checkbox product-checkbox" type="checkbox" />
                        </td>
                        <td>
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('images/product14.png') }}"
                                    class="h-10 w-10 rounded-primary border border-slate-300 dark:border-slate-400"
                                    alt="product" />

                                <div>
                                    <h6
                                        class="whitespace-nowrap text-sm font-medium text-slate-700 dark:text-slate-100">
                                        Iphone 13 Pro Max
                                    </h6>
                                    <p class="truncate text-xs text-slate-500 dark:text-slate-400">Electronics > Mobile
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td>IPPM032</td>
                        <td>$820.00</td>
                        <td>150 pcs</td>
                        <td>25 Nov 2022</td>
                        <td>
                            <div class="badge badge-soft-success">Available</div>
                        </td>
                        <td>
                            <div class="flex justify-end">
                                <div class="dropdown" data-placement="bottom-start">
                                    <div class="dropdown-toggle">
                                        <i class="w-6 text-slate-400" data-feather="more-horizontal"></i>
                                    </div>
                                    <div class="dropdown-content w-40">
                                        <ul class="dropdown-list">
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">
                                                    <i class="h-5 text-slate-400" data-feather="external-link"></i>
                                                    <span>Details</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">
                                                    <i class="h-5 text-slate-400" data-feather="edit"></i>
                                                    <span>Edit</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-list-item">
                                                <a href="javascript:void(0)" class="dropdown-link">
                                                    <i class="h-5 text-slate-400" data-feather="trash"></i>
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
        <!-- Product Table Ends -->

        <!-- Product Pagination Starts -->
        <div class="flex flex-col items-center justify-between gap-y-4 md:flex-row">
            <p class="text-xs font-normal text-slate-400">Showing 1 to 10 of 50 result</p>
            <!-- Pagination -->
            <nav class="pagination">
                <ul class="pagination-list">
                    <li class="pagination-item">
                        <a class="pagination-link pagination-link-prev-icon" href="#">
                            <i data-feather="chevron-left" width="1em" height="1em"></i>
                        </a>
                    </li>
                    <li class="pagination-item active">
                        <a class="pagination-link" href="#">1</a>
                    </li>
                    <li class="pagination-item">
                        <a class="pagination-link" href="#">2</a>
                    </li>
                    <li class="pagination-item">
                        <a class="pagination-link" href="#">3</a>
                    </li>
                    <li class="pagination-item">
                        <a class="pagination-link" href="#">4</a>
                    </li>
                    <li class="pagination-item">
                        <a class="pagination-link" href="#">5</a>
                    </li>
                    <li class="pagination-item">
                        <a class="pagination-link pagination-link-next-icon" href="#">
                            <i data-feather="chevron-right" width="1em" height="1em"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Product Pagination Ends -->
    </div>
    <!-- Product List Ends -->
</x-app-layout>
