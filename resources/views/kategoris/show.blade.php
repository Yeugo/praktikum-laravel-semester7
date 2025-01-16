@extends('theme.default')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Kategori</h1>
    <ol class="breadcrumb mb4">
        <li class="breadcrumb-item"><a href="/kategoris">Kategori

            </a></li>

        <li class="breadcrumb-item active">View Detail Kategori</li>
    </ol>
    <div class="card mc-4">
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
                                        <h3>{{ $kategori->name }}</h3>
                                        <hr />
                                        <code>
                                            <p>{!! $kategori->deskripsi !!}</p>
                                        </code>
                                        <hr />
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bu
ndle.min.js"></script>
@endsection
