@extends('layouts.template') 

@section('content') 
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            @empty($barang) 
                <div class="alert alert-danger alert-dismissible">
                    <h5><i class="icon fas fa-ban"></i> Error!</h5>
                    The data you are looking for was not found.
                </div>
            @else 
                <table class="table table-bordered table-striped table-hover table-sm">
                    <tr>
                        <th>ID</th>
                        <td>{{ $barang->barang_id }}</td>
                    </tr>
                    <tr>
                        <th>Item Code</th>
                        <td>{{ $barang->barang_kode }}</td>
                    </tr>
                    <tr>
                        <th>Category ID</th>
                        <td>{{ $barang->kategori->kategori_nama }}</td>
                    </tr>
                    <tr>
                        <th>Item Name</th>
                        <td>{{ $barang->barang_nama }}</td>
                    </tr>
                    <tr>
                        <th>Purchase Price</th>
                        <td>{{ $barang->harga_beli }}</td>
                    </tr>
                    <tr>
                        <th>Selling Price</th>
                        <td>{{ $barang->harga_jual }}</td>
                    </tr>
                </table>
            @endempty 
            <a href="{{ url('barang') }}" class="btn btn-sm btn-default mt-2">Back</a>
        </div>
    </div>
@endsection

@push('css') 
@endpush

@push('js') @endpush