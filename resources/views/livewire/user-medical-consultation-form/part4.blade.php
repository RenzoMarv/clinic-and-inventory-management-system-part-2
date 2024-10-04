<h4 class="card-title">PAST/PRESENT ILLNESS (pls. check)</h4>
<div class="row">
    <div class="col-sm-12 col-lg-6">
        <div class="mb-2">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" wire:model="asthma" {{$asthma ? 'checked' : 'unchecked'}}>
                <span class="custom-control-label">Asthma</span>
            </label>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="mb-2">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" wire:model="bronchitis" {{$bronchitis ? 'checked' : 'unchecked'}}>
                <span class="custom-control-label">Measles</span>
            </label>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="mb-2">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" wire:model="chickenPox" {{$chickenPox == '1' ? 'checked' : 'unchecked'}}>
                <span class="custom-control-label">Bronchitis</span>
            </label>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="mb-2">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" wire:model="epilepsy" {{$epilepsy == '1' ? 'checked' : 'unchecked'}}>
                <span class="custom-control-label">Muscle Spasm</span>
            </label>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="mb-2">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" wire:model="gastritis" {{$gastritis == '1' ? 'checked' : 'unchecked'}}>
                <span class="custom-control-label">Chicken Pox</span>
            </label>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="mb-2">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" wire:model="heartDisease" {{$heartDisease == '1' ? 'checked' : 'unchecked'}}>
                <span class="custom-control-label">Pneumonia</span>
            </label>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="mb-2">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" wire:model="hypertension" {{$hypertension == '1' ? 'checked' : 'unchecked'}}>
                <span class="custom-control-label">Epilepsy</span>
            </label>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="mb-2">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" wire:model="measles" {{$measles == '1' ? 'checked' : 'unchecked'}}>
                <span class="custom-control-label">Skin Allergy</span>
            </label>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="mb-2">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" wire:model="muscleSpasm" {{$muscleSpasm == '1' ? 'checked' : 'unchecked'}}>
                <span class="custom-control-label">Gastritis</span>
            </label>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="mb-2">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" wire:model="pneumonia" {{$pneumonia == '1' ? 'checked' : 'unchecked'}}>
                <span class="custom-control-label">Tonsilitis</span>
            </label>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="mb-2">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" wire:model="skinAllergy" {{$skinAllergy == '1' ? 'checked' : 'unchecked'}}>
                <span class="custom-control-label">Heart Disease</span>
            </label>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="mb-2">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" wire:model="tonsilitis" {{$tonsilitis == '1' ? 'checked' : 'unchecked'}}>
                <span class="custom-control-label">Tuberculosis</span>
            </label>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="mb-2">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" wire:model="tuberculosis" {{$tuberculosis == '1' ? 'checked' : 'unchecked'}}>
                <span class="custom-control-label">Hypertension</span>
            </label>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="mb-2">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" wire:model="uti" {{$uti == '1' ? 'checked' : 'unchecked'}}>
                <span class="custom-control-label">UTI (Urinary Tract Infection)</span>
            </label>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="mb-2">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" wire:model="part4Others" {{$part4Others == '1' ? 'checked' : 'unchecked'}}>
                <span class="custom-control-label">Others (pls specify)</span>
            </label>
        </div>
    </div>
  
    <div class="form-group col-md-12 mt-3">
        <label>Please Specify</label>
        <textarea class="form-control" rows="5" wire:model="part4OthersSpecify"></textarea>
    </div>
 
</div>