<x-app-layout>
    <!-- Page Title Starts -->
    <x-page-title page="Forms" header="Form Layouts" />

    <!-- Page Title Ends -->

    <!-- Form Layout Starts -->
    <div class="space-y-6">
        <!-- Card: Basic Form Layout Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Form Layout</h4>

                <p class="card-subtitle">Example of basic form layout.</p>

                <div class="code-viewer mt-4">
                    <form id="form-basic"
                        class="mx-auto max-w-lg rounded-primary border border-slate-300 bg-white p-4 shadow dark:border-slate-600 dark:bg-slate-800"
                        action="">
                        <!-- Form Body -->
                        <div class="flex flex-col gap-4">
                            <!-- Form Row: Full name -->
                            <div class="w-full">
                                <label class="label label-required mb-1" for="form-basic-full-name"> Full name </label>
                                <input class="input" id="form-basic-full-name" name="full-name" type="text"
                                    placeholder="Full name" />
                            </div>
                            <!-- Form Row: Company -->
                            <div class="w-full">
                                <label class="label label-required mb-1" for="form-basic-company"> Company </label>
                                <input class="input" id="form-basic-company" name="company" type="text"
                                    placeholder="Company" />
                            </div>
                            <!-- Form Row: Email -->
                            <div class="w-full">
                                <label class="label label-required mb-1" for="form-basic-email"> Email </label>
                                <input class="input" id="form-basic-email" name="email" type="text"
                                    placeholder="Email" />
                            </div>
                            <!-- Form Row: Phone -->
                            <div class="w-full">
                                <label class="label label-required mb-1" for="form-basic-phone"> Phone </label>
                                <input class="input" id="form-basic-phone" name="phone" type="text"
                                    placeholder="Phone" />
                            </div>
                            <!-- Form Row: Message -->
                            <div class="w-full">
                                <label class="label label-required mb-1" for="form-basic-message"> Message </label>
                                <textarea class="textarea" name="message" id="form-basic-message" placeholder="Message"></textarea>
                            </div>
                            <!-- Form Row: TOS -->
                            <div class="w-full">
                                <div class="flex items-center gap-1.5">
                                    <input class="checkbox" type="checkbox" name="tos" id="form-basic-tos" />
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
        <!-- Card: Basic Form Layout  Ends -->

        <!-- Card: Form With Icon Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form With Icon</h4>

                <p class="card-subtitle">Example of form with icon.</p>

                <div class="code-viewer mt-4">
                    <form id="form-with-icon"
                        class="mx-auto max-w-lg rounded-primary border border-slate-300 bg-white p-4 shadow dark:border-slate-600 dark:bg-slate-800"
                        action="">
                        <!-- Form Body -->
                        <div class="flex flex-col gap-4">
                            <!-- Form Row: Full name -->
                            <div class="w-full">
                                <label class="label label-required mb-1" for="form-with-icon-full-name"> Full name
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i width="1rem" height="1rem" data-feather="user"></i>
                                    </span>
                                    <input class="input" id="form-with-icon-full-name" name="full-name" type="text"
                                        placeholder="Full name" />
                                </div>
                            </div>
                            <!-- Form Row: Company -->
                            <div class="w-full">
                                <label class="label label-required mb-1" for="form-with-icon-company"> Company </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i width="1rem" height="1rem" data-feather="map-pin"></i>
                                    </span>
                                    <input class="input" id="form-with-icon-company" name="company" type="text"
                                        placeholder="Company" />
                                </div>
                            </div>
                            <!-- Form Row: Email -->
                            <div class="w-full">
                                <label class="label label-required mb-1" for="form-with-icon-email"> Email </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i width="1rem" height="1rem" data-feather="mail"></i>
                                    </span>
                                    <input class="input" id="form-with-icon-email" name="email" type="text"
                                        placeholder="Email" />
                                </div>
                            </div>
                            <!-- Form Row: Phone -->
                            <div class="w-full">
                                <label class="label label-required mb-1" for="form-with-icon-phone"> Phone </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i width="1rem" height="1rem" data-feather="phone"></i>
                                    </span>
                                    <input class="input" id="form-with-icon-phone" name="phone" type="text"
                                        placeholder="Phone" />
                                </div>
                            </div>
                            <!-- Form Row: Resume -->
                            <div class="w-full">
                                <label class="label label-required mb-1" for="form-with-icon-resume"> Resume </label>
                                <input class="input" id="form-with-icon-resume" name="resume" type="file" />
                            </div>
                            <!-- Form Row: TOS -->
                            <div class="w-full">
                                <div class="flex items-center gap-1.5">
                                    <input class="checkbox" type="checkbox" name="tos" id="form-basic-tos" />
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
        <!-- Card: Form With Icon Ends -->

        <!-- Card: Form With Dropzone Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form With Dropzone</h4>

                <p class="card-subtitle">Example of form with dropzone.</p>

                <div class="code-viewer mt-4">
                    <form id="form-with-dropzone"
                        class="mx-auto max-w-lg rounded-primary border border-slate-300 bg-white p-4 shadow dark:border-slate-600 dark:bg-slate-800"
                        action="">
                        <!-- Form Body -->
                        <div class="flex flex-col gap-4">
                            <!-- Form Row: Thumbnail -->
                            <div class="w-full">
                                <div class="dropzone dropzone-multiple">
                                    <div class="dz-message">
                                        <i class="text-slate-600 dark:text-slate-300" width="2rem" height="2rem"
                                            data-feather="image"></i>
                                        <p class="text-xs text-slate-600 dark:text-slate-300 sm:text-sm">
                                            Choose thumbnails or drag & drop here.
                                        </p>
                                    </div>
                                    <!-- Fallback for no JavaScript -->
                                    <div class="fallback">
                                        <input name="file" type="thumbnails" />
                                    </div>
                                </div>
                            </div>
                            <!-- Form Row: Post title -->
                            <div class="w-full">
                                <label class="label label-required mb-1" for="form-with-dropzone-title"> Post title
                                </label>
                                <input class="input" id="form-with-dropzone-title" name="title" type="text"
                                    placeholder="Post title" />
                            </div>
                            <!-- Form Row: Post category -->
                            <div class="w-full">
                                <label class="label label-required mb-1" for="form-with-dropzone-category">
                                    Post category
                                </label>
                                <select class="tom-select" name="category" id="form-with-dropzone-category">
                                    <option value="">Select category</option>
                                    <option value="entertainment">Entertainment</option>
                                    <option value="skills">Skills development</option>
                                    <option value="communication">Communication</option>
                                    <option value="marketing">Marketing</option>
                                    <option value="technology">Technology</option>
                                </select>
                            </div>
                            <!-- Form Row: Post Content -->
                            <div class="w-full">
                                <label class="label label-required mb-1" for="form-with-dropzone-content">
                                    Post content
                                </label>
                                <textarea class="textarea" name="content" id="form-with-dropzone-content" placeholder="Post content"></textarea>
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
        <!-- Card: Form With Dropzone Ends -->

        <!-- Card: Horizontal Form Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Horizontal Form</h4>

                <p class="card-subtitle">Example of Horizontal Form.</p>

                <div class="code-viewer mt-4">
                    <form id="form-horizontal"
                        class="mx-auto max-w-lg rounded-primary border border-slate-300 bg-white p-4 shadow dark:border-slate-600 dark:bg-slate-800"
                        action="">
                        <!-- Form Body -->
                        <div class="flex flex-col gap-4">
                            <!-- Form Row: Full name -->
                            <div class="flex w-full flex-col items-center gap-1 md:flex-row md:gap-2">
                                <div class="w-full md:w-1/4">
                                    <label class="label label-required" for="form-horizontal-full-name"> Full name
                                    </label>
                                </div>
                                <div class="w-full md:w-3/4">
                                    <input class="input" id="form-horizontal-full-name" name="full-name"
                                        type="text" placeholder="Full name" />
                                </div>
                            </div>
                            <!-- Form Row: Company -->
                            <div class="flex w-full flex-col items-center gap-1 md:flex-row md:gap-2">
                                <div class="w-full md:w-1/4">
                                    <label class="label label-required" for="form-horizontal-company"> Company
                                    </label>
                                </div>
                                <div class="w-full md:w-3/4">
                                    <input class="input" id="form-horizontal-company" name="company" type="text"
                                        placeholder="Company" />
                                </div>
                            </div>
                            <!-- Form Row: Email -->
                            <div class="flex w-full flex-col items-center gap-1 md:flex-row md:gap-2">
                                <div class="w-full md:w-1/4">
                                    <label class="label label-required" for="form-horizontal-email"> Email </label>
                                </div>
                                <div class="w-full md:w-3/4">
                                    <input class="input" id="form-horizontal-email" name="email" type="text"
                                        placeholder="Email" />
                                </div>
                            </div>
                            <!-- Form Row: Phone -->
                            <div class="flex w-full flex-col items-center gap-1 md:flex-row md:gap-2">
                                <div class="w-full md:w-1/4">
                                    <label class="label label-required" for="form-horizontal-phone"> Phone </label>
                                </div>
                                <div class="w-full md:w-3/4">
                                    <input class="input" id="form-horizontal-phone" name="phone" type="text"
                                        placeholder="Phone" />
                                </div>
                            </div>
                            <!-- Form Row: Message -->
                            <div class="flex w-full flex-col items-center gap-1 md:flex-row md:gap-2">
                                <div class="w-full self-start md:w-1/4">
                                    <label class="label label-required mt-2" for="form-horizontal-message"> Message
                                    </label>
                                </div>
                                <div class="w-full md:w-3/4">
                                    <textarea class="textarea" name="message" id="form-horizontal-message" placeholder="Message"></textarea>
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
        <!-- Card: Horizontal Form Ends -->

        <!-- Card: Form With Multiple Column Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form With Multiple Column</h4>

                <p class="card-subtitle">Example of form with multiple column.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content overflow-auto">
                        <form id="form-with-multiple-column"
                            class="max-w-full rounded-primary border border-slate-300 bg-white p-4 shadow dark:border-slate-600 dark:bg-slate-800"
                            action="">
                            <!-- Form Body -->
                            <div class="flex flex-col gap-4">
                                <!-- Form Row: One -->
                                <div class="flex w-full flex-col items-center gap-4 md:flex-row">
                                    <!-- Form Column: Username -->
                                    <div class="w-full md:w-1/2">
                                        <label class="label label-required mb-1"
                                            for="form-with-multiple-column-username">
                                            Username
                                        </label>
                                        <input class="input" id="form-with-multiple-column-username" name="username"
                                            type="text" placeholder="Username" />
                                    </div>
                                    <!-- Form Column: Email -->
                                    <div class="w-full md:w-1/2">
                                        <label class="label label-required mb-1"
                                            for="form-with-multiple-column-email">
                                            Email
                                        </label>
                                        <input class="input" id="form-with-multiple-column-email" name="email"
                                            type="text" placeholder="Email" />
                                    </div>
                                </div>
                                <!-- Form Row: Two -->
                                <div class="flex w-full flex-col items-center gap-4 md:flex-row">
                                    <!-- Form Column: Password -->
                                    <div class="w-full md:w-1/2">
                                        <label class="label label-required mb-1"
                                            for="form-with-multiple-column-password">
                                            Password
                                        </label>
                                        <div class="input-group">
                                            <input class="input" id="form-with-multiple-column-password"
                                                name="password" type="password" placeholder="Password" />
                                            <span class="input-group-text">
                                                <i width="1rem" height="1rem" data-feather="lock"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Form Column: Confirm Password -->
                                    <div class="w-full md:w-1/2">
                                        <label class="label label-required mb-1"
                                            for="form-with-multiple-column-confirm-password">
                                            Confirm Password
                                        </label>
                                        <div class="input-group">
                                            <input class="input" id="form-with-multiple-column-confirm-password"
                                                name="confirm-password" type="password"
                                                placeholder="Confirm Password" />
                                            <span class="input-group-text">
                                                <i width="1rem" height="1rem" data-feather="lock"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Form Footer -->
                            <div class="mt-6 flex w-full items-center justify-end gap-2">
                                <button class="btn btn-soft-secondary" type="button">Cancel</button>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Form With Multiple Column Ends -->

        <!-- Card: Form in Tab Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form In Tab</h4>

                <p class="card-subtitle">Example of form in tab.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content overflow-visible">
                        <div class="min-w-[26rem] max-w-full rounded-primary bg-white shadow dark:bg-slate-800">
                            <div class="tabs">
                                <ul class="tabs-list">
                                    <li class="tabs-item">
                                        <button class="tabs-btn active" data-panel-id="#tabs-panel-personal-info"
                                            type="button">
                                            Personal Info
                                        </button>
                                    </li>
                                    <li class="tabs-item">
                                        <button class="tabs-btn" data-panel-id="#tabs-panel-account-info"
                                            type="button">
                                            Account Info
                                        </button>
                                    </li>
                                    <li class="tabs-item">
                                        <button class="tabs-btn" data-panel-id="#tabs-panel-social-info"
                                            type="button">
                                            Social Info
                                        </button>
                                    </li>
                                </ul>

                                <div class="tabs-content">
                                    <div id="tabs-panel-personal-info" class="tabs-panel active">
                                        <form id="form-personal-info" class="max-w-full p-4" action="">
                                            <!-- Form Body -->
                                            <div class="flex flex-col gap-4">
                                                <!-- Form Row: One -->
                                                <div class="flex w-full flex-col items-center gap-4 md:flex-row">
                                                    <!-- Form Column: First name -->
                                                    <div class="w-full md:w-1/2">
                                                        <label class="label label-required mb-1"
                                                            for="form-personal-info-first-name">
                                                            First name
                                                        </label>
                                                        <input class="input input-md"
                                                            id="form-personal-info-first-name" name="first-name"
                                                            type="text" placeholder="First name" />
                                                    </div>
                                                    <!-- Form Column: Last name -->
                                                    <div class="w-full md:w-1/2">
                                                        <label class="label label-required mb-1"
                                                            for="form-personal-info-last-name">
                                                            Last name
                                                        </label>
                                                        <input class="input" id="form-personal-info-last-name"
                                                            name="last-name" type="text"
                                                            placeholder="Last name" />
                                                    </div>
                                                </div>
                                                <!-- Form Row: Two -->
                                                <div class="flex w-full flex-col items-center gap-4 md:flex-row">
                                                    <!-- Form Column: Country -->
                                                    <div class="w-full md:w-1/2">
                                                        <label class="label label-required mb-1"
                                                            for="form-personal-info-country">
                                                            Country
                                                        </label>
                                                        <select class="tom-select" name="country"
                                                            id="form-personal-info-country">
                                                            <option value="">Select Country</option>
                                                            <option value="BD">Bangladesh</option>
                                                            <option value="IN">India</option>
                                                            <option value="PK">Pakistan</option>
                                                        </select>
                                                    </div>
                                                    <!-- Form Column: Language -->
                                                    <div class="w-full md:w-1/2">
                                                        <label class="label label-required mb-1"
                                                            for="form-personal-info-country">
                                                            Language
                                                        </label>
                                                        <select class="tom-select" name="language" multiple
                                                            id="form-personal-info-language">
                                                            <option value="">Select Language</option>
                                                            <option value="BN">Bangla</option>
                                                            <option value="EN">English</option>
                                                            <option value="EN-UK">English (UK)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Form Footer -->
                                            <div class="mt-6 flex w-full items-center justify-end gap-2">
                                                <button class="btn btn-soft-secondary" type="button">Cancel</button>
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="tabs-panel-account-info" class="tabs-panel">
                                        <form id="form-account-info" class="max-w-full p-4" action="">
                                            <!-- Form Body -->
                                            <div class="flex flex-col gap-4">
                                                <!-- Form Row: One -->
                                                <div class="flex w-full flex-col items-center gap-4 md:flex-row">
                                                    <!-- Form Column: Username -->
                                                    <div class="w-full md:w-1/2">
                                                        <label class="label label-required mb-1"
                                                            for="form-account-info-username">
                                                            Username
                                                        </label>
                                                        <input class="input" id="form-account-info-username"
                                                            name="username" type="text" placeholder="Username" />
                                                    </div>
                                                    <!-- Form Column: Email -->
                                                    <div class="w-full md:w-1/2">
                                                        <label class="label label-required mb-1"
                                                            for="form-account-info-email">
                                                            Email
                                                        </label>
                                                        <input class="input" id="form-account-info-email"
                                                            name="email" type="text" placeholder="Email" />
                                                    </div>
                                                </div>
                                                <!-- Form Row: Two -->
                                                <div class="flex w-full flex-col items-center gap-4 md:flex-row">
                                                    <!-- Form Column: Password -->
                                                    <div class="w-full md:w-1/2">
                                                        <label class="label label-required mb-1"
                                                            for="form-account-info-password">
                                                            Password
                                                        </label>
                                                        <div class="input-group">
                                                            <input class="input" id="form-account-info-password"
                                                                name="password" type="password"
                                                                placeholder="Password" />
                                                            <span class="input-group-text">
                                                                <i width="1rem" height="1rem"
                                                                    data-feather="lock"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!-- Form Column: Confirm Password -->
                                                    <div class="w-full md:w-1/2">
                                                        <label class="label mb-1"
                                                            for="form-account-info-confirm-password">
                                                            Confirm Password
                                                        </label>
                                                        <div class="input-group">
                                                            <input class="input"
                                                                id="form-account-info-confirm-password"
                                                                name="confirm-password" type="password"
                                                                placeholder="Confirm Password" />
                                                            <span class="input-group-text">
                                                                <i width="1rem" height="1rem"
                                                                    data-feather="lock"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Form Footer -->
                                            <div class="mt-6 flex w-full items-center justify-end gap-2">
                                                <button class="btn btn-soft-secondary" type="button">Cancel</button>
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="tabs-panel-social-info" class="tabs-panel">
                                        <form id="form-social-info" class="max-w-full p-4" action="">
                                            <!-- Form Body -->
                                            <div class="flex flex-col gap-4">
                                                <!-- Form Row: One -->
                                                <div class="flex w-full flex-col items-center gap-4 md:flex-row">
                                                    <!-- Form Column: Twitter -->
                                                    <div class="w-full md:w-1/2">
                                                        <label class="label mb-1" for="form-social-info-twitter">
                                                            Twitter </label>
                                                        <input class="input" id="form-social-info-twitter"
                                                            name="twitter" type="text"
                                                            placeholder="https://twitter.com/abc" />
                                                    </div>
                                                    <!-- Form Column: Facebook -->
                                                    <div class="w-full md:w-1/2">
                                                        <label class="label mb-1" for="form-social-info-facebook">
                                                            Facebook </label>
                                                        <input class="input" id="form-social-info-facebook"
                                                            name="facebook" type="text"
                                                            placeholder="https://facebook.com/abc" />
                                                    </div>
                                                </div>

                                                <!-- Form Row: Two -->
                                                <div class="flex w-full flex-col items-center gap-4 md:flex-row">
                                                    <!-- Form Column: Instagram -->
                                                    <div class="w-full md:w-1/2">
                                                        <label class="label mb-1" for="form-social-info-instagram">
                                                            Instagram </label>
                                                        <input class="input" id="form-social-info-instagram"
                                                            name="instagram" type="text"
                                                            placeholder="https://instagram.com/abc" />
                                                    </div>
                                                    <!-- Form Column: Linkedin -->
                                                    <div class="w-full md:w-1/2">
                                                        <label class="label mb-1" for="form-social-info-linkedin">
                                                            Linkedin </label>
                                                        <input class="input" id="form-social-info-linkedin"
                                                            name="linkedin" type="text"
                                                            placeholder="https://linkedin.com/abc" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Form Footer -->
                                            <div class="mt-6 flex w-full items-center justify-end gap-2">
                                                <button class="btn btn-soft-secondary" type="button">
                                                    <span>Cancel</span>
                                                </button>
                                                <button class="btn btn-primary" type="submit">
                                                    <span>Submit</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Form in Tab Ends -->
    </div>
    <!-- Form Layout Ends -->
</x-app-layout>
