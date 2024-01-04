<x-app-layout>
    <main class="container flex-grow p-4 sm:p-6">
        <!-- Calendar Starts -->
        <div class="card">
            <div class="card-header flex items-center justify-between">
                <h5>Calendar</h5>

                <button type="button" class="btn btn-primary" id="btn-add-event">
                    <i width="20" height="20" data-feather="plus"></i>
                    <span>Add Event</span>
                </button>
            </div>
            <div class="card-body">
                <div id="calendar"></div>
            </div>
        </div>
        <!-- Calendar Ends -->

        <!-- Modal Add Event Starts -->
        <div class="modal" id="modal-add-event">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="flex items-center justify-between">
                            <h6>Add a New Event</h6>
                            <button type="button"
                                class="inline-flex h-8 w-8 items-center justify-center rounded-full text-slate-500 hover:text-slate-700 focus:text-slate-700 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:text-slate-300"
                                data-dismiss="modal">
                                <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                            </button>
                        </div>
                    </div>

                    <div class="modal-body">
                        <form id="form-add-event" class="space-y-4">
                            <!-- Form Body -->
                            <div class="flex w-full flex-col gap-4">
                                <!-- Form Row: Title -->
                                <div class="w-full">
                                    <label class="label label-required mb-1" for="form-add-event-title"> Event Title
                                    </label>
                                    <input class="input" type="text" id="form-add-event-title" name="title" />
                                    <div class="error-message"></div>
                                </div>
                                <!-- Form Row: Start & End Date -->
                                <div class="flex w-full flex-col items-center gap-4 md:flex-row">
                                    <!-- Form Column: Start Date -->
                                    <div class="w-full">
                                        <label class="label label-required mb-1" for="form-add-event-start">
                                            Event Start Date
                                        </label>
                                        <input type="text" class="input" id="form-add-event-start" name="start" />
                                        <div class="error-message"></div>
                                    </div>
                                    <!-- Form Column: End Date -->
                                    <div class="w-full">
                                        <label class="label label-required mb-1" for="form-add-event-end"> Event End
                                            Date </label>
                                        <input type="text" class="input" id="form-add-event-end" name="end" />
                                        <div class="error-message"></div>
                                    </div>
                                </div>
                                <!-- Form Row: Toggle All Day -->
                                <div class="w-full">
                                    <label class="toggle" for="form-add-event-allDay">
                                        <input class="toggle-input peer sr-only" id="form-add-event-allDay"
                                            name="allDay" type="checkbox" />
                                        <div class="toggle-body"></div>
                                        <span class="label">All Day</span>
                                    </label>
                                </div>
                                <!-- Form Row: URL -->
                                <div class="w-full">
                                    <label class="label mb-1" for="form-add-event-url"> Event URL </label>
                                    <input class="input" type="text" id="form-add-event-url" name="url" />
                                </div>
                                <!-- Form Row: Location -->
                                <div class="w-full">
                                    <label class="label mb-1" for="form-add-event-location"> Event Location </label>
                                    <input class="input" type="text" id="form-add-event-location" name="location" />
                                </div>
                                <!-- Form Row: Description -->
                                <div class="w-full">
                                    <label class="label mb-1" for="form-add-event-description"> Event Description
                                    </label>
                                    <textarea class="textarea" id="form-add-event-description" name="description"></textarea>
                                </div>
                            </div>
                            <!-- Form Footer -->
                            <div class="flex w-full items-center justify-end gap-4 py-2">
                                <button type="button" class="btn btn-soft-secondary"
                                    data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Add Event Ends -->

        <!-- Modal Update Event Starts -->
        <div class="modal" id="modal-update-event">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="flex items-center justify-between">
                            <h6 class="modal-title">Update Event</h6>
                            <button type="button"
                                class="inline-flex h-8 w-8 items-center justify-center rounded-full text-slate-500 hover:text-slate-700 focus:text-slate-700 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:text-slate-300"
                                data-dismiss="modal">
                                <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                            </button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form id="form-update-event" class="space-y-4">
                            <!-- Form Body -->
                            <div class="flex w-full flex-col gap-4">
                                <!-- Form Row: Title -->
                                <div class="w-full">
                                    <label class="label label-required mb-1" for="form-update-event-title"> Event
                                        Title </label>
                                    <input class="input" type="text" id="form-update-event-title" name="title"
                                        required />
                                    <div class="error-message"></div>
                                </div>
                                <!-- Form Row: Start & End Date -->
                                <div class="flex w-full flex-col items-center gap-4 md:flex-row">
                                    <!-- Form Column: Start Date -->
                                    <div class="w-full">
                                        <label class="label label-required mb-1" for="form-update-event-start"
                                            required>
                                            Event Start Date
                                        </label>
                                        <input type="text" class="input" id="form-update-event-start"
                                            name="start" />
                                        <div class="error-message"></div>
                                    </div>
                                    <!-- Form Column: End Date -->
                                    <div class="w-full">
                                        <label class="label label-required mb-1" for="form-update-event-end">
                                            Event End Date
                                        </label>
                                        <input type="text" class="input" id="form-update-event-end"
                                            name="end" required />
                                        <div class="error-message"></div>
                                    </div>
                                </div>
                                <!-- Form Row: Toggle All Day -->
                                <div class="w-full">
                                    <label class="toggle" for="form-update-event-allDay">
                                        <input class="toggle-input peer sr-only" id="form-update-event-allDay"
                                            name="allDay" type="checkbox" />
                                        <div class="toggle-body"></div>
                                        <span class="label">All Day</span>
                                    </label>
                                </div>
                                <!-- Form Row: URL -->
                                <div class="w-full">
                                    <label class="label mb-1" for="form-update-event-url"> Event URL </label>
                                    <input class="input" type="text" id="form-update-event-url"
                                        name="url" />
                                </div>
                                <!-- Form Row: Location -->
                                <div class="w-full">
                                    <label class="label mb-1" for="form-update-event-location"> Event Location
                                    </label>
                                    <input class="input" type="text" id="form-update-event-location"
                                        name="location" />
                                </div>
                                <!-- Form Row: Description -->
                                <div class="w-full">
                                    <label class="label mb-1" for="form-update-event-description"> Event Description
                                    </label>
                                    <textarea class="textarea" id="form-update-event-description" name="description"></textarea>
                                </div>
                            </div>
                            <!-- Form Footer -->
                            <div class="flex w-full items-center justify-between py-2">
                                <button id="btn-delete-event" type="button"
                                    class="btn btn-soft-danger">Delete</button>
                                <div class="flex items-center gap-4">
                                    <button type="button" class="btn btn-soft-secondary"
                                        data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
