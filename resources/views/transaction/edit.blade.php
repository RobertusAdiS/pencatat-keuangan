@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Transaksi</h1>
    <form method="POST" action="{{ route('transactions.update', $transaction) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Jenis Transaksi</label>
            <select name="jenis_transaksi" class="form-control" required>
                <option value="Pemasukan" {{ $transaction->jenis_transaksi == 'Pemasukan' ? 'selected' : '' }}>Pemasukan</option>
                <option value="Pengeluaran" {{ $transaction->jenis_transaksi == 'Pengeluaran' ? 'selected' : '' }}>Pengeluaran</option>
            </select>
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <select name="kategori" class="form-control" required>
                <option value="Gaji" {{ $transaction->kategori == 'Gaji' ? 'selected' : '' }}>Gaji</option>
                <option value="Makanan" {{ $transaction->kategori == 'Makanan' ? 'selected' : '' }}>Makanan</option>
                <option value="Pendidikan" {{ $transaction->kategori == 'Pendidikan' ? 'selected' : '' }}>Pendidikan</option>
                <option value="Transportasi" {{ $transaction->kategori == 'Transportasi' ? 'selected' : '' }}>Transportasi</option>
            </select>
        </div>
        <div class="form-group">
            <label>Nominal</label>
            <input type="number" name="nominal" class="form-control" value="{{ $transaction->nominal }}" required>
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ $transaction->deskripsi }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
