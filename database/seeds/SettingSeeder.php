<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Setting::create([
            'site_name'=>'Alex Melnik',
            'contact_email'=>'alexmelnik@gmail.com',
            'address'=>'address example here'
        ]);
    }
}
