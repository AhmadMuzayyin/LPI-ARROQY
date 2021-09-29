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
                'nisn' => $row[4],
                'nip' => $row[5],
                'email' => $row[6],
                'email_verified_at' => now(),
                'password' => Hash::make($row[7]),
                'profil_photo' => $row[8],
            ]);

            UserDetail::create([
                'user_id' => $tuser->id,
                'tempat_lahir' => $row[10],
                'tanggal_lahir' => Date::excelToDateTimeObject($row[11]),
                'alamat' => $row[12],
                'nama_ayah' => $row[13],
                'pekerjaan_ayah' => $row[14],
                'nama_ibu' => $row[15],
                'pekerjaan_ibu' => $row[16],
                'jabatan' => $row[17],
                'tahun_masuk' => Date::excelToDateTimeObject($row[18]),
                'tahun_keluar' => Date::excelToDateTimeObject($row[19]),
                'kelas_id' => $row[20]
            ]);
        }
    }
}
