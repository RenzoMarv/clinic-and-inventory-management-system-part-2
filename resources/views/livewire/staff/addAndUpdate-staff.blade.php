<div wire:ignore.self class="modal fade" id="addAndUpdateStaff" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content ">
        <div class="modal-header">
          @if($editMode)
          <h5 class="modal-title" id="staticBackdropLabel">Update Medicine</h5>
          @elseif($isViewing)
          <h5 class="modal-title" id="staticBackdropLabel">View Mode</h5>
          @else
          <h5 class="modal-title" id="staticBackdropLabel">Add Staff Account</h5>
          @endif
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form class="form-horizontal mt-4">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control @error('firstName') is-invalid @enderror" wire:model="firstName">
                            <div class="invalid-feedback">
                              @error('firstName'){{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control @error('lastName') is-invalid @enderror" wire:model="lastName">
                            <div class="invalid-feedback">
                              @error('lastName'){{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Middle Name</label>
                            <input type="text" class="form-control @error('middleName') is-invalid @enderror" wire:model="middleName">
                            <div class="invalid-feedback">
                              @error('middleName'){{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Name Ext.</label>
                            <input type="text" class="form-control @error('nameExt') is-invalid @enderror" wire:model="nameExt">
                            <div class="invalid-feedback">
                              @error('nameExt'){{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model="email">
                            <div class="invalid-feedback">
                              @error('email'){{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" {{$editMode ? 'disabled' : ''}} wire:model="password">
                            <div class="invalid-feedback">
                              @error('password'){{ $message }} @enderror
                            </div>
                        </div> 
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          @if($editMode)
          <button type="submit" class="btn btn-primary" wire:click="update()">Update</button>
          @elseif($isViewing)
          @else
          <button type="submit" class="btn btn-primary" wire:click="store()">Save</button>
          @endif
        </div>
      </div>
    </div>
  </div>