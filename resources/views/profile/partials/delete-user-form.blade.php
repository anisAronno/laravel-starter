<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <x-danger-button class="btn btn-primary" id="btn-controlled-modal"
        onclick="openModal()">{{ __('Delete Account') }}</x-danger-button>

    <div class="modal" id="modal-controlled">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="{{ route('profile.destroy') }}" class="p-6" id="deleteAccountForm">
                    @csrf
                    @method('delete')

                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                        {{ __('Are you sure you want to delete your account?') }}
                    </h2>

                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                    </p>

                    <div class="mt-6">
                        <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                        <x-text-input id="password" name="password" type="password" class="mt-1 block w-3/4"
                            placeholder="{{ __('Password') }}" />

                        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                    </div>

                    <div class="mt-6 flex justify-end">
                        <x-secondary-button data-dismiss="modal" id="cancelModalBtn">
                            {{ __('Cancel') }}
                        </x-secondary-button>

                        <x-danger-button class="ms-3" form="deleteAccountForm">
                            {{ __('Delete Account') }}
                        </x-danger-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    function openModal() {
        const modal = document.getElementById('modal-controlled');
        modal.classList.add('show');
        modal.style.display = 'block';
    }

    window.addEventListener('DOMContentLoaded', (event) => {
        const cancelModalBtn = document.getElementById('cancelModalBtn');
        const modal = document.getElementById('modal-controlled');

        if (cancelModalBtn) {
            cancelModalBtn.addEventListener('click', (e) => {
                e.preventDefault();
                modal.classList.remove('show');
                setTimeout(() => {
                    modal.style.display = 'none';
                }, 200); 
            });
        }
    });

    @if ($errors->userDeletion->isNotEmpty())
        openModal();
    @endif
</script>
