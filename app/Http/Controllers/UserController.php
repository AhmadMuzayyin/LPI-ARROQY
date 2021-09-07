<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;

class UserController extends Controller
{

    public function siswa()
    {
        // $user = UserDetail::all();
        // dd($user->user->firstwhere('role', 5));
        return view('admin.siswa.index', [
            'title' => 'Data Siswa',
            'siswa' => UserDetail::all()
        ]);
    }
    public function add_siswa()
    {
        return view('admin.siswa.create', [
            'title' => 'Tambah Data Siswa'
        ]);
    }
    public function store_siswa(Request $request)
    {
        // dd($request->all());
        $validasi = $request->validate([
            'nisn' => 'required',
            'fullname' => 'required',
            'nickname' => 'required',
            'tahun_masuk' => 'required',
            'tahun_keluar' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required|min:5|max:255',
            'nama_ayah' => 'required|min:5|max:255',
            'pekerjaan_ayah' => 'required|min:5|max:255',
            'nama_ibu' => 'required|min:5|max:255',
            'pekerjaan_ibu' => 'required|min:5|max:255'
        ]);

        // dd($request->all());
        // dd($user);
        $user = User::create([
            'fullname' => $request->fullname,
            'nickname' => $request->nickname,
            'role' => 5,
            'email' => $request->nickname . '@lpi-arroqy.ac.id',
            'password' => bcrypt('password'),
            'profil_photo' => 'Profil.jpg'
        ]);

        UserDetail::create([
            'user_id' => $user->id,
            'nisn' => $request->nisn,
            'tahun_masuk' => $request->tahun_masuk,
            'tahun_keluar' => $request->tahun_keluar,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nama_ayah' => $request->nama_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'nama_ibu' => $request->nama_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'alamat' => $request->alamat
        ]);

        // $request->session()->flash('success', 'Berhasil mendaftar! Silahkan login');

        return redirect('/siswa')->with('success', 'Data berhasil ditambahkan!');
    }
    public function edit_siswa(User $User)
    {
        return view('admin.siswa.edit', [
            'title' => 'Edit Data Siswa',
            'alumni' => $User
        ]);
    }
    public function update_siswa(Request $request, User $User)
    {
        // dd($request->nama_panjang);
        User::where('nama_panggilan', $User->nama_panggilan)->update([
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
        return redirect('/siswa')->with('success', 'Data berhasil dirubah!');
    }

    // Controller For Pendidik
    public function pendidik()
    {
        return view('admin.pendidik.index', [
            'title' => 'Data Pendidik',
            'pendidik' => User::where('role', 'pendidik')->get()
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
            'nama_panggilan' => 'required|unique:Users|max:10',
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
        User::create($validasi);

        // $request->session()->flash('success', 'Berhasil mendaftar! Silahkan login');

        return redirect('/pendidik')->with('success', 'Data berhasil ditambahkan!');
    }
    public function edit_pendidik(User $User)
    {
        return view('admin.pendidik.edit', [
            'title' => 'Edit Data Pendidik',
            'alumni' => $User
        ]);
    }
    public function update_pendidik(Request $request, User $User)
    {
        // dd($request->nama_panjang);
        User::where('nama_panggilan', $User->nama_panggilan)->update([
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
            'alumni' => User::where('role', 'alumni')->get()
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
            'nama_panggilan' => 'required|unique:Users|max:10',
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
        User::create($validasi);

        // $request->session()->flash('success', 'Berhasil mendaftar! Silahkan login');

        return redirect('/alumni')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit_alumni(User $User)
    {
        return view('admin.alumni.edit', [
            'title' => 'Edit Data Alumni',
            'alumni' => $User
        ]);
    }
    public function update_alumni(Request $request, User $User)
    {
        // dd($request->nama_panjang);
        User::where('nama_panggilan', $User->nama_panggilan)->update([
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
