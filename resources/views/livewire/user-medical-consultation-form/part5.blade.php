<h4 class="card-title">FOR PWD (Person With Disabilities)</h4>
            <div class="row pt-3">
                <div class="col-sm-12 col-lg-6">
                    <div class="mb-2">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" wire:model="blindOrVisuallyImpaired" {{$blindOrVisuallyImpaired == '1' ? 'checked' : 'unchecked'}}>
                            <span class="custom-control-label">Blind or Visually Impaired</span>
                        </label>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="mb-2">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" wire:model="autism" {{$autism == '1' ? 'checked' : 'unchecked'}}>
                            <span class="custom-control-label">Blind or Visually Impaired</span>
                        </label>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="mb-2">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" wire:model="orthopedicallyChallenged" {{$orthopedicallyChallenged == '1' ? 'checked' : 'unchecked'}}>
                            <span class="custom-control-label">Autism</span>
                        </label>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="mb-2">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" wire:model="chronicIllness" {{$chronicIllness == '1' ? 'checked' : 'unchecked'}}>
                            <span class="custom-control-label">Deaf/Mute</span>
                        </label>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="mb-2">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" wire:model="part5CourseDesination" {{$part5CourseDesination == '1' ? 'checked' : 'unchecked'}}>
                            <span class="custom-control-label">Orthopedically Challenged</span>
                        </label>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="mb-2">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" wire:model="deafOrMute" {{$deafOrMute == '1' ? 'checked' : 'unchecked'}}>
                            <span class="custom-control-label">Congenital Defects</span>
                        </label>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="mb-2">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" wire:model="congenitalDefects" {{$congenitalDefects == '1' ? 'checked' : 'unchecked'}}>
                            <span class="custom-control-label">Chronic Illness (stroke, diabetes)</span>
                        </label>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="mb-2">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" wire:model="communicationDisorder" {{$communicationDisorder == '1' ? 'checked' : 'unchecked'}}>
                            <span class="custom-control-label">Communication Disorder, Speech & Language Impairment (cleft lip/palate) </span>
                        </label>
                    </div>
                </div>

            </div>
            <hr>
            <div class="row pt-3">
                <div class="form-group col-md-12 mt-3">
                    <label>A. Are you suffering from an illness at the moment? Which do you think we need to be aware of? Please state</label>
                    <textarea class="form-control" rows="5" wire:model="a"></textarea>
                </div> 
            </div>
            <hr>
            <div class="row pt-3">
                <div class="form-group col-md-4">
                    <label>B. Did you undergo Surgical operation? Please state</label>
                </div> 
                <div class="col-sm-12 col-lg-4">
                    <div class="mb-2">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" wire:model="bYes" {{$bYes == '1' ? 'checked' : 'unchecked'}}>
                            <span class="custom-control-label">Yes</span>
                        </label>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <div class="mb-2">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" wire:model="bNo" {{$bNo == '1' ? 'checked' : 'unchecked'}}>
                            <span class="custom-control-label">No</span>
                        </label>
                    </div>
                </div>
             
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="email2" class="col-sm-4 text-right control-label col-form-label">Date of operation</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="email2" wire:model="bDateOfOperation">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="email2" class="col-sm-4 text-right control-label col-form-label">Type of operation</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="email2" wire:model="bTypeOfOperation">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="email2" class="col-sm-4 text-right control-label col-form-label">Hospital</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="email2" wire:model="bHospital">
                        </div>
                    </div>
                </div>
               
            </div>

            <hr>
            <div class="row pt-3">
                <div class="form-group col-md-4">
                    <label>C. Have you been hospitalized for the past 6 months?</label>
                </div> 
                <div class="col-sm-12 col-lg-4">
                    <div class="mb-2">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" wire:model="cYes" {{$cYes == '1' ? 'checked' : 'unchecked'}}>
                            <span class="custom-control-label">Yes</span>
                        </label>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <div class="mb-2">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" wire:model="cNo" {{$cNo == '1' ? 'checked' : 'unchecked'}}>
                            <span class="custom-control-label">No</span>
                        </label>
                    </div>
                </div>
               
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="email2" class="col-sm-4 text-right control-label col-form-label">Hospital</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="email2" wire:model="cHospital">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="email2" class="col-sm-4 text-right control-label col-form-label">Attending Physician</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="email2" wire:model="cAttendingPhysician">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="email2" class="col-sm-4 text-right control-label col-form-label">Diagnosis</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="email2" wire:model="cDiagnosis">
                        </div>
                    </div>
                </div>
            </div>
            <hr>
