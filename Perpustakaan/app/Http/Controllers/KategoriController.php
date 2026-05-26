<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        // Data 5 kategori buku
        $kategori_list = [
            [
                'id' => 1,
                'nama' => 'Programming',
                'deskripsi' => 'Buku pemrograman dan coding',
                'jumlah_buku' => 7
            ],
            [
                'id' => 2,
                'nama' => 'Database',
                'deskripsi' => 'Buku tentang basis data dan SQL',
                'jumlah_buku' => 18
            ],
            [
                'id' => 3,
                'nama' => 'Jaringan',
                'deskripsi' => 'Buku jaringan komputer dan networking',
                'jumlah_buku' => 12
            ],
            [
                'id' => 4,
                'nama' => 'Design',
                'deskripsi' => 'Buku desain grafis dan UI/UX',
                'jumlah_buku' => 15
            ],
            [
                'id' => 5,
                'nama' => 'Keamanan',
                'deskripsi' => 'Buku keamanan informasi',
                'jumlah_buku' => 12
            ],
        ];

        return view('kategori.index', compact('kategori_list'));
    }

    public function show($id)
    {
        // Data kategori dengan daftar buku
        $kategori_list = [
            [
                'id' => 1,
                'nama' => 'Programming',
                'deskripsi' => 'Buku pemrograman dan coding',
                'jumlah_buku' => 7
            ],
            [
                'id' => 2,
                'nama' => 'Database',
                'deskripsi' => 'Buku tentang basis data dan SQL',
                'jumlah_buku' => 18
            ],
            [
                'id' => 3,
                'nama' => 'Jaringan',
                'deskripsi' => 'Buku jaringan komputer dan networking',
                'jumlah_buku' => 12
            ],
            [
                'id' => 4,
                'nama' => 'Design',
                'deskripsi' => 'Buku desain grafis dan UI/UX',
                'jumlah_buku' => 15
            ],
            [
                'id' => 5,
                'nama' => 'Mobile',
                'deskripsi' => 'Buku pengembangan aplikasi mobile',
                'jumlah_buku' => 12
            ],
        ];

        $kategori = $kategori_list[$id - 1];

        $buku_list = [
            ['id' => 1, 'judul' => 'Belajar Laravel', 'penulis' => 'Taylor Otwell', 'tahun' => 2023],
            ['id' => 2, 'judul' => 'PHP Dasar', 'penulis' => 'Rasmus Lerdorf', 'tahun' => 2022],
            ['id' => 3, 'judul' => 'JavaScript Modern', 'penulis' => 'Brendan Eich', 'tahun' => 2024],
        ];

        return view('kategori.show', compact('kategori', 'buku_list'));
    }

    public function search($keyword)
    {
        $kategori_list = [
            [
                'id' => 1,
                'nama' => 'Programming',
                'deskripsi' => 'Buku pemrograman dan coding',
                'jumlah_buku' => 7
            ],
            [
                'id' => 2,
                'nama' => 'Database',
                'deskripsi' => 'Buku tentang basis data dan SQL',
                'jumlah_buku' => 18
            ],
            [
                'id' => 3,
                'nama' => 'Jaringan',
                'deskripsi' => 'Buku jaringan komputer dan networking',
                'jumlah_buku' => 12
            ],
            [
                'id' => 4,
                'nama' => 'Design',
                'deskripsi' => 'Buku desain grafis dan UI/UX',
                'jumlah_buku' => 15
            ],
            [
                'id' => 5,
                'nama' => 'Mobile',
                'deskripsi' => 'Buku pengembangan aplikasi mobile',
                'jumlah_buku' => 12
            ],
        ];

        $hasil = collect($kategori_list)->filter(function ($kategori) use ($keyword) {
            return stripos($kategori['nama'], $keyword) !== false ||
                   stripos($kategori['deskripsi'], $keyword) !== false;
        })->values()->all();

        return view('kategori.search', compact('hasil', 'keyword'));
    }
}
