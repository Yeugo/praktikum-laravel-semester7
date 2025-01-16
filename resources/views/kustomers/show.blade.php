@extends('theme.default')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Kustomer</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/kustomers">Kustomer</a></li>
        <li class="breadcrumb-item active">View Detail Kustomer</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="container mt-5 mb-5">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card border-0 shadow-sm rounded">
                                    <div class="card-body">
                                        <h4 class="font-weight-bold">NIK</h4>
                                        <p>{{ $kustomer->nik }}</p>
                                        <h4 class="font-weight-bold">NAMA</h4>
                                        <p>{{ $kustomer->name }}</p>
                                        <h4 class="font-weight-bold">PHONE</h4>
                                        <p>{{ $kustomer->phone }}</p>
                                        <h4 class="font-weight-bold">EMAIL</h4>
                                        <p>{{ $kustomer->email }}</p>
                                        <h4 class="font-weight-bold">ALAMAT</h4>
                                        <p>{{ $kustomer->alamat }}</p>
                                        <a href="{{ route('kustomers.index') }}" class="btn btn-md btn-secondary">BACK</a>
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
@endsection
@section('alertload')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.ckeditor.com/4.24.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
@endsection