<?php

namespace Database\Seeders;

use App\Models\Kelas;
use App\Models\Role;
use App\Models\User;
use App\Models\Profil;
use App\Models\UserDetail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // create user admin
        User::create([
            'fullname' => 'Administrator',
            'nickname' => 'admin',
            'role' => '1',
            'email' => 'admin@lpi-arroqy.ac.id',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'profil_photo' => 'Profil.jpg'
        ]);
        User::create([
            'fullname' => 'Admin E-Learning',
            'nickname' => 'admin e-learning',
            'role' => '2',
            'email' => 'admin.e-learning@lpi-arroqy.ac.id',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'profil_photo' => 'Profil.jpg'
        ]);
        User::create([
            'fullname' => 'Admin Perpustakaan',
            'nickname' => 'admin perpustakaan',
            'role' => '3',
            'email' => 'admin.perpus@lpi-arroqy.ac.id',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'profil_photo' => 'Profil.jpg'
        ]);
        // $user = User::create([
        //     'fullname' => 'Pendidik',
        //     'nickname' => 'pendidik',
        //     'role' => '4',
        //     'nip' => '202120001',
        //     'email' => 'pendidik@lpi-arroqy.ac.id',
        //     'password' => bcrypt('password'),
        //     'email_verified_at' => now(),
        //     'profil_photo' => 'Profil.jpg'
        // ]);

        // UserDetail::create([
        //     'user_id' => $user->id,
        //     'tempat_lahir' => 'Sumenep',
        //     'tanggal_lahir' => '1995-05-15',
        //     'alamat' => 'Gadu Barat Ganding Sumenep',
        //     'nama_ayah' => 'Man',
        //     'pekerjaan_ayah' => 'Petani',
        //     'nama_ibu' => 'Woman',
        //     'pekerjaan_ibu' => 'Petani',
        //     'jabatan' => 'Kepala Sekolah'
        // ]);
        // $kelas = Kelas::create([
        //     'name' => '1 A',
        //     'tingkat' => 'MADIN'
        // ]);
        // $user = User::create([
        //     'fullname' => 'Siswa',
        //     'nickname' => 'siswa',
        //     'role' => '5',
        //     'nip' => '202120050',
        //     'email' => 'siswa@lpi-arroqy.ac.id',
        //     'password' => bcrypt('password'),
        //     'email_verified_at' => now(),
        //     'profil_photo' => 'Profil.jpg'
        // ]);

        // UserDetail::create([
        //     'user_id' => $user->id,
        //     'tempat_lahir' => 'Sumenep',
        //     'tanggal_lahir' => '2014-05-15',
        //     'alamat' => 'Gadu Barat Ganding Sumenep',
        //     'nama_ayah' => 'Man',
        //     'pekerjaan_ayah' => 'Petani',
        //     'nama_ibu' => 'Woman',
        //     'pekerjaan_ibu' => 'Petani',
        //     'kelas_id' => $kelas->id,
        //     'tahun_masuk' => '2021-10-05'
        // ]);

        // create default profil
        Profil::create([
            'name' => 'Profil Lembaga',
            'slug' => 'profil-lembaga',
            'profil' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda fugiat adipisci consequuntur commodi odit, a nobis alias! Libero voluptatibus quia illo veritatis dolore repudiandae sunt dicta suscipit odit porro est ipsa, nihil quos. Labore amet hic vitae harum odio ipsam debitis, est sed voluptatum porro. Enim inventore cupiditate esse, eveniet dignissimos veritatis hic ex molestias distinctio recusandae quibusdam accusantium, reprehenderit culpa facilis expedita odio optio provident numquam ipsum nam adipisci mollitia dicta voluptatum! Neque quibusdam, sed omnis rerum dolor doloremque laborum vero at deleniti, ab ullam exercitationem fugit natus ea odit ipsum corporis veniam architecto doloribus magni numquam aliquid blanditiis! Facere enim repellendus qui dignissimos ipsa. Aperiam, provident illum tenetur ipsa ducimus laudantium eveniet! Porro ratione neque delectus minus, fugiat praesentium magnam? Pariatur vel labore voluptas deleniti natus. Sapiente, labore reprehenderit in deserunt eius architecto sed, sint dolor at, voluptate ipsam maxime mollitia! Iusto ipsa quasi mollitia quam commodi? Eius.'
        ]);
        Profil::create([
            'name' => 'Profil MADIN',
            'slug' => 'profil-madin',
            'profil' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda fugiat adipisci consequuntur commodi odit, a nobis alias! Libero voluptatibus quia illo veritatis dolore repudiandae sunt dicta suscipit odit porro est ipsa, nihil quos. Labore amet hic vitae harum odio ipsam debitis, est sed voluptatum porro. Enim inventore cupiditate esse, eveniet dignissimos veritatis hic ex molestias distinctio recusandae quibusdam accusantium, reprehenderit culpa facilis expedita odio optio provident numquam ipsum nam adipisci mollitia dicta voluptatum! Neque quibusdam, sed omnis rerum dolor doloremque laborum vero at deleniti, ab ullam exercitationem fugit natus ea odit ipsum corporis veniam architecto doloribus magni numquam aliquid blanditiis! Facere enim repellendus qui dignissimos ipsa. Aperiam, provident illum tenetur ipsa ducimus laudantium eveniet! Porro ratione neque delectus minus, fugiat praesentium magnam? Pariatur vel labore voluptas deleniti natus. Sapiente, labore reprehenderit in deserunt eius architecto sed, sint dolor at, voluptate ipsam maxime mollitia! Iusto ipsa quasi mollitia quam commodi? Eius.'
        ]);
        Profil::create([
            'name' => 'Profil PAUD',
            'slug' => 'profil-paud',
            'profil' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda fugiat adipisci consequuntur commodi odit, a nobis alias! Libero voluptatibus quia illo veritatis dolore repudiandae sunt dicta suscipit odit porro est ipsa, nihil quos. Labore amet hic vitae harum odio ipsam debitis, est sed voluptatum porro. Enim inventore cupiditate esse, eveniet dignissimos veritatis hic ex molestias distinctio recusandae quibusdam accusantium, reprehenderit culpa facilis expedita odio optio provident numquam ipsum nam adipisci mollitia dicta voluptatum! Neque quibusdam, sed omnis rerum dolor doloremque laborum vero at deleniti, ab ullam exercitationem fugit natus ea odit ipsum corporis veniam architecto doloribus magni numquam aliquid blanditiis! Facere enim repellendus qui dignissimos ipsa. Aperiam, provident illum tenetur ipsa ducimus laudantium eveniet! Porro ratione neque delectus minus, fugiat praesentium magnam? Pariatur vel labore voluptas deleniti natus. Sapiente, labore reprehenderit in deserunt eius architecto sed, sint dolor at, voluptate ipsam maxime mollitia! Iusto ipsa quasi mollitia quam commodi? Eius.'
        ]);
        Profil::create([
            'name' => 'Profil Alumni',
            'slug' => 'profil-alumni',
            'profil' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda fugiat adipisci consequuntur commodi odit, a nobis alias! Libero voluptatibus quia illo veritatis dolore repudiandae sunt dicta suscipit odit porro est ipsa, nihil quos. Labore amet hic vitae harum odio ipsam debitis, est sed voluptatum porro. Enim inventore cupiditate esse, eveniet dignissimos veritatis hic ex molestias distinctio recusandae quibusdam accusantium, reprehenderit culpa facilis expedita odio optio provident numquam ipsum nam adipisci mollitia dicta voluptatum! Neque quibusdam, sed omnis rerum dolor doloremque laborum vero at deleniti, ab ullam exercitationem fugit natus ea odit ipsum corporis veniam architecto doloribus magni numquam aliquid blanditiis! Facere enim repellendus qui dignissimos ipsa. Aperiam, provident illum tenetur ipsa ducimus laudantium eveniet! Porro ratione neque delectus minus, fugiat praesentium magnam? Pariatur vel labore voluptas deleniti natus. Sapiente, labore reprehenderit in deserunt eius architecto sed, sint dolor at, voluptate ipsam maxime mollitia! Iusto ipsa quasi mollitia quam commodi? Eius.'
        ]);
    }
}
