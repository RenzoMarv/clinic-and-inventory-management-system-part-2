<div wire:ignore.self class="modal fade" id="MCFmodal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog modal-xl">
      <div class="modal-content container">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Medical Consultation Form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            @include('livewire.user-medical-consultation-form.part1')
            <hr>
            @include('livewire.user-medical-consultation-form.part2')
            <hr>
            @include('livewire.user-medical-consultation-form.part3')
            <hr>
            @include('livewire.user-medical-consultation-form.part4')
            <hr>
            @include('livewire.user-medical-consultation-form.part5')
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-info waves-effect waves-light" wire:click="store">Save</button>
            <button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>
        </div>
      </div>
    </div>
</div>