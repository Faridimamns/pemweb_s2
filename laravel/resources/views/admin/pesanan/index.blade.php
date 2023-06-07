@extends('admin.layout.appadmin')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
            <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
            .
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>tanggal</th>
                        <th>nama pemesan</th>
                        <th>alamat pemesan</th>
                        <th>no hp</th>
                        <th>email</th>
                        <th>jumlah pesanan</th>
                        <th>deskripsi</th>
                        <th>produk</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>ID</th>
                        <th>tanggal</th>
                        <th>nama pemesan</th>
                        <th>alamat pemesan</th>
                        <th>no hp</th>
                        <th>email</th>
                        <th>jumlah pesanan</th>
                        <th>deskripsi</th>
                        <th>produk</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach($pesanan as $psn)
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$psn->tanggal}}</td>
                        <td>{{$psn->nama_pemesan}}</td>
                        <td>{{$psn->alamat_pemesan}}</td>
                        <td>{{$psn->no_hp}}</td>
                        <td>{{$psn->email}}</td>
                        <td>{{$psn->jumlah_pesanan}}</td>
                        <td>{{$psn->deskripsi}}</td>
                        <td>{{$psn->nama_produk}}</td>
                    </tr>

                    @php
                    $no++;
                    @endphp
                    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection