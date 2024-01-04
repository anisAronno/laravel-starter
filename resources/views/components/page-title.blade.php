@props(['header', 'page' => ''])

<div class="mb-6 flex flex-col justify-between gap-y-1 sm:flex-row sm:gap-y-0">
    <h5>{{ $header }}</h5>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.dashboard') }}">Home</a>
        </li>
        @if ($page)
            <li class="breadcrumb-item">
                <a href="{{ url()->current() }}">{{ $page }}</a>
            </li>
        @endif

        <li class="breadcrumb-item">
            <a href="#">{{ $header }}</a>
        </li>
    </ol>
</div>
