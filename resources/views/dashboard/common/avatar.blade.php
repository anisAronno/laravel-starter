<x-app-layout>
<!-- Page Title Starts -->

  <x-page-title page="Components" header="Avatar" />

  <!-- Page Title Ends -->

  <!-- Avatar Starts -->
  <div class="space-y-6">
    <!-- Card: Avatar Shape Starts -->
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Avatar Shapes</h4>

        <p class="card-subtitle">
          Use <code>avatar</code> class to style an avatar. Your can also use the following classes
          <code>avatar-square</code>, <code>avatar-rounded</code>, <code>avatar-circle</code> to change the
          shape of the avatar.
        </p>

        <div class="code-viewer mt-4">
          <div class="flex flex-wrap items-center gap-6">
            <div class="avatar avatar-square">
              <img class="avatar-img" src="{{asset('images/avatar1.png')}}" alt="Avatar 1" />
            </div>
            <div class="avatar avatar-rounded">
              <img class="avatar-img" src="{{asset('images/avatar2.png')}}" alt="Avatar 2" />
            </div>
            <div class="avatar avatar-circle">
              <img class="avatar-img" src="{{asset('images/avatar3.png')}}" alt="Avatar 3" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Card: Avatar Shape Ends -->

    <!-- Card: Avatar Size Starts -->
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Avatar Sizes</h4>

        <p class="card-subtitle">
          Use
          <code>avatar-sm</code>
          ,
          <code>avatar-md</code>
          and
          <code>avatar-lg</code>
          to size avatars. Default is
          <code>avatar-md</code>.
        </p>

        <div class="code-viewer mt-4">
          <div class="flex flex-wrap items-center gap-6">
            <div class="avatar avatar-circle avatar-xs">
              <img class="avatar-img" src="{{asset('images/avatar1.png')}}" alt="Avatar 1" />
            </div>
            <div class="avatar avatar-circle avatar-sm">
              <img class="avatar-img" src="{{asset('images/avatar2.png')}}" alt="Avatar 2" />
            </div>
            <div class="avatar avatar-circle avatar-md">
              <img class="avatar-img" src="{{asset('images/avatar3.png')}}" alt="Avatar 3" />
            </div>
            <div class="avatar avatar-circle avatar-lg">
              <img class="avatar-img" src="{{asset('images/avatar4.png')}}" alt="Avatar 4" />
            </div>
            <div class="avatar avatar-circle avatar-xl">
              <img class="avatar-img" src="{{asset('images/avatar5.png')}}" alt="Avatar 5" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Card: Avatar Size Ends -->

    <!-- Card: Avatar With Placeholder Icon Starts -->
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Avatar With Placeholder Icons</h4>

        <p class="card-subtitle">Example of avatar with placeholder icons.</p>

        <div class="code-viewer mt-4">
          <div class="flex flex-wrap items-center gap-6">
            <div class="avatar avatar-square">
              <span class="avatar-icon">
                <i data-feather="user"></i>
              </span>
            </div>
            <div class="avatar avatar-rounded">
              <span class="avatar-icon">
                <i data-feather="user"></i>
              </span>
            </div>
            <div class="avatar avatar-circle">
              <span class="avatar-icon">
                <i data-feather="user"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Card: Avatar With Placeholder Icon Ends -->

    <!-- Card: Avatar With Placeholder Text Starts -->
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Avatar With Placeholder Text</h4>

        <p class="card-subtitle">Example of avatar with placeholder text.</p>

        <div class="code-viewer mt-4">
          <div class="flex flex-wrap items-center gap-6">
            <div class="avatar avatar-square">
              <span class="avatar-text">
                <span>AB</span>
              </span>
            </div>
            <div class="avatar avatar-rounded">
              <span class="avatar-text">
                <span>AB</span>
              </span>
            </div>
            <div class="avatar avatar-circle">
              <span class="avatar-text">
                <span>AB</span>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Card: Avatar With Placeholder Text Ends -->

    <!-- Card: Avatar With Theme Color Starts -->
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Avatar With Theme Color</h4>

        <p class="card-subtitle">
          Use any contextual color class <code>avatar-*</code> to change the background color of the avatar.
        </p>

        <div class="code-viewer mt-4">
          <div class="flex flex-col justify-center gap-6">
            <!-- Icon Avatars -->
            <div class="flex flex-wrap items-center gap-6">
              <div class="avatar avatar-circle avatar-primary">
                <span class="avatar-icon">
                  <i data-feather="user"></i>
                </span>
              </div>
              <div class="avatar avatar-circle avatar-secondary">
                <span class="avatar-icon">
                  <i data-feather="user"></i>
                </span>
              </div>
              <div class="avatar avatar-circle avatar-success">
                <span class="avatar-icon">
                  <i data-feather="user"></i>
                </span>
              </div>
              <div class="avatar avatar-circle avatar-danger">
                <span class="avatar-icon">
                  <i data-feather="user"></i>
                </span>
              </div>
              <div class="avatar avatar-circle avatar-warning">
                <span class="avatar-icon">
                  <i data-feather="user"></i>
                </span>
              </div>
              <div class="avatar avatar-circle avatar-info">
                <span class="avatar-icon">
                  <i data-feather="user"></i>
                </span>
              </div>
              <div class="avatar avatar-circle avatar-dark">
                <span class="avatar-icon">
                  <i data-feather="user"></i>
                </span>
              </div>
            </div>
            <!-- Text Avatars -->
            <div class="flex flex-wrap items-center gap-6">
              <div class="avatar avatar-circle avatar-primary">
                <span class="avatar-text">
                  <span>AB</span>
                </span>
              </div>
              <div class="avatar avatar-circle avatar-secondary">
                <span class="avatar-text">
                  <span>AB</span>
                </span>
              </div>
              <div class="avatar avatar-circle avatar-success">
                <span class="avatar-text">
                  <span>AB</span>
                </span>
              </div>
              <div class="avatar avatar-circle avatar-danger">
                <span class="avatar-text">
                  <span>AB</span>
                </span>
              </div>
              <div class="avatar avatar-circle avatar-warning">
                <span class="avatar-text">
                  <span>AB</span>
                </span>
              </div>
              <div class="avatar avatar-circle avatar-info">
                <span class="avatar-text">
                  <span>AB</span>
                </span>
              </div>
              <div class="avatar avatar-circle avatar-dark">
                <span class="avatar-text">
                  <span>AB</span>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Card: Avatar With Theme Color Ends -->

    <!-- Card: Avatar With Status Indicator Starts -->
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Avatar With Status Indicator</h4>

        <p class="card-subtitle">Example of avatar with status indicator.</p>

        <div class="code-viewer mt-4">
          <div class="flex gap-6">
            <div class="avatar avatar-circle avatar-indicator avatar-indicator-online">
              <img class="avatar-img" src="{{asset('images/avatar1.png')}}" alt="Avatar 1" />
            </div>
            <div class="avatar avatar-circle avatar-indicator avatar-indicator-offline">
              <img class="avatar-img" src="{{asset('images/avatar2.png')}}" alt="Avatar 2" />
            </div>
            <div class="avatar avatar-circle avatar-indicator avatar-indicator-top avatar-indicator-busy">
              <img class="avatar-img" src="{{asset('images/avatar3.png')}}" alt="Avatar 3" />
            </div>
            <div class="avatar avatar-circle avatar-indicator avatar-indicator-top avatar-indicator-away">
              <img class="avatar-img" src="{{asset('images/avatar4.png')}}" alt="Avatar 4" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Card: Avatar With Status Indicator Ends -->

    <!-- Card: Avatar Group Starts -->
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Avatar Group</h4>

        <p class="card-subtitle">Use <code>avatar-group</code> to group avatars.</p>

        <div class="code-viewer mt-4">
          <div class="avatar-group">
            <div class="avatar avatar-circle avatar-md">
              <img class="avatar-img" src="{{asset('images/avatar1.png')}}" alt="Avatar 1" />
            </div>
            <div class="avatar avatar-circle avatar-md">
              <img class="avatar-img" src="{{asset('images/avatar2.png')}}" alt="Avatar 2" />
            </div>
            <div class="avatar avatar-circle avatar-md">
              <img class="avatar-img" src="{{asset('images/avatar3.png')}}" alt="Avatar 3" />
            </div>
            <div class="avatar avatar-circle avatar-md">
              <img class="avatar-img" src="{{asset('images/avatar4.png')}}" alt="Avatar 4" />
            </div>
            <div class="avatar avatar-circle avatar-md">
              <img class="avatar-img" src="{{asset('images/avatar5.png')}}" alt="Avatar 5" />
            </div>
            <div class="avatar avatar-circle">
              <span class="avatar-text">
                <span>2+</span>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Card: Avatar Group Ends -->
  </div>
  <!-- Avatar Ends --></x-app-layout>
