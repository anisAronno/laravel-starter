<x-app-layout>
    <!-- Page Title Starts -->
    <x-page-title page="Components" header="Pagination" />

    <!-- Page Title Ends -->

    <!-- Pagination Starts -->
    <div class="space-y-6">
        <!-- Card: Basic Pagination Stars -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Pagination</h4>

                <p class="card-subtitle">Use the <code>pagination</code> class to create a pagination.</p>

                <div class="code-viewer mt-4">
                    <nav class="pagination">
                        <ul class="pagination-list">
                            <li class="pagination-item">
                                <a class="pagination-link pagination-link-prev-text" href="#"> Previous </a>
                            </li>
                            <li class="pagination-item active">
                                <a class="pagination-link" href="#">1</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-link" href="#">2</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-link" href="#">3</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-link" href="#">4</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-link" href="#">5</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-link pagination-link-next-text" href="#"> Next </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Card: Basic Pagination Ends -->

        <!-- Card: Outlined Pagination Stars -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Outlined Pagination</h4>

                <p class="card-subtitle">
                    Use the <code>pagination-outlined</code> class to create an outlined pagination.
                </p>

                <div class="code-viewer mt-4">
                    <nav class="pagination pagination-outlined">
                        <ul class="pagination-list">
                            <li class="pagination-item">
                                <a class="pagination-link pagination-link-prev-text" href="#"> Previous </a>
                            </li>
                            <li class="pagination-item active">
                                <a class="pagination-link" href="#">1</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-link" href="#">2</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-link" href="#">3</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-link" href="#">4</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-link" href="#">5</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-link pagination-link-next-text" href="#"> Next </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Card: Outlined Pagination Ends -->

        <!-- Card: More Pagination Stars -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">More Pagination Indicator</h4>

                <p class="card-subtitle">
                    Use
                    <code>pagination-link-more</code>
                    class in
                    <code>span</code>
                    tag to add more pagination indicator.
                </p>

                <div class="code-viewer mt-4">
                    <nav class="pagination">
                        <ul class="pagination-list">
                            <li class="pagination-item">
                                <a class="pagination-link pagination-link-prev-text" href="#"> Previous </a>
                            </li>
                            <li class="pagination-item active">
                                <a class="pagination-link" href="#">1</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-link" href="#">2</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-link" href="#">3</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-link" href="#">4</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-link" href="#">5</a>
                            </li>
                            <li class="pagination-item">
                                <span class="pagination-link pagination-link-more"> ... </span>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-link" href="#">50</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-link pagination-link-next-text" href="#"> Next </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Card: More Pagination Ends -->

        <!-- Card: Pagination With Icon Stars -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pagination With Icon</h4>

                <p class="card-subtitle">Example of pagination with next and previous icon.</p>

                <div class="code-viewer mt-4">
                    <nav class="pagination">
                        <ul class="pagination-list">
                            <li class="pagination-item">
                                <a class="pagination-link pagination-link-prev-icon" href="#">
                                    <i data-feather="chevron-left" width="1em" height="1em"></i>
                                </a>
                            </li>
                            <li class="pagination-item active">
                                <a class="pagination-link" href="#">1</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-link" href="#">2</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-link" href="#">3</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-link" href="#">4</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-link" href="#">5</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-link pagination-link-next-icon" href="#">
                                    <i data-feather="chevron-right" width="1em" height="1em"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Card: Pagination With Icon Ends -->

        <!-- Card: Pagination Shape Stars -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pagination Shapes</h4>

                <p class="card-subtitle">
                    Use
                    <code>pagination-square</code>
                    and
                    <code>pagination-circle</code>
                    classes to change a pagination's shape.
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-col gap-6">
                        <nav class="pagination pagination-square">
                            <ul class="pagination-list">
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-prev-icon" href="#">
                                        <i data-feather="chevron-left" width="1em" height="1em"></i>
                                    </a>
                                </li>
                                <li class="pagination-item active">
                                    <a class="pagination-link" href="#">1</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">2</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">3</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">4</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">5</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-next-icon" href="#">
                                        <i data-feather="chevron-right" width="1em" height="1em"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <nav class="pagination pagination-circle">
                            <ul class="pagination-list">
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-prev-icon" href="#">
                                        <i data-feather="chevron-left" width="1em" height="1em"></i>
                                    </a>
                                </li>
                                <li class="pagination-item active">
                                    <a class="pagination-link" href="#">1</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">2</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">3</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">4</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">5</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-next-icon" href="#">
                                        <i data-feather="chevron-right" width="1em" height="1em"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Pagination Shape Ends -->

        <!-- Card: Pagination Size Stars -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pagination Sizes</h4>

                <p class="card-subtitle">
                    Use
                    <code>pagination-sm</code>
                    ,
                    <code>pagination-md</code>
                    and
                    <code>pagination-lg</code>
                    classes to customize pagination size. Default is
                    <code>pagination-md</code>
                    .
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-col gap-6">
                        <!-- Small Pagination -->
                        <nav class="pagination pagination-sm">
                            <ul class="pagination-list">
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-prev-icon" href="#">
                                        <i data-feather="chevron-left" width="1em" height="1em"></i>
                                    </a>
                                </li>
                                <li class="pagination-item active">
                                    <a class="pagination-link" href="#">1</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">2</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">3</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">4</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">5</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-next-icon" href="#">
                                        <i data-feather="chevron-right" width="1em" height="1em"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Medium Pagination -->
                        <nav class="pagination pagination-md">
                            <ul class="pagination-list">
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-prev" href="#">
                                        <i data-feather="chevron-left" width="1em" height="1em"></i>
                                    </a>
                                </li>
                                <li class="pagination-item active">
                                    <a class="pagination-link" href="#">1</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">2</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">3</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">4</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">5</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-next" href="#">
                                        <i data-feather="chevron-right" width="1em" height="1em"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Large Pagination -->
                        <nav class="pagination pagination-lg">
                            <ul class="pagination-list">
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-prev-icon" href="#">
                                        <i data-feather="chevron-left" width="1em" height="1em"></i>
                                        <!-- Previous -->
                                    </a>
                                </li>
                                <li class="pagination-item active">
                                    <a class="pagination-link" href="#">1</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">2</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">3</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">4</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">5</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-next-icon" href="#">
                                        <i data-feather="chevron-right" width="1em" height="1em"></i>
                                        <!-- Next -->
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Pagination Size Ends -->

        <!-- Card: Pagination Position Stars -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pagination Positions</h4>

                <p class="card-subtitle">
                    Use
                    <code>pagination-start</code>
                    ,
                    <code>pagination-center</code>
                    and
                    <code>pagination-end</code>
                    classes to set pagination position. Default is
                    <code>pagination-start</code>
                    .
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-col gap-6">
                        <!-- Start Pagination -->
                        <nav class="pagination pagination-start">
                            <ul class="pagination-list">
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-prev-icon" href="#">
                                        <i data-feather="chevron-left" width="1em" height="1em"></i>
                                    </a>
                                </li>
                                <li class="pagination-item active">
                                    <a class="pagination-link" href="#">1</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">2</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">3</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">4</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">5</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-next-icon" href="#">
                                        <i data-feather="chevron-right" width="1em" height="1em"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Center Pagination -->
                        <nav class="pagination pagination-center">
                            <ul class="pagination-list">
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-prev-icon" href="#">
                                        <i data-feather="chevron-left" width="1em" height="1em"></i>
                                    </a>
                                </li>
                                <li class="pagination-item active">
                                    <a class="pagination-link" href="#">1</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">2</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">3</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">4</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">5</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-next-icon" href="#">
                                        <i data-feather="chevron-right" width="1em" height="1em"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- End Pagination -->
                        <nav class="pagination pagination-end">
                            <ul class="pagination-list">
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-prev-icon" href="#">
                                        <i data-feather="chevron-left" width="1em" height="1em"></i>
                                    </a>
                                </li>
                                <li class="pagination-item active">
                                    <a class="pagination-link" href="#">1</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">2</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">3</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">4</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">5</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-next-icon" href="#">
                                        <i data-feather="chevron-right" width="1em" height="1em"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Pagination Position Ends -->

        <!-- Card: Pagination Color Stars -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pagination Colors</h4>

                <p class="card-subtitle">
                    Use
                    <code>pagination-{color}</code>
                    classes to change pagination color. Default is <code> pagination-primary </code>
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-col gap-6">
                        <!-- Primary Pagination -->
                        <nav class="pagination pagination-primary">
                            <ul class="pagination-list">
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-prev-icon" href="#">
                                        <i data-feather="chevron-left" width="1em" height="1em"></i>
                                    </a>
                                </li>
                                <li class="pagination-item active">
                                    <a class="pagination-link" href="#">1</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">2</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">3</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">4</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">5</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-next-icon" href="#">
                                        <i data-feather="chevron-right" width="1em" height="1em"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Secondary Pagination -->
                        <nav class="pagination pagination-secondary">
                            <ul class="pagination-list">
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-prev-icon" href="#">
                                        <i data-feather="chevron-left" width="1em" height="1em"></i>
                                    </a>
                                </li>
                                <li class="pagination-item active">
                                    <a class="pagination-link" href="#">1</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">2</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">3</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">4</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">5</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-next-icon" href="#">
                                        <i data-feather="chevron-right" width="1em" height="1em"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Success Pagination -->
                        <nav class="pagination pagination-success">
                            <ul class="pagination-list">
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-prev-icon" href="#">
                                        <i data-feather="chevron-left" width="1em" height="1em"></i>
                                    </a>
                                </li>
                                <li class="pagination-item active">
                                    <a class="pagination-link" href="#">1</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">2</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">3</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">4</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">5</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-next-icon" href="#">
                                        <i data-feather="chevron-right" width="1em" height="1em"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Danger Pagination -->
                        <nav class="pagination pagination-danger">
                            <ul class="pagination-list">
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-prev-icon" href="#">
                                        <i data-feather="chevron-left" width="1em" height="1em"></i>
                                    </a>
                                </li>
                                <li class="pagination-item active">
                                    <a class="pagination-link" href="#">1</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">2</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">3</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">4</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">5</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-next-icon" href="#">
                                        <i data-feather="chevron-right" width="1em" height="1em"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Warning Pagination -->
                        <nav class="pagination pagination-warning">
                            <ul class="pagination-list">
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-prev-icon" href="#">
                                        <i data-feather="chevron-left" width="1em" height="1em"></i>
                                    </a>
                                </li>
                                <li class="pagination-item active">
                                    <a class="pagination-link" href="#">1</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">2</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">3</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">4</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">5</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-next-icon" href="#">
                                        <i data-feather="chevron-right" width="1em" height="1em"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Info Pagination -->
                        <nav class="pagination pagination-info">
                            <ul class="pagination-list">
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-prev-icon" href="#">
                                        <i data-feather="chevron-left" width="1em" height="1em"></i>
                                    </a>
                                </li>
                                <li class="pagination-item active">
                                    <a class="pagination-link" href="#">1</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">2</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">3</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">4</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">5</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-next-icon" href="#">
                                        <i data-feather="chevron-right" width="1em" height="1em"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Dark Pagination -->
                        <nav class="pagination pagination-dark">
                            <ul class="pagination-list">
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-prev-icon" href="#">
                                        <i data-feather="chevron-left" width="1em" height="1em"></i>
                                    </a>
                                </li>
                                <li class="pagination-item active">
                                    <a class="pagination-link" href="#">1</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">2</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">3</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">4</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link" href="#">5</a>
                                </li>
                                <li class="pagination-item">
                                    <a class="pagination-link pagination-link-next-icon" href="#">
                                        <i data-feather="chevron-right" width="1em" height="1em"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Pagination Color Ends -->

        <!-- Card: Disabled Pagination Stars -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Disabled Pagination</h4>

                <p class="card-subtitle">
                    Use
                    <code>disabled</code>
                    class with
                    <code>pagination-item</code>
                    to make a pagination item disable.
                </p>

                <div class="code-viewer mt-4">
                    <nav class="pagination">
                        <ul class="pagination-list">
                            <li class="pagination-item disabled">
                                <a class="pagination-link pagination-link-prev-icon" href="#">
                                    <i data-feather="chevron-left" width="1em" height="1em"></i>
                                </a>
                            </li>
                            <li class="pagination-item active">
                                <a class="pagination-link" href="#">1</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-link" href="#">2</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-link" href="#">3</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-link" href="#">4</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-link" href="#">5</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-link pagination-link-next-icon" href="#">
                                    <i data-feather="chevron-right" width="1em" height="1em"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Card: Disabled Pagination Ends -->
    </div>
    <!-- Pagination Ends -->
</x-app-layout>
