<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UserImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new User([
            'fullname' => $row[1],
            'nickname' => $row[2],
            'role' => $row[3],
            'nip' => $row[4],
            'email' => $row[5],
            'email_verified_at' => now(),
            'password' => bcrypt($row[6]),
            'profil_photo' => $row[7],
        ]);
    }
}
