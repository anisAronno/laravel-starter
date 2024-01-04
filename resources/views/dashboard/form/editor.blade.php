<x-app-layout>
    <!-- Page Title Starts -->
    <x-page-title page="Forms" header="Editor" />

    <!-- Page Title Ends -->

    <!-- Editors Starts -->
    <div class="space-y-6">
        <!-- Card: Basic Editor Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Editor</h4>

                <p class="card-subtitle">
                    Use <code>editor</code> class on a <code>div</code> element to create text editor.
                </p>

                <div class="code-viewer mt-4">
                    <div class="editor">
                        <h3>Basic Text Editor</h3>
                        <p>
                            Admin Toolkit dashboard template based on TailwindCSS and Vanilla JavaScript is a sleek and
                            functional web-based interface designed for administrators and developers to manage and
                            monitor
                            various aspects of their web application
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Basic Tex Editor Ends -->

        <!-- Card: Popup Text Editor Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Popup Editor</h4>

                <p class="card-subtitle">
                    Use <code>editor-popup</code> class on a <code>div</code> element to create popup text editor.
                </p>

                <div class="code-viewer relative mt-4">
                    <div class="editor-popup">
                        <h3>Popup Text Editor</h3>
                        <p>
                            Admin Toolkit dashboard template based on TailwindCSS and Vanilla JavaScript is a sleek and
                            functional web-based interface designed for administrators and developers to manage and
                            monitor
                            various aspects of their web application
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Popup Text Editor Ends -->

        <!-- Card: Controled Text Editor Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Controlled Text Editor</h4>

                <p class="card-subtitle">Example of a controlled text editor.</p>

                <div id="controled-text-editor" class="code-viewer mt-4" data-render-source="false">
                    <div class="code-viewer-content">
                        <div id="editor-controlled">
                            <h3>Controlled Text Editor</h3>
                            <p>
                                Admin Toolkit dashboard template based on TailwindCSS and Vanilla JavaScript is a sleek
                                and
                                functional web-based interface designed for administrators and developers to manage and
                                monitor various aspects of their web application
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Controled Text Editor Ends -->
    </div>
    <!-- Editor Ends -->
</x-app-layout>
