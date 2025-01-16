@extends('theme.default')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Kategori</h1>
    <ol class="breadcrumb mb4">
        <li class="breadcrumb-item"><a href="/kategoris">Kategori

            </a></li>

        <li class="breadcrumb-item active">Edit Data Kategori</li>
    </ol>
    <div class="card mc-4">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body">
                            <form action="{{ route('kategoris.update',$kategori->id) }}" method="POST" enctype="multipart/form-data">

                                @csrf
                                @method('PUT')
                                <div class="form-group mb-3">

                                    <label class="font-weight-bold">KATEGORI</label>

                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" 
                                    value="{{old('name', $kategori->name) }}" placeholder="Masukkan Nama Kategori">

                                    <!-- error message untuk name -->
                                    @error('name')
                                    <div class="alert alert-danger mt-2">

                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                
                                <div class="form-group mb-3">

                                    <label class="font-weight-bold">DESKRIPSI</label>

                                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" 
                                    value="{{old('deskripsi', $kategori->deskripsi) }}" placeholder="Masukkan Deskripsi">

                                    <!-- error message untuk deskripsi -->
                                    @error('deskripsi')
                                    <div class="alert alert-danger mt-2">

                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-md btn-primary me-3">UPDATE</button>

                                <button type="reset" class="btn btn-md btn-warning">RESET</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('alertload')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bu
ndle.min.js"></script>
<script src="https://cdn.ckeditor.com/4.24.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');

</script>
@endsection
