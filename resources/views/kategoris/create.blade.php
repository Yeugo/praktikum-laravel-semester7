@extends('theme.default')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Data Kategori</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>

        <li class="breadcrumb-item active">Kategori</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('kategoris.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="form-group mb-3">

                                <label class="font-weight-bold">NAMA KATEGORI</label>

                                <input type="text" class="form-control
                                @error('name') is-invalid @enderror" name="name" value="{{old('name') }}"
                                    placeholder="Masukkan Judul Product">

                                <!-- error message untuk name -->
                                @error('name')

                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">

                                <label class="font-weight-bold">DESKRIPSI</label>

                                <input type="text" class="form-control
                                @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{old('deskripsi') }}"
                                    placeholder="Masukkan Deskripsi">

                                <!-- error message untuk deskripsi -->
                                @error('deskripsi')

                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary me-3">SAVE</button>

                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                        </form>
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
<script src="https://cdn.ckeditor.com/4.24.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');

</script>
@endsection
