<div class="row">
    <div class="col-sm-12 col-lg-6">
        <div class="form-group row">
            <label for="email2" class="col-sm-4 text-right control-label col-form-label">Course/Designation</label>
            <div class="col-sm-8">
                <input type="text" class="form-control @error('courseDesination') is-invalid @enderror" id="email2" wire:model="courseDesination">
                <div class="invalid-feedback">
                    @error('courseDesination'){{ $message }} @enderror
                  </div>
            </div>
            
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="form-group row">
            <label for="web1" class="col-sm-3 text-right control-label col-form-label">Date</label>
            <div class="col-sm-9">
                <input type="date" class="form-control @error('date') is-invalid @enderror" id="web1" wire:model="date">
                <div class="invalid-feedback">
                    @error('date'){{ $message }} @enderror
                  </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-lg-6">
        <div class="form-group row">
            <label for="cono12" class="col-sm-3 text-right control-label col-form-label">Surname</label>
            <div class="col-sm-9">
                <input type="text" class="form-control @error('surname') is-invalid @enderror" id="cono12" wire:model="surname">
                <div class="invalid-feedback">
                    @error('surname'){{ $message }} @enderror
                  </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="form-group row">
            <label for="bio1" class="col-sm-3 text-right control-label col-form-label">First Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control @error('firstName') is-invalid @enderror" id="bio1" wire:model="firstName">
                <div class="invalid-feedback">
                    @error('firstName'){{ $message }} @enderror
                  </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="form-group row">
            <label for="bio1" class="col-sm-3 text-right control-label col-form-label">Middle Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="bio1" wire:model="middleName">
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="form-group row">
            <label for="bio1" class="col-sm-3 text-right control-label col-form-label">Name Ext.</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="bio1" wire:model="nameExt">
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="form-group row">
            <label for="bio1" class="col-sm-3 text-right control-label col-form-label">Birthdate</label>
            <div class="col-sm-9">
                <input type="date" class="form-control @error('birthDate') is-invalid @enderror" id="bio1" wire:model="birthDate">
                <div class="invalid-feedback">
                    @error('birthDate'){{ $message }} @enderror
                  </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="form-group row">
            <label class="control-label text-right col-md-3">Sex</label>
            <div class="col-md-9">
                <select class="form-control custom-select @error('sex') is-invalid @enderror" wire:model="sex">
                    <option>Select . . .</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <div class="invalid-feedback">
                    @error('sex'){{ $message }} @enderror
                  </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="form-group row">
            <label for="bio1" class="col-sm-3 text-right control-label col-form-label">Age</label>
            <div class="col-sm-9">
                <input type="number" class="form-control @error('age') is-invalid @enderror" id="bio1" wire:model="age">
                <div class="invalid-feedback">
                    @error('age'){{ $message }} @enderror
                  </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="form-group row">
            <label for="bio1" class="col-sm-3 text-right control-label col-form-label">Address</label>
            <div class="col-sm-9">
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="bio1" wire:model="address">
                <div class="invalid-feedback">
                    @error('address'){{ $message }} @enderror
                  </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="form-group row">
            <label for="bio1" class="col-sm-3 text-right control-label col-form-label">Nationality</label>
            <div class="col-sm-9">
                <input type="text" class="form-control @error('nationality') is-invalid @enderror" id="bio1" wire:model="nationality">
                <div class="invalid-feedback">
                    @error('nationality'){{ $message }} @enderror
                  </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="form-group row">
            <label for="bio1" class="col-sm-3 text-right control-label col-form-label">Religion</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="bio1" wire:model="religion">
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="form-group row">
            <label for="bio1" class="col-sm-3 text-right control-label col-form-label">Cellphone No.</label>
            <div class="col-sm-9">
                <input type="number" class="form-control @error('cellphoneNumber') is-invalid @enderror" wire:model="cellphoneNumber">
                <div class="invalid-feedback">
                    @error('cellphoneNumber'){{ $message }} @enderror
                  </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="form-group row">
            <label for="bio1" class="col-sm-3 text-right control-label col-form-label">Email</label>
            <div class="col-sm-9">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="bio1" wire:model="email">
                <div class="invalid-feedback">
                    @error('email'){{ $message }} @enderror
                  </div>
            </div>
        </div>
    </div>
</div>