<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/gaji', function () {
    $pegawai = [
        [
            'pegawai' => '2022001',
            'nama' => 'Kurt Cobain',
            'kode' => 'D',
        ],
        [
            'pegawai' => '2022007',
            'nama' => 'Eddy Vender',
            'kode' => 'M',
        ],
        [
            'pegawai' => '2022008',
            'nama' => 'Sid Vicious',
            'kode' => 'S',
        ],
        [
            'pegawai' => '2022010',
            'nama' => 'Anthony Kiedis',
            'kode' => 'S',
        ],
    ];
    $data = [
        [
            'kode' => 'Direktur',
            'gaji' => 5000000,
        ],
        [
            'kode' => 'Manajer',
            'gaji' => 3500000,
        ],
        [
            'kode' => 'Staff',
            'gaji' => 1750000,
        ],
    ];
    return view('gaji', compact('pegawai', 'data'));
});

Route::get('/', function () {
    $pegawai = 
    [['pegawai' => '2022001', 'nama'=>'Kurt Cobain', 'kode'=>'D'],
        ['pegawai' => '2022007', 'nama'=>'Eddy Vender', 'kode'=>'M'],
        ['pegawai' => '2022008', 'nama'=>'Sid Vicious', 'kode'=>'S'],
        ['pegawai' => '2022010', 'nama'=>'Anthony Kiedis', 'kode'=>'S']];
    return view('profil')->with('pegawai', $pegawai);
});
