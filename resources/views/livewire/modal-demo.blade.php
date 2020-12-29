<div>
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Demo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="text" wire:model.defer="name" class="form-control" placeholder="Enter your name">
                        <input type="email" wire:model.defer="email" class="form-control mt-2" placeholder="Enter your email">
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" wire:click.prevent="onSave" class="btn btn-primary close-modal">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
