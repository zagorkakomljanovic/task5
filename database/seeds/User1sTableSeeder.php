<?php

use Illuminate\Database\Seeder;

use App\User1;

class User1sTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user1s')->delete();
    
        User1::create(array(
            'name' => 'Chris Sevilleja',
            'email' => 'some@gmail.com' ,
            'phone_number' => '54645654'

        ));

        User1::create(array(
            'name' => 'Nick Cerminara',
            'email' => 'ssdadce@gmail.com' ,
            'phone_number' => '0000554645654'

        ));
        User1::create(array(
            'name' => 'Lola Cerminara',
            'email' => 'ssdadce@gmail.com',
            'phone_number' => '546454785654'

        ));
    
    }
}
