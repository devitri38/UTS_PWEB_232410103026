<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
{
    $username = $request->query('username');
    if (!$username) {
        return redirect()->route('login');
    }

    return view('dashboard', compact('username'));
}

    public function pengelolaan()
    {
        $dataPengunjung = [
            ['nama' => 'Winter', 'tanggal' => '2025-05-01', 'durasi' => '2 malam'],
            ['nama' => 'Guanlin', 'tanggal' => '2025-05-04', 'durasi' => '3 malam'],
            ['nama' => 'Chen', 'tanggal' => '2025-05-05', 'durasi' => '2 malam'],
            ['nama' => 'Lay', 'tanggal' => '2025-05-06', 'durasi' => '1 malam'],
            ['nama' => 'Kai', 'tanggal' => '2025-05-07', 'durasi' => '4 malam'],
            ['nama' => 'Mark', 'tanggal' => '2025-05-08', 'durasi' => '2 malam'],
            ['nama' => 'Taecyhon', 'tanggal' => '2025-05-09', 'durasi' => '3 malam'],
            ['nama' => 'Carmen', 'tanggal' => '2025-05-10', 'durasi' => '1 malam'],
            ['nama' => 'Shotaro', 'tanggal' => '2025-05-11', 'durasi' => '2 malam'],
            ['nama' => 'Kim', 'tanggal' => '2025-05-12', 'durasi' => '3 malam'],
            ['nama' => 'Jaemin', 'tanggal' => '2025-05-13', 'durasi' => '1 malam'],
            ['nama' => 'Sehun', 'tanggal' => '2025-05-14', 'durasi' => '2 malam'],
            ['nama' => 'Pororo', 'tanggal' => '2025-05-15', 'durasi' => '4 malam'],
            ['nama' => 'Xiumin', 'tanggal' => '2025-05-16', 'durasi' => '2 malam'],
            ['nama' => 'Adudu', 'tanggal' => '2025-05-17', 'durasi' => '3 malam'],
        ];
        return view('pengelolaan', compact('dataPengunjung'));
    }

    public function profile(Request $request)
{
    $username = $request->query('username');
    if (!$username) {
        return redirect()->route('login');
    }

    return view('profile', compact('username'));
}

}
