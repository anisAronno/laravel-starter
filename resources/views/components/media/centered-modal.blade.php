@use('AnisAronno\MediaHelper\Facades\Media')
@props(['media'])
<div class="modal modal-centered modal-semi-full" id="modal-centered-{{ $media->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class=" float-right">
                    <button type="button"
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
                                <span>{{ $media?->title }}</span>
                            </div>
                            <div class="flex flex-wrap gap-3 md:gap-5 justify-start">
                                <span class="font-medium">Caption :</span>
                                <span>{{ $media?->caption }}</span>
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
                        </div>
                        <div class="p-2 md:p-4 space-y-4">
                            <div class="flex flex-wrap">
                                <label class="label label-required mb-1" for="title">Title: </label>
                                <input type="text" class="input" id="title_{{ $media->id }}" placeholder="Title"
                                    onkeypress="changeData('{{ $media->id }}')" value="{{ $media?->title }}">
                            </div>
                            <div class="flex flex-wrap">
                                <label class="label mb-1" for="phone">Caption: </label>
                                <input type="text" class="input" id="caption_{{ $media->id }}"
                                    placeholder="Caption" onkeypress="changeData('{{ $media->id }}')"
                                    value="{{ $media?->caption }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="flex items-center justify-end gap-4">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        id="modalCloseBtn_{{ $media->id }}">Ok</button>
                    <button type="button" class="btn btn-primary hidden " id="modalUpdateBtn_{{ $media->id }}"
                        onclick="updateMediaDetails(
                        {{ $media->id }}, '{{ $media?->owner?->api_token }}')">Update</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function changeData(id) {
        const modalUpdateBtn = document.getElementById(`modalUpdateBtn_${id}`);
        const modalCloseBtn = document.getElementById(`modalCloseBtn_${id}`);
        modalUpdateBtn.classList.remove('hidden');
        modalCloseBtn.innerText = 'Cancel';
    }

    function updateMediaDetails(id, token) {
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

        const closeModal = () => {
            const modal = document.getElementById(`modal-centered-${id}`);
            modal.classList.remove('show');
            modal.removeAttribute('style');
        };

        axios.post(`/api/media/update/${id}`, {
                title: title,
                caption: caption
            }, {
                headers: {
                    'Authorization': `Bearer ${token}`
                }
            })
            .then(response => {
                if (response.data && response.status === 200) {
                    toast.success(response.data.message);
                    closeModal();
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
</script>
