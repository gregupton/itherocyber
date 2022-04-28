<?php

namespace Database\Seeders;

use App\Models\CmsUser;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        // \App\Models\User::factory(10)->create();

        CmsUser::create([
           'name' => 'Greg Upton',
           'email' => 'greg@itherocyber.com',
           'password' => Hash::make('secret'),
           'super' => true,
        ]);

        User::create([
            'name' => 'Greg Upton',
            'email' => 'greg@itherocyber.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
        ]);
    }
}
