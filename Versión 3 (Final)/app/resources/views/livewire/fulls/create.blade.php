<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Full</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
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
            <div class="form-group">
                <label for="Direccion"></label>
                <input wire:model="Direccion" type="text" class="form-control" id="Direccion" placeholder="Direccion Id" value="0">@error('Direccion') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save</button>
            </div>
        </div>
    </div>
</div>
