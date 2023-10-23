<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function insertElq() {
        // $mhs = new Mahasiswa();
        // $mhs->nama =  'Satria';
        // $mhs->npm = '2226250033';
        // $mhs->tempat_lahir = 'Palembang';
        // $mhs->tanggal_lahir = date('Y-m-d');
        // $mhs->save();
        // dump($mhs);

        $mhs = Mahasiswa::insert(
            [
                [
                    'npm' => '222650053',
                    'nama' => 'Verrino',
                    'tempat_lahir' => 'Palembang',
                    'tanggal_lahir' => date('Y-m-d'),
                ],
                [
                    'npm' => '222650081',
                    'nama' => 'Adrian',
                    'tempat_lahir' => 'Palembang',
                    'tanggal_lahir' => date('Y-m-d')
                ]
            ]
        );

    }
   public function updateElq(){
        $mahasiswa = Mahasiswa::where('npm','2226250078')->first();
        $mahasiswa->nama = 'Super Wynz';
        $mahasiswa->save();
        dump($mahasiswa);
    }
    public function deleteElq(){
        $mahasiswa = Mahasiswa::where('npm','2226250033')->first();
        $mahasiswa->delete();
        dump($mahasiswa);
    }
    public function selectElq(){
        $kampus = "Universitas Multi Data Palembang";
        $mahasiswa = Mahasiswa::all();

        return view("mahasiswa.index", ['allmahasiswa' => $mahasiswa, 'kampus'=> $kampus]);
    }
}
