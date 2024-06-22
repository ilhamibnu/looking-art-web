<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Art;
use App\Models\Domisili;
use App\Models\Keahlian;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123'),
            'no_hp' => '081234567890', // tambahkan ini
            'role' => 'user'
        ]);


        Domisili::create([
            'name' => 'Jakarta'
        ]);

        Domisili::create([
            'name' => 'Bandung'
        ]);

        Domisili::create([
            'name' => 'Surabaya'
        ]);

        Keahlian::create([
            'name' => 'Memasak'
        ]);

        Keahlian::create([
            'name' => 'Bersih-bersih'
        ]);

        Keahlian::create([
            'name' => 'Mengasuh anak'
        ]);

        Art::create([
            'name' => 'Art 1',
            'jenis_kelamin' => 'Perempuan',
            'tgl_lahir' => '2000-01-01',
            'alamat' => 'Jl. Art 1',
            'foto' => 'art1.jpg',
            'status' => 'Tersedia',
            'id_domisili' => 1,
            'id_keahlian' => 1

        ]);

        Art::create([
            'name' => 'Art 2',
            'jenis_kelamin' => 'Laki-laki',
            'tgl_lahir' => '2000-01-02',
            'alamat' => 'Jl. Art 2',
            'foto' => 'art2.jpg',
            'status' => 'Tersedia',
            'id_domisili' => 2,
            'id_keahlian' => 2
        ]);

        Art::create([
            'name' => 'Art 3',
            'jenis_kelamin' => 'Perempuan',
            'tgl_lahir' => '2000-01-03',
            'alamat' => 'Jl. Art 3',
            'foto' => 'art3.jpg',
            'status' => 'Tersedia',
            'id_domisili' => 3,
            'id_keahlian' => 3

        ]);

        Art::create([
            'name' => 'Art 4',
            'jenis_kelamin' => 'Laki-laki',
            'tgl_lahir' => '2000-01-04',
            'alamat' => 'Jl. Art 4',
            'foto' => 'art4.jpg',
            'status' => 'Tersedia',
            'id_domisili' => 1,
            'id_keahlian' => 1
        ]);

        Art::create([
            'name' => 'Art 5',
            'jenis_kelamin' => 'Perempuan',
            'tgl_lahir' => '2000-01-05',
            'alamat' => 'Jl. Art 5',
            'foto' => 'art5.jpg',
            'status' => 'Tersedia',
            'id_domisili' => 2,
            'id_keahlian' => 2

        ]);

        Art::create([
            'name' => 'Art 6',
            'jenis_kelamin' => 'Laki-laki',
            'tgl_lahir' => '2000-01-06',
            'alamat' => 'Jl. Art 6',
            'foto' => 'art6.jpg',
            'status' => 'Tersedia',
            'id_domisili' => 3,
            'id_keahlian' => 3
        ]);

        Art::create([
            'name' => 'Art 7',
            'jenis_kelamin' => 'Perempuan',
            'tgl_lahir' => '2000-01-07',
            'alamat' => 'Jl. Art 7',
            'foto' => 'art7.jpg',
            'status' => 'Tersedia',
            'id_domisili' => 1,
            'id_keahlian' => 1

        ]);

        Art::create([
            'name' => 'Art 8',
            'jenis_kelamin' => 'Laki-laki',
            'tgl_lahir' => '2000-01-08',
            'alamat' => 'Jl. Art 8',
            'foto' => 'art8.jpg',
            'status' => 'Tersedia',
            'id_domisili' => 2,
            'id_keahlian' => 2
        ]);

        Art::create([
            'name' => 'Art 9',
            'jenis_kelamin' => 'Perempuan',
            'tgl_lahir' => '2000-01-09',
            'alamat' => 'Jl. Art 9',
            'foto' => 'art9.jpg',
            'status' => 'Tersedia',
            'id_domisili' => 3,
            'id_keahlian' => 3
        ]);

        Art::create([
            'name' => 'Art 10',
            'jenis_kelamin' => 'Laki-laki',
            'tgl_lahir' => '2000-01-10',
            'alamat' => 'Jl. Art 10',
            'foto' => 'art10.jpg',
            'status' => 'Tersedia',
            'id_domisili' => 1,
            'id_keahlian' => 1
        ]);
    }
}
