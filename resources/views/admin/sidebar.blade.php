<div class="d-flex flex-column flex-shrink-0 p-3" style="width: 250px; min-height: 100vh; background-color: #CDE6FF;">
    <a href="{{ url('/') }}" class="d-flex align-items-center mb-4 text-decoration-none justify-content-center">
        <img src="{{ asset('assets/images/logo new.png') }}" alt="Logo" width="180">
    </a>

    <ul class="nav nav-pills flex-column mb-auto">

        <li class="nav-item">
            <a href="{{ url('/admin') }}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}"
                style="{{ request()->is('admin') ? 'background-color: white; color: #003366;' : 'color: #003366;' }}">
                <i class="bi bi-grid-fill me-2"></i> Dashboard
            </a>
        </li>

        <li>
            <a href="#dataMasterSub" data-bs-toggle="collapse"
                class="nav-link {{ request()->is('master/*') ? 'active' : '' }}"
                style="{{ request()->is('master/*') ? 'color: #003366;' : 'color: #003366;' }}">
                <i class="bi bi-bar-chart-line-fill me-2"></i> Data Master ▾
            </a>
            <ul class="collapse list-unstyled ps-3 {{ request()->is('master/*') ? 'show' : '' }}" id="dataMasterSub">
                <li>
                    <a href="{{ url('/master/barang') }}"
                        class="nav-link {{ request()->is('master/barang') ? 'active' : '' }}"
                        style="{{ request()->is('master/barang') ? 'background-color: white; color: #003366;' : 'color: #003366;' }}">
                        <i class="bi bi-box-seam me-2"></i> Barang
                    </a>
                </li>
                <li>
                    <a href="{{ url('/master/barang-masuk') }}"
                        class="nav-link {{ request()->is('master/barang-masuk') ? 'active' : '' }}"
                        style="{{ request()->is('master/barang-masuk') ? 'background-color: white; color: #003366;' : 'color: #003366;' }}">
                        <i class="bi bi-box-arrow-in-down me-2"></i> Barang Masuk
                    </a>
                </li>
                <li>
                    <a href="{{ url('/master/barang-keluar') }}"
                        class="nav-link {{ request()->is('master/barang-keluar') ? 'active' : '' }}"
                        style="{{ request()->is('master/barang-keluar') ? 'background-color: white; color: #003366;' : 'color: #003366;' }}">
                        <i class="bi bi-box-arrow-up me-2"></i> Barang Keluar
                    </a>
                </li>
                <li>
                    <a href="{{ url('/master/kategori') }}"
                        class="nav-link {{ request()->is('master/kategori') ? 'active' : '' }}"
                        style="{{ request()->is('master/kategori') ? 'background-color: white; color: #003366;' : 'color: #003366;' }}">
                        <i class="bi bi-tags-fill me-2"></i> Kategori
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="{{ url('/master/laporan') }}" class="nav-link {{ request()->is('laporan') ? 'active' : '' }}"
                style="{{ request()->is('master/laporan') ? 'background-color: white; color: #003366;' : 'color: #003366;' }}">
                <i class="bi bi-file-earmark-bar-graph-fill me-2"></i> Laporan
            </a>
        </li>

        <li>
            <a href="{{ url('/pesanan') }}" class="nav-link {{ request()->is('pesanan') ? 'active' : '' }}"
                style="{{ request()->is('pesanan') ? 'background-color: white; color: #003366;' : 'color: #003366;' }}">
                <i class="bi bi-bag-fill me-2"></i> Pesanan
            </a>
        </li>

        <li>
            <a href="{{ url('/notifikasi') }}" class="nav-link {{ request()->is('notifikasi') ? 'active' : '' }}"
                style="{{ request()->is('notifikasi') ? 'background-color: white; color: #003366;' : 'color: #003366;' }}">
                <i class="bi bi-bell-fill me-2"></i> Notifikasi
            </a>
        </li>
    </ul>

    <hr>

    <div>
        <a href="{{ url('/logout') }}" class="btn w-100" style="color: #003366; border: 1px solid #003366;">
            <i class="bi bi-box-arrow-right me-2"></i> Logout
        </a>
    </div>
</div>
