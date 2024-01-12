@use('AnisAronno\MediaHelper\Facades\Media')
@props(['media'])
<div class="modal modal-centered modal-semi-full" id="modal-centered-{{ $media->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class=" float-right">
                    <button type="submit"
                        class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
                        data-dismiss="modal">
                        <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                    </button>
                </div>
            </div>
            <div class="modal-body ">
                <div class="w-full grid grid-cols-1 md:grid-cols-12 justify-between gap-2 md:gap-4 md:min-h-48">
                    <div class="col-span-7 p-2">
                        <img src="{{ Media::getURL($media->url) }}" alt="{{ $media->title }}"
                            class="w-full h-auto image-item object-cover">
                    </div>
                    <div class="col-span-5 truncate">
                        <div class="border-b border-gray-500 pb-3 leading-normal ">
                            <div class="flex flex-wrap gap-3 md:gap-5 justify-start">
                                <span class="font-medium">File name :</span>
                                <span id="badge_title_{{ $media->id }}">{{ $media?->title }}</span>
                            </div>
                            <div class="flex flex-wrap gap-3 md:gap-5 justify-start">
                                <span class="font-medium">Caption :</span>
                                <span id="badge_caption_{{ $media->id }}">{{ $media?->caption }}</span>
                            </div>
                            <div class="flex flex-wrap gap-3 md:gap-5 justify-start">
                                <span class="font-medium">Directory :</span>
                                <span>{{ $media?->directory }}</span>
                            </div>
                            <div class="flex flex-wrap gap-3 md:gap-5 justify-start">
                                <span class="font-medium">File Size :</span>
                                <span>{{ $media?->size }}</span>
                            </div>
                            <div class="flex flex-wrap gap-3 md:gap-5 justify-start">
                                <span class="font-medium">File type :</span>
                                <span>{{ $media?->type }}</span>
                            </div>
                            @if ($media?->owner)
                                <div class="flex flex-wrap gap-3 md:gap-5 justify-start">
                                    <span class="font-medium">Uploaded by :</span>
                                    <span>
                                        <a class="text-blue-600"
                                            href="{{ route('admin.user.show', $media?->owner?->id) }}">{{ $media->owner?->name }}
                                        </a>
                                    </span>
                                </div>
                                <div class="flex flex-wrap gap-3 md:gap-5 justify-start">
                                    <span class="font-medium">Uploaded on :</span>
                                    <span>{{ $media?->created_at?->format('F d, Y') }}</span>
                                </div>
                            @endif 

                            @if ( auth()->user()?->hasAdministrativeRole() || auth()->id() == $media?->owner?->id )
                                <div class="flex flex-wrap gap-3 md:gap-5 justify-start my-3">
                                    <a href="#"
                                        onclick="event.preventDefault(); 
                                         if(confirm('Are you sure you want to delete this file?')) { 
                                             deleteFile('{{ route('media.destroy', $media?->id) }}', '{{ $media?->owner?->api_token }}');
                                         }"
                                        class="font-medium text-red-500 hover:text-red-700 dark:hover:text-red-400 flex items-center">
                                        <i class="h-5 text-red-500 hover:text-red-700 dark:hover:text-red-400 mr-1"
                                            data-feather="trash">
                                        </i>
                                        Delete this file
                                    </a>
                                </div>
                            @endif
                        </div>
                        <div class="p-2 md:p-4 space-y-4">
                            <div class="flex flex-wrap">
                                <label class="label label-required mb-1" for="title">Title: </label>
                                <input type="text" class="input" id="title_{{ $media->id }}" placeholder="Title"
                                    onchange="updateData('{{ $media->id }}', '{{ $media?->owner?->api_token }}')"
                                    value="{{ $media?->title }}">
                            </div>
                            <div class="flex flex-wrap">
                                <label class="label mb-1" for="phone">Caption: </label>
                                <input type="text" class="input" id="caption_{{ $media->id }}"
                                    placeholder="Caption"
                                    onchange="updateData('{{ $media->id }}', '{{ $media?->owner?->api_token }}')"
                                    value="{{ $media?->caption }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="flex items-center justify-end gap-4">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function updateData(id, token) {
        const titleInput = document.getElementById(`title_${id}`);
        const captionInput = document.getElementById(`caption_${id}`);

        const title = titleInput.value;
        const caption = captionInput.value;

        if (title.trim().length === 0) {
            toast.danger('Error: The title field is required.', {
                style: {
                    background: '#f00',
                    color: '#fff'
                }
            });
            return;
        }

        const updateBadge = () => {
            const badgeTitle = document.getElementById(`badge_title_${id}`);
            const badgeCaption = document.getElementById(`badge_caption_${id}`);
            badgeTitle.innerText = title;
            badgeCaption.innerText = caption;
        }

        axios.post(`/api/media/update/${id}`, {
                title: title,
                caption: caption,
            }, {
                headers: {
                    'Authorization': `Bearer ${token}`
                }
            })
            .then(response => {
                if (response.data && response.status === 200) {
                    toast.success(response.data.message);
                    updateBadge();

                } else {
                    toast.warning('Update was not successful.');
                }
            })
            .catch(error => {
                const errorMessage = error.response?.data?.message || error.message;
                toast.danger(`Error: ${errorMessage}`, {
                    style: {
                        background: '#f00',
                        color: '#fff'
                    }
                });
            })
            .finally(() => {
                titleInput.value = title;
                captionInput.value = caption;
            });
    }

    function deleteFile(route, apiToken) {
        const headers = {
            'Content-Type': 'application/json',
            'Authorization': `Bearer ${apiToken}`
        };

        axios.delete(route, {
                headers
            })
            .then(response => {
                if (response.status === 200) {
                    toast.success(response.data.message);
                    const deletedFileElement = document.getElementById(`file-${response.data.fileId}`);
                    if (deletedFileElement) {
                        deletedFileElement.remove();
                    }
                } else {
                    toast.warning('Deletion was not successful.');
                }
            })
            .catch(error => {
                const errorMessage = error.response?.data?.message || error.message;
                toast.danger(`Error: ${errorMessage}`, {
                    style: {
                        background: '#f00',
                        color: '#fff'
                    }
                });
            }).finally(() => {
                location.reload()
            })
    }
</script>
