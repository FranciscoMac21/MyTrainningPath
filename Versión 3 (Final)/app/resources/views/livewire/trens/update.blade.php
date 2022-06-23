<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Tren</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="Ejercicios_id"></label>
                <input wire:model="Ejercicios_id" type="text" class="form-control" id="Ejercicios_id" placeholder="Ejercicios Id">@error('Ejercicios_id') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="SobrecargaS_id"></label>
                <input wire:model="SobrecargaS_id" type="text" class="form-control" id="SobrecargaS_id" placeholder="Sobrecargas Id">@error('SobrecargaS_id') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="SobrecargaR_id"></label>
                <input wire:model="SobrecargaR_id" type="text" class="form-control" id="SobrecargaR_id" placeholder="Sobrecargar Id">@error('SobrecargaR_id') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save</button>
            </div>
       </div>
    </div>
</div>
