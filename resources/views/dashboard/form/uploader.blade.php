<x-app-layout>
    <!-- Page Title Starts -->
    <x-page-title page="Forms" header="Uploader" />

    <!-- Page Title Ends -->

    <!-- File Uploader Starts -->
    <div class="space-y-6">
        <!-- Card: Basic File Uploader Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic File Uploader</h4>

                <p class="card-subtitle">Example of basic file uploader.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <input class="input" type="file" name="file" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Basic File Uploader Ends -->

        <!-- Card: Upload Mutiple Files Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Upload Multiple Files</h4>

                <p class="card-subtitle">Example of basic file uploader with multiple files upload.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <input class="input" type="file" name="file" multiple />
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Upload Mutiple Files Ends -->

        <!-- Card: Drag & Drop File Uploader Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Drag & Drop File Uploader</h4>

                <p class="card-subtitle">Example of drag & drop file uploader.</p>

                <div class="code-viewer mt-4">
                    <div class="dropzone dropzone-basic">
                        <div class="dz-message">
                            <i class="text-slate-600 dark:text-slate-300" width="2rem" height="2rem"
                                data-feather="upload"></i>
                            <p class="text-slate-600 dark:text-slate-300">Choose a file or drag & drop here</p>
                            <p class="text-sm text-slate-400">
                                This is just a demo dropzone. Selected files are not actually uploaded.
                            </p>
                        </div>
                        <!-- Fallback for no JavaScript -->
                        <div class="fallback">
                            <input name="file" type="file" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Drag & Drop File Uploader Ends -->

        <!-- Card: Drag & Drop Multiple Files Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Drag & Drop Multiple Files</h4>

                <p class="card-subtitle">Example of drag & drop file uploader with multiple files upload.</p>

                <div class="code-viewer mt-4">
                    <div class="dropzone dropzone-multiple">
                        <div class="dz-message">
                            <i class="text-slate-600 dark:text-slate-300" width="2rem" height="2rem"
                                data-feather="upload"></i>
                            <p class="text-slate-600 dark:text-slate-300">Choose files or drag & drop here</p>
                            <p class="text-sm text-slate-400">
                                This is just a demo dropzone. Selected files are not actually uploaded.
                            </p>
                        </div>
                        <!-- Fallback for no JavaScript -->
                        <div class="fallback">
                            <input name="file" type="file" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Drag & Drop Multiple Files Ends -->

        <!-- Card: Disabled File Uploader Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Disabled File Uploader</h4>

                <p class="card-subtitle">Example disabled file uploader.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content bg-white">
                        <input class="input" type="file" name="file" disabled />
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Disabled File Uploader Ends -->

        <!-- Card: Disabled Drag & Drop File Uploader Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Disabled Drag & Drop File Uploader</h4>

                <p class="card-subtitle">Example of disabled drag & drop file uploader.</p>

                <div class="code-viewer mt-4">
                    <div class="dropzone dropzone-disabled mt-4">
                        <div class="dz-message">
                            <i class="text-slate-600 dark:text-slate-300" width="2rem" height="2rem"
                                data-feather="upload"></i>
                            <p class="text-slate-600 dark:text-slate-300">Choose a file or drag & drop here</p>
                            <p class="text-sm text-slate-400">
                                This is just a demo dropzone. Selected files are not actually uploaded.
                            </p>
                        </div>
                        <!-- Fallback for no JavaScript -->
                        <div class="fallback">
                            <input name="file" type="file" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Disabled Drag & Drop File Uploader Ends -->

        <!-- Card: Custom Drag & Drop File Uploader Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Custom Drag & Drop File Uploader</h4>

                <p class="card-subtitle">Example of custom drag & drop file uploader.</p>

                <div id="custom-drag-and-drop-code-viewer" class="code-viewer mt-4" data-render-source="false">
                    <div class="code-viewer-content">
                        <div class="dropzone dropzone-custom">
                            <div class="dz-message">
                                <i class="text-slate-600 dark:text-slate-300" width="2rem" height="2rem"
                                    data-feather="upload"></i>
                                <p class="text-slate-600 dark:text-slate-300">Choose a file or drag & drop here</p>
                                <p class="text-sm text-slate-400">
                                    This is just a demo dropzone. Selected files are not actually uploaded.
                                </p>
                            </div>
                            <!-- Fallback for no JavaScript -->
                            <div class="fallback">
                                <input name="file" type="file" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Custom Drag & Drop File Uploader Ends -->
    </div>
    <!-- File Uploader Ends -->
</x-app-layout>
