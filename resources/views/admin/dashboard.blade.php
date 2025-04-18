<!-- resources/views/dashboard.blade.php -->
@extends('admin.layout.app') <!-- layout with sidebar, optional -->

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 p-0">
            @include('admin.sidebar')
        </div>

        <!-- Main content -->
        <div class="col-md-9 col-lg-10 p-4">
            <h3 class="fw-bold mb-4">Dashboard</h3>

            <div class="card-custom mb-4">
                <h5>Statistik Penjualan</h5>
                <p>22/04/2023</p>
                <div class="row">
                    <div class="col-md-3">
                        <div class="bg-white p-3 rounded mb-3 text-center shadow-sm">
                            <div class="fs-4 fw-bold">400.000</div>
                            <div>Total Keuntungan</div>
                        </div>
                        <div class="bg-white p-3 rounded text-center shadow-sm">
                            <div class="fs-4 fw-bold">30</div>
                            <div>Barang Terjual</div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <canvas id="salesChart" height="120"></canvas>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Best Seller -->
                <div class="col-md-6">
                    <div class="card-custom">
                        <h5>Best Seller!</h5>
                        <ol class="ps-3">
                            <li>Pampers M (68 Pcs)</li>
                            <li>Pampers M (68 Pcs)</li>
                            <li>Pampers M (68 Pcs)</li>
                        </ol>
                    </div>
                </div>

                <!-- Stok Terbanyak -->
                <div class="col-md-6">
                    <div class="card-custom">
                        <h5>Stok Terbanyak!</h5>
                        <ol class="ps-3">
                            <li>Pampers M (68 Pcs)</li>
                            <li>Pampers M (68 Pcs)</li>
                            <li>Pampers M (68 Pcs)</li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Chart JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('salesChart').getContext('2d');
    const salesChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Penjualan',
                data: [12, 19, 3, 5, 10, 2],
                backgroundColor: '#ff6384'
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection
