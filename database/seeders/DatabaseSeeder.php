<?php

namespace Database\Seeders;

use App\Models\Masyarakat;
use App\Models\Petugas;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);

        Masyarakat::create([
            // $table->id();
            // $table->string('name');
            // $table->string('nik');
            // $table->string('tglahir');
            // $table->string('kelamin');
            // $table->string('telp');
            // $table->string('pekerjaan');
            // $table->string('username')->unique();
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->rememberToken();
            // $table->timestamps();
            'name' => 'masyarakat',
            'nik' => '3204051204050001',
            'tglahir' => '12/04/05',
            'kelamin' => 'Laki - Laki',
            'telp' => '085797752287',
            'pekerjaan' => 'Pengusaha',
            'username' => 'iju666',
            'email' => 'masyarakat@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);

        Petugas::create([
            'name' => 'petugas',
            'email' => 'petugas@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
    }
}