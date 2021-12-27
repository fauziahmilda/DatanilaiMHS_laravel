<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class MahasiswaController extends Controller
{
    public function __construct()
    {
        $this->Mahasiswa = new Mahasiswa();
    }
    public function index()
    {
        if (Auth::check()) {
            $data = ['ambil' => $this->Mahasiswa->showmhs()];
            return view('daftarmhs', $data);
        } else {
            return redirect('login');
        }
        // $data = ['ambil' => $this->Mahasiswa->showmhs()];
        // return view('daftarmhs', $data);
    }
    public function detail($id)
    {
        $data = ['ambil' => $this->Mahasiswa->detail($id)->first()];
        return view('detailmhs', $data);
    }

    public function cekinput()
    {
        return view('cekinput');
    }

    public function input()
    {
        $id = request()->NIM;
        $data = ['ambil' => $this->Mahasiswa->cekinput($id)->first()];
        return view('input', $data);
        //return dd($data);
    }
    public function inputnilai()
    {
        $id = request()->id;
        // $name_mhs = request()->name_mhs;
        // $NIM = request()->NIM;
        $nilai_tugas = request()->nilai_tugas;
        $nilai_uts = request()->nilai_uts;
        $nilai_uas = request()->nilai_uas;

        $nilai_total = ($nilai_tugas * 30 / 100) + ($nilai_uts * 30 / 100) + ($nilai_uas * 40 / 100);

        if ($nilai_total < 50) {
            $grade = 'E';
        } else if ($nilai_total < 59 && $nilai_total > 50) {
            $grade = 'D';
        } else if ($nilai_total < 69 && $nilai_total > 60) {
            $grade = 'C';
        } else if ($nilai_total < 79 && $nilai_total > 70) {
            $grade = 'B';
        } else if ($nilai_total <= 100 && $nilai_total > 80) {
            $grade = 'A';
        }

        $data = [
            'nilai_tugas' => $nilai_tugas,
            'nilai_uts' => $nilai_uts,
            'nilai_uas' => $nilai_uas,
            'nilai_total' => $nilai_total,
            'status' => "sudah",
            'grade' => $grade
        ];
        $this->Mahasiswa->inputnilai($data, $id);
        return redirect()->route('mhs');
    }
}
