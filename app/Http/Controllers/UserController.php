<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
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
            'siswa' => User::where('role', 5)->get()
        ]);
    }
    public function add_siswa()
    {
        return view('admin.siswa.create', [
            'title' => 'Tambah Data Siswa',
            'kelas' => Kelas::all()
        ]);
    }
    public function store_siswa(Request $request)
    {
        // dd($request->all());
        $validasi = $request->validate([
            'nisn' => 'required|max:10',
            'fullname' => 'required|max:50',
            'nickname' => 'required|unique:users|max:10',
            'alamat' => 'required|max:255',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'nama_ayah' => 'required|max:255',
            'pekerjaan_ayah' => 'required|max:255',
            'nama_ibu' => 'required|max:255',
            'pekerjaan_ibu' => 'required|max:255',
            'tahun_masuk' => 'required',
            'kelas_id' => 'required'
        ]);

        // dd($validasi);
        $user = User::create([
            'fullname' => $request->fullname,
            'nickname' => strtolower($request->nickname),
            'role' => 5,
            'email' => strtolower($request->nickname) . '@lpi-arroqy.ac.id',
            'email_verified_at' => now(),
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
            'alamat' => $request->alamat,
            'kelas_id' => $request->kelas_id
        ]);

        // $request->session()->flash('success', 'Berhasil mendaftar! Silahkan login');

        return redirect('/siswa')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit_siswa(User $User)
    {
        return view('admin.siswa.edit', [
            'title' => 'Edit Data Siswa',
            'siswa' => $User,
            'kelas' => Kelas::all()
        ]);
    }
    public function update_siswa(Request $request, User $User)
    {
        $request->validate([
            'nisn' => 'required',
            'fullname' => 'required',
            'nickname' => 'required',
            'alamat' => 'required|max:255',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'nama_ayah' => 'required|max:255',
            'pekerjaan_ayah' => 'required|max:255',
            'nama_ibu' => 'required|max:255',
            'pekerjaan_ibu' => 'required|max:255',
            'tahun_masuk' => 'required',
            'kelas_id' => 'required'
        ]);

        User::where('nickname', $User->nickname)->update([
            'fullname' => $request->fullname,
            'nickname' => $request->nickname
        ]);

        UserDetail::where('user_id', $User->user_id)->update([
            'tahun_masuk' => $request->tahun_masuk,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'nama_ayah' => $request->nama_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'nama_ibu' => $request->nama_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'kelas_id' => $request->kelas_id
        ]);
        return redirect('/siswa')->with('success', 'Data berhasil dirubah!');
    }

    public function detail_siswa(User $User)
    {
        return view('admin.siswa.detail', [
            'title' => 'Detail data siswa',
            'data' => User::where('nickname', $User->nickname)->get()
        ]);
    }

    public function destroy_siswa(User $User)
    {
        // dd($User->user_detail->user_id);
        User::destroy($User->id);
        UserDetail::destroy($User->user_detail->id);

        return redirect('/siswa')->with('success', 'Data berhasil dihapus!');
    }

    // Controller For Pendidik
    public function pendidik()
    {
        return view('admin.pendidik.index', [
            'title' => 'Data Pendidik',
            'pendidik' => User::where('role', 4)->get()
        ]);
    }
    public function add_pendidik()
    {
        return view('admin.pendidik.create', [
            'title' => 'Tambah Data Pendidik',
            'kelas' => Kelas::all()
        ]);
    }
    public function store_pendidik(Request $request)
    {
        // dd($request->all());
        $validasi = $request->validate([
            'nip' => 'required|max:10',
            'fullname' => 'required|max:50',
            'nickname' => 'required|unique:users|max:10|required:string',
            'alamat' => 'required|max:255',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'nama_ayah' => 'required|max:50',
            'pekerjaan_ayah' => 'required|max:25',
            'nama_ibu' => 'required|max:50',
            'pekerjaan_ibu' => 'required|max:25',
            'tahun_masuk' => 'required'
        ]);

        // dd($validasi);
        $user = User::create([
            'fullname' => $request->fullname,
            'nickname' => strtolower($request->nickname),
            'role' => 4,
            'email' => strtolower($request->nickname) . '@lpi-arroqy.ac.id',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'profil_photo' => 'Profil.jpg'
        ]);

        UserDetail::create([
            'user_id' => $user->id,
            'nip' => $request->nip,
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

        return redirect('/pendidik')->with('success', 'Data berhasil ditambahkan!');
    }
    public function edit_pendidik(User $User)
    {
        return view('admin.pendidik.edit', [
            'title' => 'Edit Data Pendidik',
            'pendidik' => $User,
            'kelas' => Kelas::all()
        ]);
    }
    public function update_pendidik(Request $request, User $User)
    {
        // dd($request->nama_panjang);
        $request->validate([
            'nip' => 'required',
            'fullname' => 'required',
            'nickname' => 'required',
            'alamat' => 'required|max:255',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'nama_ayah' => 'required|max:255',
            'pekerjaan_ayah' => 'required|max:255',
            'nama_ibu' => 'required|max:255',
            'pekerjaan_ibu' => 'required|max:255',
            'tahun_masuk' => 'required'
        ]);

        User::where('nickname', $User->nickname)->update([
            'fullname' => $request->fullname,
            'nickname' => $request->nickname
        ]);

        UserDetail::where('user_id', $User->user_id)->update([
            'tahun_masuk' => $request->tahun_masuk,
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
    public function detail_pendidik(User $User)
    {
        return view('admin.pendidik.detail', [
            'title' => 'Detail data pendidik',
            'data' => User::where('nickname', $User->nickname)->get()
        ]);
    }
    public function destroy_pendidik(User $User)
    {
        // dd($User->user_detail->user_id);
        User::destroy($User->id);
        UserDetail::destroy($User->user_detail->id);

        return redirect('/pendidik')->with('success', 'Data berhasil dihapus!');
    }

    // Controller For Alumni
    public function alumni()
    {
        return view('admin.alumni.index', [
            'title' => 'Data Alumni',
            'alumni' => User::where('role', 6)->get()
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
            'fullname' => 'required|max:50',
            'nickname' => 'required|unique:users|max:10',
            'alamat' => 'required|max:255',
            'bagian' => 'required|in:Barat,Tengah,Timur,Luar'
        ]);

        // dd($validasi);
        $user = User::create([
            'fullname' => $request->fullname,
            'nickname' => strtolower($request->nickname),
            'role' => 6,
            'email' => strtolower($request->nickname) . '@lpi-arroqy.ac.id',
            'email_verified_at' => now(),
            'password' => bcrypt('alumni'),
            'profil_photo' => 'Profil.jpg'
        ]);

        UserDetail::create([
            'user_id' => $user->id,
            'alamat' => $request->alamat,
            'bagian' => $request->bagian
        ]);

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
        $request->validate([
            'fullname' => 'required|max:50',
            'alamat' => 'required|max:255',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'nama_ayah' => 'required|max:50',
            'pekerjaan_ayah' => 'required|max:25',
            'nama_ibu' => 'required|max:50',
            'pekerjaan_ibu' => 'required|max:25',
            'tahun_masuk' => 'required',
            'tahun_keluar' => 'required'
        ]);

        User::where('nickname', $User->nickname)->update([
            'fullname' => $request->fullname,
            'nickname' => $request->nickname
        ]);

        UserDetail::where('user_id', $User->user_id)->update([
            'alamat' => $request->alamat,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nama_ayah' => $request->nama_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'nama_ibu' => $request->nama_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'tahun_masuk' => $request->tahun_masuk,
            'tahun_keluar' => $request->tahun_keluar
        ]);
        return redirect('/alumni')->with('success', 'Data berhasil dirubah!');
    }
    public function detail_alumni(User $User)
    {
        return view('admin.alumni.detail', [
            'title' => 'Detail data siswa',
            'data' => User::where('nickname', $User->nickname)->get()
        ]);
    }
    public function destroy_alumni(User $User)
    {
        // dd($User->user_detail->user_id);
        User::destroy($User->id);
        UserDetail::destroy($User->user_detail->id);

        return redirect('/alumni')->with('success', 'Data berhasil dihapus!');
    }
}
