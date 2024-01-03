<x-app-layout>
    <!-- Page Title Starts -->

    <x-page-title page="Components" header="Drawer" />

    <!-- Page Title Ends -->

    <!-- Drawer Starts -->
    <div class="space-y-6">
        <!-- Card: Basic Drawer Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Drawer</h4>

                <p class="card-subtitle">
                    Below is a drawer example that is shown by default (via <code>show</code> on <code>drawer</code>).
                    Drawer includes support for a header with a close button and an optional body and footer classes for
                    some initial padding. We recommand that you include drawer headers with dismiss button whenever
                    possible, or provide an explicit dismiss button.
                </p>

                <div class="code-viewer mt-4">
                    <button class="btn btn-primary" type="button" data-toggle="drawer" data-target="#drawer-basic">
                        Basic Drawer
                    </button>
                    <div id="drawer-basic" class="drawer">
                        <div class="drawer-header">
                            <h5>Basic Drawer</h5>
                            <button type="button"
                                class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
                                data-dismiss="drawer">
                                <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                            </button>
                        </div>
                        <div class="drawer-body">
                            <p class="text-sm text-slate-600 dark:text-slate-300">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt iure tempora a
                                blanditiis
                                inventore voluptatibus cupiditate, consectetur maiores architecto deleniti omnis
                                voluptatem
                                facilis officiis odio harum quasi quae atque necessitatibus.
                            </p>
                        </div>
                        <div class="drawer-footer">
                            <div class="flex justify-end gap-2">
                                <button type="button" class="btn btn-secondary" data-dismiss="drawer">
                                    <span>Cancel</span>
                                </button>

                                <button type="button" class="btn btn-primary">
                                    <span>Confirm</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Basic Drawer Ends -->

        <!-- Card: Drawer Without Backdrop Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Drawer Without Backdrop</h4>

                <p class="card-subtitle">
                    Use <code>data-backdrop="false"</code> attribute to disable the default backdrop of drawer.
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content">
                        <button class="btn btn-primary" type="button" data-toggle="drawer"
                            data-target="#drawer-without-backdrop">
                            Drawer Without Backdrop
                        </button>

                        <div id="drawer-without-backdrop" class="drawer" data-backdrop="false">
                            <div class="drawer-header">
                                <h5>Drawer Without Backdrop</h5>

                                <button type="button"
                                    class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
                                    data-dismiss="drawer">
                                    <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                                </button>
                            </div>

                            <div class="drawer-body">
                                <p class="text-sm text-slate-600 dark:text-slate-300">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt iure tempora a
                                    blanditiis
                                    inventore voluptatibus cupiditate, consectetur maiores architecto deleniti omnis
                                    voluptatem
                                    facilis officiis odio harum quasi quae atque necessitatibus.
                                </p>
                            </div>

                            <div class="drawer-footer">
                                <div class="flex justify-end gap-2">
                                    <button type="button" class="btn btn-secondary" data-dismiss="drawer">
                                        <span>Cancel</span>
                                    </button>

                                    <button type="button" class="btn btn-primary">
                                        <span>Confirm</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="code-viewer-source">
                        <button class="btn btn-primary" type="button" data-toggle="drawer"
                            data-target="#drawer-without-backdrop">
                            Drawer Without Backdrop
                        </button>

                        <div id="drawer-without-backdrop" class="drawer" data-backdrop="false">
                            <div class="drawer-header">
                                <!-- ..... -->
                            </div>
                            <div class="drawer-body">
                                <!-- ..... -->
                            </div>
                            <div class="drawer-footer">
                                <!-- ..... -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Drawer Without Backdrop Ends -->

        <!-- Card: Drawer With Static Backdrop Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Drawer With Static Backdrop</h4>

                <p class="card-subtitle">
                    Change the <code>data-backdrop</code> attribute to <code>static</code> to disable the backdrop close
                    functionality.
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content">
                        <button class="btn btn-primary" type="button" data-toggle="drawer"
                            data-target="#drawer-with-static-backdrop">
                            Drawer With Static Backdrop
                        </button>

                        <div id="drawer-with-static-backdrop" class="drawer" data-backdrop="static">
                            <div class="drawer-header">
                                <h5>Static Backdrop</h5>

                                <button type="button"
                                    class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
                                    data-dismiss="drawer">
                                    <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                                </button>
                            </div>

                            <div class="drawer-body">
                                <p class="text-sm text-slate-600 dark:text-slate-300">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt iure tempora a
                                    blanditiis
                                    inventore voluptatibus cupiditate, consectetur maiores architecto deleniti omnis
                                    voluptatem
                                    facilis officiis odio harum quasi quae atque necessitatibus.
                                </p>
                            </div>

                            <div class="drawer-footer">
                                <div class="flex justify-end gap-2">
                                    <button type="button" class="btn btn-secondary" data-dismiss="drawer">
                                        <span>Cancel</span>
                                    </button>

                                    <button type="button" class="btn btn-primary">
                                        <span>Confirm</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="code-viewer-source">
                        <button class="btn btn-primary" type="button" data-toggle="drawer"
                            data-target="#drawer-with-static-backdrop">
                            Drawer With Static Backdrop
                        </button>

                        <div id="drawer-with-static-backdrop" class="drawer" data-backdrop="static">
                            <div class="drawer-header">
                                <!-- ..... -->
                            </div>
                            <div class="drawer-body">
                                <!-- ..... -->
                            </div>
                            <div class="drawer-footer">
                                <!-- ..... -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Drawer With Static Backdrop Ends -->

        <!-- Card: Drawer Placement Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Drawer Placements</h4>

                <p class="card-subtitle">
                    Use <code>drawer-left</code>, <code>drawer-right</code>, <code>drawer-top</code> and
                    <code>drawer-bottom</code> modifier classes to set the drawer placement. Default is
                    <code>drawer-left</code>
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content">
                        <div class="flex flex-wrap gap-2">
                            <button class="btn btn-primary" type="button" data-toggle="drawer"
                                data-target="#drawer-left">
                                Open from Left
                            </button>
                            <button class="btn btn-primary" type="button" data-toggle="drawer"
                                data-target="#drawer-right">
                                Open from Right
                            </button>
                            <button class="btn btn-primary" type="button" data-toggle="drawer"
                                data-target="#drawer-top">
                                Open from Top
                            </button>
                            <button class="btn btn-primary" type="button" data-toggle="drawer"
                                data-target="#drawer-bottom">
                                Open from Bottom
                            </button>
                        </div>

                        <div id="drawer-left" class="drawer drawer-left">
                            <div class="drawer-header">
                                <h5>Drawer Start</h5>
                                <button type="button"
                                    class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
                                    data-dismiss="drawer">
                                    <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                                </button>
                            </div>

                            <div class="drawer-body">
                                <p class="text-sm text-slate-600 dark:text-slate-300">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt iure tempora a
                                    blanditiis
                                    inventore voluptatibus cupiditate, consectetur maiores architecto deleniti omnis
                                    voluptatem
                                    facilis officiis odio harum quasi quae atque necessitatibus.
                                </p>
                            </div>

                            <div class="drawer-footer">
                                <div class="flex justify-end gap-2">
                                    <button type="button" class="btn btn-secondary" data-dismiss="drawer">
                                        <span>Cancel</span>
                                    </button>

                                    <button type="button" class="btn btn-primary">
                                        <span>Confirm</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="drawer-right" class="drawer drawer-right">
                            <div class="drawer-header">
                                <h5>Drawer End</h5>
                                <button type="button"
                                    class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
                                    data-dismiss="drawer">
                                    <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                                </button>
                            </div>
                            <div class="drawer-body">
                                <p class="text-sm text-slate-600 dark:text-slate-300">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt iure tempora a
                                    blanditiis
                                    inventore voluptatibus cupiditate, consectetur maiores architecto deleniti omnis
                                    voluptatem
                                    facilis officiis odio harum quasi quae atque necessitatibus.
                                </p>
                            </div>
                            <div class="drawer-footer">
                                <div class="flex justify-end gap-2">
                                    <button type="button" class="btn btn-primary">
                                        <span>Confirm</span>
                                    </button>

                                    <button type="button" class="btn btn-secondary" data-dismiss="drawer">
                                        <span>Cancel</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="drawer-top" class="drawer drawer-top">
                            <div class="container">
                                <div class="drawer-header">
                                    <h5>Drawer Top</h5>

                                    <button type="button"
                                        class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
                                        data-dismiss="drawer">
                                        <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                                    </button>
                                </div>
                                <div class="drawer-body">
                                    <p class="text-sm text-slate-600 dark:text-slate-300">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt iure tempora
                                        a
                                        blanditiis inventore voluptatibus cupiditate, consectetur maiores architecto
                                        deleniti
                                        omnis voluptatem facilis officiis odio harum quasi quae atque necessitatibus.
                                    </p>
                                </div>
                                <div class="drawer-footer">
                                    <div class="flex justify-end gap-2">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="drawer">Cancel</button>
                                        <button type="button" class="btn btn-primary">Confirm</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="drawer-bottom" class="drawer drawer-bottom">
                            <div class="container">
                                <div class="drawer-header">
                                    <h5>Drawer Bottom</h5>

                                    <button type="button"
                                        class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
                                        data-dismiss="drawer">
                                        <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                                    </button>
                                </div>
                                <div class="drawer-body">
                                    <p class="text-sm text-slate-600 dark:text-slate-300">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt iure tempora
                                        a
                                        blanditiis inventore voluptatibus cupiditate, consectetur maiores architecto
                                        deleniti
                                        omnis voluptatem facilis officiis odio harum quasi quae atque necessitatibus.
                                    </p>
                                </div>
                                <div class="drawer-footer">
                                    <div class="flex justify-end gap-2">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="drawer">Cancel</button>
                                        <button type="button" class="btn btn-primary">Confirm</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="code-viewer-source">
                        <button class="btn btn-primary" type="button" data-toggle="drawer"
                            data-target="#drawer-left">
                            Open from Left
                        </button>
                        <button class="btn btn-primary" type="button" data-toggle="drawer"
                            data-target="#drawer-right">
                            Open from Right
                        </button>
                        <button class="btn btn-primary" type="button" data-toggle="drawer"
                            data-target="#drawer-top">
                            Open from Top
                        </button>
                        <button class="btn btn-primary" type="button" data-toggle="drawer"
                            data-target="#drawer-bottom">
                            Open from Bottom
                        </button>

                        <!-- Offcanvas Start -->
                        <div id="drawer-left" class="drawer drawer-left">
                            <div class="drawer-header flex items-center justify-between">
                                <!-- ..... -->
                            </div>
                            <div class="drawer-body">
                                <!-- ..... -->
                            </div>
                            <div class="drawer-footer">
                                <!-- ..... -->
                            </div>
                        </div>

                        <!-- Offcanvas End -->
                        <div id="drawer-right" class="drawer drawer-right">
                            <div class="drawer-header">
                                <!-- ..... -->
                            </div>
                            <div class="drawer-body">
                                <!-- ..... -->
                            </div>
                            <div class="drawer-footer">
                                <!-- ..... -->
                            </div>
                        </div>

                        <!-- Offcanvas Top-->
                        <div id="drawer-top" class="drawer drawer-top">
                            <div class="drawer-header">
                                <!-- ..... -->
                            </div>
                            <div class="drawer-body">
                                <!-- ..... -->
                            </div>
                            <div class="drawer-footer">
                                <!-- ..... -->
                            </div>
                        </div>

                        <!-- Offcanvas Bottom -->
                        <div id="drawer-bottom" class="drawer drawer-bottom">
                            <div class="drawer-header">
                                <!-- ..... -->
                            </div>
                            <div class="drawer-body">
                                <!-- ..... -->
                            </div>
                            <div class="drawer-footer">
                                <!-- ..... -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Drawer Placement Ends -->

        <!-- Card: Controlled Drawer Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Controlled Drawer</h4>

                <p class="card-subtitle">
                    To control the drawer via javascript, use <code>createDrawer()</code> global function to initialize
                    the drawer with default options.
                </p>

                <div id="controlled-drawer-code-viewer" class="code-viewer mt-4" data-render-source="false">
                    <div class="code-viewer-content">
                        <button class="btn btn-primary" type="button" id="btn-drawer-controlled">
                            Controlled Drawer
                        </button>

                        <div id="drawer-controlled" class="drawer">
                            <div class="drawer-header">
                                <h5>Controlled Drawer</h5>

                                <button type="button"
                                    class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
                                    data-dismiss="drawer">
                                    <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                                </button>
                            </div>

                            <div class="drawer-body">
                                <p class="text-sm text-slate-600 dark:text-slate-300">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt iure tempora a
                                    blanditiis
                                    inventore voluptatibus cupiditate, consectetur maiores architecto deleniti omnis
                                    voluptatem
                                    facilis officiis odio harum quasi quae atque necessitatibus.
                                </p>
                            </div>

                            <div class="drawer-footer">
                                <div class="flex justify-end gap-2">
                                    <button type="button" class="btn btn-secondary" data-dismiss="drawer">
                                        <span>Cancel</span>
                                    </button>

                                    <button type="button" class="btn btn-primary">
                                        <span>Confirm</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Controlled Drawer Ends -->

        <!-- Card: Disable keypress Drawer Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Disable Drawer Keypress</h4>

                <p class="card-subtitle">
                    Set <code>data-keyboard</code> attribute to <code>false</code> to disable the ESC close
                    functionality of drawer.
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content">
                        <button class="btn btn-primary" type="button" data-toggle="drawer"
                            data-target="#disable-keypress-drawer">
                            Disable Drawer Keypresse
                        </button>

                        <div id="disable-keypress-drawer" class="drawer" data-keyboard="false">
                            <div class="drawer-header">
                                <h5>Disable Drawer Keypress</h5>

                                <button type="button"
                                    class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
                                    data-dismiss="drawer">
                                    <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                                </button>
                            </div>

                            <div class="drawer-body">
                                <p class="text-sm text-slate-600 dark:text-slate-300">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt iure tempora a
                                    blanditiis
                                    inventore voluptatibus cupiditate, consectetur maiores architecto deleniti omnis
                                    voluptatem
                                    facilis officiis odio harum quasi quae atque necessitatibus.
                                </p>
                            </div>

                            <div class="drawer-footer">
                                <div class="flex justify-end gap-2">
                                    <button type="button" class="btn btn-secondary" data-dismiss="drawer">
                                        <span>Cancel</span>
                                    </button>

                                    <button type="button" class="btn btn-primary">
                                        <span>Confirm</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="code-viewer-source">
                        <button class="btn btn-primary" type="button" data-toggle="drawer"
                            data-target="#disable-keypress-drawer">
                            Disable Drawer Keypresse
                        </button>

                        <div id="disable-keypress-drawer" class="drawer" data-keyboard="false">
                            <div class="drawer-header">
                                <!-- ..... -->
                            </div>
                            <div class="drawer-body">
                                <!-- ..... -->
                            </div>
                            <div class="drawer-footer">
                                <!-- ..... -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Disable keypress Drawer Ends -->
    </div>
    <!-- Drawer Ends -->
</x-app-layout>
