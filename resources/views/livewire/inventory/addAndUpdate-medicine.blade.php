<div wire:ignore.self class="modal fade" id="addAndUpdateMedicine" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          @if($isUpdating == true)
          <h5 class="modal-title" id="staticBackdropLabel">Update Medicine</h5>
          @elseif($isViewing == true)
          <h5 class="modal-title" id="staticBackdropLabel">View Mode</h5>
          @else
          <h5 class="modal-title" id="staticBackdropLabel">Add Medicine</h5>
          @endif
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form class="form-horizontal mt-4">
                <div class="form-group">
                    <label>Medicine Name</label>
                    <input type="text" class="form-control @error('medicineName') is-invalid @enderror" wire:model="medicineName">
                    <div class="invalid-feedback">
                      @error('medicineName'){{ $message }} @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="example-email">Quantity (Per Capsule)</label>
                    <input type="number" id="example-email" name="example-email" class="form-control @error('qty') is-invalid @enderror" wire:model="qty" min="1">
                    <div class="invalid-feedback">
                      @error('qty'){{ $message }} @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="example-email">Description</label>
                    <select class="form-control @error('description') is-invalid @enderror" wire:model="description" id="descriptionMedicine">
                      <option disabled selected>Choice medicine description</option>
                      <option>Unilab</option>
                      <option>Ritemed</option>
                    </select>
                    <div class="invalid-feedback">
                      @error('description'){{ $message }} @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Expiration Date</label>
                    <input type="date" class="form-control @error('expirationDate') is-invalid @enderror" min="<?php echo date("Y-m-d"); ?>" wire:model="expirationDate">
                    <div class="invalid-feedback">
                      @error('expirationDate'){{ $message }} @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="example-email">Medicine Form</label>
                    <select class="form-control @error('medicineForm') is-invalid @enderror" wire:model="medicineForm" id="descriptionMedicine">
                      <option disabled selected>Choice medicine form</option>
                      <option>Capsule</option>
                      <option>Vial</option>
                      <option>Tablet</option>
                    </select>
                    <div class="invalid-feedback">
                      @error('medicineForm'){{ $message }} @enderror
                    </div>
                </div>
                
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          @if($isUpdating == true)
          <button type="submit" class="btn btn-primary" wire:click="update()">Update</button>
          @elseif($isViewing == true)
          
          @else
          <button type="submit" class="btn btn-primary" wire:click="save()">Save</button>
          @endif
        </div>
      </div>
    </div>
  </div>