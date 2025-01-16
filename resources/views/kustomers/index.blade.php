@extends('theme.default')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Kustomer</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Kustomer</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            <a href="{{ route('kustomers.create') }}" class="btn btn-md btn-success mb-3">ADD KUSTOMER</a>
            <div class="row">
                <table class="table table-bordered data-table">
                    <thead> 
                        <tr>
                            <th scope="col">NIK</th>
                            <th scope="col">NAME</th>
                            <th scope="col">PHONE</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">ALAMAT</th>
                            <th scope="col" style="width:20%">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kustomers as $kustomer)
                        <tr>
                            <td>{{ $kustomer->nik }}</td>
                            <td>{{ $kustomer->name }}</td>
                            <td>{{ $kustomer->phone }}</td>
                            <td>{{ $kustomer->email }}</td>
                            <td>{{ $kustomer->alamat }}</td>
                            <td class="text-center">
                                <a href="{{ route('kustomers.edit', $kustomer->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                <form action="{{ route('kustomers.destroy', $kustomer->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $kustomers->links() }}
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