<x-app-layout>

    <!-- Page Title Starts -->
    <x-page-title page="Components" header="Tabs" />

    <!-- Page Title Ends -->

    <!-- Tabs Starts -->
    <div class="space-y-6">
        <!-- Card: Basic Tab Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Tab</h4>

                <p class="card-subtitle">Example of basic tabs.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content overflow-auto">
                        <div class="mx-auto w-[40rem] rounded-primary bg-white shadow dark:bg-slate-800">
                            <div class="tabs">
                                <ul class="tabs-list">
                                    <li class="tabs-item">
                                        <button class="tabs-btn active" data-panel-id="#tabs-panel-1" type="button">
                                            <span>Profile</span>
                                        </button>
                                    </li>
                                    <li class="tabs-item">
                                        <button class="tabs-btn" data-panel-id="#tabs-panel-2" type="button">
                                            <span>Dashboard</span>
                                        </button>
                                    </li>
                                    <li class="tabs-item">
                                        <button class="tabs-btn" data-panel-id="#tabs-panel-3" type="button">
                                            <span>Settings</span>
                                        </button>
                                    </li>
                                    <li class="tabs-item">
                                        <button class="tabs-btn" data-panel-id="#tabs-panel-4" type="button">
                                            <span>Contacts</span>
                                        </button>
                                    </li>
                                </ul>
                                <div class="tabs-content">
                                    <div id="tabs-panel-1" class="tabs-panel active">
                                        <div class="space-y-2">
                                            <h6>Profile Content</h6>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, a
                                                saepe voluptatem
                                                porro necessitatibus animi ex voluptates omnis voluptatibus repudiandae
                                                labore debitis
                                                optio enim aspernatur consectetur cum exercitationem ipsum repellendus.
                                            </p>
                                        </div>
                                    </div>

                                    <div id="tabs-panel-2" class="tabs-panel">
                                        <div class="space-y-2">
                                            <h6>Dashboard Content</h6>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, a
                                                saepe voluptatem
                                                porro necessitatibus animi ex voluptates omnis voluptatibus repudiandae
                                                labore debitis
                                                optio enim aspernatur consectetur cum exercitationem ipsum repellendus.
                                            </p>
                                        </div>
                                    </div>
                                    <div id="tabs-panel-3" class="tabs-panel">
                                        <div class="space-y-2">
                                            <h6>Settings Content</h6>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, a
                                                saepe voluptatem
                                                porro necessitatibus animi ex voluptates omnis voluptatibus repudiandae
                                                labore debitis
                                                optio enim aspernatur consectetur cum exercitationem ipsum repellendus.
                                            </p>
                                        </div>
                                    </div>
                                    <div id="tabs-panel-4" class="tabs-panel">
                                        <div class="space-y-2">
                                            <h6>Contact Content</h6>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, a
                                                saepe voluptatem
                                                porro necessitatibus animi ex voluptates omnis voluptatibus repudiandae
                                                labore debitis
                                                optio enim aspernatur consectetur cum exercitationem ipsum repellendus.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Basic Tab Ends -->

        <!-- Card: Tab With Icon Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tab With Icon</h4>

                <p class="card-subtitle">Example of tabs with icon.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content overflow-auto">
                        <div class="mx-auto w-[40rem] rounded-primary bg-white shadow dark:bg-slate-800">
                            <div class="tabs">
                                <ul class="tabs-list">
                                    <li class="tabs-item">
                                        <button class="tabs-btn active" data-panel-id="#tabs-panel-1" type="button">
                                            <i data-feather="user" width="1rem" height="1rem"></i>
                                            <span>Profile</span>
                                        </button>
                                    </li>
                                    <li class="tabs-item">
                                        <button class="tabs-btn" data-panel-id="#tabs-panel-2" type="button">
                                            <i data-feather="pie-chart" width="1rem" height="1rem"></i>
                                            <span>Dashboard</span>
                                        </button>
                                    </li>
                                    <li class="tabs-item">
                                        <button class="tabs-btn" data-panel-id="#tabs-panel-3" type="button">
                                            <i data-feather="settings" width="1rem" height="1rem"></i>
                                            <span>Settings</span>
                                        </button>
                                    </li>
                                    <li class="tabs-item">
                                        <button class="tabs-btn" data-panel-id="#tabs-panel-4" type="button">
                                            <i data-feather="sliders" width="1rem" height="1rem"></i>
                                            <span>Contacts</span>
                                        </button>
                                    </li>
                                </ul>
                                <div class="tabs-content">
                                    <div id="tabs-panel-1" class="tabs-panel active">
                                        <div class="space-y-2">
                                            <h6>Profile Content</h6>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, a
                                                saepe voluptatem
                                                porro necessitatibus animi ex voluptates omnis voluptatibus repudiandae
                                                labore debitis
                                                optio enim aspernatur consectetur cum exercitationem ipsum repellendus.
                                            </p>
                                        </div>
                                    </div>
                                    <div id="tabs-panel-2" class="tabs-panel">
                                        <div class="space-y-2">
                                            <h6>Dashboard Content</h6>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, a
                                                saepe voluptatem
                                                porro necessitatibus animi ex voluptates omnis voluptatibus repudiandae
                                                labore debitis
                                                optio enim aspernatur consectetur cum exercitationem ipsum repellendus.
                                            </p>
                                        </div>
                                    </div>
                                    <div id="tabs-panel-3" class="tabs-panel">
                                        <div class="space-y-2">
                                            <h6>Settings Content</h6>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, a
                                                saepe voluptatem
                                                porro necessitatibus animi ex voluptates omnis voluptatibus repudiandae
                                                labore debitis
                                                optio enim aspernatur consectetur cum exercitationem ipsum repellendus.
                                            </p>
                                        </div>
                                    </div>
                                    <div id="tabs-panel-4" class="tabs-panel">
                                        <div class="space-y-2">
                                            <h6>Settings Content</h6>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, a
                                                saepe voluptatem
                                                porro necessitatibus animi ex voluptates omnis voluptatibus repudiandae
                                                labore debitis
                                                optio enim aspernatur consectetur cum exercitationem ipsum repellendus.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Tab With Icon Ends -->

        <!-- Card: Tab With Badge Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tab With Badge</h4>

                <p class="card-subtitle">Example of tabs with badge indicator.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content overflow-auto">
                        <div class="mx-auto w-[40rem] rounded-primary bg-white shadow dark:bg-slate-800">
                            <div class="tabs">
                                <ul class="tabs-list">
                                    <li class="tabs-item">
                                        <button class="tabs-btn active" data-panel-id="#tabs-panel-1" type="button">
                                            <span>Profile</span>
                                            <span class="badge badge-primary badge-rounded">2+</span>
                                        </button>
                                    </li>
                                    <li class="tabs-item">
                                        <button class="tabs-btn" data-panel-id="#tabs-panel-2" type="button">
                                            <span>Dashboard</span>
                                        </button>
                                    </li>
                                    <li class="tabs-item">
                                        <button class="tabs-btn" data-panel-id="#tabs-panel-3" type="button">
                                            <span>Settings</span>
                                        </button>
                                    </li>
                                    <li class="tabs-item">
                                        <button class="tabs-btn" data-panel-id="#tabs-panel-4" type="button">
                                            <span>Contacts</span>
                                        </button>
                                    </li>
                                </ul>
                                <div class="tabs-content">
                                    <div id="tabs-panel-1" class="tabs-panel active">
                                        <div class="space-y-2">
                                            <h6>Profile Content</h6>

                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
                                                tenetur, laboriosam
                                                voluptatem vero, ratione sint neque atque distinctio fugit excepturi
                                                assumenda
                                                perferendis aperiam architecto quam adipisci dolore ea quod tempore.
                                            </p>
                                        </div>
                                    </div>

                                    <div id="tabs-panel-2" class="tabs-panel">
                                        <div class="space-y-2">
                                            <h6>Dashboard Content</h6>

                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
                                                tenetur, laboriosam
                                                voluptatem vero, ratione sint neque atque distinctio fugit excepturi
                                                assumenda
                                                perferendis aperiam architecto quam adipisci dolore ea quod tempore.
                                            </p>
                                        </div>
                                    </div>

                                    <div id="tabs-panel-3" class="tabs-panel">
                                        <div class="space-y-2">
                                            <h6>Settings Content</h6>

                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
                                                tenetur, laboriosam
                                                voluptatem vero, ratione sint neque atque distinctio fugit excepturi
                                                assumenda
                                                perferendis aperiam architecto quam adipisci dolore ea quod tempore.
                                            </p>
                                        </div>
                                    </div>

                                    <div id="tabs-panel-4" class="tabs-panel">
                                        <div class="space-y-2">
                                            <h6>Contact Content</h6>

                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
                                                tenetur, laboriosam
                                                voluptatem vero, ratione sint neque atque distinctio fugit excepturi
                                                assumenda
                                                perferendis aperiam architecto quam adipisci dolore ea quod tempore.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Tab With Badge Ends -->

        <!-- Card: Pill Tab Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pill Tabs</h4>

                <p class="card-subtitle">Example of tabs with pill style.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content overflow-auto">
                        <div class="mx-auto w-[40rem] rounded-primary bg-white p-4 shadow dark:bg-slate-800">
                            <div class="tabs tabs-pill">
                                <ul class="tabs-list">
                                    <li class="tabs-item">
                                        <button class="tabs-btn active" data-panel-id="#tabs-panel-1" type="button">
                                            <span>Profile</span>
                                        </button>
                                    </li>
                                    <li class="tabs-item">
                                        <button class="tabs-btn" data-panel-id="#tabs-panel-2" type="button">
                                            <span>Dashboard</span>
                                        </button>
                                    </li>
                                    <li class="tabs-item">
                                        <button class="tabs-btn" data-panel-id="#tabs-panel-3" type="button">
                                            <span>Settings</span>
                                        </button>
                                    </li>
                                    <li class="tabs-item">
                                        <button class="tabs-btn" data-panel-id="#tabs-panel-4" type="button">
                                            <span>Contacts</span>
                                        </button>
                                    </li>
                                </ul>
                                <div class="tabs-content">
                                    <div id="tabs-panel-1" class="tabs-panel active">
                                        <div class="space-y-2">
                                            <h6>Profile Content</h6>

                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
                                                tenetur, laboriosam
                                                voluptatem vero, ratione sint neque atque distinctio fugit excepturi
                                                assumenda
                                                perferendis aperiam architecto quam adipisci dolore ea quod tempore.
                                            </p>
                                        </div>
                                    </div>

                                    <div id="tabs-panel-2" class="tabs-panel">
                                        <div class="space-y-2">
                                            <h6>Dashboard Content</h6>

                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
                                                tenetur, laboriosam
                                                voluptatem vero, ratione sint neque atque distinctio fugit excepturi
                                                assumenda
                                                perferendis aperiam architecto quam adipisci dolore ea quod tempore.
                                            </p>
                                        </div>
                                    </div>

                                    <div id="tabs-panel-3" class="tabs-panel">
                                        <div class="space-y-2">
                                            <h6>Settings Content</h6>

                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
                                                tenetur, laboriosam
                                                voluptatem vero, ratione sint neque atque distinctio fugit excepturi
                                                assumenda
                                                perferendis aperiam architecto quam adipisci dolore ea quod tempore.
                                            </p>
                                        </div>
                                    </div>

                                    <div id="tabs-panel-4" class="tabs-panel">
                                        <div class="space-y-2">
                                            <h6>Contacts Content</h6>

                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
                                                tenetur, laboriosam
                                                voluptatem vero, ratione sint neque atque distinctio fugit excepturi
                                                assumenda
                                                perferendis aperiam architecto quam adipisci dolore ea quod tempore.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Pill Tab Ends -->

        <!-- Card: Vertical Tab Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Vertical Tabs</h4>

                <p class="card-subtitle">Example of vertical tabs.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content overflow-auto">
                        <div class="mx-auto w-[40rem] rounded-primary bg-white py-2 shadow dark:bg-slate-800">
                            <div class="tabs tabs-vertical">
                                <ul class="tabs-list">
                                    <li class="tabs-item">
                                        <button class="tabs-btn active" data-panel-id="#tabs-panel-1" type="button">
                                            <span>Profile</span>
                                        </button>
                                    </li>
                                    <li class="tabs-item">
                                        <button class="tabs-btn" data-panel-id="#tabs-panel-2" type="button">
                                            <span>Dashboard</span>
                                        </button>
                                    </li>
                                    <li class="tabs-item">
                                        <button class="tabs-btn" data-panel-id="#tabs-panel-3" type="button">
                                            <span>Settings</span>
                                        </button>
                                    </li>
                                    <li class="tabs-item">
                                        <button class="tabs-btn" data-panel-id="#tabs-panel-4" type="button">
                                            <span>Contacts</span>
                                        </button>
                                    </li>
                                </ul>
                                <div class="tabs-content">
                                    <div id="tabs-panel-1" class="tabs-panel active">
                                        <div class="space-y-2">
                                            <h6>Profile Content</h6>

                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
                                                tenetur, laboriosam
                                                voluptatem vero, ratione sint neque atque distinctio fugit excepturi
                                                assumenda
                                                perferendis aperiam architecto quam adipisci dolore ea quod tempore.
                                            </p>
                                        </div>
                                    </div>

                                    <div id="tabs-panel-2" class="tabs-panel">
                                        <div class="space-y-2">
                                            <h6>Dashboard Content</h6>

                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
                                                tenetur, laboriosam
                                                voluptatem vero, ratione sint neque atque distinctio fugit excepturi
                                                assumenda
                                                perferendis aperiam architecto quam adipisci dolore ea quod tempore.
                                            </p>
                                        </div>
                                    </div>

                                    <div id="tabs-panel-3" class="tabs-panel">
                                        <div class="space-y-2">
                                            <h6>Settings Content</h6>

                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
                                                tenetur, laboriosam
                                                voluptatem vero, ratione sint neque atque distinctio fugit excepturi
                                                assumenda
                                                perferendis aperiam architecto quam adipisci dolore ea quod tempore.
                                            </p>
                                        </div>
                                    </div>

                                    <div id="tabs-panel-4" class="tabs-panel">
                                        <div class="space-y-2">
                                            <h6>Contacts Content</h6>

                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
                                                tenetur, laboriosam
                                                voluptatem vero, ratione sint neque atque distinctio fugit excepturi
                                                assumenda
                                                perferendis aperiam architecto quam adipisci dolore ea quod tempore.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Vertical Tab Ends -->

        <!-- Card: Vertical Tab With Icon Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Vertical Tabs With Icon</h4>

                <p class="card-subtitle">Example of vertical tabs with icon.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content overflow-auto">
                        <div class="mx-auto w-[40rem] rounded-primary bg-white py-2 shadow dark:bg-slate-800">
                            <div class="tabs tabs-vertical">
                                <ul class="tabs-list">
                                    <li class="tabs-item">
                                        <button class="tabs-btn active" data-panel-id="#tabs-panel-1" type="button">
                                            <i data-feather="user" width="1rem" height="1rem"></i>
                                            <span>Profile</span>
                                        </button>
                                    </li>
                                    <li class="tabs-item">
                                        <button class="tabs-btn" data-panel-id="#tabs-panel-2" type="button">
                                            <i data-feather="pie-chart" width="1rem" height="1rem"></i>
                                            <span>Dashboard</span>
                                        </button>
                                    </li>
                                    <li class="tabs-item">
                                        <button class="tabs-btn" data-panel-id="#tabs-panel-3" type="button">
                                            <i data-feather="settings" width="1rem" height="1rem"></i>
                                            <span>Settings</span>
                                        </button>
                                    </li>
                                    <li class="tabs-item">
                                        <button class="tabs-btn" data-panel-id="#tabs-panel-4" type="button">
                                            <i data-feather="sliders" width="1rem" height="1rem"></i>
                                            <span>Contacts</span>
                                        </button>
                                    </li>
                                </ul>
                                <div class="tabs-content">
                                    <div id="tabs-panel-1" class="tabs-panel active">
                                        <div class="space-y-2">
                                            <h6>Profile Content</h6>

                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
                                                tenetur, laboriosam
                                                voluptatem vero, ratione sint neque atque distinctio fugit excepturi
                                                assumenda
                                                perferendis aperiam architecto quam adipisci dolore ea quod tempore.
                                            </p>
                                        </div>
                                    </div>

                                    <div id="tabs-panel-2" class="tabs-panel">
                                        <div class="space-y-2">
                                            <h6>Dashboard Content</h6>

                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
                                                tenetur, laboriosam
                                                voluptatem vero, ratione sint neque atque distinctio fugit excepturi
                                                assumenda
                                                perferendis aperiam architecto quam adipisci dolore ea quod tempore.
                                            </p>
                                        </div>
                                    </div>

                                    <div id="tabs-panel-3" class="tabs-panel">
                                        <div class="space-y-2">
                                            <h6>Settings Content</h6>

                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
                                                tenetur, laboriosam
                                                voluptatem vero, ratione sint neque atque distinctio fugit excepturi
                                                assumenda
                                                perferendis aperiam architecto quam adipisci dolore ea quod tempore.
                                            </p>
                                        </div>
                                    </div>

                                    <div id="tabs-panel-4" class="tabs-panel">
                                        <div class="space-y-2">
                                            <h6>Contacts Content</h6>

                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
                                                tenetur, laboriosam
                                                voluptatem vero, ratione sint neque atque distinctio fugit excepturi
                                                assumenda
                                                perferendis aperiam architecto quam adipisci dolore ea quod tempore.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Vertical Tab With Icon Ends -->

        <!-- Card: Disable Tab Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Disabled Tab</h4>

                <p class="card-subtitle">Example of disabled tab.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content overflow-auto">
                        <div class="mx-auto w-[40rem] rounded-primary bg-white shadow dark:bg-slate-800">
                            <div class="tabs">
                                <ul class="tabs-list">
                                    <li class="tabs-item">
                                        <button class="tabs-btn active" data-panel-id="#tabs-panel-1" type="button">
                                            <span>Profile</span>
                                        </button>
                                    </li>
                                    <li class="tabs-item">
                                        <button class="tabs-btn" data-panel-id="#tabs-panel-2" type="button">
                                            <span>Dashboard</span>
                                        </button>
                                    </li>
                                    <li class="tabs-item">
                                        <button class="tabs-btn" data-panel-id="#tabs-panel-3" type="button">
                                            <span>Settings</span>
                                        </button>
                                    </li>
                                    <li class="tabs-item">
                                        <button class="tabs-btn" data-panel-id="#tabs-panel-4" type="button">
                                            <span>Contacts</span>
                                        </button>
                                    </li>
                                    <li class="tabs-item">
                                        <button class="tabs-btn disabled" data-panel-id="#tabs-panel-5"
                                            type="button">
                                            <span>Disabled</span>
                                        </button>
                                    </li>
                                </ul>
                                <div class="tabs-content">
                                    <div id="tabs-panel-1" class="tabs-panel active">
                                        <div class="space-y-2">
                                            <h6>Profile Content</h6>

                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
                                                tenetur, laboriosam
                                                voluptatem vero, ratione sint neque atque distinctio fugit excepturi
                                                assumenda
                                                perferendis aperiam architecto quam adipisci dolore ea quod tempore.
                                            </p>
                                        </div>
                                    </div>

                                    <div id="tabs-panel-2" class="tabs-panel">
                                        <div class="space-y-2">
                                            <h6>Dashboard Content</h6>

                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
                                                tenetur, laboriosam
                                                voluptatem vero, ratione sint neque atque distinctio fugit excepturi
                                                assumenda
                                                perferendis aperiam architecto quam adipisci dolore ea quod tempore.
                                            </p>
                                        </div>
                                    </div>

                                    <div id="tabs-panel-3" class="tabs-panel">
                                        <div class="space-y-2">
                                            <h6>Settings Content</h6>

                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
                                                tenetur, laboriosam
                                                voluptatem vero, ratione sint neque atque distinctio fugit excepturi
                                                assumenda
                                                perferendis aperiam architecto quam adipisci dolore ea quod tempore.
                                            </p>
                                        </div>
                                    </div>

                                    <div id="tabs-panel-4" class="tabs-panel">
                                        <div class="space-y-2">
                                            <h6>Contacts Content</h6>

                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
                                                tenetur, laboriosam
                                                voluptatem vero, ratione sint neque atque distinctio fugit excepturi
                                                assumenda
                                                perferendis aperiam architecto quam adipisci dolore ea quod tempore.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Disable Tab Ends -->
    </div>
    <!-- Tabs Ends -->
</x-app-layout>
