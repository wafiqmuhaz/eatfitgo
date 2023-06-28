<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\User;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Memanggil seeder baru yang telah Anda buat
        $this->call(NamaSeeder::class);

        // Memanggil seeder bawaan Laravel
        $this->call(UsersTableSeeder::class);

        // Contoh pengisian data dengan menggunakan model User
        User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => bcrypt('password'),
        ]);

        // Contoh pengisian data menggunakan query builder
        DB::table('nama_tabel')->insert([
            'kolom1' => 'Nilai 1',
            'kolom2' => 'Nilai 2',
        ]);
    }
}