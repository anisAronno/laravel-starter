<x-app-layout>
    <!-- Page Title Starts -->
    <x-page-title page="Components" header="Modal" />

    <!-- Page Title Ends -->

    <!-- Modal Starts -->
    <div class="space-y-6">
        <!-- Card: Basic Modal Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Modal</h4>

                <p class="card-subtitle">Example of basic modal.</p>

                <div class="code-viewer mt-4">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-basic">
                        Open Basic Modal
                    </button>

                    <div class="modal" id="modal-basic">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="flex items-center justify-between">
                                        <h6>Basic Modal</h6>
                                        <button type="button"
                                            class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
                                            data-dismiss="modal">
                                            <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <p class="text-sm text-slate-500 dark:text-slate-300">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi ipsa ullam
                                        quibusdam non
                                        veritatis corporis rem mollitia ab unde? Culpa ducimus animi provident, harum
                                        placeat
                                        perspiciatis fuga velit dicta a.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <div class="flex items-center justify-end gap-4">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary">Done</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Basic Modal Ends -->

        <!-- Card: Modal Size Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Modal Sizes</h4>

                <p class="card-subtitle">
                    Use <code>modal-sm</code> or <code>modal-lg</code> class to change the size of the modal. Default
                    size is <code>modal-md</code>. You can also use width utilities to change the size of the modal.
                </p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content">
                        <div class="flex flex-wrap gap-2">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-sm">
                                Small Modal
                            </button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                                Large Modal
                            </button>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modal-custom-size">
                                Custom Size Modal
                            </button>
                        </div>

                        <!-- Small Modal -->
                        <div class="modal modal-sm" id="modal-sm">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="flex items-center justify-between">
                                            <h6>Small Modal</h6>
                                            <button type="button"
                                                class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
                                                data-dismiss="modal">
                                                <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-sm text-slate-500 dark:text-slate-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam recusandae
                                            possimus nam,
                                            eaque omnis voluptates, doloremque explicabo aspernatur magnam veniam
                                            dolorum dolore id
                                            tenetur laudantium ex obcaecati, porro doloribus cumque.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="flex items-center justify-end gap-4">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Large Modal -->
                        <div class="modal modal-lg" id="modal-lg">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="flex items-center justify-between">
                                            <h6>Large Modal</h6>
                                            <button type="button"
                                                class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
                                                data-dismiss="modal">
                                                <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-sm text-slate-500 dark:text-slate-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam recusandae
                                            possimus nam,
                                            eaque omnis voluptates, doloremque explicabo aspernatur magnam veniam
                                            dolorum dolore id
                                            tenetur laudantium ex obcaecati, porro doloribus cumque.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="flex items-center justify-end gap-4">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Custom Size Modal -->
                        <div class="modal" id="modal-custom-size">
                            <div class="modal-dialog max-w-5xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="flex items-center justify-between">
                                            <h6>Custom Size Modal</h6>
                                            <button type="button"
                                                class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
                                                data-dismiss="modal">
                                                <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-sm text-slate-500 dark:text-slate-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam recusandae
                                            possimus nam,
                                            eaque omnis voluptates, doloremque explicabo aspernatur magnam veniam
                                            dolorum dolore id
                                            tenetur laudantium ex obcaecati, porro doloribus cumque.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="flex items-center justify-end gap-4">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="code-viewer-source">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-sm">
                            Small Modal
                        </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                            Large Modal
                        </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#modal-custom-size">
                            Custom Size Modal
                        </button>

                        <!-- Small Modal -->
                        <div class="modal modal-sm" id="modal-sm">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <!-- ..... -->
                                    </div>
                                    <div class="modal-body">
                                        <!-- ..... -->
                                    </div>
                                    <div class="modal-footer">
                                        <!-- ..... -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Large Modal -->
                        <div class="modal modal-lg" id="modal-lg">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <!-- ..... -->
                                    </div>
                                    <div class="modal-body">
                                        <!-- ..... -->
                                    </div>
                                    <div class="modal-footer">
                                        <!-- ..... -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Custom Size Modal -->
                        <div class="modal" id="modal-custom-size">
                            <div class="modal-dialog max-w-5xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <!-- ..... -->
                                    </div>
                                    <div class="modal-body">
                                        <!-- ..... -->
                                    </div>
                                    <div class="modal-footer">
                                        <!-- ..... -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Modal Size Ends -->

        <!-- Card: Full Screen Modal Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Fullscreen Modal</h4>

                <p class="card-subtitle">Example of full screen modal.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#modal-full-screen">
                            Open Full Screen Modal
                        </button>

                        <div class="modal modal-full" id="modal-full-screen">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="flex items-center justify-between">
                                            <h6>Full Screen Modal</h6>
                                            <button type="button"
                                                class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
                                                data-dismiss="modal">
                                                <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-sm text-slate-500 dark:text-slate-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam recusandae
                                            possimus nam,
                                            eaque omnis voluptates, doloremque explicabo aspernatur magnam veniam
                                            dolorum dolore id
                                            tenetur laudantium ex obcaecati, porro doloribus cumque.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="flex items-center justify-end gap-4">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="code-viewer-source">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#modal-full-screen">
                            Open Full Screen Modal
                        </button>

                        <div class="modal modal-full" id="modal-full-screen">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <!-- ..... -->
                                    </div>
                                    <div class="modal-body">
                                        <!-- ..... -->
                                    </div>
                                    <div class="modal-footer">
                                        <!-- ..... -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Full Screen Modal Ends -->

        <!-- Card: Centered Modal Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Centered Modal</h4>

                <p class="card-subtitle">Example of centered modal.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#modal-centered">
                            Open Centered Modal
                        </button>

                        <div class="modal modal-centered" id="modal-centered">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="flex items-center justify-between">
                                            <h6>Centered Modal</h6>
                                            <button type="button"
                                                class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
                                                data-dismiss="modal">
                                                <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-sm text-slate-500 dark:text-slate-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam recusandae
                                            possimus nam,
                                            eaque omnis voluptates, doloremque explicabo aspernatur magnam veniam
                                            dolorum dolore id
                                            tenetur laudantium ex obcaecati, porro doloribus cumque.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="flex items-center justify-end gap-4">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="code-viewer-source">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#modal-centered">
                            Open Centered Modal
                        </button>

                        <div class="modal modal-centered" id="modal-centered">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <!-- ..... -->
                                    </div>
                                    <div class="modal-body">
                                        <!-- ..... -->
                                    </div>
                                    <div class="modal-footer">
                                        <!-- ..... -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Centered Modal Ends -->

        <!-- Card: Scrollable Modal Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Scrollable Modal</h4>

                <p class="card-subtitle">Example of scrollable modal.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#modal-scrollable">
                            Open Scrollable Modal
                        </button>

                        <div class="modal" id="modal-scrollable">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="flex items-center justify-between">
                                            <h6>Scrollable Modal</h6>
                                            <button type="button"
                                                class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
                                                data-dismiss="modal">
                                                <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="modal-body h-96">
                                        <p class="text-sm text-slate-500 dark:text-slate-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sequi
                                            omnis labore
                                            unde voluptas quis praesentium, ea, modi quibusdam inventore tempora fugit
                                            magni
                                            temporibus corrupti sed similique. Ducimus maxime in, mollitia quo nam magni
                                            debitis
                                            temporibus obcaecati ab quasi iste numquam id consequuntur a ex, recusandae
                                            inventore
                                            pariatur modi aut accusamus at repudiandae possimus! Provident et nihil
                                            saepe debitis,
                                            quaerat eos placeat ad esse veniam labore architecto in possimus asperiores
                                            quis totam
                                            officiis dolores, repudiandae dolorum qui corporis. Iste cumque voluptas
                                            officiis odio
                                            dolore minus? Doloribus sapiente illum autem hic soluta aliquid debitis quod
                                            perferendis
                                            fugiat minima cumque, laudantium ratione, aperiam ipsa repudiandae facilis
                                            accusantium
                                            enim veniam nam quae in dolorum. In ducimus aliquid consequatur voluptatibus
                                            explicabo
                                            dolor. Rerum autem, blanditiis inventore eos totam, doloribus excepturi
                                            magni tenetur
                                            perspiciatis sed tempore laboriosam id voluptatem necessitatibus eum
                                            adipisci, assumenda
                                            odio maiores nisi voluptas recusandae explicabo molestiae! Voluptas, dolores
                                            ex
                                            perferendis explicabo iure similique laudantium reprehenderit nam dolor.
                                            Laboriosam ex,
                                            perferendis voluptates iure, voluptatibus dignissimos sit nihil inventore
                                            natus quam
                                            autem suscipit error ullam facilis unde quis ratione odio labore nemo
                                            aspernatur nisi id
                                            ipsum! Dignissimos modi magnam at esse corrupti iure, inventore voluptas
                                            velit ipsum
                                            voluptate vitae quam accusantium ipsam quaerat ullam quasi dolores similique
                                            est animi
                                            vero eaque veniam tempora quis. Velit eos perferendis ea iusto ratione hic
                                            pariatur
                                            molestiae obcaecati provident repellendus nemo consectetur distinctio
                                            quisquam, delectus
                                            ullam. Impedit quos hic eum a quaerat unde nesciunt perferendis. Praesentium
                                            commodi
                                            veritatis adipisci deserunt molestiae repudiandae harum, qui rerum quo
                                            deleniti ab
                                            architecto ipsam fuga explicabo nulla similique nam eaque accusantium omnis
                                            unde
                                            recusandae laudantium! Culpa corrupti modi exercitationem delectus
                                            architecto veritatis
                                            expedita. Harum, ad commodi! Facilis quas consequuntur at veritatis natus
                                            obcaecati
                                            soluta labore fugit commodi? Officia incidunt quis porro qui quidem! Optio
                                            adipisci,
                                            quod, id culpa error ipsa obcaecati ullam suscipit iste earum omnis aliquam
                                            modi vel ex.
                                            Molestias, officia. Nemo voluptas dolor, maiores cumque, in esse ex maxime
                                            numquam,
                                            asperiores eius qui incidunt possimus quam laudantium reprehenderit.
                                            Consequuntur
                                            facilis harum labore. Ipsa illum porro modi maxime itaque nesciunt
                                            doloremque recusandae
                                            vitae fuga. Nemo soluta repellat exercitationem voluptates sapiente itaque a
                                            quod
                                            numquam quas sequi, voluptas dolorum eius praesentium autem voluptatibus
                                            laborum
                                            explicabo maiores asperiores velit repudiandae aut ratione rerum?
                                            Reprehenderit quam
                                            animi atque cumque quia, odit voluptatem sapiente unde ipsa, quis omnis
                                            consequuntur
                                            modi sed molestias! Voluptatem eligendi aliquam nesciunt dignissimos
                                            molestias soluta
                                            debitis nihil, quod ipsa atque earum, cumque, asperiores eveniet voluptate
                                            laborum
                                            distinctio minima magnam recusandae aut illo suscipit exercitationem veniam
                                            reiciendis?
                                            Eveniet libero vitae ipsum harum quae aut ducimus, quos, in modi non animi,
                                            nam
                                            cupiditate facere dicta! Veritatis, a quisquam. Culpa sint asperiores
                                            provident quae
                                            explicabo quod ex hic laudantium animi sed, ipsum cumque saepe veritatis a
                                            reprehenderit
                                            laborum. Nobis facilis quis et dolorem, deleniti veniam fugiat labore?
                                            Adipisci
                                            quibusdam alias velit aliquam facere temporibus laborum ipsum voluptatum
                                            omnis error
                                            nesciunt, voluptatibus iure ratione illo sequi veniam molestias earum!
                                            Temporibus
                                            possimus voluptates repellat ullam ratione animi dignissimos nihil velit,
                                            rerum iste
                                            laborum reprehenderit atque.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="flex items-center justify-end gap-4">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="code-viewer-source">
                        <button type="button" class="btn btn-primary" data-trigger="modal"
                            data-id="#modal-scrollable">
                            Open Scrollable Modal
                        </button>

                        <div class="modal" id="modal-scrollable">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <!-- ..... -->
                                    </div>
                                    <div class="modal-body h-96">
                                        <!-- ..... -->
                                    </div>
                                    <div class="modal-footer">
                                        <!-- ..... -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Scrollable Modal Ends -->

        <!-- Card: Controlled Modal Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Controlled Modal</h4>

                <p class="card-subtitle">Example of controlled modal.</p>

                <div id="controlled-modal-code-viewer" class="code-viewer mt-4" data-render-source="false">
                    <button type="button" class="btn btn-primary" id="btn-controlled-modal">
                        Open Controlled Modal
                    </button>

                    <div class="modal" id="modal-controlled">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="flex items-center justify-between">
                                        <h6>Controlled Modal</h6>
                                        <button type="button"
                                            class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
                                            data-dismiss="modal">
                                            <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <p class="text-sm text-slate-500 dark:text-slate-300">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam recusandae
                                        possimus nam,
                                        eaque omnis voluptates, doloremque explicabo aspernatur magnam veniam dolorum
                                        dolore id
                                        tenetur laudantium ex obcaecati, porro doloribus cumque.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <div class="flex items-center justify-end gap-4">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary">Done</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Control Modal Ends -->

        <!-- Card: Disabled Backdrop Modal Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Disabled Backdrop</h4>

                <p class="card-subtitle">Example of modal with disabled backdrop option.</p>

                <div class="code-viewer mt-4">
                    <div class="code-viewer-content">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#modal-backdrop">
                            Open Modal
                        </button>
                        <div class="modal" id="modal-backdrop" data-backdrop="false" data-keyboard="false">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="flex items-center justify-between">
                                            <h6>Disabled Backdrop Click</h6>
                                            <button type="button"
                                                class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
                                                data-dismiss="modal">
                                                <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-sm text-slate-500 dark:text-slate-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Est ducimus
                                            distinctio
                                            recusandae vitae, in ullam, sapiente praesentium nam architecto fugiat dolor
                                            alias
                                            voluptatum, nemo necessitatibus veniam quis obcaecati. Mollitia, eaque.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="flex items-center justify-end gap-4">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="code-viewer-source">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#modal-backdrop">
                            Open Modal
                        </button>

                        <div class="modal" id="modal-backdrop" data-backdrop="false" data-keyboard="false">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <!-- ..... -->
                                    </div>
                                    <div class="modal-body">
                                        <!-- ..... -->
                                    </div>
                                    <div class="modal-footer">
                                        <!-- ..... -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Disabled Backdrop Modal Ends -->
    </div>
    <!-- Modal Ends -->
</x-app-layout>
