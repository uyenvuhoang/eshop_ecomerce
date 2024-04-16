<div wire:ignore.self class="modal fade" id="deleteProduct" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Delete Product</h5>
                <button type="button" class="btn-close" wire:click="resetInput" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div wire:loading class="p-2">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>Loading...
            </div>

            <div wire:loading.remove>
                <form wire:submit.prevent="destroyProduct">
                    <div class="modal-body">
                        <h4>Are you sure want delete ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="resetInput"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary text-white">Yes.Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>