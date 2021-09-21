<?php

namespace App\Exports;

use App\Models\User;
use App\Models\UserDetail;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class UserExport implements WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function map($user): array
    {
        return [
            $user = User::where('role', 5)->first(),
            $user->fullname,
            $user->nickname,
            $user->user_detail->tempat_lahir,
            $user->user_detail->tahun_lahir,
            $user->user_detail->alamat
        ];
        // dd($user);
        // return UserDetail::all();
    }
}
