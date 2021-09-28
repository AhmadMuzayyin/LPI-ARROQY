<?php

namespace App\Exports;

use App\Models\User;
use App\Models\UserDetail;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithProperties;

class UserExport implements FromCollection, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    use Exportable;

    public function collection()
    {

        $users = User::with('user_detail')->where('role', 5)->get();

        return $users;
    }

    public function map($users): array
    {
        
        $acc = [
            $users->fullname,
            $users->nickname,
            $users->nip,
            $users->email,
            $users->user_detail->tempat_lahir,
            $users->user_detail->tanggal_lahir,
            $users->user_detail->alamat,
            $users->user_detail->nama_ayah,
            $users->user_detail->pekerjaan_ayah,
            $users->user_detail->nama_ibu,
            $users->user_detail->pekerjaan_ibu,
            $users->user_detail->tahun_masuk
        ];

        return $acc;
        
    }
}
