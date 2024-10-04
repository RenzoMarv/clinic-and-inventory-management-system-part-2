<div>
    @include('livewire.user-medical-consultation-form.addAndUpdate')
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h3 class="text-themecolor mb-0">Medical Consultation Form</h3>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="javascript:void(0)" style="color: #800000;">Home</a></li>
                <li class="breadcrumb-item active">Medical Consultation Form</li>
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
        @if($hasMedicalConsultation)
        {{-- <div class="row mb-5 position-sticky">
            <div class="col-sm-12">
                <div class="alert alert-danger alert-dismissible bg-success text-white border-0 fade show d-flex"
                    role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Alert - </strong>   You already have an existing data!
                </div> 
            </div>
        </div>  --}}
        @else

        <div class="row mb-5 position-sticky">
            <div class="col-sm-12">
                <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show d-flex"
                    role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Alert - </strong>   You're Medical Consultation Form has no Data!
                </div> 
            </div>
        </div>  
         

        @endif
        <h4 class="card-title">Medical Consultation Form</h4>
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
        <hr>
        <div class="card-body">
            <div class="form-group mb-0 text-right">
                @if($hasMedicalConsultation)
                <button type="submit" class="btn btn-success waves-effect waves-light" wire:click="update">Update</button>
                <button type="submit" class="btn btn-danger waves-effect waves-light" wire:click="delete">Delete</button>
                @else
                <button type="submit" class="btn btn-info waves-effect waves-light" wire:click="store">Save</button>
                <button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>
                @endif
                
            </div>
        </div> 
        
    </div>
</div>

@script
<script>
    window.addEventListener('deleteMCF',event => {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You are about to delete your data!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete!'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        $wire.deleteConfirmed()
                    }
                    }) 
            }); 
    </script>
@endscript


{{-- <div class="container-fluid">
    <div class="card-body">
    @if($hasMedicalConsultation)
    <div class="row mb-5 position-sticky">
        <div class="col-sm-12">
            <div class="alert alert-danger alert-dismissible bg-success text-white border-0 fade show d-flex"
                role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Alert - </strong>   You already have an existing data!
            </div> 
        </div>
    </div> 
 
    @else

    <div class="row mb-5 position-sticky">
        <div class="col-sm-12">
            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show d-flex"
                role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Alert - </strong>   You're Medical Consultation Form has no Data!
            </div> 
        </div>
    </div>  
    @endif
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Actions</h4>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <button type="button" class="btn btn-lg btn-block btn-success"
                        data-toggle="modal" data-target="#MCFmodal" wire:click="create">Add New</button>
                </div>
                <div class="col-md-4 col-sm-12">
                    <button type="button" class="btn btn-lg btn-block btn-info"
                        id="ts-info" {{$hasMedicalConsultation ? '' : 'disabled'}} data-toggle="modal" data-target="#MCFmodal" wire:click="edit">View</button>
                </div>
                <div class="col-md-4 col-sm-12">
                    <button type="button" class="btn btn-lg btn-block btn-danger"
                    {{$hasMedicalConsultation ? '' : 'disabled'}}>Delete</button>
                </div>
            </div>
        </div>
    </div>
    
</div>
</div> --}}

