<x-app-layout>
    <!-- Page Title Starts -->
 
    <x-page-title page="Table" header="Data Table" />

    <!-- Page Title Ends -->

    <!-- Data Table Starts -->
    <div class="space-y-6">
        <!-- Card: Basic Data Table Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Data Table</h4>

                <p class="card-subtitle">Example of basic data table.</p>

                <div id="datatable-simple-code-viewer" class="code-viewer mt-4" data-render-source="false">
                    <div class="code-viewer-content">
                        <table id="datatable-simple" class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Joining Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Basic Data Table Ends -->

        <!-- Card: Data Table Columns Filter Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Table With Column Filter</h4>

                <p class="card-subtitle">Example of data table with column filter.</p>

                <div id="datatable-filter-code-viewer" class="code-viewer mt-4" data-render-source="false">
                    <div class="code-viewer-content">
                        <table id="datatable-filter" class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Joining Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Data Table Columns Filter Ends -->
    </div>
    <!-- Data Table Ends -->
</x-app-layout>
