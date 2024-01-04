<x-app-layout>
    <!-- Page Title Starts -->
    <x-page-title page="Forms" header="Validation" />

    <!-- Page Title Ends -->

    <!-- Form Validation Starts -->
    <div class="space-y-6">
        <!-- Card: Default Form Validation Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Default Form Validation</h4>

                <p class="card-subtitle">Example of browser's default form validation.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content overflow-auto">
                        <form
                            class="mx-auto w-[32rem] rounded-primary border border-slate-300 bg-white p-4 shadow dark:border-slate-600 dark:bg-slate-800"
                            action="">
                            <!-- Form Body -->
                            <div class="flex flex-col gap-4">
                                <!-- Form Row: Full name -->
                                <div class="w-full">
                                    <label class="label label-required mb-1" for="form-basic-full-name"> Full name
                                    </label>
                                    <input class="input" id="form-basic-full-name" name="full-name" type="text"
                                        placeholder="Full name" required />
                                </div>
                                <!-- Form Row: Company -->
                                <div class="w-full">
                                    <label class="label label-required mb-1" for="form-basic-company"> Company </label>
                                    <input class="input" id="form-basic-company" name="company" type="text"
                                        placeholder="Company" required />
                                </div>
                                <!-- Form Row: Email -->
                                <div class="w-full">
                                    <label class="label label-required mb-1" for="form-basic-email"> Email </label>
                                    <input class="input" id="form-basic-email" name="email" type="email"
                                        placeholder="Email" required />
                                </div>
                                <!-- Form Row: Phone -->
                                <div class="w-full">
                                    <label class="label label-required mb-1" for="form-basic-phone"> Phone </label>
                                    <input class="input" id="form-basic-phone" name="phone" type="text"
                                        placeholder="Phone" required />
                                </div>
                                <!-- Form Row: Message -->
                                <div class="w-full">
                                    <label class="label label-required mb-1" for="form-basic-message"> Message </label>
                                    <textarea class="textarea" name="message" id="form-basic-message" placeholder="Message" required></textarea>
                                </div>
                                <!-- Form Row: TOS -->
                                <div class="w-full">
                                    <div class="flex items-center gap-1.5">
                                        <input class="checkbox" type="checkbox" name="tos" id="form-basic-tos"
                                            required />
                                        <label class="label" for="form-basic-tos">
                                            I agree with the
                                            <a class="text-primary-500 transition-colors duration-150 hover:text-primary-600 hover:underline focus:text-primary-600 focus:outline-none"
                                                href="#" target="_blank">
                                                term of services
                                            </a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Form Footer -->
                            <div class="mt-6 flex w-full items-center justify-end">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Default Form Validation Ends -->

        <!-- Card: Custom Form Validation Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Custom Form Validation</h4>

                <p class="card-subtitle">Example of form validation with custom messages.</p>

                <div id="custom-form-validation-code-viewer" class="code-viewer mt-4" data-render-source="false">
                    <div class="code-viewer-content overflow-auto">
                        <form id="form-custom-validation"
                            class="mx-auto w-[32rem] rounded-primary border border-slate-300 bg-white p-4 shadow dark:border-slate-600 dark:bg-slate-800"
                            novalidate>
                            <!-- Form Body -->
                            <div class="flex flex-col gap-4">
                                <!-- Form Row: Full name -->
                                <div class="w-full">
                                    <label class="label label-required mb-1"> Full name </label>
                                    <input class="input" name="full-name" type="text" placeholder="Full name"
                                        value="John Doe" required />
                                    <div class="success-message">Looks good</div>
                                </div>
                                <!-- Form Row: Company -->
                                <div class="w-full">
                                    <label class="label label-required mb-1"> Company </label>
                                    <input class="input" name="company" type="text" placeholder="Company"
                                        value="XYZ Compnay" required />
                                    <div class="success-message">Looks good</div>
                                </div>
                                <!-- Form Row: Email -->
                                <div class="w-full">
                                    <label class="label label-required mb-1"> Email </label>
                                    <input class="input" name="email" type="email" placeholder="Email"
                                        required />
                                    <div class="error-message">The email field is required</div>
                                </div>
                                <!-- Form Row: Phone -->
                                <div class="w-full">
                                    <label class="label label-required mb-1"> Phone </label>
                                    <input class="input" name="phone" type="text" placeholder="Phone"
                                        required />
                                    <div class="error-message">The phone field is required</div>
                                </div>
                                <!-- Form Row: Message -->
                                <div class="w-full">
                                    <label class="label label-required mb-1"> Message </label>
                                    <textarea class="textarea" name="message" placeholder="Message" required></textarea>
                                    <div class="error-message">The message field is required</div>
                                </div>
                                <!-- Form Row: TOS -->
                                <div class="w-full">
                                    <div class="flex items-center gap-1.5">
                                        <input class="checkbox" type="checkbox" name="tos" required />
                                        <label class="label">
                                            I agree with the
                                            <a class="text-primary-500 transition-colors duration-150 hover:text-primary-600 hover:underline focus:text-primary-600 focus:outline-none"
                                                href="#" target="_blank">
                                                term of services
                                            </a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Form Footer -->
                            <div class="mt-6 flex w-full items-center justify-end">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Custom Form Validation Ends -->
    </div>
    <!-- Form Validation Ends -->
</x-app-layout>
