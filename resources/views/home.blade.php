<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">My Website</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="kategoriDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kategori
        </a>
        <div class="dropdown-menu" aria-labelledby="kategoriDropdown">
          <a class="dropdown-item" href="{{ route('category.index') }}">List Kategori</a>
          <a class="dropdown-item" href="{{ route('category.create') }}">Tambah Kategori</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="transaksiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Transaksi
        </a>
        <div class="dropdown-menu" aria-labelledby="transaksiDropdown">
          <a class="dropdown-item" href="transaction">List Transaksi</a>
          <a class="dropdown-item" href="transaction.create">Tambah Transaksi</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<div>
    Saldo saat ini: {{ $saldo }}
</div>

<div>
    Total pengeluaran (all time): {{ $totalPengeluaran }}
</div>

<div>
    Total pemasukan (all time): {{ $totalPemasukan }}
</div>
