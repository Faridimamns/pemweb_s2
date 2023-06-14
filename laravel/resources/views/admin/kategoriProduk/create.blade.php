@extends('admin.layout.appadmin')
@section ('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h2>Tambah Produk</h2>

<form action="{{url('kategori/store')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group row">
        <label for="text" class="col-4 col-form-label">NAMA</label>
        <div class="col-5">
            <input id="text" name="nama" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-5">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

@endsection