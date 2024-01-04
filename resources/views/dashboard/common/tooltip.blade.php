<x-app-layout>
    <!-- Page Title Starts -->
 
    <x-page-title page="Components" header="Tooltip" />

    <!-- Page Title Ends -->

    <!-- Tooltip Starts -->
    <div class="space-y-6">
        <!-- Card: Basic Tooltip Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Tooltip</h4>

                <p class="card-subtitle">Example of basic tooltip.</p>

                <div class="code-viewer mt-4">
                    <button type="button" class="btn btn-primary" data-tooltip="tippy"
                        data-tippy-content="I am a tippy tooltip!">
                        Basic Tooltip
                    </button>
                </div>
            </div>
        </div>
        <!-- Card: Basic Tooltip Ends -->

        <!-- Card: Tooltip Arrow Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tooltip Arrows</h4>

                <p class="card-subtitle">Example of tooltip with or without arrows.</p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap gap-4">
                        <button type="button" class="btn btn-primary" data-tooltip="tippy" data-tippy-arrow="true"
                            data-tippy-content="I am a tippy tooltip!">
                            Arrow True
                        </button>
                        <button type="button" class="btn btn-primary" data-tooltip="tippy" data-tippy-arrow="false"
                            data-tippy-content="I am a tippy tooltip!">
                            Arrow False
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Tooltip Arrow Ends -->

        <!-- Card: Tooltip Placement Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tooltip Placements</h4>

                <p class="card-subtitle">
                    Example of different placements of tooltip. Default is
                    <code>data-placement="top"</code>
                </p>

                <div class="code-viewer mt-4">
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-content="I am a tippy tooltip!" data-tippy-arrow="false"
                            data-tippy-placement="top">
                            Top
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-content="I am a tippy tooltip!" data-tippy-arrow="false"
                            data-tippy-placement="top-start">
                            Top Start
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-content="I am a tippy tooltip!" data-tippy-arrow="false"
                            data-tippy-placement="top-end">
                            Top End
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-content="I am a tippy tooltip!" data-tippy-arrow="false"
                            data-tippy-placement="right">
                            Right
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-content="I am a tippy tooltip!" data-tippy-arrow="false"
                            data-tippy-placement="right-start">
                            Right Start
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-content="I am a tippy tooltip!" data-tippy-arrow="false"
                            data-tippy-placement="right-end">
                            Right End
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-content="I am a tippy tooltip!" data-tippy-arrow="false"
                            data-tippy-placement="bottom">
                            Bottom
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-content="I am a tippy tooltip!" data-tippy-arrow="false"
                            data-tippy-placement="bottom-start">
                            Bottom Start
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-content="I am a tippy tooltip!" data-tippy-arrow="false"
                            data-tippy-placement="bottom-end">
                            Bottom End
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-content="I am a tippy tooltip!" data-tippy-arrow="false"
                            data-tippy-placement="left">
                            Left
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-content="I am a tippy tooltip!" data-tippy-arrow="false"
                            data-tippy-placement="left-start">
                            Left Start
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-content="I am a tippy tooltip!" data-tippy-arrow="false"
                            data-tippy-placement="left-end">
                            Left End
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-content="I am a tippy tooltip!" data-tippy-arrow="false"
                            data-tippy-placement="auto">
                            Auto
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-content="I am a tippy tooltip!" data-tippy-arrow="false"
                            data-tippy-placement="auto-start">
                            Auto Start
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-content="I am a tippy tooltip!" data-tippy-arrow="false"
                            data-tippy-placement="auto-end">
                            Auto End
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Tooltip Placement Ends -->

        <!-- Card: Tooltip Animation Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tooltip Animation</h4>

                <p class="card-subtitle">
                    Example of tooltip with different animations. Default is
                    <code>data-tippy-animation="fade"</code>
                </p>

                <div class="code-viewer mt-4">
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-animation="fade" data-tippy-content="I am a tippy tooltip!">
                            Fade (Default)
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-animation="shift-away" data-tippy-content="I am a tippy tooltip!">
                            Shift Away
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-animation="shift-away-subtle" data-tippy-content="I am a tippy tooltip!">
                            Shift Away Subtle
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-animation="shift-away-extreme" data-tippy-content="I am a tippy tooltip!">
                            Shift Away Extreme
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-animation="shift-toward" data-tippy-content="I am a tippy tooltip!">
                            Shift Toward
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-animation="shift-toward-subtle" data-tippy-content="I am a tippy tooltip!">
                            Shift Toward Subtle
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-animation="shift-toward-extreme" data-tippy-content="I am a tippy tooltip!">
                            Shift Toward Extreme
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-animation="scale" data-tippy-content="I am a tippy tooltip!">
                            Scale
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-animation="scale-subtle" data-tippy-content="I am a tippy tooltip!">
                            Scale Subtle
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-animation="scale-extreme" data-tippy-content="I am a tippy tooltip!">
                            Scale Extreme
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-animation="perspective" data-tippy-content="I am a tippy tooltip!">
                            Perspective
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-animation="perspective-subtle" data-tippy-content="I am a tippy tooltip!">
                            Perspective Subtle
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-tooltip="tippy"
                            data-tippy-animation="perspective-extreme" data-tippy-content="I am a tippy tooltip!">
                            Perspective Extreme
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Tooltip Animation Ends -->

        <!-- Card: HTML Content In Tooltip Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">HTML Content in Tooltip</h4>

                <p class="card-subtitle">Use HTML as Tooltip content.</p>

                <div class="code-viewer mt-4">
                    <button type="button" class="btn btn-primary" data-tooltip="tippy"
                        data-tippy-content="I am a <strong>tippy</strong> tooltip!" data-tippy-allowHTML="true">
                        HTML Content
                    </button>
                </div>
            </div>
        </div>
        <!-- Card: HTML Content In Tooltip Ends -->

        <!-- Card: Tooltip Theme Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tooltip Themes</h4>

                <p class="card-subtitle">
                    Example of different themes of tooltip. Default is
                    <code>data-tippy-theme="translucent"</code>
                </p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap gap-4">
                        <button type="button" class="btn btn-primary" data-tooltip="tippy"
                            data-tippy-content="I am a tippy tooltip!" data-tippy-theme="light">
                            Light
                        </button>
                        <button type="button" class="btn btn-primary" data-tooltip="tippy"
                            data-tippy-content="I am a tippy tooltip!" data-tippy-theme="light-border">
                            Light Border
                        </button>
                        <button type="button" class="btn btn-primary" data-tooltip="tippy"
                            data-tippy-content="I am a tippy tooltip!" data-tippy-theme="material">
                            Material
                        </button>
                        <button type="button" class="btn btn-primary" data-tooltip="tippy"
                            data-tippy-content="I am a tippy tooltip!" data-tippy-theme="translucent">
                            Translucent
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Tooltip Theme Ends -->

        <!-- Card: Tooltip Trigger Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tooltip Trigger</h4>

                <p class="card-subtitle">Trigger tooltip on different events.</p>

                <div class="code-viewer mt-4">
                    <div class="flex flex-wrap gap-4">
                        <button type="button" class="btn btn-primary" data-tooltip="tippy"
                            data-tippy-content="I am a tippy tooltip!" data-tippy="mouseenter">
                            Trigger on mouseenter
                        </button>
                        <button type="button" class="btn btn-primary" data-tooltip="tippy"
                            data-tippy-content="I am a tippy tooltip!" data-tippy="focus">
                            Trigger on focus
                        </button>
                        <button type="button" class="btn btn-primary" data-tooltip="tippy"
                            data-tippy-content="I am a tippy tooltip!" data-tippy="click">
                            Trigger on click
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Tooltip Trigger Ends -->

        <!-- Card: Custom Tooltip Starts -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Custom Tooltip</h4>

                <p class="card-subtitle">Example of custom tooltip.</p>

                <div id="custom-tooltip-code-viewer" class="code-viewer mt-4" data-render-source="false">
                    <div class="code-viewer-content">
                        <button id="btn-custom-tooltip" type="button" class="btn btn-primary">Custom
                            Tooltip</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card: Custom Tooltip Ends -->
    </div>
    <!-- Tooltip Ends -->

    <script type="module">
        import tippy from 'tippy.js';

        const customTooltipSourceCode = `
              <button id="btn-custom-tooltip" type="button" class="btn btn-primary">
                Custom Tooltip
              </button>
      
              \<script\>
                tippy('#btn-custom-tooltip', {
                  content: 'I am a tippy tooltip',
                  placement: 'auto'
                })
              \<\/script\>
            `;
        const customTooltipCodeViewer = createCodeViewer('#custom-tooltip-code-viewer', customTooltipSourceCode);
        customTooltipCodeViewer.render();

        tippy('#btn-custom-tooltip', {
            content: 'I am a tippy tooltip',
            placement: 'auto',
        });
    </script>
</x-app-layout>
