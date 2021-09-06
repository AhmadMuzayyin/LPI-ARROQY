<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function GuzzleHttp\Promise\all;

class UserController extends Controller
{

    public function santri()
    {
        return view('admin.santri.index', [
            'title' => 'Data Santri',
            'santri' => Student::where('role', 'santri')->get()
        ]);
    }
    public function add_santri()
    {
        return view('admin.santri.create', [
            'title' => 'Tambah Data Santri'
        ]);
    }
    public function store_santri(Request $request)
    {
        // dd($request->all());
        $validasi = $request->validate([
            'nama_panjang' => 'required',
            'nama_panggilan' => 'required|unique:students|max:10',
            'tahun_masuk' => 'required',
            'tahun_keluar' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required|min:5|max:255',
            'nama_ayah' => 'required|min:5|max:255',
            'pekerjaan_ayah' => 'required|min:5|max:255',
            'nama_ibu' => 'required|min:5|max:255',
            'pekerjaan_ibu' => 'required|min:5|max:255',
            'role' => 'required'
        ]);

        // dd($request->all());
        Student::create($validasi);

        // $request->session()->flash('success', 'Berhasil mendaftar! Silahkan login');

        return redirect('/santri')->with('success', 'Data berhasil ditambahkan!');
    }
    public function edit_santri(Student $student)
    {
        return view('admin.santri.edit', [
            'title' => 'Edit Data Santri',
            'alumni' => $student
        ]);
    }
    public function update_santri(Request $request, Student $student)
    {
        // dd($request->nama_panjang);
        Student::where('nama_panggilan', $student->nama_panggilan)->update([
            'nama_panjang' => $request->nama_panjang,
            'nama_panggilan' => $request->nama_panggilan,
            'tahun_masuk' => $request->tahun_masuk,
            'tahun_keluar' => $request->tahun_keluar,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'nama_ayah' => $request->nama_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'nama_ibu' => $request->nama_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu
        ]);
        return redirect('/santri')->with('success', 'Data berhasil dirubah!');
    }

    // Controller For Pendidik
    public function pendidik()
    {
        return view('admin.pendidik.index', [
            'title' => 'Data Pendidik',
            'pendidik' => Student::where('role', 'pendidik')->get()
        ]);
    }
    public function add_pendidik()
    {
        return view('admin.pendidik.create', [
            'title' => 'Tambah Data Pendidik'
        ]);
    }
    public function store_pendidik(Request $request)
    {
        // dd($request->all());
        $validasi = $request->validate([
            'nama_panjang' => 'required',
            'nama_panggilan' => 'required|unique:students|max:10',
            'tahun_masuk' => 'required',
            'tahun_keluar' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required|min:5|max:255',
            'nama_ayah' => 'required|min:5|max:255',
            'pekerjaan_ayah' => 'required|min:5|max:255',
            'nama_ibu' => 'required|min:5|max:255',
            'pekerjaan_ibu' => 'required|min:5|max:255',
            'role' => 'required'
        ]);

        // dd($request->all());
        Student::create($validasi);

        // $request->session()->flash('success', 'Berhasil mendaftar! Silahkan login');

        return redirect('/pendidik')->with('success', 'Data berhasil ditambahkan!');
    }
    public function edit_pendidik(Student $student)
    {
        return view('admin.pendidik.edit', [
            'title' => 'Edit Data Pendidik',
            'alumni' => $student
        ]);
    }
    public function update_pendidik(Request $request, Student $student)
    {
        // dd($request->nama_panjang);
        Student::where('nama_panggilan', $student->nama_panggilan)->update([
            'nama_panjang' => $request->nama_panjang,
            'nama_panggilan' => $request->nama_panggilan,
            'tahun_masuk' => $request->tahun_masuk,
            'tahun_keluar' => $request->tahun_keluar,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'nama_ayah' => $request->nama_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'nama_ibu' => $request->nama_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu
        ]);
        return redirect('/pendidik')->with('success', 'Data berhasil dirubah!');
    }

    // Controller For Alumni
    public function alumni()
    {
        return view('admin.alumni.index', [
            'title' => 'Data Alumni',
            'alumni' => Student::where('role', 'alumni')->get()
        ]);
    }

    public function add_alumni()
    {
        return view('admin.alumni.create', [
            'title' => 'Tambah Data Alumni'
        ]);
    }

    public function store_alumni(Request $request)
    {
        // dd($request->all());
        $validasi = $request->validate([
            'nama_panjang' => 'required',
            'nama_panggilan' => 'required|unique:students|max:10',
            'tahun_masuk' => 'required',
            'tahun_keluar' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required|min:5|max:255',
            'nama_ayah' => 'required|min:5|max:255',
            'pekerjaan_ayah' => 'required|min:5|max:255',
            'nama_ibu' => 'required|min:5|max:255',
            'pekerjaan_ibu' => 'required|min:5|max:255',
            'role' => 'required'
        ]);

        // dd($request->all());
        Student::create($validasi);

        // $request->session()->flash('success', 'Berhasil mendaftar! Silahkan login');

        return redirect('/alumni')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit_alumni(Student $student)
    {
        return view('admin.alumni.edit', [
            'title' => 'Edit Data Alumni',
            'alumni' => $student
        ]);
    }
    public function update_alumni(Request $request, Student $student)
    {
        // dd($request->nama_panjang);
        Student::where('nama_panggilan', $student->nama_panggilan)->update([
            'nama_panjang' => $request->nama_panjang,
            'nama_panggilan' => $request->nama_panggilan,
            'tahun_masuk' => $request->tahun_masuk,
            'tahun_keluar' => $request->tahun_keluar,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'nama_ayah' => $request->nama_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'nama_ibu' => $request->nama_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu
        ]);
        return redirect('/alumni')->with('success', 'Data berhasil dirubah!');
    }
}
