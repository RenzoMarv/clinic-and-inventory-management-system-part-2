<h4 class="card-title">MEDICAL HISTORY</h4>
<div class="row pt-3">
    <div class="col-sm-12 col-lg-6">
        <div class="form-group row">
            <label class="control-label text-right col-md-3">Blood Type</label>
            <div class="col-md-9">
                <select class="form-control custom-select @error('bloodType') is-invalid @enderror" wire:model="bloodType">
                    <option>Select . . .</option>
                    <option>A</option>
                    <option>B</option>
                    <option>AB</option>
                    <option>O</option>
                    <option>Unknown</option>
                </select>
                <div class="invalid-feedback">
                    @error('bloodType'){{ $message }} @enderror
                  </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="form-group row">
            <label for="cono12" class="col-sm-4 text-right control-label col-form-label">Height (cm/m)</label>
            <div class="col-sm-8">
                <input type="text" class="form-control @error('weight') is-invalid @enderror" id="cono12" wire:model="weight">
                <div class="invalid-feedback">
                    @error('weight'){{ $message }} @enderror
                  </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="form-group row">
            <label for="cono12" class="col-sm-3 text-right control-label col-form-label">Weight (kg)</label>
            <div class="col-sm-9">
                <input type="text" class="form-control @error('height') is-invalid @enderror" id="cono12" wire:model="height">
                <div class="invalid-feedback">
                    @error('height'){{ $message }} @enderror
                  </div>
            </div>
        </div>
    </div>
</div>

<hr>
<h4 class="card-title">HISTORY Of ALLERGY</h4>
<div class="row">
    <div class="col-sm-12 col-lg-12">
        <div class="mb-2">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" wire:model="food" {{$food ? 'checked' : 'unchecked'}}>
                <span class="custom-control-label">Food</span>
            </label>
        </div>
    </div>
 
    <div class="form-group col-md-12 mt-3">
        <label>Please Specify</label>
        <textarea class="form-control" rows="5" wire:model="foodSpecify"></textarea>
    </div>
 

    
</div>
<hr>
<div class="row">
    <div class="col-sm-12 col-lg-12">
        <div class="mb-2">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" wire:model="medicine" {{$medicine == '1' ? 'checked' : 'unchecked'}}>
                <span class="custom-control-label">Medicine</span>
            </label>
        </div>
    </div>
   
    <div class="form-group col-md-12 mt-3">
        <label>Please Specify</label>
        <textarea class="form-control" rows="5" wire:model="medicineSpecify"></textarea>
    </div>
    

    
</div>
<hr>
<div class="row">
    <div class="col-sm-12 col-lg-12">
        <div class="mb-2">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" wire:model="part3Others" {{$part3Others == '1' ? 'checked' : 'unchecked'}}>
                <span class="custom-control-label">Others</span>
            </label>
        </div>
    </div>

    <div class="form-group col-md-12 mt-3">
        <label>Please Specify</label>
        <textarea class="form-control" rows="5" wire:model="part3OthersSpecify"></textarea>
    </div>
</div>
<hr>
<div class="row pt-3">
    <div class="col-sm-12 col-lg-12">
        <div class="form-group row">
            <label class="control-label text-right col-md-4">History of Asthma for the past 3 years</label>
            <div class="col-md-8">
                <select class="form-control custom-select @error('historyOfAsthma') is-invalid @enderror" wire:model="historyOfAsthma">
                    <option>Select . . .</option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
                <div class="invalid-feedback">
                    @error('historyOfAsthma'){{ $message }} @enderror
                  </div>
            </div>
        </div>
    </div>
</div>