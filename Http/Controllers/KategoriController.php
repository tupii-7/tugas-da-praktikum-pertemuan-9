<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    private function getKategori()
    {
        return [
            [
                'id' => 1,
                'nama' => 'Programming',
                'deskripsi' => 'Buku pemrograman dan coding',
                'jumlah_buku' => 25
            ],
            [
                'id' => 2,
                'nama' => 'Database',
                'deskripsi' => 'Buku database dan SQL',
                'jumlah_buku' => 18
            ],
            [
                'id' => 3,
                'nama' => 'Jaringan',
                'deskripsi' => 'Buku jaringan komputer',
                'jumlah_buku' => 12
            ],
            [
                'id' => 4,
                'nama' => 'Desain',
                'deskripsi' => 'Buku desain grafis',
                'jumlah_buku' => 15
            ],
            [
                'id' => 5,
                'nama' => 'AI',
                'deskripsi' => 'Buku artificial intelligence',
                'jumlah_buku' => 20
            ]
        ];
    }

    public function index()
    {
        $kategori_list = $this->getKategori();

        return view('kategori.index', compact('kategori_list'));
    }

    public function show($id)
    {
        $kategori = collect($this->getKategori())
            ->firstWhere('id', $id);

        if (!$kategori) {
            abort(404);
        }

        $buku_list = [
            [
                'judul' => 'Laravel Dasar',
                'penulis' => 'Budi Santoso'
            ],
            [
                'judul' => 'PHP Modern',
                'penulis' => 'Andi Wijaya'
            ],
            [
                'judul' => 'Mastering MySQL',
                'penulis' => 'Siti Aminah'
            ]
        ];

        return view(
            'kategori.show',
            compact('kategori', 'buku_list')
        );
    }

    public function search($keyword)
    {
        $kategori_list = collect($this->getKategori())
            ->filter(function ($kategori) use ($keyword) {
                return str_contains(
                    strtolower($kategori['nama']),
                    strtolower($keyword)
                );
            });

        return view(
            'kategori.search',
            compact('kategori_list', 'keyword')
        );
    }
}