<!DOCTYPE html>
<html>

<head>
    <title>User PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
    table{
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    td,th{
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    tr:nth-child(even){
        background-color: #dddddd;
    }
    </style>
</head>

<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <p>Laporan Product</p>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Gambar Product</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td class="text-center">
                <img src="{{ asset('/storage/products/'.$product->image) }}" class="rounded" style="width: 100px">

            </td>
            <td>{{ $product->title }}</td>
            <td>Rp. {{ $product->price }}</td>
            <td>{{ $product->stock }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>
