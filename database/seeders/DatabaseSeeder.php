<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profil;
use App\Models\Role;
use Illuminate\Database\Seeder;

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
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@lpi-arroqy.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);
        User::create([
            'name' => 'Pendidik',
            // 'roles_id' => '2',
            'username' => 'pendidik',
            'email' => 'pendidik@lpi-arroqy.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);
        User::create([
            'name' => 'Alumni',
            'username' => 'alumni',
            'email' => 'alumni@lpi-arroqy.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);

        // role for user
        Role::create([
            'name' => 'Belum dikonfirmasi!'
        ]);
        Role::create([
            'name' => 'Administrator'
        ]);
        Role::create([
            'name' => 'Pendidik'
        ]);
        Role::create([
            'name' => 'Santri'
        ]);
        Role::create([
            'name' => 'Alumni'
        ]);
        // UserRole::create([
        //     'user_id' => '1',
        //     'roles_id' => '3'
        // ]);
        // UserRole::create([
        //     'user_id' => '1',
        //     'roles_id' => '2'
        // ]);
        // Roles::create([
        //     'users_id' => '1',
        //     'role' => '1'
        // ]);
        // Roles::create([
        //     'users_id' => '1',
        //     'role' => '2'
        // ]);
        // Roles::create([
        //     'users_id' => '1',
        //     'role' => '4'
        // ]);
        // Roles::create([
        //     'users_id' => '2',
        //     'role' => '2'
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
