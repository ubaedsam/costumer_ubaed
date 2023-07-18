<div>
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Costumer</h4>
    
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">User</a></li>
                    <li class="breadcrumb-item active">Costumer</li>
                </ol>
            </div>
    
        </div>
    </div>
    <div class="col-12">
        <div class="row">
            <div class="col-xl-3 col-md-4">
                <!-- card -->
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">All Customers</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-end justify-content-between mt-4">
                            <div>
                                <h4 class="fs-22 fw-semibold ff-secondary mb-4">{{ $costumerAllCount }} Costumer </h4>
                            </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-primary rounded fs-3">
                                    <i class="bx bxs-user-detail"></i>
                                </span>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->
            <div class="col-xl-3 col-md-4">
                <!-- card -->
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">New Customers</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-end justify-content-between mt-4">
                            <div>
                                <h4 class="fs-22 fw-semibold ff-secondary mb-4">{{ $newCostumerCount }} Costumer </h4>
                            </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-success rounded fs-3">
                                    <i class="bx bx-user-plus"></i>
                                </span>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->
            <div class="col-xl-3 col-md-4">
                <!-- card -->
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Loyal Customers</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-end justify-content-between mt-4">
                            <div>
                                <h4 class="fs-22 fw-semibold ff-secondary mb-4">{{ $loyalCostumerCount }} Costumer </h4>
                            </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-warning rounded fs-3">
                                    <i class="bx bx-user-check"></i>
                                </span>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div>
        <div class="row g-3 mb-3 d-flex justify-content-center">
            <div class="col-sm-auto">
                <div class="input-group">
                    <input wire:model="search" type="search" class="form-control border-0 dash-filter-picker shadow" placeholder="Search...">
                    <div class="input-group-text bg-primary border-primary text-white">
                        <i class="ri-search-2-line"></i>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col-auto">
                <select class="form-select" wire:model="perPage">
                    <option value="5">5 Data</option>
                    <option value="15">15 Data</option>
                    <option value="25">25 Data</option>
                    <option value="50">50 Data</option>
                    <option value="100">100 Data</option>
                    <option value="1000">1000 Data</option>
                </select>
            </div>
            <!--end col-->
            <div class="col-auto">
                <select wire:model="filter" class="form-select" aria-label="Default select example">
                    <option value="">All Status</option>
                    <option value="NEW COSTUMER">New Costumer</option>
                    <option value="LOYAL COSTUMER">Loyal Costumer</option>
                </select>
            </div>
            <!--end col-->
            {{--  <div class="col-auto">
                <select wire:model="by" class="form-select" aria-label="Default select example">
                    <option value="">Random Name</option>
                    <option value="asc">Ascending by Name</option>
                    <option value="desc">Descending by Name</option>
                </select>
            </div>  --}}
        </div>
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Data Costumer</h4>
                <div class="flex">
                    <a href="{{ route('user.all-costumer.add') }}" class="btn btn-primary">
                        <i class="ri-add-line align-bottom me-1"></i> Tambah Data
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($costumers) > 0)
                            @foreach ($costumers as $costumer)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $costumer->name }}</td>
                                <td>{{ $costumer->email }}</td>
                                <td>
                                    @if ($costumer->status == 'NEW COSTUMER')
                                    <span class="badge badge-soft-success">{{ $costumer->status }}</span>
                                    @else($costumer->status == 'LOYAL COSTUMER')
                                    <span class="badge badge-soft-warning">{{ $costumer->status }}</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="hstack gap-3 fs-15">
                                        <a href="{{ route('user.all-costumer.edit',['costumer_id'=>$costumer->id]) }}" class="link-warning"><i class="ri-pencil-fill"></i></a>
                                        <a wire:click.prevent="hapusCostumer({{ $costumer->id }})" id="delete" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @else
                                <tr>
                                <td>Data Tidak Ditemukan</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center">
                    {{ $costumers->links() }}
                </div>
            </div>
        </div>
    </div>
    @push('js')
    <script type="text/javascript">
        window.addEventListener('show-delete-confirmation', event =>{
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Data costumer ini akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Delete'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emit('deleteConfirmed')
                    }
                })
        });

        window.addEventListener('costumerDeleted', event =>{
            Swal.fire(
            'Deleted!',
            'Data costumer berhasil dihapus.',
            'success'
            )
        });
    </script>
    @endpush
</div>