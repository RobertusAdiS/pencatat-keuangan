<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Transaksi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form method="POST" action="{{ route('transactions.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Jenis Transaksi</label>
                                    <select name="type" class="form-control" required></select>
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select name="category" class="form-control" required>
                                    <option value="">Pilih Kategori</option>
                                    <option value="Gaji">Gaji</option>
                                    <option value="Makanan">Makanan</option>
                                    <option value="Pendidikan">Pendidikan</option>
                                    <option value="Transportasi">Transportasi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nominal</label>
                                <input type="number" name="amount" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
</body>
</html>

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Transaksi</h1>
    <form method="POST" action="{{ route('transactions.store') }}">
            @csrf
            <div class="form-group">
                <label>Jenis Transaksi</label>
                <select name="jenis_transaksi" class="form-control" required></select>
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <select name="kategori" class="form-control" required>
                <option value="">Pilih Kategori</option>
                <option value="Gaji">Gaji</option>
                <option value="Makanan">Makanan</option>
                <option value="Pendidikan">Pendidikan</option>
                <option value="Transportasi">Transportasi</option>
            </select>
        </div>
        <div class="form-group">
            <label>Nominal</label>
            <input type="number" name="nominal" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection