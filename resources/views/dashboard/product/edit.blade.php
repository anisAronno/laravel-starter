<x-app-layout>
    <!-- Page Title Starts -->
   
    <x-page-title page="Ecommerce" header="Product Edit" />

    <!-- Page Title Ends -->

    <!-- Edit Product Page Starts -->
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
        <!-- Left side Div Start -->
        <section class="flex flex-col gap-8 lg:col-span-2">
            <!-- General  -->
            <div class="rounded-primary bg-white p-6 shadow-sm dark:bg-slate-800">
                <h5 class="m-0 p-0 text-xl font-semibold text-slate-700 dark:text-slate-200">General</h5>
                <p class="mb-4 p-0 text-sm font-normal text-slate-400">
                    Customize the basic information of your product
                </p>
                <div class="py-2">
                    <label class="label label-required mb-1 font-medium" for="name"> Name </label>
                    <input type="text" class="input" id="name" value="MacBook Pro 2023" />
                </div>
                <div class="py-2">
                    <label class="label label-required mb-1 font-medium" for="code"> Code </label>
                    <input type="text" class="input" id="code" value="MBP-2023" />
                </div>
                <div class="py-2">
                    <label class="label label-required mb-1 font-medium"> Message </label>
                    <textarea class="textarea text-start" rows="5" placeholder="Write message">
