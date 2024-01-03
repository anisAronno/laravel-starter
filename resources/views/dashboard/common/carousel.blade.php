<x-app-layout>
    <!-- Page Title Starts -->
    <x-page-title page="Components" header="Carousel"/>
    <!-- Page Title Ends -->

    <!-- Carousel Starts -->
    <div class="space-y-6">
        <!-- Card: Basic Carousel Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Swiper</h4>

                <p class="card-subtitle">Example of basic swiper.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content">
                        <div class="mx-auto max-w-5xl">
                            <div class="swiper swiper-basic">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" role="group" aria-label="1 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-1.jpg')}}" alt="Swiper Slide 1" />
                                    </div>

                                    <div class="swiper-slide" role="group" aria-label="2 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-2.jpg')}}" alt="Swiper Slide 2" />
                                    </div>

                                    <div class="swiper-slide" role="group" aria-label="3 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-3.jpg')}}" alt="Swiper Slide 3" />
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="4 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-4.jpg')}}" alt="Swiper Slide 4" />
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="5 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-5.jpg')}}" alt="Swiper Slide 5" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="code-viewer-source">
                        <div class="swiper swiper-basic">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" role="group" aria-label="1 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="2 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="3 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="4 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="5 / 5">
                                    <!-- ..... -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Basic Carousel Ends -->

        <!-- Card: Carousel With Navigation Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Swiper With Navigation</h4>

                <p class="card-subtitle">Example of swiper with Navigation.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content">
                        <div class="mx-auto max-w-5xl">
                            <div class="swiper swiper-with-navigation">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" role="group" aria-label="1 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-1.jpg')}}" alt="Swiper Slide 1" />
                                    </div>

                                    <div class="swiper-slide" role="group" aria-label="2 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-2.jpg')}}" alt="Swiper Slide 2" />
                                    </div>

                                    <div class="swiper-slide" role="group" aria-label="3 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-3.jpg')}}" alt="Swiper Slide 3" />
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="4 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-4.jpg')}}" alt="Swiper Slide 4" />
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="5 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-5.jpg')}}" alt="Swiper Slide 5" />
                                    </div>
                                </div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                    <div class="code-viewer-source">
                        <div class="swiper swiper-with-navigation">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" role="group" aria-label="1 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="2 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="3 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="4 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="5 / 5">
                                    <!-- ..... -->
                                </div>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Carousel With Navigation Ends -->

        <!-- Card: Carousel With Pagination Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Swiper With Pagination</h4>

                <p class="card-subtitle">Example of swiper with Pagination.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content">
                        <div class="mx-auto max-w-5xl">
                            <div class="swiper swiper-with-pagination">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" role="group" aria-label="1 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-1.jpg')}}" alt="Swiper Slide 1" />
                                    </div>

                                    <div class="swiper-slide" role="group" aria-label="2 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-2.jpg')}}" alt="Swiper Slide 2" />
                                    </div>

                                    <div class="swiper-slide" role="group" aria-label="3 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-3.jpg')}}" alt="Swiper Slide 3" />
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="4 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-4.jpg')}}" alt="Swiper Slide 4" />
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="5 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-5.jpg')}}" alt="Swiper Slide 5" />
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>

                    <div class="code-viewer-source">
                        <div class="swiper swiper-with-pagination">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" role="group" aria-label="1 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="2 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="3 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="4 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="5 / 5">
                                    <!-- ..... -->
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Carousel With Pagination Ends -->

        <!-- Card: Carousel With Custom Pagination Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Swiper With Custom Pagination</h4>

                <p class="card-subtitle">Example of swiper with custom pagination.</p>

                <div id="custom-pagination-code-viewer" class="code-viewer mt-4" data-render-source="false">
                    <div class="code-viewer-content">
                        <div class="mx-auto max-w-5xl">
                            <div class="swiper swiper-with-custom-pagination">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" role="group" aria-label="1 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-1.jpg')}}" alt="Swiper Slide 1" />
                                    </div>

                                    <div class="swiper-slide" role="group" aria-label="2 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-2.jpg')}}" alt="Swiper Slide 2" />
                                    </div>

                                    <div class="swiper-slide" role="group" aria-label="3 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-3.jpg')}}" alt="Swiper Slide 3" />
                                    </div>

                                    <div class="swiper-slide" role="group" aria-label="4 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-4.jpg')}}" alt="Swiper Slide 4" />
                                    </div>

                                    <div class="swiper-slide" role="group" aria-label="5 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-5.jpg')}}" alt="Swiper Slide 5" />
                                    </div>
                                </div>
                                <div class="swiper-pagination swiper-pagination-custom"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Carousel With Custom Pagination Ends -->

        <!-- Card: Carousel With Progres Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Swiper With Progress</h4>

                <p class="card-subtitle">Example of Swiper with progress.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content">
                        <div class="mx-auto max-w-5xl">
                            <div class="swiper swiper-with-progress">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" role="group" aria-label="1 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-1.jpg')}}" alt="Swiper Slide 1" />
                                    </div>

                                    <div class="swiper-slide" role="group" aria-label="2 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-2.jpg')}}" alt="Swiper Slide 2" />
                                    </div>

                                    <div class="swiper-slide" role="group" aria-label="3 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-3.jpg')}}" alt="Swiper Slide 3" />
                                    </div>

                                    <div class="swiper-slide" role="group" aria-label="4 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-4.jpg')}}" alt="Swiper Slide 4" />
                                    </div>

                                    <div class="swiper-slide" role="group" aria-label="5 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-5.jpg')}}" alt="Swiper Slide 5" />
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                    <div class="code-viewer-source">
                        <div class="swiper swiper-with-progress">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" role="group" aria-label="1 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="2 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="3 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="4 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="5 / 5">
                                    <!-- ..... -->
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Carousel With Progres Ends -->

        <!-- Card: Carousel With Scrollbar Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Swiper With Scrollbar</h4>

                <p class="card-subtitle">Example of Swiper with Scrollbar.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content">
                        <div class="mx-auto max-w-5xl">
                            <div class="swiper swiper-with-scrollbar">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" role="group" aria-label="1 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-1.jpg')}}" alt="" />
                                    </div>

                                    <div class="swiper-slide" role="group" aria-label="2 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-2.jpg')}}" alt="" />
                                    </div>

                                    <div class="swiper-slide" role="group" aria-label="3 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-3.jpg')}}" alt="" />
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="4 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-4.jpg')}}" alt="" />
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="5 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-5.jpg')}}" alt="" />
                                    </div>
                                </div>

                                <div class="swiper-scrollbar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="code-viewer-source">
                        <div class="swiper swiper-with-scrollbar">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" role="group" aria-label="1 / 5">
                                    <!-- ..... -->
                                </div>

                                <div class="swiper-slide" role="group" aria-label="2 / 5">
                                    <!-- ..... -->
                                </div>

                                <div class="swiper-slide" role="group" aria-label="3 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="4 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="5 / 5">
                                    <!-- ..... -->
                                </div>
                            </div>

                            <div class="swiper-scrollbar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Carousel With Scrollbar Ends -->

        <!-- Card: Carousel Thumbnail Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Swiper With Thumbnail Preview</h4>

                <p class="card-subtitle">Example of Swiper with thumbnail preview.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content">
                        <div class="mx-auto max-w-5xl">
                            <div class="swiper swiper-with-thumbnail-preview">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" role="group" aria-label="1 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-1.jpg')}}" alt="" />
                                    </div>

                                    <div class="swiper-slide" role="group" aria-label="2 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-2.jpg')}}" alt="" />
                                    </div>

                                    <div class="swiper-slide" role="group" aria-label="3 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-3.jpg')}}" alt="" />
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="4 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-4.jpg')}}" alt="" />
                                    </div>

                                    <div class="swiper-slide" role="group" aria-label="5 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-5.jpg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>

                            <div class="swiper swiper-preview mt-4">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" role="group" aria-label="1 / 5">
                                        <img class="h-full max-h-20 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-1.jpg')}}" alt="" />
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="2 / 5">
                                        <img class="h-full max-h-20 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-2.jpg')}}" alt="" />
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="3 / 5">
                                        <img class="h-full max-h-20 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-3.jpg')}}" alt="" />
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="4 / 5">
                                        <img class="h-full max-h-20 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-4.jpg')}}" alt="" />
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="5 / 5">
                                        <img class="h-full max-h-20 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-5.jpg')}}" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="code-viewer-source">
                        <div class="swiper swiper-with-thumbnail-preview">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" role="group" aria-label="1 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="2 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="3 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="4 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="5 / 5">
                                    <!-- ..... -->
                                </div>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                        <div class="swiper swiper-preview mt-4">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" role="group" aria-label="1 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="2 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="3 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="4 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="5 / 5">
                                    <!-- ..... -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Carousel Thumbnail Ends -->

        <!-- Card: Carousel With Autoplay Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Swiper With Autoplay</h4>

                <p class="card-subtitle">Example of Swiper with Autplay enabled.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content">
                        <div class="mx-auto max-w-5xl">
                            <div class="swiper swiper-with-autoplay">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" role="group" aria-label="1 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-1.jpg')}}" alt="Swiper Slide 1" />
                                    </div>

                                    <div class="swiper-slide" role="group" aria-label="2 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-2.jpg')}}" alt="Swiper Slide 2" />
                                    </div>

                                    <div class="swiper-slide" role="group" aria-label="3 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-3.jpg')}}" alt="Swiper Slide 3" />
                                    </div>

                                    <div class="swiper-slide" role="group" aria-label="4 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-4.jpg')}}" alt="Swiper Slide 4" />
                                    </div>

                                    <div class="swiper-slide" role="group" aria-label="5 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-5.jpg')}}" alt="Swiper Slide 5" />
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                    <div class="code-viewer-source">
                        <div class="swiper swiper-with-autoplay">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" role="group" aria-label="1 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="2 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="3 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="4 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="5 / 5">
                                    <!-- ..... -->
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Carousel With Autoplay Ends -->

        <!-- Card: Carousel With Multiple Item Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Swiper With Multiple Items</h4>

                <p class="card-subtitle">Example of Swiper with multiple items.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content">
                        <div class="swiper swiper-multiple">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" role="group" aria-label="1 / 5">
                                    <img class="h-full max-h-96 w-full object-cover object-center"
                                        src="{{asset('images/swiper-slide-1.jpg')}}" alt="" />
                                </div>

                                <div class="swiper-slide" role="group" aria-label="2 / 5">
                                    <img class="h-full max-h-96 w-full object-cover object-center"
                                        src="{{asset('images/swiper-slide-2.jpg')}}" alt="" />
                                </div>

                                <div class="swiper-slide" role="group" aria-label="3 / 5">
                                    <img class="h-full max-h-96 w-full object-cover object-center"
                                        src="{{asset('images/swiper-slide-3.jpg')}}" alt="" />
                                </div>
                                <div class="swiper-slide" role="group" aria-label="4 / 5">
                                    <img class="h-full max-h-96 w-full object-cover object-center"
                                        src="{{asset('images/swiper-slide-4.jpg')}}" alt="" />
                                </div>

                                <div class="swiper-slide" role="group" aria-label="5 / 5">
                                    <img class="h-full max-h-96 w-full object-cover object-center"
                                        src="{{asset('images/swiper-slide-5.jpg')}}" alt="" />
                                </div>
                            </div>

                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>

                    <div class="code-viewer-source">
                        <div class="swiper swiper-multiple">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" role="group" aria-label="1 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="2 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="3 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="4 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="5 / 5">
                                    <!-- ..... -->
                                </div>
                            </div>

                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Carousel With Multiple Item Ends -->

        <!-- Card: Carousel With Content Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Swiper With Content</h4>

                <p class="card-subtitle">You can place text content in swiper slides.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content">
                        <div class="mx-auto max-w-5xl">
                            <div class="swiper swiper-basic">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" role="group" aria-label="1 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-1.jpg')}}" alt="Slider 1" />
                                        <div
                                            class="absolute left-1/2 top-1/2 flex w-3/5 -translate-x-1/2 -translate-y-1/2 flex-col gap-2 text-center xl:top-3/4">
                                            <h3 class="text-white">Slide 1</h3>
                                            <p class="hidden text-xs font-medium text-slate-200 sm:block">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque,
                                                dolor vitae?
                                                Minima blanditiis tempore quis, numquam dolorem laudantium quam illo in
                                                reiciendis,
                                                dolores nam quasi dolore. Nemo, nostrum! Officiis, nesciunt.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="2 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-2.jpg')}}" alt="Slider 2" />
                                        <div
                                            class="absolute left-1/2 top-1/2 flex w-3/5 -translate-x-1/2 -translate-y-1/2 flex-col gap-2 text-center xl:top-3/4">
                                            <h3 class="text-white">Slide 2</h3>
                                            <p class="hidden text-xs font-medium text-slate-200 sm:block">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque,
                                                dolor vitae?
                                                Minima blanditiis tempore quis, numquam dolorem laudantium quam illo in
                                                reiciendis,
                                                dolores nam quasi dolore. Nemo, nostrum! Officiis, nesciunt.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="3 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-3.jpg')}}" alt="Slider 3" />
                                        <div
                                            class="absolute left-1/2 top-1/2 flex w-3/5 -translate-x-1/2 -translate-y-1/2 flex-col gap-2 text-center xl:top-3/4">
                                            <h3 class="text-white">Slide 3</h3>
                                            <p class="hidden text-xs font-medium text-slate-200 sm:block">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque,
                                                dolor vitae?
                                                Minima blanditiis tempore quis, numquam dolorem laudantium quam illo in
                                                reiciendis,
                                                dolores nam quasi dolore. Nemo, nostrum! Officiis, nesciunt.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="4 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-4.jpg')}}" alt="Slider 4" />
                                        <div
                                            class="absolute left-1/2 top-1/2 flex w-3/5 -translate-x-1/2 -translate-y-1/2 flex-col gap-2 text-center xl:top-3/4">
                                            <h3 class="text-white">Slide 4</h3>
                                            <p class="hidden text-xs font-medium text-slate-200 sm:block">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque,
                                                dolor vitae?
                                                Minima blanditiis tempore quis, numquam dolorem laudantium quam illo in
                                                reiciendis,
                                                dolores nam quasi dolore. Nemo, nostrum! Officiis, nesciunt.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="5 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-center"
                                            src="{{asset('images/swiper-slide-5.jpg')}}" alt="Slider 5" />
                                        <div
                                            class="absolute left-1/2 top-1/2 flex w-3/5 -translate-x-1/2 -translate-y-1/2 flex-col gap-2 text-center xl:top-3/4">
                                            <h3 class="text-white">Slide 5</h3>
                                            <p class="hidden text-xs font-medium text-slate-200 sm:block">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque,
                                                dolor vitae?
                                                Minima blanditiis tempore quis, numquam dolorem laudantium quam illo in
                                                reiciendis,
                                                dolores nam quasi dolore. Nemo, nostrum! Officiis, nesciunt.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="code-viewer-source">
                        <div class="swiper swiper-basic">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" role="group" aria-label="1 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="2 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="3 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="4 / 5">
                                    <!-- ..... -->
                                </div>
                                <div class="swiper-slide" role="group" aria-label="5 / 5">
                                    <!-- ..... -->
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Carousel With Content Ends -->

        <!-- Card: Custom Carousel Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Custom Swiper</h4>

                <p class="card-subtitle">Example of Custom Swiper.</p>

                <div id="custom-caroursel-code-viewer" class="code-viewer mt-4" data-render-source="false">
                    <div class="code-viewer-content">
                        <div class="mx-auto max-w-5xl">
                            <div class="swiper swiper-custom">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" role="group" aria-label="1 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-top"
                                            src="{{asset('images/swiper-slide-1.jpg')}}" alt="Swiper Slide 1" />
                                    </div>

                                    <div class="swiper-slide" role="group" aria-label="2 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-top"
                                            src="{{asset('images/swiper-slide-2.jpg')}}" alt="Swiper Slide 2" />
                                    </div>

                                    <div class="swiper-slide" role="group" aria-label="3 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-top"
                                            src="{{asset('images/swiper-slide-3.jpg')}}" alt="Swiper Slide 3" />
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="4 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-top"
                                            src="{{asset('images/swiper-slide-4.jpg')}}" alt="Swiper Slide 4" />
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="5 / 5">
                                        <img class="h-full max-h-96 w-full object-cover object-top"
                                            src="{{asset('images/swiper-slide-5.jpg')}}" alt="Swiper Slide 5" />
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Custom Carousel Ends -->
    </div>
    <!-- Carousel Ends -->
</x-app-layout>
