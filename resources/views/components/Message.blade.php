@if ($errors->any())
    <div class="flex flex-col gap-4">
        @if (count($errors) > 1)
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    <p>{{ $error }}</p>
                </div>
            @endforeach
        @else
            <div class="alert alert-danger" role="alert">
                <p>{{ $errors->first() }}</p>
            </div>
        @endif
    </div>
@endif

@if (session()->has('message'))
<script>
    toast.danger(
        {{ session('message') }}, {
            style: {
                background: '#f00',
                color: '#fff'
            }
        })
</script>
@endif
