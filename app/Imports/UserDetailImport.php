<?php

namespace App\Imports;

use App\Models\User;
use App\Models\UserDetail;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UserDetailImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    private $users;
    public function __construct()
    {
        $this->users = User::select('id', 'fullname')->get();
    }
    public function model(array $row)
    {
        dd($this->users);
        $user = $this->users->where('fullname', $row['b'])->first();
        return new UserDetail([
            'user_id' => $user->id ?? NULL,
            'alamat' => $row['i'],
            'tempat_lahir' => $row['j']
        ]);
    }
}
