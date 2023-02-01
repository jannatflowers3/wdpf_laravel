<?php

namespace Database\Seeders;

use App\Models\Phone;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
        //     // ProductSeeder::class,
           
        // ]);
       Product::factory(10)->create();

       $user = new User();
       $user->name = 'jannatul ferdaush';
       $user->email = 'jannat@gmail.com';
       $user->password = Hash::make('jannat');
       $user->remember_token = Str::random(10);
       $user->save();
       
       $user = new User();
       $user->name = 'Kamrul Hasan';
       $user->email = 'kamrul@example.com';
       $user->password = Hash::make('abcd1234');
       $user->remember_token = Str::random(10);
       $user->save();
       
    //    for ($i = 1; $i <= 10; $i++) {
    //    $phone = new Phone();
    //    $phone->user_id = rand(1, 2);
    //    $phone->phone = rand(412412313, 4124123131);
    //    $phone->save();
    //    }

       $phone = new Phone();
       $phone->user_id = 1;
       $phone->phone = rand(412412313, 4124123131);
       $phone->save();

       $phone = new Phone();
       $phone->user_id =2;
       $phone->phone = rand(412412313, 4124123131);
       $phone->save();
    }
}
