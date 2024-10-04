<div>
    <div>
        @include('livewire.staff.addAndUpdate-staff')
        <div class="row page-titles">
            <div class="col-md-5 col-12 align-self-center">
                <h3 class="text-themecolor mb-0">Staff</h3>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0)" style="color: #800000;">Home</a></li>
                    <li class="breadcrumb-item active">Staff</li>
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
            <div class="row  mt-3 mb-3 ">
                <div class="col-12 d-flex justify-content-end">
                    <button type="button"
                    class="btn waves-effect waves-light btn-primary" data-toggle="modal" data-target="#addAndUpdateStaff" wire:click="create()">Add Staff</button>
                    {{-- <button type="button" class="btn btn-lg btn-block btn-outline-success"
                    id="ts-success">Success</button> --}}
                </div>
                
            </div>
            <!-- Row -->
            <div class="row">
                <!-- Column -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Staff Accounts</h4>
                           
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Full Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Date Added</th>
                                        
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                        
                                    @forelse($staffs as $key=>$staff)
                                    <tr>
                                        <th scope="row">{{$key+1}}</th>
                                        <th scope="row" class="font-weight-bold">{{$staff->getFullNameAttributeStaff()}}</th>
                                        <td>{{$staff->email}}</td>
                                        <td>{{$staff->created_at->toDateString()}}</td>
                                        <td>
                                           
                                            <button type="button" class="btn btn-success btn-circle-lg" data-toggle="modal" data-target="#addAndUpdateStaff" wire:click="view({{$staff->id}})"><i
                                                class="fa fa-eye"></i></button>
                                            <button type="button" class="btn btn-warning btn-circle-lg" data-toggle="modal" data-target="#addAndUpdateStaff" wire:click="edit({{$staff->id}})">
                                                    <i class="fas fa-pencil-alt"></i></button>
                                            <button type="button" class="btn btn-danger btn-circle-lg" data-toggle="tooltip" data-placement="top" title="Delete" wire:click="delete({{$staff->id}})"><i
                                                class="fa fa-trash"></i></button>
                                        </td>
    
                                    </tr>  
                                    @empty
                                    <tr>
                                        <td class="bg-warning" colspan="5">
                                           <h5 class="text-center">No data available</h5>
                                        </td>
                                    </tr>  
                                   @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row -->
            <!-- Row -->
        
        </div>
    </div>
    
    @script
    <script>
        window.addEventListener('deleteStaff',event => {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You are about to delete this account!",
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
    @section('scripts')
    <script>
        window.addEventListener('closeStaff', event => {
            $('#addAndUpdateStaff').modal('hide')
        })
        </script>
    @endsection()    
</div>
