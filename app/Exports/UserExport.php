<?php

namespace App\Exports;

use App\Models\User;
use App\Models\UserDetail;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\Exportable;

class UserExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    use Exportable;

    public function collection()
    {
        $ac = User::where('role', 5)->get();
        return $ac;
        // foreach( $ac as $kb ){
        //     $arr = [
        //         $kb->fullname,
        //         $kb->nickname,
        //         $kb->nip,
        //         $kb->email,
        //         $kb->user_detail->tempat_lahir,
        //         $kb->user_detail->tanggal_lahir,
        //         $kb->user_detail->alamat,
        //         $kb->user_detail->nama_ayah,
        //         $kb->user_detail->pekerjaan_ayah,
        //         $kb->user_detail->nama_ibu,
        //         $kb->user_detail->pekerjaan_ibu,
        //         $kb->user_detail->tahun_masuk,
        //     ];
        //     return $arr;
        // }
    }
}
