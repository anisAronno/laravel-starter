<div class="modal modal-centered modal-semi-full mt-[1%]" id="modal-centered-media">
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
                <x-media.media  />
            </div>
            <div class="modal-footer">
                <div class="flex items-center justify-end gap-4">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Select</button>
                </div>
            </div>
        </div>
    </div>
</div>
