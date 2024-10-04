<div>
    @include('livewire.inventory.addAndUpdate-medicine')
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h3 class="text-themecolor mb-0">Inventory</h3>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="javascript:void(0)" style="color: #800000;">Home</a></li>
                <li class="breadcrumb-item active">Inventory</li>
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
                class="btn waves-effect waves-light btn-primary" data-toggle="modal" data-target="#addAndUpdateMedicine" wire:click="create()">Add Medicine</button>
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
                        <div class="row">
                            <div class="col-sm-4">
                            <h4 class="card-title">Medicine Inventory Table</h4>
                            </div>
                            <div class="col-sm-8">
                                <div class="row">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-search"></i></span></div>
                                        <input type="text" class="form-control" id="username" placeholder="Search . . ." wire:model.live="search">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Medicine Name</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Expiration Date</th>
                                    <th scope="col">Medicine Form</th>
                                    <th scope="col">Stock Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($medicines as $key=>$medicine)
                                    
                                
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <th scope="row" class="font-weight-bold">{{$medicine->medicineName}}</th>
                                    <td>{{$medicine->qty}}</td>
                                    <td>{{$medicine->description}}</td>
                                    <td>{{$medicine->medicineForm}}</td>
                                    <td>{{$medicine->getFormattedEventDateAttribute()}}</td>
                                    <td>
                                        @if($medicine->stockStatus == 'Low')
                                        <span class="badge badge-danger">{{$medicine->stockStatus}}</span>
                                        @elseif($medicine->stockStatus == 'Medium')
                                        <span class="badge badge-warning">{{$medicine->stockStatus}}</span>
                                        @else
                                        <span class="badge badge-success">{{$medicine->stockStatus}}</span>
                                        @endif
                                    </td>
                                    <td>
                                       
                                        <button type="button" class="btn btn-success btn-circle-lg" data-toggle="modal" data-target="#addAndUpdateMedicine" wire:click="viewMode({{$medicine->id}})"><i
                                            class="fa fa-eye"></i></button>
                                        <button type="button" class="btn btn-warning btn-circle-lg" data-toggle="modal" data-target="#addAndUpdateMedicine" wire:click="edit({{$medicine->id}})">
                                                <i class="fas fa-pencil-alt"></i></button>
                                        <button type="button" class="btn btn-danger btn-circle-lg" data-toggle="tooltip" data-placement="top" title="Delete" wire:click="delete({{$medicine->id}})"><i
                                            class="fa fa-trash"></i></button>
                                    </td>

                                </tr>  
                                @empty
                                <tr>
                                    <td class="bg-warning" colspan="8">
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
    window.addEventListener('deleteInventory',event => {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You are about to delete this item!",
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
    window.addEventListener('closeAddModal', event => {
        $('#addAndUpdateMedicine').modal('hide')
    })
    </script>
@endsection()

