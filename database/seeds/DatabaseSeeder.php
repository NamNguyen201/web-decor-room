<?php

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
        $this->call('myhomeSeeder');
    }
}

class myhomeSeeder extends Seeder{
    public function run(){
        DB::table('contacts')->insert([
            ['name'=>'Nguyen Van Nam','address'=>'Hue','email'=>'nam@gmail.com'],
        ]);
    }
}
