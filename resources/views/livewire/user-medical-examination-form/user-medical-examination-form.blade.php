<div>
<div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h3 class="text-themecolor mb-0">Medical Examination Form</h3>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="javascript:void(0)" style="color: #800000;">Home</a></li>
                <li class="breadcrumb-item active">Medical Examination Form</li>
            </ol>
        </div>
      
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
    <div class="card-body">
            <h4 class="card-title">Medical Examination Form</h4>
            <hr>
            <div class="row">
                <!-- <div class="col">
                    <h4 class="float-right" style="margin-right: 200px; margin-left: 15px;">2024- </h4>
                    <h4 class="float-right">Document Control:</h4>
                </div> -->
                <div class="col-sm-12 col-lg-12">
                    <div class="form-group row float-right">
                        <label for="documentcontrol" class="col-sm-6 text-right control-label col-form-label">Document Control: 2024 - </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control @error('MedicalExaminationForm.docuControl') is-invalid @enderror" id="documentcontrol" wire:model="MedicalExaminationForm.docuControl" value="MedicalExaminationForm.docuControl">
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="lastname" class="col-sm-3 text-right control-label col-form-label">Last Name:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('MedicalExaminationForm.lastName') is-invalid @enderror" id="documentcontrol" wire:model="MedicalExaminationForm.lastName" id="lastname">
                        </div style="margin-left: 500px;">
                        <div style="margin-left: 490px;">
                            @error('MedicalExaminationForm.lastName') <span class="error text-danger">{{ $message }}</span> @enderror 
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="date" class="col-sm-3 text-right control-label col-form-label">Date:</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control @error('MedicalExaminationForm.date') is-invalid @enderror" id="documentcontrol" wire:model="MedicalExaminationForm.date" id="date">
                        </div>
                        <div style="margin-left: 520px;">
                            @error('MedicalExaminationForm.date') <span class="error text-danger">{{ $message }}</span> @enderror 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="firstname" class="col-sm-3 text-right control-label col-form-label">First Name:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('MedicalExaminationForm.firstName') is-invalid @enderror" id="documentcontrol" wire:model="MedicalExaminationForm.firstName" id="firstname">
                        </div>
                        <div style="margin-left: 490px;">
                            @error('MedicalExaminationForm.firstName') <span class="error text-danger">{{ $message }}</span> @enderror 
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="birthday" class="col-sm-3 text-right control-label col-form-label">Birthday:</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control @error('MedicalExaminationForm.birthday') is-invalid @enderror" id="documentcontrol" wire:model="MedicalExaminationForm.birthday" id="birthday">
                        </div>
                        <div style="margin-left: 500px;">
                            @error('MedicalExaminationForm.birthday') <span class="error text-danger">{{ $message }}</span> @enderror 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="middlename" class="col-sm-3 text-right control-label col-form-label">Middle Name:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('MedicalExaminationForm.middleName') is-invalid @enderror" id="documentcontrol" wire:model="MedicalExaminationForm.middleName" id="middlename">
                        </div>
                        <div style="margin-left: 500px;">
                            @error('MedicalExaminationForm.middleName') <span class="error text-danger">{{ $message }}</span> @enderror 
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="age" class="col-sm-3 text-right control-label col-form-label">Age:</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control @error('MedicalExaminationForm.age') is-invalid @enderror" id="documentcontrol" wire:model="MedicalExaminationForm.age" id="age">
                        </div>
                        <div style="margin-left: 460px;">
                            @error('MedicalExaminationForm.age') <span class="error text-danger">{{ $message }}</span> @enderror 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Sex:</label>
                        <div class="col-md-9">
                            <select class="form-control custom-select @error('MedicalExaminationForm.gender') is-invalid @enderror" wire:model="MedicalExaminationForm.gender" id="documentcontrol">
                                <option>Select Male or Female.</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div style="margin-left: 500px;">
                            @error('MedicalExaminationForm.gender') <span class="error text-danger">{{ $message }}</span> @enderror 
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="civilstatus" class="col-sm-3 text-right control-label col-form-label">Civil Status:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('MedicalExaminationForm.civilStatus') is-invalid @enderror" id="documentcontrol" wire:model="MedicalExaminationForm.civilStatus" id="civilstatus">
                        </div>
                        <div style="margin-left: 480px;">
                            @error('MedicalExaminationForm.civilStatus') <span class="error text-danger">{{ $message }}</span> @enderror 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="cellphoneno" class="col-sm-3 text-right control-label col-form-label">Cellphone No:</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control @error('MedicalExaminationForm.cellphoneNo') is-invalid @enderror" id="documentcontrol" wire:model="MedicalExaminationForm.cellphoneNo" id="cellphoneno">
                        </div>
                        <div style="margin-left: 440px;">
                            @error('MedicalExaminationForm.cellphoneNo') <span class="error text-danger">{{ $message }}</span> @enderror 
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="emailaddress" class="col-sm-3 text-right control-label col-form-label">Email Address:</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control @error('MedicalExaminationForm.emailAddress') is-invalid @enderror" id="documentcontrol" wire:model="MedicalExaminationForm.emailAddress" id="emailaddress">
                        </div>
                        <div style="margin-left: 456px;">
                            @error('MedicalExaminationForm.emailAddress') <span class="error text-danger">{{ $message }}</span> @enderror 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="address" class="col-sm-3 text-right control-label col-form-label">Address:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('MedicalExaminationForm.address') is-invalid @enderror" id="documentcontrol" wire:model="MedicalExaminationForm.address" id="address">
                        </div>
                        <div style="margin-left: 500px;">
                            @error('MedicalExaminationForm.address') <span class="error text-danger">{{ $message }}</span> @enderror 
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="course" class="col-sm-3 text-right control-label col-form-label">Course & Year or Designation:</label>
                        <div class="col-sm-9" style="margin-top: 12px;">
                            <input type="text" class="form-control @error('MedicalExaminationForm.courseYearDesignation') is-invalid @enderror" id="documentcontrol" wire:model="MedicalExaminationForm.courseYearDesignation" id="course">
                        </div>
                        <div style="margin-left: 500px;">
                            @error('MedicalExaminationForm.courseYearDesignation') <span class="error text-danger">{{ $message }}</span> @enderror 
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="spouse" class="col-sm-3 text-right control-label col-form-label">Purpose:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('MedicalExaminationForm.purpose') is-invalid @enderror" id="documentcontrol" wire:model="MedicalExaminationForm.purpose" id="purpose">
                        </div>
                        <div style="margin-left: 500px;">
                            @error('MedicalExaminationForm.purpose') <span class="error text-danger">{{ $message }}</span> @enderror 
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row-fluid">
                <div class="col-sm-12 col-lg-12">
                    <div class="form-group row">
                        <label>Past Medical History</label>
                        <textarea class="form-control @error('MedicalExaminationForm.pastMedHistory') is-invalid @enderror" id="documentcontrol" wire:model="MedicalExaminationForm.pastMedHistory" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="col-sm-12 col-lg-12">
                    <div class="form-group row">
                        <label>Family History</label>
                        <textarea class="form-control @error('MedicalExaminationForm.familyHistory') is-invalid @enderror" id="documentcontrol" wire:model="MedicalExaminationForm.familyHistory" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="col-sm-12 col-lg-12">
                    <div class="form-group row">
                        <label>Occupational History</label>
                        <textarea class="form-control @error('MedicalExaminationForm.occupationHistory') is-invalid @enderror" id="documentcontrol" wire:model="MedicalExaminationForm.occupationHistory" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label class="control-label text-left col-md-6"><h4>PHYSICAL EXAMINATION</h4></label>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label class="control-label text-left col-md-6"><h4>DIAGNOSTIC EXAMINATION</h4></label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="row">
                                <div class="col-sm-12 col-lg-3">
                                    <div class="form-group row">
                                        <h6></h6>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-5">
                                    <h6 class="ml-4">Normal</h6>
                                </div>
                                <div class="col-sm-12 col-lg-4">
                                    <h6 class="ml-4">Findings</h6>
                                </div>
                            </div>
                    </div>
                <div class="col-sm-12 col-lg-6">
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <!-- Skin -->
                        <div class="row">
                            <div class="col-sm-12 col-lg-2">
                                <div class="form-group row">
                                    <label class="control-label text-right mt-2 col-md-6">BMI:</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <select class="form-control custom-select">
                                            <option>Yes or No...</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="cono12">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Skin -->
                        <div class="row">
                            <div class="col-sm-12 col-lg-2">
                                <div class="form-group row">
                                    <label class="control-label text-right mt-2 col-md-6">Skin:</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <select class="form-control custom-select">
                                            <option>Yes or No...</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="cono12">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Head -->
                        <div class="row">
                            <div class="col-sm-12 col-lg-2">
                                <div class="form-group row">
                                    <label class="control-label text-right mt-2 col-md-6">Head:</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <select class="form-control custom-select">
                                            <option>Yes or No...</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="cono12">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Eyes -->
                        <div class="row">
                            <div class="col-sm-12 col-lg-2">
                                <div class="form-group row">
                                    <label class="control-label text-right mt-2 col-md-6">Eyes:</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <select class="form-control custom-select">
                                            <option>Yes or No...</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="cono12">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Ears -->
                        <div class="row">
                            <div class="col-sm-12 col-lg-2">
                                <div class="form-group row">
                                    <label class="control-label text-right mt-2 col-md-6">Ears:</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <select class="form-control custom-select">
                                            <option>Yes or No...</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="cono12">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mouth -->
                        <div class="row">
                            <div class="col-sm-12 col-lg-2">
                                <div class="form-group row">
                                    <label class="control-label text-right mt-2 col-md-6">Mouth:</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <select class="form-control custom-select">
                                            <option>Yes or No...</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="cono12">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Neck -->
                        <div class="row">
                            <div class="col-sm-12 col-lg-2">
                                <div class="form-group row">
                                    <label class="control-label text-right mt-2 col-md-6">Neck:</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <select class="form-control custom-select">
                                            <option>Yes or No...</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="cono12">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Chest -->
                        <div class="row">
                            <div class="col-sm-12 col-lg-2">
                                <div class="form-group row">
                                    <label class="control-label text-right mt-2 col-md-6">Chest:</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <select class="form-control custom-select">
                                            <option>Yes or No...</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="cono12">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Abdomen -->
                        <div class="row">
                            <div class="col-sm-12 col-lg-2">
                                <div class="form-group row">
                                    <label class="control-label text-right mt-2 col-md-6">Abdomen:</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <select class="form-control custom-select">
                                            <option>Yes or No...</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="cono12">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Rectal -->
                        <div class="row">
                            <div class="col-sm-12 col-lg-2">
                                <div class="form-group row">
                                    <label class="control-label text-right mt-2 col-md-6">Rectal:</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <select class="form-control custom-select">
                                            <option>Yes or No...</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="cono12">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Musculo-Skeletal -->
                        <div class="row">
                            <div class="col-sm-12 col-lg-2">
                                <div class="form-group row">
                                    <label class="control-label text-right mt-2 col-md-6">Musculo-Skeletal:</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <select class="form-control custom-select">
                                            <option>Yes or No...</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="cono12">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Extremities -->
                        <div class="row">
                            <div class="col-sm-12 col-lg-2">
                                <div class="form-group row">
                                    <label class="control-label text-right mt-2 col-md-6">Extremities:</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <select class="form-control custom-select">
                                            <option>Yes or No...</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="cono12">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- others -->
                        <div class="row-fluid">
                            <div class="col-sm-12 col-lg-12">
                                <div class="form-group row">
                                    <label>Others:</label>
                                    <textarea class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    
                    <div class="col-sm-12 col-lg-6">
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                        <label for="usr">BP:</label>
                                        <input type="text" class="form-control" id="usr">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                        <label for="usr">TEMP:</label>
                                        <input type="text" class="form-control" id="usr">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                        <label for="usr">HR:</label>
                                        <input type="text" class="form-control" id="usr">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                        <label for="usr">RR:</label>
                                        <input type="text" class="form-control" id="usr">
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                        <label for="usr">Height:</label>
                                        <input type="text" placeholder="(cm/mm)" class="form-control" id="height">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                        <label for="usr">Weight:</label>
                                        <input type="text" class="form-control" placeholder="(kg)" id="weight">
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-12 col-lg-2">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-6">Hearing:</label>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-4">
                                    <div class="col-sm-12 col-lg-4">
                                        <div class="mb-4">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label">Normal</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="col-sm-12 col-lg-8">
                                        <div class="mb-4">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label">Hearing Impaired</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-lg-2">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-6">Vision:</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-4">
                                        <div class="col-sm-12 col-lg-10">
                                            <div class="mb-4">
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-label">W/ Glasses</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-4">
                                        <div class="col-sm-12 col-lg-8">
                                            <div class="mb-4">
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-label">Right</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-12 col-lg-2">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-6"></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-4">
                                            <div class="col-sm-12 col-lg-10">
                                                <div class="mb-4">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label">W/out Glasses</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-4">
                                            <div class="col-sm-12 col-lg-8">
                                                <div class="mb-4">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label">Left</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-2">
                                                <div class="form-group row">
                                                    <label class="control-label col-md">Chest X-Ray:</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-4">
                                                <div class="col-sm-12 col-lg">
                                                    <div class="mb-4">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-label">PA View</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-4">
                                                <div class="col-sm-12 col-lg-8">
                                                    <div class="mb-4">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-label">Lordotic View</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12 col-lg-2">
                                                    <div class="form-group row">
                                                        <label class="control-label text-right col-md"></label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-4">
                                                    <div class="col-sm-12 col-lg">
                                                        <div class="mb-4">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input">
                                                                <span class="custom-control-label">Normal</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-4">
                                                    <div class="col-sm-12 col-lg">
                                                        <div class="mb-4">
                                                            <div class="form-group">
                                                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Findings">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                    <div class="col-sm-12 col-lg-2">
                                                        <div class="form-group row">
                                                            <label class="control-label col-md">Complete Blood Count:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-lg-4">
                                                        <div class="col-sm-12 col-lg">
                                                            <div class="mb-4">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input">
                                                                    <span class="custom-control-label">Normal</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-lg-4">
                                                        <div class="col-sm-12 col-lg">
                                                            <div class="mb-4">
                                                                <div class="form-group">
                                                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Findings">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12 col-lg-2">
                                                            <div class="form-group row">
                                                                <label class="control-label text-left col-md">Routine Urinalysis:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-lg-4">
                                                            <div class="col-sm-12 col-lg">
                                                                <div class="mb-4">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input">
                                                                        <span class="custom-control-label">Normal</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-lg-4">
                                                            <div class="col-sm-12 col-lg">
                                                                <div class="mb-4">
                                                                    <div class="form-group">
                                                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Findings">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-12 col-lg-2">
                                                                <div class="form-group row">
                                                                    <label class="control-label text-left col-md">Fecalysis/Stool Examination:</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-lg-4">
                                                                <div class="col-sm-12 col-lg">
                                                                    <div class="mb-4">
                                                                        <label class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input">
                                                                            <span class="custom-control-label">Normal</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-lg-4">
                                                                <div class="col-sm-12 col-lg">
                                                                    <div class="mb-4">
                                                                        <div class="form-group">
                                                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Findings">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-12 col-lg-2">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-left col-md">Hepatitis B Screening:</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-lg-4">
                                                                    <div class="col-sm-12 col-lg">
                                                                        <div class="mb-4">
                                                                            <label class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input">
                                                                                <span class="custom-control-label">Normal</span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-lg-4">
                                                                    <div class="col-sm-12 col-lg">
                                                                        <div class="mb-4">
                                                                            <div class="form-group">
                                                                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Findings">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-sm-12 col-lg-2">
                                                                        <div class="form-group row">
                                                                            <label class="control-label text-left col-md">Drug Test:</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-lg-4">
                                                                        <div class="col-sm-12 col-lg">
                                                                            <div class="mb-4">
                                                                                <span>Metamphetamine</span>
                                                                                <label class="custom-control custom-checkbox">
                                                                                    <input type="checkbox" class="custom-control-input">
                                                                                    <span class="custom-control-label">Negative</span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-lg-4">
                                                                        <div class="col-sm-12 col-lg">
                                                                            <div class="mb-4">
                                                                                <label class="custom-control custom-checkbox" style="margin-top:20px;">
                                                                                    <input type="checkbox" class="custom-control-input">
                                                                                    <span class="custom-control-label">Positive</span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-sm-12 col-lg-2">
                                                                            <div class="form-group row">
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12 col-lg-4">
                                                                            <div class="col-sm-12 col-lg">
                                                                                <div class="mb-4">
                                                                                    <span>Tetrahydrocannabinol</span>
                                                                                    <label class="custom-control custom-checkbox">
                                                                                        <input type="checkbox" class="custom-control-input">
                                                                                        <span class="custom-control-label">Negative</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12 col-lg-4">
                                                                            <div class="col-sm-12 col-lg">
                                                                                <div class="mb-4">
                                                                                    <label class="custom-control custom-checkbox" style="margin-top:20px;">
                                                                                        <input type="checkbox" class="custom-control-input">
                                                                                        <span class="custom-control-label">Positive</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-lg-9 text-center">
                                                                    <p>I hereby authorize SORSOGON STATE UNIVERSITY and its officially designated <br> medical examiner and examining physician/s to furnish information that the institution may <br>
                                                                        need pertaining to my health status and other pertinent medical findings and do hereby <br>
                                                                        release them from any all legal responsibilities by so doing. I also further certify that <br>
                                                                        the medical history contained herein is true to the best of my knowledge and any false <br>
                                                                        statement will disqualify me from any benefits and claims.
                                                                    </p>
                                                                    <input type="text" style="width: 50%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box; border: none; border-bottom: 2px solid #596b75; background-color: #eef5f9;">
                                                                    <br>
                                                                    <label>Employee/Student's Signature Over Printed Name</label>
                                                                </div>
                                                                <div class="col-sm-12 col-lg-3 text-center mt-5">
                                                                    <div class="card" style="width: 18rem;">
                                                                        <div class="card-body border border-dark">
                                                                            <h5 class="card-title">Attach Picture here</h5>
                                                                            <p class="card-text">(1x1/2x2/Passport size)</p>
                                                                            <form action="/action_page.php" class="ml-4">
                                                                                <input type="file" id="myFile" name="filename">
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-sm-12 text-center text-uppercase fs-1 fw-bold">
                                                                    <h2>Certification</h2>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <span style="margin-left: 100px; margin-bottom: 50px;">I certify that I have examined and found the applicant to be:</span>
                                                            </div>
                                                            <div class="row">
                                                                <label for="" style="margin-left: 100px;">CLASSIFICATION:</label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="mb-4">
                                                                        <label class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input">
                                                                            <span class="custom-control-label" style="margin-left: 100px;">CLASS A</span>
                                                                        </label>
                                                                    </div>    
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <p>PHYSICALLY FIT</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="mb-4">
                                                                        <label class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input">
                                                                            <span class="custom-control-label" style="margin-left: 100px;">CLASS B</span>
                                                                        </label>
                                                                    </div>    
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <p>Physical underdeveloped or with correctible defects but otherwise FIT to work.</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="mb-4">
                                                                        <label class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input">
                                                                            <span class="custom-control-label" style="margin-left: 100px;">CLASS C</span>
                                                                        </label>
                                                                    </div>    
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <p>Employable but owing to certain impairments or conditions, <br>
                                                                        requires special placement, or limited duty in a specified <br>
                                                                        or selected assignment requiring follow-up treatment/periodic evaluation.</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <label for="" style="margin-left: 100px;">Needs treatment or correction of:</label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="">
                                                                        <label class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input">
                                                                            <span class="custom-control-label" style="margin-left: 100px;">Skin Disease</span>
                                                                        </label>
                                                                    </div>    
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="">
                                                                        <label class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input">
                                                                            <span class="custom-control-label" style="margin-left: 100px;">Dental Defects</span>
                                                                        </label>
                                                                    </div>    
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="">
                                                                        <label class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input">
                                                                            <span class="custom-control-label" style="margin-left: 100px;">Anemia</span>
                                                                        </label>
                                                                    </div>    
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="">
                                                                        <label class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input">
                                                                            <span class="custom-control-label" style="margin-left: 100px;">Poor Vision</span>
                                                                        </label>
                                                                    </div>    
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="">
                                                                        <label class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input">
                                                                            <span class="custom-control-label" style="margin-left: 100px;">Urinary Tract Infection</span>
                                                                        </label>
                                                                    </div>    
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="">
                                                                        <label class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input">
                                                                            <span class="custom-control-label" style="margin-left: 100px;">Intestinal Parasitism</span>
                                                                        </label>
                                                                    </div>    
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="">
                                                                        <label class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input">
                                                                            <span class="custom-control-label" style="margin-left: 100px;">Mild Hypertension</span>
                                                                        </label>
                                                                    </div>    
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="">
                                                                        <label class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input">
                                                                            <span class="custom-control-label" style="margin-left: 100px;">Diabetes</span>
                                                                        </label>
                                                                    </div>    
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="col-sm-12 col-lg-12">
                                                                    <div class="form-group row">
                                                                        <label>Remarks:</label>
                                                                        <textarea class="form-control" rows="5"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row text-center">
                                                                <div class="col-md-12">
                                                                    <p><span style="font-weight: bold;">LUDOVIC G. TAN, MD</span><br>
                                                                        Medical Officer <br>
                                                                        License No. 89099</p>
                                                                </div>
                                                            </div>
                                                            <div class="row text-center">
                                                                <div class="col-md-12">
                                                                    <p style="font-style: italic; font-size: 10px;">NOTE: This certificate does not cover conditions or diseases that wil require procedure and examination for their detection, and <br>
                                                                        also those which are asymptomatic at the time of examination. Valid only for (6) six months from date of examination.</p>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="card-body">
                                                                <div class="form-group mb-0 text-right">
                                                                    <button type="submit" class="btn btn-info waves-effect waves-light" wire:click="save()">Save</button>
                                                                    <button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
