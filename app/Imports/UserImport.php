<?php

namespace App\Imports;

use App\Models\User;
use App\Models\UserDetail;
use Hash;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class UserImport implements ToCollection
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function collection(Collection $rows)
    {
        // dd($rows);
        foreach ($rows as $key => $row) {

            $tuser = User::create([
                'fullname' => $row[1],
                'nickname' => $row[2],
                'role' => $row[3],
                'nip' => $row[4],
                'email' => $row[5],
                'email_verified_at' => now(),
                'password' => Hash::make($row[6]),
                'profil_photo' => $row[7],
            ]);

            UserDetail::create([
                'user_id' => $tuser->id,
                'tempat_lahir' => $row[9],
                'tanggal_lahir' => Date::excelToDateTimeObject($row[10]),
                'alamat' => $row[11],
                'nama_ayah' => $row[12],
                'pekerjaan_ayah' => $row[13],
                'nama_ibu' => $row[14],
                'pekerjaan_ibu' => $row[15],
                'jabatan' => $row[16],
                'tahun_masuk' => Date::excelToDateTimeObject($row[17]),
                'tahun_keluar' => Date::excelToDateTimeObject($row[18]), 
            ]);

        }
    }
}
