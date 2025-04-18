@extends('admin.layout.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 p-0">
            @include('admin.sidebar')
        </div>

        <!-- Main Content -->
        <div class="col-md-9 col-lg-10 p-4">
            <div class="card shadow rounded-4">
                <div class="card-body p-4" style="background-color: #E3F0FF;">
                    <h4 class="fw-bold mb-4" style="color: #003366;">Kategori</h4>

                    <!-- Tombol Tambah -->
                    <div class="mb-3">
                        <a href="#" class="btn btn-primary rounded-4 px-4" style="background-color: #003366;">Tambah</a>
                    </div>

                    <!-- Tabel Kategori -->
                    <div class="table-responsive">
                        <table class="table table-bordered rounded-4" style="background-color: #FFEAEA;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Susu</td>
                                    <td>
                                        <a href="#" class="btn btn-sm rounded-4 px-3" style="background-color: #003366; color: white;">Edit</a>
                                        <a href="#" class="btn btn-sm rounded-4 px-3" style="background-color: #E62E4D; color: white;">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Pampers</td>
                                    <td>
                                        <a href="#" class="btn btn-sm rounded-4 px-3" style="background-color: #003366; color: white;">Edit</a>
                                        <a href="#" class="btn btn-sm rounded-4 px-3" style="background-color: #E62E4D; color: white;">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Dan Lain-Lain</td>
                                    <td>
                                        <a href="#" class="btn btn-sm rounded-4 px-3" style="background-color: #003366; color: white;">Edit</a>
                                        <a href="#" class="btn btn-sm rounded-4 px-3" style="background-color: #E62E4D; color: white;">Hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
