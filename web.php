<?php

use App\Http\Controllers\KategoriController;

Route::get('/kategori', [KategoriController::class, 'index'])
    ->name('kategori.index');

Route::get('/kategori/{id}', [KategoriController::class, 'show'])
    ->name('kategori.show');

Route::get('/kategori/search/{keyword}', [KategoriController::class, 'search'])
    ->name('kategori.search');

use Illuminate\Support\Facades\Route;

$anggota_list = [
    [
        'id' => 1,
        'kode' => 'AGT-001',
        'nama' => 'Budi Santoso',
        'email' => 'budi@email.com',
        'telepon' => '081234567890',
        'alamat' => 'Jakarta',
        'status' => 'Aktif'
    ],
    [
        'id' => 2,
        'kode' => 'AGT-002',
        'nama' => 'Siti Aminah',
        'email' => 'siti@email.com',
        'telepon' => '081234567891',
        'alamat' => 'Bandung',
        'status' => 'Aktif'
    ],
    [
        'id' => 3,
        'kode' => 'AGT-003',
        'nama' => 'Ahmad Fauzi',
        'email' => 'ahmad@email.com',
        'telepon' => '081234567892',
        'alamat' => 'Semarang',
        'status' => 'Nonaktif'
    ],
    [
        'id' => 4,
        'kode' => 'AGT-004',
        'nama' => 'Dewi Lestari',
        'email' => 'dewi@email.com',
        'telepon' => '081234567893',
        'alamat' => 'Yogyakarta',
        'status' => 'Aktif'
    ],
    [
        'id' => 5,
        'kode' => 'AGT-005',
        'nama' => 'Rudi Hartono',
        'email' => 'rudi@email.com',
        'telepon' => '081234567894',
        'alamat' => 'Surabaya',
        'status' => 'Aktif'
    ]
];

Route::get('/anggota', function () use ($anggota_list) {
    return view('anggota.index', compact('anggota_list'));
});

Route::get('/anggota/{id}', function ($id) use ($anggota_list) {

    $anggota = collect($anggota_list)->firstWhere('id', $id);

    if (!$anggota) {
        abort(404);
    }

    return view('anggota.show', compact('anggota'));
});

