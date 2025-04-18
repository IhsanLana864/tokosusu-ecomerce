<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Toko Susu Bahagia</title>
    <link rel="stylesheet" href="{{ asset('admin/css/barang.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light border-end" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4">
            <img src="{{ asset('logo-new.png') }}" alt="Logo" width="80">
            <h6 class="mt-2">TOKO SUSU BAHAGIA</h6>
        </div>
        <div class="list-group list-group-flush">
            <a href="{{ url('/dashboard') }}" class="list-group-item list-group-item-action {{ request()->is('dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2 me-2"></i>Dashboard
            </a>
            <a href="#dataMasterSubmenu" class="list-group-item list-group-item-action" data-bs-toggle="collapse">
                <i class="bi bi-folder me-2"></i>Data Master
            </a>
            <div class="collapse ps-3 {{ request()->is('barang*') || request()->is('kategori') ? 'show' : '' }}" id="dataMasterSubmenu">
                <a href="{{ url('/barang') }}" class="list-group-item list-group-item-action {{ request()->is('barang') ? 'active' : '' }}">Barang</a>
                <a href="{{ url('/barang-masuk') }}" class="list-group-item list-group-item-action {{ request()->is('barang-masuk') ? 'active' : '' }}">Barang Masuk</a>
                <a href="{{ url('/barang-keluar') }}" class="list-group-item list-group-item-action {{ request()->is('barang-keluar') ? 'active' : '' }}">Barang Keluar</a>
                <a href="{{ url('/kategori') }}" class="list-group-item list-group-item-action {{ request()->is('kategori') ? 'active' : '' }}">Kategori</a>
            </div>
            <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-bar-chart me-2"></i>Laporan</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-bag-check me-2"></i>Pesanan</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-bell me-2"></i>Notifikasi</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
        </div>
    </div>

    <!-- Page Content -->
    <div id="page-content-wrapper" class="p-4 w-100">
        @yield('content')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('admin/js/chart.js') }}"></script>
</body>
</html>
