<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name'=>'Test User',
            'email'=>'user@example.com'
        ]);
        factory(User::class,50)->create();
        //
    }
}
