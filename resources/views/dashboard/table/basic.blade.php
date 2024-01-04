<x-app-layout>
    <!-- Page Title Starts -->
    
    <x-page-title page="Table" header="Basic Table" />

    <!-- Page Title Ends -->

    <!-- Table Starts -->
    <div class="space-y-6">
        <!-- Card: Basic Table Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Table</h4>

                <p class="card-subtitle">
                    Use <code>table</code> class on a <code>table</code> element to create a basic table.
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content overflow-x-auto whitespace-nowrap">
                        <div class="min-w-max max-w-3xl">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product name</th>
                                        <th>Color</th>
                                        <th>Catagory</th>
                                        <th>Available</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Apple MacBook 17"</td>
                                        <td>White</td>
                                        <td>Laptop</td>
                                        <td>Yes</td>
                                        <td>1</td>
                                        <td>$2999</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>LG22MK600 21.5" Monitor</td>
                                        <td>Black</td>
                                        <td>Monitor</td>
                                        <td>Yes</td>
                                        <td>1</td>
                                        <td>$1999</td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Magic Mouse 2</td>
                                        <td>Sliver</td>
                                        <td>Accessories</td>
                                        <td>No</td>
                                        <td>1</td>
                                        <td>$99</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="code-viewer-source">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Product name</th>
                                    <th>Color</th>
                                    <th>Catagory</th>
                                    <th>Available</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>Apple MacBook Pro 17"</td>
                                    <td>White</td>
                                    <td>Laptop</td>
                                    <td>Yes</td>
                                    <td>1</td>
                                    <td>$2999</td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>LG22MK600 21.5" Monitor</td>
                                    <td>Black</td>
                                    <td>Monitor</td>
                                    <td>Yes</td>
                                    <td>1</td>
                                    <td>$1999</td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td>Magic Mouse 2</td>
                                    <td>Sliver</td>
                                    <td>Accessories</td>
                                    <td>No</td>
                                    <td>1</td>
                                    <td>$99</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Basic Table Ends -->

        <!-- Card: Striped Table Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Striped Table Rows</h4>

                <p class="card-subtitle">Use <code>table-striped</code> class to create a striped table.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content overflow-x-auto whitespace-nowrap">
                        <div class="min-w-max max-w-3xl">
                            <table class="table-striped table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product name</th>
                                        <th>Color</th>
                                        <th>Catagory</th>
                                        <th>Available</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Apple MacBook Pro 17"</td>
                                        <td>White</td>
                                        <td>Laptop</td>
                                        <td>Yes</td>
                                        <td>1</td>
                                        <td>$2999</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>LG22MK600 21.5" Monitor</td>
                                        <td>Black</td>
                                        <td>Monitor</td>
                                        <td>Yes</td>
                                        <td>1</td>
                                        <td>$1999</td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Magic Mouse 2</td>
                                        <td>Sliver</td>
                                        <td>Accessories</td>
                                        <td>No</td>
                                        <td>1</td>
                                        <td>$99</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="code-viewer-source">
                        <table class="table-striped table">
                            <!-- ..... -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Striped Table Ends -->

        <!-- Card: Striped Columns Of Table Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Striped Table Columns</h4>

                <p class="card-subtitle">
                    Use
                    <code>table-striped-columns</code>
                    class to create a striped table columns.
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content overflow-x-auto whitespace-nowrap">
                        <div class="min-w-max max-w-3xl">
                            <table class="table-striped-columns table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product name</th>
                                        <th>Color</th>
                                        <th>Catagory</th>
                                        <th>Available</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Apple MacBook Pro 17"</td>
                                        <td>White</td>
                                        <td>Laptop</td>
                                        <td>Yes</td>
                                        <td>1</td>
                                        <td>$2999</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>LG22MK600 21.5" Monitor</td>
                                        <td>Black</td>
                                        <td>Monitor</td>
                                        <td>Yes</td>
                                        <td>1</td>
                                        <td>$1999</td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Magic Mouse 2</td>
                                        <td>Sliver</td>
                                        <td>Accessories</td>
                                        <td>No</td>
                                        <td>1</td>
                                        <td>$99</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="code-viewer-source">
                        <table class="table-striped-columns table">
                            <!-- ...... -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Striped Columns Of Table Ends -->

        <!-- Card: Hoverable Table Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Hoverable Table Rows</h4>

                <p class="card-subtitle">
                    User
                    <code>table-hover</code>
                    class to enable a hover state on table rows within
                    <code>&lt;tbody&gt;</code>
                    .
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content overflow-x-auto whitespace-nowrap">
                        <div class="min-w-max max-w-3xl">
                            <table class="table-hover table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product name</th>
                                        <th>Color</th>
                                        <th>Catagory</th>
                                        <th>Available</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Apple MacBook Pro 17"</td>
                                        <td>White</td>
                                        <td>Laptop</td>
                                        <td>Yes</td>
                                        <td>1</td>
                                        <td>$2999</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>LG22MK600 21.5" Monitor</td>
                                        <td>Black</td>
                                        <td>Monitor</td>
                                        <td>Yes</td>
                                        <td>1</td>
                                        <td>$1999</td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Magic Mouse 2</td>
                                        <td>Sliver</td>
                                        <td>Accessories</td>
                                        <td>No</td>
                                        <td>1</td>
                                        <td>$99</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="code-viewer-source">
                        <table class="table-hover table">
                            <!-- ..... -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Hoverable Table Ends -->

        <!-- Card: Bordered Table Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Bordered Table</h4>

                <p class="card-subtitle">
                    Use
                    <code>table-bordered</code>
                    class to add borders on all sides of the table and cells.
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content overflow-x-auto whitespace-nowrap">
                        <div class="min-w-max max-w-3xl">
                            <table class="table-bordered table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product name</th>
                                        <th>Color</th>
                                        <th>Catagory</th>
                                        <th>Available</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Apple MacBook Pro 17"</td>
                                        <td>White</td>
                                        <td>Laptop</td>
                                        <td>Yes</td>
                                        <td>1</td>
                                        <td>$2999</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>LG22MK600 21.5" Monitor</td>
                                        <td>Black</td>
                                        <td>Monitor</td>
                                        <td>Yes</td>
                                        <td>1</td>
                                        <td>$1999</td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Magic Mouse 2</td>
                                        <td>Sliver</td>
                                        <td>Accessories</td>
                                        <td>No</td>
                                        <td>1</td>
                                        <td>$99</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="code-viewer-source">
                        <table class="table-bordered table">
                            <!-- ..... -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Bordered Table Ends -->

        <!-- Card: Borderless Table Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Borderless Table</h4>

                <p class="card-subtitle">
                    Use
                    <code>table-borderless</code>
                    class to remove borders on all sides of the table and cells.
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content overflow-x-auto whitespace-nowrap">
                        <div class="min-w-max max-w-3xl">
                            <table class="table-borderless table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product name</th>
                                        <th>Color</th>
                                        <th>Catagory</th>
                                        <th>Available</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Apple MacBook Pro 17"</td>
                                        <td>White</td>
                                        <td>Laptop</td>
                                        <td>Yes</td>
                                        <td>1</td>
                                        <td>$2999</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>LG22MK600 21.5" Monitor</td>
                                        <td>Black</td>
                                        <td>Monitor</td>
                                        <td>Yes</td>
                                        <td>1</td>
                                        <td>$1999</td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Magic Mouse 2</td>
                                        <td>Sliver</td>
                                        <td>Accessories</td>
                                        <td>No</td>
                                        <td>1</td>
                                        <td>$99</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="code-viewer-source">
                        <table class="table-borderless table">
                            <!-- ..... -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Borderless Table Ends -->

        <!-- Card: Responsive Table Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Responsive Table</h4>

                <p class="card-subtitle">
                    Use
                    <code>table-responsive</code>
                    class to wrap tables for horizontally scrolling.
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content">
                        <div class="max-w-3xl">
                            <div class="table-responsive whitespace-nowrap rounded-primary">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product name</th>
                                            <th>Color</th>
                                            <th>Catagory</th>
                                            <th>Available</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Apple MacBook Pro 17"</td>
                                            <td>White</td>
                                            <td>Laptop</td>
                                            <td>Yes</td>
                                            <td>1</td>
                                            <td>$2999</td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>LG22MK600 21.5" Monitor</td>
                                            <td>Black</td>
                                            <td>Monitor</td>
                                            <td>Yes</td>
                                            <td>1</td>
                                            <td>$1999</td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>Magic Mouse 2</td>
                                            <td>Sliver</td>
                                            <td>Accessories</td>
                                            <td>No</td>
                                            <td>1</td>
                                            <td>$99</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="code-viewer-source">
                        <div class="table-responsive">
                            <table class="table">
                                <!-- ...... -->
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Responsive Table Ends -->

        <!-- Card: Table With Footer Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Table With Footer</h4>

                <p class="card-subtitle">Example of table with footer.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content overflow-x-auto whitespace-nowrap">
                        <div class="max-w-3xl">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product name</th>
                                        <th>Color</th>
                                        <th>Catagory</th>
                                        <th>Available</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Apple MacBook 17"</td>
                                        <td>White</td>
                                        <td>Laptop</td>
                                        <td>Yes</td>
                                        <td>1</td>
                                        <td>$2999</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>LG22MK600 21.5" Monitor</td>
                                        <td>Black</td>
                                        <td>Monitor</td>
                                        <td>Yes</td>
                                        <td>1</td>
                                        <td>$1999</td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Magic Mouse 2</td>
                                        <td>Sliver</td>
                                        <td>Accessories</td>
                                        <td>No</td>
                                        <td>1</td>
                                        <td>$99</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="6">Total</th>
                                        <th>$10000</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    <div class="code-viewer-source">
                        <table class="table">
                            <thead>
                                <!-- ..... -->
                            </thead>
                            <tbody>
                                <!-- ..... -->
                            </tbody>
                            <tfoot>
                                <!-- ..... -->
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Table With Footer Ends -->

        <!-- Card: Compact Table Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Compact Table</h4>

                <p class="card-subtitle">
                    Use
                    <code>table-compact</code>
                    class to make any
                    <code>&lt;table&gt;</code>
                    more compact by cutting all cell padding in half.
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content overflow-x-auto whitespace-nowrap">
                        <div class="min-w-max max-w-3xl">
                            <table class="table-compact table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product name</th>
                                        <th>Color</th>
                                        <th>Catagory</th>
                                        <th>Available</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Apple MacBook 17"</td>
                                        <td>White</td>
                                        <td>Laptop</td>
                                        <td>Yes</td>
                                        <td>1</td>
                                        <td>$2999</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>LG22MK600 21.5" Monitor</td>
                                        <td>Black</td>
                                        <td>Monitor</td>
                                        <td>Yes</td>
                                        <td>1</td>
                                        <td>$1999</td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Magic Mouse 2</td>
                                        <td>Sliver</td>
                                        <td>Accessories</td>
                                        <td>No</td>
                                        <td>1</td>
                                        <td>$99</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="code-viewer-source">
                        <table class="table-compact table">
                            <!-- ...... -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Compact Table Ends -->

        <!-- Card: Color Table Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Color Table</h4>

                <p class="card-subtitle">
                    Use contextual classes with base
                    <code>table</code>
                    class to color tables. Example:
                    <code>table-primary</code>
                    ,
                    <code>table-secondary</code>
                    ,
                    <code>table-success</code>
                    ,
                    <code>table-danger</code>
                    ,
                    <code>table-warning</code>
                    ,
                    <code>table-info</code>
                    ,
                    <code>table-dark</code>
                    .
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content overflow-x-auto whitespace-nowrap">
                        <div class="flex flex-col gap-8">
                            <div class="min-w-max max-w-3xl">
                                <table class="table-primary table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product name</th>
                                            <th>Color</th>
                                            <th>Catagory</th>
                                            <th>Available</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Apple MacBook 17"</td>
                                            <td>White</td>
                                            <td>Laptop</td>
                                            <td>Yes</td>
                                            <td>1</td>
                                            <td>$2999</td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>LG22MK600 21.5" Monitor</td>
                                            <td>Black</td>
                                            <td>Monitor</td>
                                            <td>Yes</td>
                                            <td>1</td>
                                            <td>$1999</td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>Magic Mouse 2</td>
                                            <td>Sliver</td>
                                            <td>Accessories</td>
                                            <td>No</td>
                                            <td>1</td>
                                            <td>$99</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="min-w-max max-w-3xl">
                                <table class="table-secondary table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product name</th>
                                            <th>Color</th>
                                            <th>Catagory</th>
                                            <th>Available</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Apple MacBook 17"</td>
                                            <td>White</td>
                                            <td>Laptop</td>
                                            <td>Yes</td>
                                            <td>1</td>
                                            <td>$2999</td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>LG22MK600 21.5" Monitor</td>
                                            <td>Black</td>
                                            <td>Monitor</td>
                                            <td>Yes</td>
                                            <td>1</td>
                                            <td>$1999</td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>Magic Mouse 2</td>
                                            <td>Sliver</td>
                                            <td>Accessories</td>
                                            <td>No</td>
                                            <td>1</td>
                                            <td>$99</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="min-w-max max-w-3xl">
                                <table class="table-success table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product name</th>
                                            <th>Color</th>
                                            <th>Catagory</th>
                                            <th>Available</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Apple MacBook 17"</td>
                                            <td>White</td>
                                            <td>Laptop</td>
                                            <td>Yes</td>
                                            <td>1</td>
                                            <td>$2999</td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>LG22MK600 21.5" Monitor</td>
                                            <td>Black</td>
                                            <td>Monitor</td>
                                            <td>Yes</td>
                                            <td>1</td>
                                            <td>$1999</td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>Magic Mouse 2</td>
                                            <td>Sliver</td>
                                            <td>Accessories</td>
                                            <td>No</td>
                                            <td>1</td>
                                            <td>$99</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="min-w-max max-w-3xl">
                                <table class="table-danger table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product name</th>
                                            <th>Color</th>
                                            <th>Catagory</th>
                                            <th>Available</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Apple MacBook 17"</td>
                                            <td>White</td>
                                            <td>Laptop</td>
                                            <td>Yes</td>
                                            <td>1</td>
                                            <td>$2999</td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>LG22MK600 21.5" Monitor</td>
                                            <td>Black</td>
                                            <td>Monitor</td>
                                            <td>Yes</td>
                                            <td>1</td>
                                            <td>$1999</td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>Magic Mouse 2</td>
                                            <td>Sliver</td>
                                            <td>Accessories</td>
                                            <td>No</td>
                                            <td>1</td>
                                            <td>$99</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="min-w-max max-w-3xl">
                                <table class="table-warning table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product name</th>
                                            <th>Color</th>
                                            <th>Catagory</th>
                                            <th>Available</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Apple MacBook 17"</td>
                                            <td>White</td>
                                            <td>Laptop</td>
                                            <td>Yes</td>
                                            <td>1</td>
                                            <td>$2999</td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>LG22MK600 21.5" Monitor</td>
                                            <td>Black</td>
                                            <td>Monitor</td>
                                            <td>Yes</td>
                                            <td>1</td>
                                            <td>$1999</td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>Magic Mouse 2</td>
                                            <td>Sliver</td>
                                            <td>Accessories</td>
                                            <td>No</td>
                                            <td>1</td>
                                            <td>$99</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="min-w-max max-w-3xl">
                                <table class="table-info table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product name</th>
                                            <th>Color</th>
                                            <th>Catagory</th>
                                            <th>Available</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Apple MacBook 17"</td>
                                            <td>White</td>
                                            <td>Laptop</td>
                                            <td>Yes</td>
                                            <td>1</td>
                                            <td>$2999</td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>LG22MK600 21.5" Monitor</td>
                                            <td>Black</td>
                                            <td>Monitor</td>
                                            <td>Yes</td>
                                            <td>1</td>
                                            <td>$1999</td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>Magic Mouse 2</td>
                                            <td>Sliver</td>
                                            <td>Accessories</td>
                                            <td>No</td>
                                            <td>1</td>
                                            <td>$99</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="min-w-max max-w-3xl">
                                <table class="table-dark table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product name</th>
                                            <th>Color</th>
                                            <th>Catagory</th>
                                            <th>Available</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Apple MacBook 17"</td>
                                            <td>White</td>
                                            <td>Laptop</td>
                                            <td>Yes</td>
                                            <td>1</td>
                                            <td>$2999</td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>LG22MK600 21.5" Monitor</td>
                                            <td>Black</td>
                                            <td>Monitor</td>
                                            <td>Yes</td>
                                            <td>1</td>
                                            <td>$1999</td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>Magic Mouse 2</td>
                                            <td>Sliver</td>
                                            <td>Accessories</td>
                                            <td>No</td>
                                            <td>1</td>
                                            <td>$99</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="code-viewer-source">
                        <table class="table-primary table">
                            <!-- ..... -->
                        </table>
                        <table class="table-secondary table">
                            <!-- ..... -->
                        </table>
                        <table class="table-success table">
                            <!-- ..... -->
                        </table>
                        <table class="table-danger table">
                            <!-- ..... -->
                        </table>
                        <table class="table-warning table">
                            <!-- ..... -->
                        </table>
                        <table class="table-info table">
                            <!-- ..... -->
                        </table>
                        <table class="table-dark table">
                            <!-- ..... -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Color Table Ends -->
    </div>
    <!-- Table Ends -->
</x-app-layout>
