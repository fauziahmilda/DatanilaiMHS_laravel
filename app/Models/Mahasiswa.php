<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use mysqli;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_mhs',
        'NIM',
        'kelas',
        'nilai_tugas',
        'nilai_uts',
        'nilai_uas',
        'nilai_IP',
        'status'
    ];
    public function showmhs()
    {
        return DB::table('mahasiswas')->get();
    }
    public function detail($id)
    {
        return DB::table('mahasiswas')->where('id', $id)->get();
    }
    public function cekinput($id)
    {
        return DB::table('mahasiswas')->where('NIM', $id)->get();
    }
    public function inputnilai($data, $id)
    {
        DB::table('mahasiswas')->where('id', $id)->update($data);
    }
}
