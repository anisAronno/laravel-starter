<x-app-layout>
    <!-- Page Title Starts -->
   
    <x-page-title page="Components" header="Spinner" />

    <!-- Page Title Ends -->

    <!-- Spinner Starts -->
    <div class="space-y-6">
        <!-- Card: Basic Spinner Start -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Spinner</h4>

                <p class="card-subtitle">
                    Use
                    <code>spinner</code>
                    class to create a Create basic spinner.
                </p>

                <div class="code-viewer mt-4">
                    <div class="spinner"></div>
                </div>
            </div>
        </div>
        <!-- Card: Basic Spinner Ends -->

        <!-- Card: Spinner With Colors Start -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Spinner With Color</h4>

                <p class="card-subtitle">
                    Use
                    <code>spinner-{color}</code>
                    class to add color. Available colors are -
                    <code>primary</code>
                    ,
                    <code>secondary</code>
                    ,
                    <code>success</code>
                    ,
                    <code>danger</code>
                    ,
                    <code>info</code>
                    ,
                    <code>warning</code>
                    ,
                    <code>dark</code>
                    .
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap items-start gap-4">
                        <div class="spinner-primary"></div>
                        <div class="spinner-secondary"></div>
                        <div class="spinner-info"></div>
                        <div class="spinner-success"></div>
                        <div class="spinner-danger"></div>
                        <div class="spinner-warning"></div>
                        <div class="spinner-dark"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Spinner With Colors  Ends -->

        <!-- Card: Spinner With Size Start -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Spinner With Size</h4>

                <p class="card-subtitle">
                    Use
                    <code>spinner-{size}</code>
                    class to add size. Available sizes are -
                    <code>xs</code>
                    ,
                    <code>sm</code>
                    ,
                    <code>md</code>
                    ,
                    <code>lg</code>
                    ,
                    <code>xlg</code>
                    .
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap items-end gap-4">
                        <div class="spinner-xs"></div>
                        <div class="spinner-sm"></div>
                        <div class="spinner-md"></div>
                        <div class="spinner-lg"></div>
                        <div class="spinner-xl"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Spinner With Size Ends -->

        <!-- Card: Pulse Spinner Start -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pulse Spinner With Color</h4>
                <p class="card-subtitle">
                    Use
                    <code>spinner-pulse-{color}</code>
                    class to add color. Available colors are -
                    <code>primary</code>
                    ,
                    <code>secondary</code>
                    ,
                    <code>success</code>
                    ,
                    <code>danger</code>
                    ,
                    <code>info</code>
                    ,
                    <code>warning</code>
                    ,
                    <code>dark</code>
                    class to make a pulse spinner with color.
                </p>
                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap gap-4">
                        <div class="spinner-pulse">
                            <div class="spinner-pulse-primary"></div>
                            <div class="spinner-pulse-primary"></div>
                        </div>
                        <div class="spinner-pulse">
                            <div class="spinner-pulse-secondary"></div>
                            <div class="spinner-pulse-secondary"></div>
                        </div>
                        <div class="spinner-pulse">
                            <div class="spinner-pulse-info"></div>
                            <div class="spinner-pulse-info"></div>
                        </div>
                        <div class="spinner-pulse">
                            <div class="spinner-pulse-success"></div>
                            <div class="spinner-pulse-success"></div>
                        </div>
                        <div class="spinner-pulse">
                            <div class="spinner-pulse-danger"></div>
                            <div class="spinner-pulse-danger"></div>
                        </div>
                        <div class="spinner-pulse">
                            <div class="spinner-pulse-warning"></div>
                            <div class="spinner-pulse-warning"></div>
                        </div>
                        <div class="spinner-pulse">
                            <div class="spinner-pulse-dark"></div>
                            <div class="spinner-pulse-dark"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Pulse Spinner Ends -->

        <!-- Card: Custom Spinner Start -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Custom Spinner</h4>
                <p class="card-subtitle">Example of Spinner with custom contend and utility classes.</p>
                <div class="code-viewer mt-4">
                    <div class="my-6 grid grid-cols-2 gap-x-6 gap-y-16 md:grid-cols-3 lg:grid-cols-4">
                        <!-- Plane Spinner  -->
                        <div class="sk-plane bg-primary-500"></div>
                        <!-- Chase Spinner  -->
                        <div class="sk-chase">
                            <div class="sk-chase-dot before:bg-primary-500"></div>
                            <div class="sk-chase-dot before:bg-primary-500"></div>
                            <div class="sk-chase-dot before:bg-primary-500"></div>
                            <div class="sk-chase-dot before:bg-primary-500"></div>
                            <div class="sk-chase-dot before:bg-primary-500"></div>
                            <div class="sk-chase-dot before:bg-primary-500"></div>
                        </div>
                        <!-- Bounce Spinner  -->
                        <div class="sk-bounce">
                            <div class="sk-bounce-dot bg-primary-500"></div>
                            <div class="sk-bounce-dot bg-primary-500"></div>
                        </div>
                        <!-- Wave Spinner -->
                        <div class="sk-wave">
                            <div class="sk-wave-rect bg-primary-500"></div>
                            <div class="sk-wave-rect bg-primary-500"></div>
                            <div class="sk-wave-rect bg-primary-500"></div>
                            <div class="sk-wave-rect bg-primary-500"></div>
                            <div class="sk-wave-rect bg-primary-500"></div>
                        </div>
                        <!-- Pulse Spinner -->
                        <div class="sk-pulse bg-primary-500"></div>
                        <!-- Flow Spinner  -->
                        <div class="sk-flow">
                            <div class="sk-flow-dot bg-primary-500"></div>
                            <div class="sk-flow-dot bg-primary-500"></div>
                            <div class="sk-flow-dot bg-primary-500"></div>
                        </div>
                        <!-- Swing Spinner  -->
                        <div class="sk-swing">
                            <div class="sk-swing-dot bg-primary-500"></div>
                            <div class="sk-swing-dot bg-primary-500"></div>
                        </div>
                        <!-- Circle Spinner -->
                        <div class="sk-circle">
                            <div class="sk-circle-dot before:bg-primary-500"></div>
                            <div class="sk-circle-dot before:bg-primary-500"></div>
                            <div class="sk-circle-dot before:bg-primary-500"></div>
                            <div class="sk-circle-dot before:bg-primary-500"></div>
                            <div class="sk-circle-dot before:bg-primary-500"></div>
                            <div class="sk-circle-dot before:bg-primary-500"></div>
                            <div class="sk-circle-dot before:bg-primary-500"></div>
                            <div class="sk-circle-dot before:bg-primary-500"></div>
                            <div class="sk-circle-dot before:bg-primary-500"></div>
                            <div class="sk-circle-dot before:bg-primary-500"></div>
                            <div class="sk-circle-dot before:bg-primary-500"></div>
                            <div class="sk-circle-dot before:bg-primary-500"></div>
                        </div>
                        <!-- Circle Fade Spinner  -->
                        <div class="sk-circle-fade">
                            <div class="sk-circle-fade-dot before:bg-primary-500"></div>
                            <div class="sk-circle-fade-dot before:bg-primary-500"></div>
                            <div class="sk-circle-fade-dot before:bg-primary-500"></div>
                            <div class="sk-circle-fade-dot before:bg-primary-500"></div>
                            <div class="sk-circle-fade-dot before:bg-primary-500"></div>
                            <div class="sk-circle-fade-dot before:bg-primary-500"></div>
                            <div class="sk-circle-fade-dot before:bg-primary-500"></div>
                            <div class="sk-circle-fade-dot before:bg-primary-500"></div>
                            <div class="sk-circle-fade-dot before:bg-primary-500"></div>
                            <div class="sk-circle-fade-dot before:bg-primary-500"></div>
                            <div class="sk-circle-fade-dot before:bg-primary-500"></div>
                            <div class="sk-circle-fade-dot before:bg-primary-500"></div>
                        </div>
                        <!--  Grid Spinner   -->
                        <div class="sk-grid">
                            <div class="sk-grid-cube bg-primary-500"></div>
                            <div class="sk-grid-cube bg-primary-500"></div>
                            <div class="sk-grid-cube bg-primary-500"></div>
                            <div class="sk-grid-cube bg-primary-500"></div>
                            <div class="sk-grid-cube bg-primary-500"></div>
                            <div class="sk-grid-cube bg-primary-500"></div>
                            <div class="sk-grid-cube bg-primary-500"></div>
                            <div class="sk-grid-cube bg-primary-500"></div>
                            <div class="sk-grid-cube bg-primary-500"></div>
                        </div>
                        <!-- Fold Spinner  -->
                        <div class="sk-fold">
                            <div class="sk-fold-cube before:bg-primary-500"></div>
                            <div class="sk-fold-cube before:bg-primary-500"></div>
                            <div class="sk-fold-cube before:bg-primary-500"></div>
                            <div class="sk-fold-cube before:bg-primary-500"></div>
                        </div>
                        <!-- Wander Spinner  -->
                        <div class="sk-wander">
                            <div class="sk-wander-cube bg-primary-500"></div>
                            <div class="sk-wander-cube bg-primary-500"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Custom Spinner Ends -->
    </div>
    <!-- Spinner Ends -->
</x-app-layout>
