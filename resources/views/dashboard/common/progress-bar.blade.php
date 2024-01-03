<x-app-layout>
    <!-- Page Title Starts -->
    <x-page-title page="Components" header="Progress Bar" />

    <!-- Page Title Ends -->

    <!-- Progressbar Starts -->
    <div class="space-y-6">
        <!-- Card: Basic Progressbar Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Progress Bar</h4>

                <p class="card-subtitle">Example of a basic progress bar.</p>

                <div class="code-viewer mt-4">
                    <div class="progress" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-line">
                            <div class="progress-line-track">
                                <div class="progress-line-thumb" style="width: 10%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Basic Progressbar Ends -->

        <!-- Card: Progressbar With Label Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Progress Bar With Label</h4>

                <p class="card-subtitle">Example of a progress bar with label.</p>

                <div class="code-viewer mt-4">
                    <div class="progress" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-line">
                            <div class="progress-line-track">
                                <div class="progress-line-thumb" style="width: 15%"></div>
                            </div>
                            <span class="progress-line-label">15%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Progressbar With Label Ends -->

        <!-- Card: Progressbar Size Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Progress Bar Sizes</h4>

                <p class="card-subtitle">Example of a progress bar with different sizes.</p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-col gap-6">
                        <div class="progress progress-sm" role="progressbar" aria-valuenow="10" aria-valuemin="0"
                            aria-valuemax="100">
                            <div class="progress-line">
                                <div class="progress-line-track">
                                    <div class="progress-line-thumb" style="width: 10%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="progress progress-md" role="progressbar" aria-valuenow="15" aria-valuemin="0"
                            aria-valuemax="100">
                            <div class="progress-line">
                                <div class="progress-line-track">
                                    <div class="progress-line-thumb" style="width: 15%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="progress progress-lg" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                            aria-valuemax="100">
                            <div class="progress-line">
                                <div class="progress-line-track">
                                    <div class="progress-line-thumb" style="width: 20%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Progressbar Size Ends -->

        <!-- Card: Striped Progressbar Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Striped Progress Bar</h4>

                <p class="card-subtitle">Example of a striped progress bar.</p>

                <div class="code-viewer mt-4">
                    <div class="progress progress-striped" role="progressbar" aria-valuenow="30" aria-valuemin="0"
                        aria-valuemax="100">
                        <div class="progress-line">
                            <div class="progress-line-track">
                                <div class="progress-line-thumb" style="width: 30%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Striped Progressbar Ends -->

        <!-- Card: Animated Striped Progressbar Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Animated Progress Bar</h4>

                <p class="card-subtitle">Example of an animated striped progress bar.</p>

                <div class="code-viewer mt-4">
                    <div class="progress progress-striped progress-animated" role="progressbar" aria-valuenow="30"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-line">
                            <div class="progress-line-track">
                                <div class="progress-line-thumb" style="width: 30%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Animated Striped Progressbar Ends -->

        <!-- Card: Progressbar Color Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Progress Bar colors</h4>

                <p class="card-subtitle">Example of a progress bar with different colors.</p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-col gap-6">
                        <div class="progress progress-primary" role="progressbar" aria-valuenow="10"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-line">
                                <div class="progress-line-track">
                                    <div class="progress-line-thumb" style="width: 10%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="progress progress-secondary" role="progressbar" aria-valuenow="20"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-line">
                                <div class="progress-line-track">
                                    <div class="progress-line-thumb" style="width: 20%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="progress progress-success" role="progressbar" aria-valuenow="30"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-line">
                                <div class="progress-line-track">
                                    <div class="progress-line-thumb" style="width: 30%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="progress progress-danger" role="progressbar" aria-valuenow="40"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-line">
                                <div class="progress-line-track">
                                    <div class="progress-line-thumb" style="width: 40%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="progress progress-warning" role="progressbar" aria-valuenow="50"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-line">
                                <div class="progress-line-track">
                                    <div class="progress-line-thumb" style="width: 50%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="progress progress-info" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                            aria-valuemax="100">
                            <div class="progress-line">
                                <div class="progress-line-track">
                                    <div class="progress-line-thumb" style="width: 60%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="progress progress-dark" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                            aria-valuemax="100">
                            <div class="progress-line">
                                <div class="progress-line-track">
                                    <div class="progress-line-thumb" style="width: 70%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Progressbar Color Ends -->

        <!-- Card: Circle Progressbar Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Circle Progress Bar</h4>

                <p class="card-subtitle">Example of a circle progress bar.</p>

                <div class="code-viewer mt-4">
                    <div class="flex items-center justify-center sm:justify-start">
                        <div class="progress" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                            aria-valuemax="100">
                            <div class="progress-circle">
                                <svg class="progress-circle-svg" viewBox="0 0 152 152">
                                    <circle cx="70" cy="70" r="70"></circle>
                                    <!-- calc((440px - (440px * 70[Change the percentage value]) / 100) * -1) -->
                                    <circle cx="70" cy="70" r="70"
                                        style="stroke-dashoffset: calc((440px - (440px * 70) / 100) * -1)"></circle>
                                </svg>
                                <span class="progress-circle-label">70%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Circle Progressbar Ends -->

        <!-- Card: Circle Progressbar Size Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Circle Progress Bar Sizes</h4>

                <p class="card-subtitle">Example of a circle progress bar with different sizes.</p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap items-center justify-center gap-6 sm:justify-start">
                        <div class="progress progress-sm" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                            aria-valuemax="100">
                            <div class="progress-circle">
                                <svg class="progress-circle-svg" viewBox="0 0 152 152">
                                    <circle cx="70" cy="70" r="70"></circle>
                                    <!-- calc((440px - (440px * 70[Change the percentage value]) / 100) * -1) -->
                                    <circle cx="70" cy="70" r="70"
                                        style="stroke-dashoffset: calc((440px - (440px * 70) / 100) * -1)"></circle>
                                </svg>
                                <span class="progress-circle-label">70%</span>
                            </div>
                        </div>
                        <div class="progress progress-md" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                            aria-valuemax="100">
                            <div class="progress-circle">
                                <svg class="progress-circle-svg" viewBox="0 0 152 152">
                                    <circle cx="70" cy="70" r="70"></circle>
                                    <!-- calc((440px - (440px * 70[Change the percentage value]) / 100) * -1) -->
                                    <circle cx="70" cy="70" r="70"
                                        style="stroke-dashoffset: calc((440px - (440px * 70) / 100) * -1)"></circle>
                                </svg>
                                <span class="progress-circle-label">70%</span>
                            </div>
                        </div>
                        <div class="progress progress-lg" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                            aria-valuemax="100">
                            <div class="progress-circle">
                                <svg class="progress-circle-svg" viewBox="0 0 152 152">
                                    <circle cx="70" cy="70" r="70"></circle>
                                    <!-- calc((440px - (440px * 70[Change the percentage value]) / 100) * -1) -->
                                    <circle cx="70" cy="70" r="70"
                                        style="stroke-dashoffset: calc((440px - (440px * 70) / 100) * -1)"></circle>
                                </svg>
                                <span class="progress-circle-label">70%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Circle Progressbar Size Ends -->

        <!-- Card: Circle Progressbar Color Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Circle Progress Bar Colors</h4>

                <p class="card-subtitle">Example of a circle progress bar with different colors.</p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap items-center justify-center gap-6 sm:justify-start">
                        <div class="progress progress-primary" role="progressbar" aria-valuenow="70"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-circle">
                                <svg class="progress-circle-svg" viewBox="0 0 152 152">
                                    <circle cx="70" cy="70" r="70"></circle>
                                    <!-- calc((440px - (440px * 70[Change the percentage value]) / 100) * -1) -->
                                    <circle cx="70" cy="70" r="70"
                                        style="stroke-dashoffset: calc((440px - (440px * 70) / 100) * -1)"></circle>
                                </svg>
                                <span class="progress-circle-label">70%</span>
                            </div>
                        </div>
                        <div class="progress progress-secondary" role="progressbar" aria-valuenow="70"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-circle">
                                <svg class="progress-circle-svg" viewBox="0 0 152 152">
                                    <circle cx="70" cy="70" r="70"></circle>
                                    <!-- calc((440px - (440px * 70[Change the percentage value]) / 100) * -1) -->
                                    <circle cx="70" cy="70" r="70"
                                        style="stroke-dashoffset: calc((440px - (440px * 70) / 100) * -1)"></circle>
                                </svg>
                                <span class="progress-circle-label">70%</span>
                            </div>
                        </div>
                        <div class="progress progress-success" role="progressbar" aria-valuenow="70"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-circle">
                                <svg class="progress-circle-svg" viewBox="0 0 152 152">
                                    <circle cx="70" cy="70" r="70"></circle>
                                    <!-- calc((440px - (440px * 70[Change the percentage value]) / 100) * -1) -->
                                    <circle cx="70" cy="70" r="70"
                                        style="stroke-dashoffset: calc((440px - (440px * 70) / 100) * -1)"></circle>
                                </svg>
                                <span class="progress-circle-label">70%</span>
                            </div>
                        </div>
                        <div class="progress progress-danger" role="progressbar" aria-valuenow="70"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-circle">
                                <svg class="progress-circle-svg" viewBox="0 0 152 152">
                                    <circle cx="70" cy="70" r="70"></circle>
                                    <!-- calc((440px - (440px * 70[Change the percentage value]) / 100) * -1) -->
                                    <circle cx="70" cy="70" r="70"
                                        style="stroke-dashoffset: calc((440px - (440px * 70) / 100) * -1)"></circle>
                                </svg>
                                <span class="progress-circle-label">70%</span>
                            </div>
                        </div>
                        <div class="progress progress-warning" role="progressbar" aria-valuenow="70"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-circle">
                                <svg class="progress-circle-svg" viewBox="0 0 152 152">
                                    <circle cx="70" cy="70" r="70"></circle>
                                    <!-- calc((440px - (440px * 70[Change the percentage value]) / 100) * -1) -->
                                    <circle cx="70" cy="70" r="70"
                                        style="stroke-dashoffset: calc((440px - (440px * 70) / 100) * -1)"></circle>
                                </svg>
                                <span class="progress-circle-label">70%</span>
                            </div>
                        </div>
                        <div class="progress progress-info" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                            aria-valuemax="100">
                            <div class="progress-circle">
                                <svg class="progress-circle-svg" viewBox="0 0 152 152">
                                    <circle cx="70" cy="70" r="70"></circle>
                                    <!-- calc((440px - (440px * 70[Change the percentage value]) / 100) * -1) -->
                                    <circle cx="70" cy="70" r="70"
                                        style="stroke-dashoffset: calc((440px - (440px * 70) / 100) * -1)"></circle>
                                </svg>
                                <span class="progress-circle-label">70%</span>
                            </div>
                        </div>
                        <div class="progress progress-dark" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                            aria-valuemax="100">
                            <div class="progress-circle">
                                <svg class="progress-circle-svg" viewBox="0 0 152 152">
                                    <circle cx="70" cy="70" r="70"></circle>
                                    <!-- calc((440px - (440px * 70[Change the percentage value]) / 100) * -1) -->
                                    <circle cx="70" cy="70" r="70"
                                        style="stroke-dashoffset: calc((440px - (440px * 70) / 100) * -1)"></circle>
                                </svg>
                                <span class="progress-circle-label">70%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Circle Progressbar Color Ends -->
    </div>
    <!-- Progressbar Ends -->
</x-app-layout>