Introducing the new MacBook Pro 2023 - the ultimate powerhouse for creators and professionals. With the latest M-series chip, stunning Retina display, and up to 32GB of RAM, this laptop delivers lightning-fast performance and unparalleled graphics capabilities.
          </textarea>
                </div>
            </div>
            <!-- Pricing  -->
            <div class="rounded-primary bg-white p-6 shadow-sm dark:bg-slate-800">
                <h5 class="m-0 p-0 text-xl font-semibold text-slate-700 dark:text-slate-200">Pricing</h5>
                <p class="mb-4 p-0 text-sm font-normal text-slate-400">
                    Set your pricing strategies to stay ahead of the competition
                </p>
                <div class="grid w-full grid-cols-1 gap-4 py-2 md:grid-cols-2">
                    <div class="flex w-full flex-col md:w-auto">
                        <label class="label label-required mb-1 font-medium" for="base-price"> Base Price </label>
                        <input type="text" class="input" id="base-price" value="1699.99" />
                        <p class="help-text mt-1">Set the product regular price</p>
                    </div>
                    <div class="flex w-full flex-col md:w-auto">
                        <label class="label mb-1 font-medium" for="sale-price"> Sale Price </label>
                        <input type="text" class="input" id="sale-price" value="1699.99" />
                        <p class="help-text mt-1">Set the product offer price</p>
                    </div>
                </div>
                <div class="grid w-full grid-cols-1 gap-4 py-2 md:grid-cols-2">
                    <div class="flex w-full flex-col md:w-auto">
                        <label class="label mb-1 font-medium" for="cost-price"> Cost Price </label>
                        <input type="text" class="input" id="cost-price" value="1200.00" />
                        <p class="help-text mt-1">Set the cost price of the product</p>
                    </div>
                    <div class="flex w-full flex-col md:w-auto">
                        <label class="label mb-1 font-medium" for="tax-amount"> Tax Amount (%) </label>
                        <input type="text" class="input" id="tax-amount" value="15" />
                        <p class="help-text mt-1">Set the product tax amount in percentage (%)</p>
                    </div>
                </div>
            </div>
            <!-- Media  -->
            <div class="rounded-primary bg-white p-6 shadow-sm dark:bg-slate-800">
                <h5 class="m-0 p-0 text-xl font-semibold text-slate-700 dark:text-slate-200">Media</h5>
                <p class="mb-4 p-0 text-sm font-normal text-slate-400">
                    Showcase your product with high-quality images
                </p>
                <div id="dropzone-product-edit" class="dropzone my-5">
                    <div class="dz-message">
                        <i class="text-slate-500 dark:text-slate-300" width="48" height="48"
                            data-feather="image"></i>
                        <p class="max-w-xs text-slate-500 dark:text-slate-300">
                            Drag & Drop your media files to upload or
                            <a class="text-primary-500 transition-colors duration-150 hover:text-primary-600 hover:underline"
                                href="#">
                                click to browse
                            </a>
                        </p>
                    </div>
                    <!-- Fallback for no JavaScript -->
                    <div class="fallback">
                        <input name="file" type="file" />
                    </div>
                </div>
            </div>
            <!-- Inventory  -->
            <div class="rounded-primary bg-white p-6 shadow-sm dark:bg-slate-800">
                <h5 class="m-0 p-0 text-xl font-semibold text-slate-700 dark:text-slate-200">Inventory</h5>
                <p class="mb-4 p-0 text-sm font-normal text-slate-400">Manage and track your product stocks</p>
                <div class="grid w-full grid-cols-1 gap-4 py-2 md:grid-cols-2">
                    <div class="flex w-full flex-col md:w-auto">
                        <label class="label label-required mb-1 font-medium" for="sku"> SKU </label>
                        <input type="text" class="input" id="sku" value="MBP1001" />
                        <p class="help-text mt-1">Product Stock Keeping Unit</p>
                    </div>
                    <div class="flex w-full flex-col md:w-auto">
                        <label class="label mb-1 font-medium" for="sale-price"> Barcode </label>
                        <input type="text" class="input" id="sale-price" value="MBP1001" />
                        <p class="help-text mt-1">Supported Format (ISBN, UPC, GTIN, etc.)</p>
                    </div>
                </div>
                <div class="grid w-full grid-cols-1 gap-4 py-2 md:grid-cols-2">
                    <div class="flex w-full flex-col md:w-auto">
                        <label class="label label-required mb-1 font-medium" for="stock-quantity"> Stock Quantity
                        </label>
                        <input type="text" class="input" id="stock-quantity" value="200" />
                        <p class="help-text mt-1">Enter available stock quantity</p>
                    </div>
                    <div class="flex w-full flex-col md:w-auto">
                        <label class="label mb-1 font-medium" for="low-stock-threshold"> Low Stock Threshold </label>
                        <input type="text" class="input" id="low-stock-threshold" value="50" />
                        <p class="help-text mt-1">Enter low stock quantity alert threshold</p>
                    </div>
                </div>
            </div>
            <!-- Shipping  -->
            <div class="rounded-primary bg-white p-6 shadow-sm dark:bg-slate-800">
                <h5 class="m-0 p-0 text-xl font-semibold text-slate-700 dark:text-slate-200">Shipping</h5>
                <label for="toggle-sm" class="toggle toggle-sm mb-4 mt-1">
                    <input class="toggle-input peer sr-only" id="toggle-sm" type="checkbox" checked="" />
                    <div class="toggle-body"></div>
                    <span class="label !text-slate-400"> This product requires shipping </span>
                </label>
                <div class="grid w-full grid-cols-1 gap-4 py-2 md:grid-cols-2">
                    <div class="flex w-full flex-col md:w-auto">
                        <label class="label label-required mb-1 font-medium" for="weight"> Weight </label>
                        <input type="text" class="input" id="weight" value="4.5" />
                        <p class="help-text mt-1">Enter your product weight</p>
                    </div>
                    <div class="flex w-full flex-col md:w-auto">
                        <label class="label mb-1 font-medium" for="unit"> Unit </label>
                        <input type="text" class="input" id="unit" value="Kg" />
                        <p class="help-text mt-1">Enter the product weight unit</p>
                    </div>
                </div>
                <div class="grid w-full grid-cols-1 gap-4 py-2 md:grid-cols-3">
                    <div class="flex w-full flex-col justify-center md:w-auto">
                        <label class="label label-required my-2 font-medium" for="dimensions-length">
                            Dimension(L x W x H)
                        </label>
                        <input type="text" class="input" id="dimensions-length" value="10" />
                        <p class="help-text mt-1">Enter your product dimension in cm</p>
                    </div>
                    <div class="flex w-full flex-col justify-center md:w-auto">
                        <input type="text" class="input" id="dimension-weight" value="20" />
                    </div>
                    <div class="flex w-full flex-col justify-center md:w-auto">
                        <input type="text" class="input" id="dimensions-height" value="50" />
                    </div>
                </div>
            </div>
        </section>
        <!-- Left Side Div End  -->

        <!-- Right Side Div Start  -->
        <section class="h-full lg:col-span-1">
            <!-- Organization -->
            <div class="sticky top-20 rounded-primary bg-white p-6 shadow dark:bg-slate-800">
                <h5 class="m-0 p-0 text-xl font-semibold text-slate-700 dark:text-slate-200">Organization</h5>
                <p class="mb-4 p-0 text-sm font-normal text-slate-400">Better organize your product</p>
                <div class="flex flex-col gap-4">
                    <div>
                        <label class="label label-required mb-1 font-medium" for="status"> Status </label>
                        <select class="select" id="status">
                            <option value="">Draft</option>
                            <option value="1">Inactive</option>
                            <option value="2">Active</option>
                            <option value="2">Out Stock</option>
                        </select>
                    </div>
                    <div>
                        <label class="label label-required mb-1 font-medium" for="category"> Category </label>
                        <select class="select" id="category">
                            <option value="">Electronics</option>
                            <option value="2">Fashion</option>
                            <option value="2">Health Care</option>
                        </select>
                    </div>
                    <div>
                        <label class="label mb-1 font-medium" for="vendor"> Tags </label>
                        <select class="tom-select" multiple="" autocomplete="off">
                            <option selected value="1">Apple</option>
                            <option selected value="2">Laptop</option>
                            <option value="3">Shoes</option>
                            <option value="4">Furniture</option>
                            <option value="5">Fashion</option>
                            <option value="6">Gadget</option>
                            <option value="7">Health</option>
                            <option value="8">Care</option>
                            <option value="9">Beauty</option>
                            <option value="10">Smart</option>
                            <option value="11">Watch</option>
                            <option value="12">Headphone</option>
                        </select>
                    </div>
                    <div>
                        <label class="label mb-1 font-medium" for="brand"> Brand </label>
                        <select class="select" id="brand">
                            <option value="">Apple</option>
                            <option value="1">Apex</option>
                            <option value="2">Lotto</option>
                            <option value="3">Samsung</option>
                        </select>
                    </div>
                    <div>
                        <label class="label mb-1 font-medium" for="vendor"> Vendor </label>
                        <select class="select" id="vendor">
                            <option value="">Star Tech</option>
                            <option value="1">All Store</option>
                            <option value="2">GameEight</option>
                            <option value="2">Vitech</option>
                        </select>
                    </div>
                    <div>
                        <label class="label mb-1 font-medium" for="vendor"> Template </label>
                        <select class="select" id="vendor">
                            <option value="">Default</option>
                            <option value="1">Boxed</option>
                            <option value="2">Minimal</option>
                        </select>
                    </div>
                </div>
            </div>
        </section>
        <!-- Right Side Div End  -->
    </div>
    <!-- Edit Product Page Ends -->
</x-app-layout>
