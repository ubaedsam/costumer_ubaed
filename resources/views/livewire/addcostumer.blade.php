<div class="container mt-5">
    <div class="col-xxl-6">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Tambah Data Costumer</h4>
            </div><!-- end card header -->
    
            <div class="card-body">
                <form method="post" wire:submit.prevent="AddCostumer">
                    @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" wire:model="name" class="form-control" placeholder="Enter your name" id="name" name="name">
                                    <p class="text-danger ml-2">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" wire:model="email" class="form-control" placeholder="Enter your email address" id="email" name="email">
                                    <p class="text-danger ml-2">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <a href="{{ route('user.costumer') }}" class="btn btn-light">
                                            <i class="ri-logout-box-line align-bottom me-1"></i> Kembali
                                        </a>
                                    </div>
                                    <div class="flex">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <div wire:loading class="la-ball-clip-rotate la-sm text-primary">
                                                <div></div>
                                            </div>
                                            <button type="submit" class="btn btn-primary" style="margin-left: 10px;">
                                                Simpan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </form>
            </div>
        </div>
    </div>
</div>