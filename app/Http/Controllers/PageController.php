<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   
    public function Login(Request $request) {
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }
    public function dashboard(Request $request) {
    $username = $request->query('username');
    $locations = [
        [
            'image' => 'images/dashboard/hari.jpg',
            'location' => 'Kandang Harimau',
            'description' => 'Kandang harimau yang luas dan aman untuk pengunjung.',
        ],
        [
            'image' => 'images/dashboard/gajah.jpg',
            'location' => 'Kandang Gajah',
            'description' => 'Tempat gajah bermain dan berinteraksi dengan pengunjung.',
        ],
        [
            'image' => 'images/dashboard/burung.jpg',
            'location' => 'Kandang Burung',
            'description' => 'Berbagai jenis burung eksotis dari seluruh dunia.',
        ],
        [
            'image' => 'images/dashboard/monkey.jpg',
            'location' => 'Kandang Monyet',
            'description' => 'Monyet yang gagah dan penuh pesona.',
        ],
        [
            'image' => 'images/dashboard/zebra.jpg',
            'location' => 'Kandang Zebra',
            'description' => 'Zebra yang hidup damai di habitat buatan.',
        ],

    ];

    return view('dashboard', compact('locations'), ['username' => $username]);
}
    public function profile(Request $request) {
        $username = $request->query('username');
      return view('profile', ['username' => $username]);
    }

    public function pengelolaan(Request $request) {

        $username = $request->query('username');
       $dataHewan = [
        ['nama' => 'Harimau', 'asal' => 'Sumatera', 'jumlah' => 5],
        ['nama' => 'Gajah', 'asal' => 'Kalimantan', 'jumlah' => 3],
        ['nama' => 'Burung Merak', 'asal' => 'Jawa Timur', 'jumlah' => 8],
        ['nama' => 'Monyet', 'asal' => 'Bali', 'jumlah' => 12],
        ['nama' => 'Zebra', 'asal' => 'Afrika', 'jumlah' => 4],
        ['nama' => 'Singa', 'asal' => 'Afrika', 'jumlah' => 2],
        ['nama' => 'Panda', 'asal' => 'Cina', 'jumlah' => 1],
        ['nama' => 'Kanguru', 'asal' => 'Australia', 'jumlah' => 6],
    ];

    return view('pengelolaan', compact('dataHewan'), ['username' => $username]);

}
}

