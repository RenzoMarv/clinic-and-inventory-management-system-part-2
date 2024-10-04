      
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="cono12" class="col-sm-3 text-right control-label col-form-label">Father Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('fatherName') is-invalid @enderror" id="cono12" wire:model="fatherName">
                            <div class="invalid-feedback">
                                @error('fatherName'){{ $message }} @enderror
                              </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="cono12" class="col-sm-3 text-right control-label col-form-label">Date of Birth</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control @error('fatherDOB') is-invalid @enderror" id="cono12" wire:model="fatherDOB">
                            <div class="invalid-feedback">
                                @error('fatherDOB'){{ $message }} @enderror
                              </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="cono12" class="col-sm-3 text-right control-label col-form-label">Occupation</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('fatherOccupation') is-invalid @enderror" id="cono12" wire:model="fatherOccupation">
                            <div class="invalid-feedback">
                                @error('fatherOccupation'){{ $message }} @enderror
                              </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="cono12" class="col-sm-3 text-right control-label col-form-label">Mother Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('motherName') is-invalid @enderror" id="cono12" wire:model="motherName">
                            <div class="invalid-feedback">
                                @error('motherName'){{ $message }} @enderror
                              </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="cono12" class="col-sm-3 text-right control-label col-form-label">Date of Birth</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control @error('motherDOB') is-invalid @enderror" id="cono12" wire:model="motherDOB">
                            <div class="invalid-feedback">
                                @error('motherDOB'){{ $message }} @enderror
                              </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="cono12" class="col-sm-3 text-right control-label col-form-label">Occupation</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('motherOccupation') is-invalid @enderror" id="cono12" wire:model="motherOccupation">
                            <div class="invalid-feedback">
                                @error('motherOccupation'){{ $message }} @enderror
                              </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <h4 class="card-title">IN CASE OF EMERGENCY</h4>
            <div class="row pt-3">
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Person to be notified</label>
                        <div class="col-md-9">
                            <select class="form-control custom-select @error('personToBeNotified') is-invalid @enderror" wire:model="personToBeNotified">
                                <option>Select . . .</option>
                                <option>Father</option>
                                <option>Mother</option>
                            </select>
                            <div class="invalid-feedback">
                                @error('personToBeNotified'){{ $message }} @enderror
                              </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="cono12" class="col-sm-3 text-right control-label col-form-label">Cellphone No.</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control @error('part2CellphoneNumber') is-invalid @enderror" id="cono12" wire:model="part2CellphoneNumber">
                            <div class="invalid-feedback">
                                @error('part2CellphoneNumber'){{ $message }} @enderror
                              </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <h4 class="card-title">IF PARENTS CANNOT BE REACHED</h4>
            <div class="row pt-3">
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="cono12" class="col-sm-3 text-right control-label col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('canotBeReachName') is-invalid @enderror" id="cono12" wire:model="canotBeReachName">
                            <div class="invalid-feedback">
                                @error('canotBeReachName'){{ $message }} @enderror
                              </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="cono12" class="col-sm-3 text-right control-label col-form-label">Cellphone No.</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control @error('canotBeReachCellphoneNumber') is-invalid @enderror" id="cono12" wire:model="canotBeReachCellphoneNumber">
                            <div class="invalid-feedback">
                                @error('canotBeReachCellphoneNumber'){{ $message }} @enderror
                              </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="cono12" class="col-sm-3 text-right control-label col-form-label">Relation to the patient</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('cannotBeReachRelationToThePatient') is-invalid @enderror" id="cono12" wire:model="cannotBeReachRelationToThePatient">
                            <div class="invalid-feedback">
                                @error('cannotBeReachRelationToThePatient'){{ $message }} @enderror
                              </div>
                        </div>
                    </div>
                </div>
            </div>