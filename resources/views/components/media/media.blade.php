@use('AnisAronno\MediaHelper\Facades\Media')
@props(['visible'])
@if ($visible == true)
    <div
        class="grid grid-cols-2 md:grid-cols-4 xl:grid-cols-6 2xl:grid-cols-8 grow gap-5 p-5 bg-gray-100 dark:bg-gray-900">
        @foreach ($medias as $media)
            <div class=" overflow-hidden h-full border  md:border-2 border-gray-300 dark:border-gray-700 rounded-sm bg-white dark:bg-gray-800"
                data-toggle="modal" data-target="#modal-centered-{{$media->id}}">
                <img src="{{ Media::getURL($media->url) }}" alt="{{ $media->title }}"
                    class="w-full h-auto image-item object-cover">
            </div>
            <x-media.centered-modal :media="$media" />

         @endforeach
    </div>
    <div class="grid grid-cols-1 justify-between items-start md:items-center space-y-3 md:space-y-0 p-4 w-full text-gray-700 dark:text-gray-100"
        aria-label="Table navigation">
        @if ($medias->hasPages())
            {{ $medias->links() }}
        @endif
    </div>
@endif
