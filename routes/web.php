<?php

use Illuminate\Support\Facades\Route;

// ================== PUBLIC ROUTES ==================

Route::get('/', function () {
    return view('beranda');
});

Route::get('/beranda', function () {
    return view('beranda'); // Tampilkan view, bukan redirect
})->name('beranda');

Route::get('/store', function () {
    return view('store');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/lacak', function () {
    return view('lacak');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/form', function () {
    return view('form');
});


// ================== ADMIN ROUTES ==================

Route::prefix('admin')->group(function () {

    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin');

    Route::get('/pesanan', function () {
        return view('admin.pesanan');
    })->name('pesanan');
});

// ================== LOGIN ==================
Route::get('/login', function () {
    return view('auth.login');
})->name('login');



// ======== MASTER ===============
Route::prefix('master')->group(function () {

    Route::get('/barang', function () {
        return view('master.barang');
    })->name('master.barang');

    Route::get('/barang-masuk', function () {
        return view('master.barang-masuk');
    })->name('master.barangmasuk');

    Route::get('/tambah', function () {
        return view('master.tambah');
    })->name('master.tambah');

    Route::get('/edit', function () {
        return view('master.edit');
    })->name('master.edit');

    Route::get('/kategori', function () {
        return view('master.kategori');
    })->name('master.kategori');

    Route::get('/barang-keluar', function () {
        return view('master.barang-keluar');
    })->name('master.barangkeluar');

    Route::get('/laporan', function () {
        return view('master.laporan');
    })->name('master.laporan');

    Route::get('/about-us', function () {
        return view('master.about-us');
    })->name('master.about');

    Route::get('/master-page', function () {
        return view('master.master');
    })->name('master.masterpage');

    Route::get('/pesanan', function () {
        return view('master.pesanan');
    })->name('master.pesanan');

    Route::get('/detail', function () {
        return view('master.detail');
    })->name('master.detail');

    Route::get('/notifikasi', function () {
        return view('master.notifikasi');
    })->name('master.notifikasi');
});
