<x-app-layout>
    <!-- Page Title Starts -->
    
    <x-page-title page="Forms" header="Datepicker" />

    <!-- Page Title Ends -->

    <!-- Datepicker Starts -->
    <div class="space-y-6">
        <!-- Card: Basic Date picker Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Date Picker</h4>

                <p class="card-subtitle">
                    Use
                    <code>input-date</code>
                    class to create a basic date picker.
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <input class="input input-date" type="text" placeholder="YYYY-MM-DD" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Basic Date picker Ends -->

        <!-- Card: Date And Time Picker Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Date and Time Picker</h4>

                <p class="card-subtitle">
                    To enable time along with date, use
                    <code>input-datetime</code>
                    class.
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <input class="input input-datetime" type="text" placeholder="YYYY-MM-DD HH:MM" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Date And Time Picker Ends -->

        <!-- Card: Date Range Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Range Date Picker</h4>

                <p class="card-subtitle">
                    Use
                    <code>input-date-range</code>
                    class to create a range date picker.
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <input class="input input-date-range" type="text" placeholder="YYYY-MM-DD to YYYY-MM-DD" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Date Range Ends -->

        <!-- Card: Time Picker Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Time Picker</h4>

                <p class="card-subtitle">
                    Use
                    <code>input-time</code>
                    class to create a time picker without calendar.
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <input class="input input-time" type="text" placeholder="HH:MM" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Time Picker Ends -->

        <!-- Card: Mulitple Date Picker Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Multiple Date Picker</h4>

                <p class="card-subtitle">
                    Use
                    <code>input-date-multiple</code>
                    class to create a date picker input which stores multiple dates.
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <input class="input input-date-multiple" type="text" placeholder="YYYY-MM-DD" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Mulitple Date Picker Ends -->

        <!-- Card: Human Friendly Date Picker Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Human Friendly Date Picker</h4>

                <p class="card-subtitle">
                    To make the date more human friendly, use
                    <code>input-date-formated</code>
                    class on an input.
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <input class="input input-date-formated" type="text" placeholder="Month DD, YYYY" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Human Friendly Date Picker Ends -->

        <!-- Card: Inline Date Picker Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Inline Date Picker</h4>

                <p class="card-subtitle">
                    Use
                    <code>input-date-inline</code>
                    class to create an inline date picker.
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <input class="input input-date-inline" type="text" placeholder="Month DD, YYYY" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Inline Date Picker Ends -->

        <!-- Card: Disabled Date Range Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Disabled Date Range</h4>

                <p class="card-subtitle">Example of disabling date range.</p>

                <div id="disabled-datepicker-code-viewer" class="code-viewer mt-4" data-render-source="false">
                    <div class="code-viewer-content bg-white">
                        <input class="input input-date-range-disabled" type="text" placeholder="YYYY-MM-DD" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Disabled Date Range Ends -->

        <!-- Card: Custom Datepicker Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Custom Datepicker</h4>

                <p class="card-subtitle">Example of custom datepicker.</p>

                <div id="custom-datepicker-code-viewer" class="code-viewer mt-4" data-render-source="false">
                    <div class="code-viewer-content bg-white">
                        <input class="input input-date-custom" type="text" placeholder="YYYY-MM-DD" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Custom Datepicker Ends -->
    </div>
    <!-- Datepicker Ends -->
</x-app-layout>
