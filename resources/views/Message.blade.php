@if ($errors->any())
    <div class="text-red-500">
        @if (count($errors) > 1 )
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @else
        {{$errors->first()}}
        @endif
    </div>
@endif


@if(session()->has('message'))
<div class=" w-96 bg-blue-200 text-red-600 hover:text-red-700 rounded-sm focus:ring-2 focus:ring-red-300 p-1.5 hover:bg-blue-100 inline-flex items-center justify-center  dark:text-red-100 dark:hover:text-red-100 dark:bg-red-800 dark:hover:bg-red-700 ">
    {{ session('message') }}
</div>
@endif